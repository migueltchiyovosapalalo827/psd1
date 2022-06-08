<?php

/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Http\Controllers;

use App\Models\Estudantes;
use App\Models\Grupo_de_usuarios;
use App\Models\Inqueridos;
use App\Models\Instituicoes;
use App\Models\Pesquisadores;
use App\Models\Pessoas;
use App\Models\Tarefas;
use App\Models\Tarefas_dos_grupos;
use App\Models\Usuarios;
use App\Uteis\Alert;
use App\Uteis\Http;
use App\Uteis\Sessoes;
use App\Uteis\Testos;
use Illuminate\Http\Request;

class  Usuario  extends Controller
{
    public function criar_conta(string $tipo)
    {
        return view("Usuario.criar_conta", ["titulo" => "Criar conta", "tipo" => $tipo]);
    }
    public function salvar_nova_conta(Request $r)
    {


        if (Usuarios::where("email", "=", $r->post('u_email'))->first() != null) {
            new Alert("Este email já esta sendo utilizado!", "danger", "");
            Http::redirecionar("/entrar");
            return;
        }

        if ($r->post('tipo') == 'estudante') {
            $grupoU = Grupo_de_usuarios::where("nome", "=", "estudantes")->first()->toArray();
        } else {
            $grupoU = Grupo_de_usuarios::where("nome", "=", "inqueridos")->first()->toArray();
        }

        //Recuperando valores do request
        $u_email = $r->post("u_email");
        $u_senha = $r->post("u_senha");
        $u_grupo = $grupoU["id"];
        $p_nome = $r->post("p_nome");
        $p_genero = $r->post("p_genero");
        #Criando a pessoa
        $pessoa = new Pessoas();
        $pessoa->nome = $p_nome;
        $pessoa->genero = $p_genero;
        if ($pessoa->save()) {
            #Pessoa foi salva
            //CRIANDO USUARIO
            $usuario = new Usuarios();
            $usuario->email = $u_email;
            $usuario->usuario =  Testos::primeiroEultimo($p_nome, "");
            $usuario->senha = Testos::encriptar($u_senha);
            $usuario->pessoas_id = $pessoa->id;
            $usuario->grupo_de_usuarios_id = $u_grupo;
            if ($usuario->save()) {
                if ($r->post('tipo') == "inquirido") {
                    #usuario foi salvo
                    $inquerido = new Inqueridos();
                    $inquerido->pessoas_id = $pessoa->id;
                    if ($inquerido->save()) {
                        new Alert("Use seu email e senha para entrar", "aviso", "");
                        Http::redirecionar("/entrar");
                    }
                } else {
                    $pesquisador = new Pesquisadores();
                    $pesquisador->pessoas_id = $pessoa->id;
                    $pesquisador->nome = Testos::primeiroEultimo($p_nome, "");
                    $estudante = new Estudantes();
                    $estudante->pessoas_id = $pessoa->id;
                    $estudante->nome = Testos::primeiroEultimo($p_nome, "");
                    if ($estudante->save()) {
                        $pesquisador->save();
                        new Alert("Use seu email e senha para entrar", "success", "");
                        Http::redirecionar("/entrar");
                    }
                }
            }
        }
    }
    public function redefinir_senha(int $id = 0)
    {
        $this->verifica();
        $usuario = Usuarios::find($id);
        if ($usuario != null) {
            $usuario->senha = Testos::encriptar("123456");
            if ($usuario->save()) {
                new Alert("123456", "sucesso", "Nova senha");
                Http::redirecionar("/usuario/usuarios");
            }
        }
    }
    public function grupo(int $id = 0)
    {
        $this->verificaSeEstaLogado();
        $grupoOb = Grupo_de_usuarios::find($id);
        $grupo = null;
        $tarefasDoGrupo = null;
        if ($grupoOb != null) {
            $grupo = $grupoOb->toArray();
            $tarefasDoGrupo = Tarefas_dos_grupos::where("grupo_de_usuarios_id", "=", $grupo["id"])->get()->fresh(["tarefas.Menus"])->toArray();
        }
        $tarefas = Tarefas::all()->fresh(["menus"])->toArray();
        return view("Usuario.grupo", ["titulo" => "Grupos", "erros" => null, "grupos" => Grupo_de_usuarios::all()->toArray(), "grupo" => $grupo, "tarefasDoGrupo" => $tarefasDoGrupo, "tarefas" => $tarefas]);
    }
    public function usuarios()
    {
        $this->verifica();
        return view("Usuario.usuarios", ["titulo" => "Usuaarios por grupo", "grupos" => Grupo_de_usuarios::all()->fresh(["usuarios"])->toArray()]);
    }
    public function criar_usuario()
    {
        return view("Usuario.criar_usuario", ["titulo" => "Criar usuario", "grupos" => Grupo_de_usuarios::all()->toArray()]);
    }
    public function salvar_permicoes(Request $r): void
    {
        $this->verifica();
        $tarefas = $r->get("tarefas");
        $grupo = Tarefas_dos_grupos::where("grupo_de_usuarios_id", "=", $r->get("grupo_id"));
        if ($grupo != null) {
            $grupo->delete();
        }
        if ($tarefas != null) {
            foreach ($tarefas as $tarefa) {
                $grupoOb = new Tarefas_dos_grupos();
                $grupoOb->grupo_de_usuarios_id = $r->get("grupo_id");
                $grupoOb->tarefas_id = $tarefa;
                $grupoOb->save();
            }
        }
        new Alert("As permições foram salvas.");
        Http::redirecionar("/usuario/grupo/" . $r->get("grupo_id"));
    }
    public function salvar_grupo(Request $r): void
    {
        $this->verifica();
        $grupo = new Grupo_de_usuarios();
        $grupo->nome = $r->get("g_nome");
        if ($grupo->save()) {
            Http::redirecionar("/usuario/grupo/" . $grupo->id);
            return;
        }
        new Alert("Não foi possivel criar o grupo!", "danger", "Erro ao criar grupo");
        Http::redirecionar("/usuario/grupo");
    }
    public function eliminar_usuario(int $id): void
    {
        $this->verifica();
        $usuario = Usuarios::find($id)->fresh(["pessoa"]);
        $usuario_tipo = $usuario->pessoa->tipo_de_entidade();

        if ($usuario_tipo != null) {
            if ($usuario_tipo == "inquerido") {
                $inquerido = Inqueridos::where("pessoas_id", "=", $usuario->pessoa->id)->get()->first();
                if ($inquerido->inscricoes()->count() > 0) {
                    Erros::e111(["codigo" => "ERRO", "msg" => "Não é possivel eliminar o inquerido por estar inscrito em inqueritos", "voltar" => "/usuario/usuarios"]);
                    return;
                }
                $inquerido->delete();
            }
            if ($usuario_tipo == "pesquisador") {
                $pesquisador = Pesquisadores::where("pessoas_id", "=", $usuario->pessoa->id)->get()->first();
                if ($pesquisador->inqueritos()->count() > 0) {
                    Erros::e111(["codigo" => "ERRO", "msg" => "Não é possivel eliminar o pesquisador por ter inqueritos atribuidos.", "voltar" => "/usuario/usuarios"]);
                    return;
                }
                $pesquisador->delete();
            }
        }
        $usuario->delete();
        $usuario->pessoa->delete();
        new Alert("Usuario eliminado com sucesso.", "success");
        Http::redirecionar("/usuario/usuarios");
    }
    public function salvar_usuario(Request $r)
    {
        $this->verifica();
        //Recuperando valores do request
        $u_email = $r->post("u_email");
        $u_senha = $r->post("u_senha");
        $u_contacto = $r->post("u_contacto");
        $u_contacto = Testos::semEspaco($u_contacto);
        $u_grupo = $r->post("u_grupo");
        $p_nome = $r->post("p_nome");
        $p_pai = $r->post("p_pai");
        $p_mae = $r->post("p_mae");
        $p_n_documento = $r->post("p_n_documento");
        $p_t_documento = $r->post("p_t_documento");
        $p_data_de_emissao = $r->post("p_data_de_emissao");
        $p_genero = $r->post("p_genero");
        $p_data_de_nascimento = $r->post("p_data_de_nascimento");
        $p_provincia = $r->post("p_provincia");
        $p_municipio = $r->post("p_municipio");
        $p_bairro = $r->post("p_bairro");
        $p_local_de_nascimento = $r->post("p_local_de_nascimento");
        $p_naturalidade = $r->post("p_naturalidade");
        $documento = $r->file('documento', null);
        #Criando a pessoa
        $pessoa = new Pessoas();
        $pessoa->nome = $p_nome;
        $pessoa->data_de_nascimento = $p_data_de_nascimento;
        $pessoa->pai = $p_pai;
        $pessoa->mae = $p_mae;
        $pessoa->genero = $p_genero;
        $pessoa->contacto = $u_contacto;
        $pessoa->provincia = $p_provincia;
        $pessoa->municipio = $p_municipio;
        $pessoa->bairro = $p_bairro;
        $pessoa->local_de_nascimento = $p_local_de_nascimento;
        $pessoa->n_do_documento = $p_n_documento;
        $pessoa->tipo_de_documento = $p_t_documento;
        $pessoa->data_de_emissao  = $p_data_de_emissao;

        $pessoa->naturalidade = $p_naturalidade;
        if ($pessoa->save()) {
            #Pessoa foi salva
            //CRIANDO USUARIO

            $documento->move("ficheiros/escolas/doc_emiss_certificado/", "documento" . $pessoa->n_do_documento . ".pdf");
            $usuario = new Usuarios();
            $usuario->email = $u_email;
            $usuario->usuario =  Testos::primeiroEultimo($p_nome, "");
            $usuario->senha = Testos::encriptar($u_senha);
            $usuario->contacto = $u_contacto;
            $usuario->pessoas_id = $pessoa->id;
            $usuario->grupo_de_usuarios_id = $u_grupo;
            if ($usuario->save()) {

                new Alert("Usuario salvo com sucesso.", "success", "");
                Http::redirecionar("/usuario/novo_usuario");
            }
        }
    }
    #Entrada e saida
    public function entrar()
    {
        if (Sessoes::obter("usuario") != null) {

            new Alert("Você já esta logado", "info", "Já logado.");
            Http::redirecionar("painel");
            return;
        }
        return view("Usuario.entrar", ["titulo" => "Entrar"]);
    }
    public function entrar_finalizar(Request $req)
    {
        $usuario_r = Testos::semEspaco($req->usuario);
        $usuario = Usuarios::where(['email' => $usuario_r])
            ->orWhere(['contacto' => $usuario_r])
            ->orWhere(['usuario' => $usuario_r])
            ->get()
            ->fresh(['grupo.tarefasDosGrupos.tarefas', 'pessoa'])
            ->first();
        if ($usuario != null) {
            if (Testos::desincriptar($usuario->senha) === $req->senha) {
                //Criar sessão do usuario
                $usuarioSessao = array("id" => $usuario->id, "nome" => $usuario->usuario, "email" => $usuario->email, "senha" => $usuario->senha, "grupo_id" => $usuario->grupo_de_usuarios_id, "pessoa_id" => $usuario->pessoas_id, "contacto" => $usuario->contacto, "grupo" => $usuario->grupo->toArray(), "pessoa" => $usuario->pessoa);
                Sessoes::adicionar("usuario", $usuarioSessao);
                Firewall::montar_menu($usuario);
                $inquerido = Inqueridos::where("pessoas_id", "=", $usuario->pessoa->id)->get();
                if ($inquerido->first()) {
                    $inqueridoObj = new Inquerido();
                    Sessoes::adicionar("inquerido", $inquerido->first()->id);
                    Http::redirecionar("/inquerido/responderInqueritos/" . $inquerido->first()->id);

                    return;
                }

                Http::redirecionar("painel");
                return;
            } else {
                new Alert("Senha invalida", "danger");
                return view("Usuario.entrar", ["titulo" => "Entrar", "usuario" => $req->usuario]);
            }
        } else {
            new Alert("Usuario, Email ou telefone não coresponde a uma conta.", "danger");
            Http::redirecionar("entrar");
        }
    }
    public static function sair()
    {
        Firewall::sair();
    }
    public function recuperar_senha()
    {
        return view("Usuario.recuperar_senha", ["titulo" => "Recuperar senha"]);
    }
    public function enviar_nova_senha()
    {
        Erros::e111(["codigo" => "000", "msg" => "Função temporariamente indisponivel.", "voltar" => "/entrar"]);
    }
    public function meu_perfil()
    {
        $this->verificaSeEstaLogado();
        $usuarioLogado = Sessoes::obter("usuario");
        $pessoa = Pessoas::where("id", "=", $usuarioLogado["pessoa"]["id"]);
        $pessoa = $pessoa->get();
        if ($pessoa->count()) {
            $pessoa = $pessoa->first();
        }

        $usuario = Usuarios::where("id", "=", $usuarioLogado["id"]);
        $usuario = $usuario->get();
        $instituicoes = Instituicoes::all();
        if ($usuario->count()) {
            $usuario = $usuario->first();
        }


        if ($usuario->grupo->nome == "instituicoes") {
            $MinhaInstituicao = Instituicoes::where("id_usuario", "=", $usuario["id"])->get();
            return view("Instituicao.gerais.editar_instituicao", ["titulo" => "actualizar Instituição", "instituicao" => $MinhaInstituicao]);
        }

        return view("Usuario.meu_perfil", ["titulo" => "Meu perfil", "pessoa" => $pessoa, "usuario" => $usuario, "instituicoes" => $instituicoes]);
    }
    public function atualizar_informacoes_pessoais(Request $r)
    {
        $this->verificaSeEstaLogado();
        $usuarioLogado = Sessoes::obter("usuario");
        $id_pessoa = $usuarioLogado["pessoa"]["id"];
        $pessoa = Pessoas::where("id", "=", $id_pessoa);
        $pessoa = $pessoa->get()->first();
        $p_nome = $r->post("p_nome");
        $p_pai = $r->post("p_pai");
        $p_mae = $r->post("p_mae");
        $p_n_documento = $r->post("p_n_documento");
        $p_t_documento = $r->post("p_t_documento");
        $documento = $r->file('documento', null);
        $p_data_de_emissao = $r->post("p_data_de_emissao");
        $p_genero = $r->post("p_genero");
        $p_data_de_nascimento = $r->post("p_data_de_nascimento");
        $p_provincia = $r->post("p_provincia");
        $p_municipio = $r->post("p_municipio");
        $p_bairro = $r->post("p_bairro");
        $p_local_de_nascimento = $r->post("p_local_de_nascimento");
        $p_naturalidade = $r->post("p_naturalidade");
        $p_instituicao = $r->post("p_instituicao");
        $pessoa->nome = $p_nome;
        $pessoa->data_de_nascimento = $p_data_de_nascimento;
        $pessoa->pai = $p_pai;
        $pessoa->mae = $p_mae;
        $pessoa->genero = $p_genero;
        $pessoa->provincia = $p_provincia;
        $pessoa->municipio = $p_municipio;
        $pessoa->bairro = $p_bairro;
        $pessoa->local_de_nascimento = $p_local_de_nascimento;
        $pessoa->n_do_documento = $p_n_documento;
        $pessoa->tipo_de_documento = $p_t_documento;
        $pessoa->data_de_emissao =  $p_data_de_emissao;
        $pessoa->naturalidade = $p_naturalidade;
        $pessoa->estudante->update(["id_instituicao" => $p_instituicao]);
        if ($pessoa->update([
            "nome_proprio",
            "sobrenome",
            "data_de_nascimento",
            "pai",
            "mae",
            "genero",
            "deficiencia",
            "provincia",
            "municipio",
            "bairro",
            "local_de_nascimento",
            "n_do_documento",
            "tipo_de_documento",
            "naturalidade", "data_de_emissao"
        ])) {

            $documento->move("ficheiros/escolas/doc_emiss_certificado/", "documento" . $pessoa->n_do_documento . ".pdf");
            new Alert("Dados pessoais atualizados com sucesso","success");

        } else {
            new Alert("Não foi possivel atualizar os dados", "error", "Erro ao atualizar os dados");
        }

        return redirect()->back();
    }

