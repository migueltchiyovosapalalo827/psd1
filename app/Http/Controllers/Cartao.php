<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CartaoModel;
use App\Models\Estudantes;
use App\Models\Instituicoes;
use App\Models\Usuarios;
use App\Notifications\SendSms;
use App\Uteis\Alert;
use App\Uteis\Ficheiros;
use App\Uteis\Http;
use App\Uteis\Sessoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class Cartao extends Controller
{
    public function index(Request $request)
    {
        // $this->verifica();
        $instituicoes = Instituicoes::all();
        $cartoes = CartaoModel::buscar($request);
        return view('Cartao.cartoes_emtidos', [
            'cartoes' => $cartoes, 'instituicoes' => $instituicoes,
            'curso' => $request->curso, 'classe' => $request->classe, 'id_instituicao' => $request->id_instituicao
        ]);
    }

    public function criar()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $vrfca = Usuarios::where("id", "=", $usuario)->get()->first();
        $estudante = Estudantes::where("pessoas_id", "=", $vrfca['pessoas_id'])->get()->first();
        $instituicoes = Instituicoes::all();
        return view("Cartao.emitir_cartao", ["titulo" => "Emitir Cartão", "instituicoes" => $instituicoes, "usuario" => $estudante]);
    }
    public function salvar(Request $r)
    {
        # code...
        $this->verifica();

        $cartao = new CartaoModel();
        $cartao->curso = $r->curso;
        $cartao->turma = $r->turma;
        $cartao->numero_estudantil = $r->numero_estudantil;
        $estudante =  Estudantes::find($r->id_estudante);
        $cartao->pessoas_id = $estudante->pessoa->id;
        $cartao->id_instituicao = $estudante->id_instituicao;
        $cartao->classe = $r->classe;
        $foto = $r->file('foto', null);
        $docNovoNome = Ficheiros::novoNome("psddocemiss" . $estudante->pessoa->id, $foto->clientExtension());

        if (!empty($docNovoNome)) {
            $foto->move("ficheiros/escolas/foto/", $docNovoNome);
        }
        $cartao->foto = $docNovoNome;
        $cartao->save();

        new Alert("A Emissão do catão do estudante foi enviada com Sucesso", "success", "");
        Http::redirecionar("/cartao/emitir_cartao");
        return;
    }

    public function verCartao($id)
    {
        $cartao = CartaoModel::find($id);
        return view('Cartao.ver_cartao', ["cartao" => $cartao]);
    }

    public function editarCartao($id)
    {

        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $vrfca = Usuarios::where("id", "=", $usuario)->get()->first();
        $estudante = Estudantes::where("pessoas_id", "=", $vrfca['pessoas_id'])->get()->first();
        $instituicoes = Instituicoes::all();
        $cartao = CartaoModel::find($id);
        return view('Cartao.editar_cartao', ["cartao" => $cartao, "instituicoes" => $instituicoes, "estudante" => $estudante]);
    }

    public function salvarEditarCartao(Request $r, $id)
    {
        $cartao = CartaoModel::find($id);
        $cartao->curso = $r->curso;
        $cartao->turma = $r->turma;
        $estudante =  Estudantes::find($r->id_estudante);
        $cartao->pessoas_id = $estudante->pessoa->id;
        $cartao->classe = $r->classe;
        $foto = $r->file('foto', null);
        $docNovoNome = Ficheiros::novoNome("psddocemiss" . $estudante->pessoa->id, $foto->clientExtension());
        if (!empty($docNovoNome)) {
            $foto->move("ficheiros/escolas/foto/", $docNovoNome);
        }
        $cartao->foto = $docNovoNome;
        $cartao->save();
        new Alert("A Emissão do catão do estudante foi actualizado com sucesso", "success", "");
        Http::redirecionar("/cartao/meu_cartao");
    }

    public function excluirCartao($id)
    {
        $cartao = CartaoModel::find($id);
        $cartao->delete();
        new Alert("O catão do estudante foi eliminado com Sucesso", "success", "");
        return redirect()->back();
    }
    //cartao por instituicao
    public function cartaoInstituicao($id)
    {
        $cartao = CartaoModel::where('id_instituicao', $id)->get();
        return view('Cartao.cartaoInstituicao', ["cartao" => $cartao]);
    }
    //cartao por estudante
    public function cartaoEstudante()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $vrfca = Usuarios::where("id", "=", $usuario)->get()->first();
        $cartao = CartaoModel::where("pessoas_id", "=", $vrfca['pessoas_id'])->get()->first();
        return view('Cartao.ver_cartao', ["cartao" => $cartao]);
    }

    // pesquisar cartao por instituicao, estudante, classe, turma, curso e numero estudantil
    public function pesquisarCartao(Request $request)
    {
        $usuario = Sessoes::obter("usuario");
        $instituicao = Instituicoes::where("id_usuario", "=", $usuario['id'])->get()->first();
        $request->merge(['id_instituicao"' => $instituicao['id']]);
        $cartoes = CartaoModel::buscar($request);
        return view('Cartao.pesquisarCartao', ['cartoes' => $cartoes, 'curso' => $request->curso, 'classe' => $request->classe]);
    }

    //baixar foto do cartao
    public function baixarFoto($id)
    {
        $cartao = CartaoModel::find($id);
        $ficheiro = $cartao->foto;
        $ficheiro = "ficheiros/escolas/foto/" . $ficheiro;
        return response()->download($ficheiro);
    }

    public function mudarEstado(Request $request)
    {
        $cartao = CartaoModel::find($request->id);
        ($request->estado == "pronto") ? $cartao->estado = 1 : $cartao->estado = 2;
        $mensagem = ($request->estado == "pronto") ? "o cartão de estudante esta pronto para ser entregue" : "o cartão de estudante foi entregue";
        if ($cartao->save()) {
            # code...
            new Alert($mensagem, "success", "");
            $user = Usuarios::where("pessoas_id", $cartao->pessoas_id)->get()->first();
            Notification::send($user, new SendSms($mensagem));
            return redirect()->back();
        }
    }
}
