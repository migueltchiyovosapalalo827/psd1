<?php

namespace App\Http\Controllers;

use App\Models\Arquitectura_escola;
use App\Models\Fotos_escolas;
use App\Models\Instituicoes;
use App\Uteis\Alert;
use App\Uteis\Ficheiros;
use App\Uteis\Sessoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DependeciaEscolar extends Controller
{
    //
    public function adicionar_arquitectura()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst = Instituicoes::where("id_usuario", "=", $usuario)->get()->first();
        return view("Instituicao.arquitectura.adicionar_arquitectura", ["titulo" => "Adicionar Arquitectura", "usuario" => $inst]);
    }
    public function salvar_arquitectura(Request $req)
    {
        $this->verifica();
        $validatedRules = [
            'arquitectura' => 'required|min:4|max:255',
            'descricao' => 'required|min:6|max:1000',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
        $validator = Validator::make($req->all(), $validatedRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $foto = $req->file('foto', null);
        $id_instituicao = $req->post("id_instituicao");
        $arquitectura = new Arquitectura_escola();
        $arquitectura->arquitectura = $req->post("arquitectura");
        $arquitectura->id_instituicao = $id_instituicao;
        $arquitectura->descricao = $req->post("descricao");
        $arquitectura->save();
        $fotoNovoNome = "";
        if ($foto != null) {
            if (!Ficheiros::eImagemValida($foto)) {
                new Alert("A foto não é valida.", "danger", "Foto invalida.");
                return redirect()->back();
            }
            $fotoNovoNome = Ficheiros::novoNome("psdinst" . $id_instituicao, $foto->clientExtension());
        }


        if (!empty($fotoNovoNome)) {
             $foto->move("ficheiros/escolas/fotos/", $fotoNovoNome);
        }
        $fotos = new Fotos_escolas([
            "id_instituicao" => $id_instituicao,
            "foto" => $fotoNovoNome,
        ]);

        $arquitectura->fotos_escolas()->save($fotos);
        new Alert("os dados foi salva com Sucesso", "success", "");
        return redirect()->back();
    }
    public function ver_arquitectura()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst = Instituicoes::where("id_usuario", "=", $usuario)->get()->first();
        $arquitecturas = Arquitectura_escola::where("id_instituicao", "=", $inst["id"])->get();
        return view("Instituicao.arquitectura.ver_arquitectura", ["titulo" => "Ver Arquitectura", "arquitecturas" => $arquitecturas]);
    }
    public function editar_arquitectura(Request $req)
    {
        $this->verifica();
        $arquitectura = Arquitectura_escola::where("id", "=", $req->post("id_arquitectura"))->get()->first();

        return view("Instituicao.arquitectura.editar_arquitectura", ["titulo" => "Editar Arquitectura ", "arquitectura" => $arquitectura]);
    }

    public function update_arquitectura(Request $req)
    {
        $foto = $req->file('foto', null);
        $arquitectura = Arquitectura_escola::where("id", "=", $req->post("id"))->get()->first();
        $arquitectura->arquitectura = $req->post("arquitectura");
        $arquitectura->descricao = $req->post("descricao");
        $arquitectura->update();
        $fotoNovoNome = "";
        if ($foto != null) {
            if (!Ficheiros::eImagemValida($foto)) {
                new Alert("A foto não é valida.", "danger", "Foto invalida.");
                return redirect()->back();
            }
            $fotoNovoNome = Ficheiros::novoNome("psdinst" . $arquitectura->id_instituicao, $foto->clientExtension());
        }
        $fotos = new Fotos_escolas();
        if (!empty($fotoNovoNome)) {
            $foto->move("ficheiros/escolas/fotos/", $fotoNovoNome);
            $fotos->foto = $fotoNovoNome;
        }
        $fotos->foto = $fotoNovoNome;
        $fotos->id_instituicao = $arquitectura->id_instituicao;
      if($arquitectura->fotos_escolas()->save($fotos)){
        new Alert("Os Dados foram Actualizados com Sucesso!.", "success", "");
        return redirect()->route('instituicao.ver_arquitectura');
       }else{
        new Alert("Ocorreu um erro ao Actualizar os Dados.", "danger", "");
        redirect()->route('instituicao.ver_arquitectura');
       }
    }

    public function eliminar_arquitectura(int $id)
    {
        $this->verifica();
        $arquitectura = Arquitectura_escola::find($id);
        if ($arquitectura != null) {
            $arquitectura->delete();
            new Alert("Arquitectura eliminada com sucesso" ."success", "");
            return redirect()->back();
        }
    }

    public function ver_fotos(int $id)
    {
        $arquitectura = Arquitectura_escola::find($id);
        return view("Instituicao.fotos.ver_fotos", ["titulo" => "Ver Fotos", "fotos" => $arquitectura->fotos_escolas]);
    }
}
