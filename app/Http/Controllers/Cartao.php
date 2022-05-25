<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\CartaoModel;
use App\Models\Estudantes;
use App\Models\Instituicoes;
use App\Models\Usuarios;
use App\Uteis\Alert;
use App\Uteis\Ficheiros;
use App\Uteis\Http;
use App\Uteis\Sessoes;
use Illuminate\Http\Request;

class Cartao extends Controller
{
    public function index()
    {  $cartoes = CartaoModel::all();
        return view('Cartao.cartoes_emtidos',['cartoes'=>$cartoes]);
    }

    public function criar()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $vrfca=Usuarios::where("id","=",$usuario)->get()->first();
        $estudante=Estudantes::where("pessoas_id","=",$vrfca['pessoas_id'])->get()->first();
        $instituicoes=Instituicoes::all();
        return view("Cartao.emitir_cartao", ["titulo" => "Emitir Cartão","instituicoes"=>$instituicoes,"usuario"=>$estudante]);

    }
    public function salvar(Request $r)
    {
        $cartao = new CartaoModel();
        $cartao->curso = $r->curso;
        $cartao->turma = $r->turma;
        $cartao->numero_estudantil = $r->numero_estudantil;
        $estudante =  Estudantes::find($r->id_estudante);
        $cartao->pessoas_id = $estudante->pessoa->id;
        $cartao->id_instituicao = $estudante->id_instituicao;
        $cartao->classe = $r->classe;
        $foto = $r->file('foto',null);
        $docNovoNome=Ficheiros::novoNome("psddocemiss".$estudante->pessoa->id,$foto->clientExtension());

    if (!empty($docNovoNome)){
        $foto->move("ficheiros/escolas/foto/",$docNovoNome);
    }
    $cartao->foto = $docNovoNome;
    $cartao->save();
    new Alert("A Emissão do catão do estudante foi enviada com Sucesso", "sucesso", );
    Http::redirecionar("/cartao/emitir_cartao");
    return;
}

public function verCartao($id)
{
    $cartao = CartaoModel::find($id);
    return view('Cartao.ver_cartao',["cartao"=>$cartao]);
}

public function editarCartao($id)
{

    $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $vrfca=Usuarios::where("id","=",$usuario)->get()->first();
        $estudante=Estudantes::where("pessoas_id","=",$vrfca['pessoas_id'])->get()->first();
        $instituicoes=Instituicoes::all();
        $cartao = CartaoModel::find($id);
      return view('Cartao.editar_cartao',["cartao"=>$cartao,"instituicoes"=>$instituicoes,"estudante"=>$estudante]);
}

public function salvarEditarCartao(Request $r,$id)
{
    $cartao = CartaoModel::find($id);
    $cartao->curso = $r->curso;
    $cartao->turma = $r->turma;
    $estudante =  Estudantes::find($r->id_estudante);
    $cartao->pessoas_id = $estudante->pessoa->id;
    $cartao->classe = $r->classe;
    $foto = $r->file('foto',null);
    $docNovoNome=Ficheiros::novoNome("psddocemiss".$estudante->pessoa->id,$foto->clientExtension());
    if (!empty($docNovoNome)){
        $foto->move("ficheiros/escolas/foto/",$docNovoNome);
    }
    $cartao->foto = $docNovoNome;
    $cartao->save();
    new Alert("A Emissão do catão do estudante foi actualizado com sucesso", "sucesso", );
    Http::redirecionar("/cartao");
}

public function excluirCartao($id)
{
    $cartao = CartaoModel::find($id);
    $cartao->delete();
    Http::redirecionar("/cartao");
}
//cartao por instituicao
public function cartaoInstituicao($id)
{
    $cartao = CartaoModel::where('id_instituicao',$id)->get();
    return view('Cartao.cartaoInstituicao',["cartao"=>$cartao]);
}
//cartao por estudante
public function cartaoEstudante()
{
    $this->verifica();
    $usuario = Sessoes::obter("usuario");
    $vrfca=Usuarios::where("id","=",$usuario)->get()->first();
    $cartao=CartaoModel::where("pessoas_id","=",$vrfca['pessoas_id'])->get()->first();
    return view('Cartao.ver_cartao',["cartao"=>$cartao]);
}
//cartao por classe
public function cartaoClasse($classe)
{
    $cartao = CartaoModel::where('classe',$classe)->get();
    return view('Cartao.cartaoClasse',["cartao"=>$cartao]);
}
//cartao por turma
public function cartaoTurma($turma)
{
    $cartao = CartaoModel::where('turma',$turma)->get();
    return view('Cartao.cartaoTurma',["cartao"=>$cartao]);
}
//cartao por curso
public function cartaoCurso($curso)
{
    $cartao = CartaoModel::where('curso',$curso)->get();
    return view('Cartao.cartaoCurso',["cartao"=>$cartao]);
}
// pesquisar cartao por instituicao, estudante, classe, turma, curso e numero estudantil
public function pesquisarCartao(Request $r)
{
    $cartao = CartaoModel::where('id_instituicao',$r->id_instituicao)
    ->orWhere('pessoas_id',$r->id_estudante)
    ->orWhere('classe',$r->classe)
    ->orWhere('turma',$r->turma)
    ->orWhere('curso',$r->curso)
    ->orWhere('numero_estudantil',$r->numero_estudantil)
    ->get();
    return view('Cartao.cartaoInstituicao',["cartao"=>$cartao]);

}

//baixar foto do cartao
public function baixarFoto($id)
{
    $cartao = CartaoModel::find($id);
    $ficheiro = $cartao->foto;
    $ficheiro = "ficheiros/escolas/foto/".$ficheiro;
    return response()->download($ficheiro);
}


}