    /**
     * @param Request $r
     */
    public function atualizar_usuario(Request $r): void
    {
        $this->verificaSeEstaLogado();
        $r->post("senhaC");
        $colunasAtualizar = array();
        $usuarioLogado = Sessoes::obter("usuario");

        #Verifica a senha
        if (Testos::desincriptar($usuarioLogado["senha"]) !==  $r->post("senhaC")) {
            new Alert("Senha incorreta", "error", "Senha incorrecta");
            Http::redirecionar("/usuario/meu_perfil");
            return;
        }

        /*Verifica quais campos vão ser atualizados e se já estão cadastrados*/
        if ($usuarioLogado["email"] != $r->post("u_email")) {
            $usuario = Usuarios::where(['email' => $r->post("u_email")])
                ->get()
                ->first();
            if ($usuario != null) {
                new Alert("Não foi possivel atualizar os dados.", "error", "Email já registrado.");
                Http::redirecionar("/usuario/meu_perfil");
                return;
            }
            $colunasAtualizar = "email";
        }
        if ($usuarioLogado["nome"] != $r->post("u_usuario")) {
            $usuario = Usuarios::where(['usuario' => $r->post("u_usuario")])
                ->get()
                ->first();
            if ($usuario != null) {
                new Alert("Não foi possivel atualizar os dados.", "error", "Usuario já registrado.");
                Http::redirecionar("/usuario/meu_perfil");
                return;
            }
            $colunasAtualizar[] = "usuario";
        }
        if ($usuarioLogado["contacto"] != $r->post("u_contacto")) {
            $usuario = Usuarios::where(['contacto' => $r->post("u_contacto")])
                ->get()
                ->first();
            if ($usuario != null) {
                new Alert("Não foi possivel atualizar os dados.", "error", "Contacto já registrado.");
                Http::redirecionar("/usuario/meu_perfil");
                return;
            }
            $colunasAtualizar[] = "contacto";
        }
        $usuario = Usuarios::where(['id' => $usuarioLogado["id"]])
            ->get()
            ->first();

        $usuario->email = $r->post("u_email");
        $usuario->usuario = $r->post("u_usuario");
        $usuario->contacto = $r->post("u_contacto");
        $usuario->update($colunasAtualizar);
        new Alert("Usuario atualizado.");
        Http::redirecionar("/usuario/meu_perfil");
        return;
    }
    public function atualizar_senha(Request $r): void
    {
        $this->verificaSeEstaLogado();
        var_dump($r->post());
        $usuarioLogado = Sessoes::obter("usuario");

        #Verifica a senha
        if (Testos::desincriptar($usuarioLogado["senha"]) !==  $r->post("s_atual")) {
            new Alert("Senha incorrecta", "erro", "Senha atual incorrecta");
            Http::redirecionar("/usuario/meu_perfil");
            return;
        }
        if ($r->post("s_nova_senha_c") !==  $r->post("s_nova_senha")) {
            new Alert(" Nova senha não é igual a confirmação da nova senha", "error", "Senha não correspondem");
            Http::redirecionar("/usuario/meu_perfil");
            return;
        }
        $usuario = Usuarios::where(['id' => $usuarioLogado["id"]])
            ->get()
            ->first();
        $usuario->senha = Testos::encriptar($r->post("s_nova_senha"));
        $usuario->update(["senha"]);
        new Alert("Senha atualizada",);
        Http::redirecionar("/usuario/meu_perfil");
    }
}
