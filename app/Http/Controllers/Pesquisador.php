<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */
namespace App\Http\Controllers;
use App\Models\Grupo_de_usuarios;
use App\Models\Pesquisadores;
use App\Models\Pessoas;
use App\Models\Usuarios;
use App\Uteis\Alert;
use App\Uteis\Ficheiros;
use App\Uteis\Http;
use App\Uteis\Sessoes;
use App\Uteis\Testos;
use Illuminate\Http\Request;

class Pesquisador extends Controller
{

    public function meus_inqueritos()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $pesquisador =  Pesquisadores::where("pessoas_id","=",$usuario["pessoa_id"])->get()->first();
        if ($pesquisador != null){

            return view("Pesquisador.meus_inqueritos",["titulo"=>"Meus inqueritos","inqueritos"=>$pesquisador->inqueritos->fresh("inscricoes","perguntas.respostas")->toArray()]);

        }
        return view("Pesquisador.meus_inqueritos",["titulo"=>"Meus inqueritos","erro"=>"Faça login como um pesquisador."]);
    }
    public function criar_pesquisador()
    {
        $this->verifica();
        return view("Pesquisador.criar_pesquisador",["titulo"=>"Criar Pesquisador"]);
    }
    public function salvar_pesquisador(Request $r)
    {

        $this->verifica();
        $pesquisador = new Pesquisadores();
        #verifica se pode mover a imagem
        $p_logo = $r->file('p_logo',null);

        if ($p_logo != null){
            if(!Ficheiros::eImagemValida($p_logo)){
                new Alert("O logo do pesquisador não é valida.", "erro", "Logo invalido.");
                Http::redirecionar("/pesquisador/criar_pesquisador");
                return;
            }
            try {
                $p_logoNovoNome = Ficheiros::novoNome(Testos::str_rand(), $p_logo->clientExtension());
                var_dump($p_logoNovoNome);
                $p_logo->move("ficheiros/pesquisadores/imagens/",$p_logoNovoNome);
                $pesquisador->logo =$p_logoNovoNome;
            } catch (\Exception $e) {
                new Alert("Erro ao tentar mover o ficheiro para o servidor", "erro", "Tente novamente");
                Http::redirecionar("/pesquisador/criar_pesquisador");
                return;
            }

        }


        $grupoU = Grupo_de_usuarios::where("nome","=","pesquisadores")->first()->toArray();
        //Recuperando valores do request
        $u_email=$r->post("u_email");
        $u_senha=$r->post("u_senha");
        $u_contacto=$r->post("u_contacto");
        $u_contacto=Testos::semEspaco($u_contacto);
        $u_grupo=$grupoU["id"];
        $p_nome=$r->post("p_nome");
        $p_sobrenome=$r->post("p_sobrenome");
        $p_pai=$r->post("p_pai");
        $p_mae=$r->post("p_mae");
        $p_n_documento=$r->post("p_n_documento");
        $p_t_documento=$r->post("p_t_documento");
        $p_genero=$r->post("p_genero");
        $p_data_de_nascimento=$r->post("p_data_de_nascimento");
        $p_provincia=$r->post("p_provincia");
        $p_municipio=$r->post("p_municipio");
        $p_bairro=$r->post("p_bairro");
        $p_local_de_nascimento=$r->post("p_local_de_nascimento");
        $p_naturalidade=$r->post("p_naturalidade");
        #Criando a pessoa
        $pessoa = new Pessoas();
        $pessoa->nome_proprio=$p_nome;
        $pessoa->sobrenome=$p_sobrenome;
        $pessoa->data_de_nascimento=$p_data_de_nascimento;
        $pessoa->pai=$p_pai;
        $pessoa->mae=$p_mae;
        $pessoa->genero=$p_genero;
        $pessoa->contacto=$u_contacto;
        $pessoa->provincia=$p_provincia;
        $pessoa->municipio=$p_municipio;
        $pessoa->bairro=$p_bairro;
        $pessoa->local_de_nascimento=$p_local_de_nascimento;
        $pessoa->n_do_documento=$p_n_documento;
        $pessoa->tipo_de_documento=$p_t_documento;
        $pessoa->naturalidade=$p_naturalidade;
        if ($pessoa->save()){
            #Pessoa foi salva
            //CRIANDO USUARIO
            $usuario = new Usuarios();
            $usuario->email = $u_email;
            $usuario->usuario =  Testos::primeiroEultimo($p_nome,$p_sobrenome);
            $usuario->senha=Testos::encriptar($u_senha);
            $usuario->contacto=$u_contacto;
            $usuario->pessoas_id=$pessoa->id;
            $usuario->grupo_de_usuarios_id=$u_grupo;
            if ($usuario->save()){
                #usuario foi salvo
                $pesquisador->pessoas_id=$pessoa->id;
                $pesquisador->nome=Testos::primeiroEultimo($p_nome,$p_sobrenome);
                if ($pesquisador->save())
                {
                    new Alert("Pesquisador cadastrado com sucesso.");
                    Http::redirecionar("/pesquisador/criar_pesquisador/");
                }
            }
        }
    }
    public function salvar_pesquisador_publico(Request $r)
    {

        /*Verifica se tem um usuario com este email*/
        $usuarioTestarSeExiste = Usuarios::where("email","=",$r->post("u_email"))->first();
        if ($usuarioTestarSeExiste != null) {
           new Alert("Este email já foi usado, faça login para continuar");
           Http::redirecionar("/entrar");
          }

       $pesquisador = new Pesquisadores();
        #verifica se pode mover a imagem
       $p_logo = $r->file('p_logo',null);

       if ($p_logo != null){
        if(!Ficheiros::eImagemValida($p_logo)){
            new Alert("O logo do pesquisador não é valida.", "erro", "Logo invalido.");
            Http::redirecionar("/pesquisador/criar_pesquisador");
            return;
        }
        try {
            $p_logoNovoNome = Ficheiros::novoNome(Testos::str_rand(), $p_logo->clientExtension());
            var_dump($p_logoNovoNome);
            $p_logo->move("ficheiros/pesquisadores/imagens/",$p_logoNovoNome);
            $pesquisador->logo =$p_logoNovoNome;
        } catch (\Exception $e) {
            new Alert("Erro ao tentar mover o ficheiro para o servidor", "erro", "Tente novamente");
            Http::redirecionar("/pesquisador/criar_pesquisador");
            return;
        }

    }


    $grupoU = Grupo_de_usuarios::where("nome","=","pesquisadores")->first()->toArray();
        //Recuperando valores do request
    $u_email=$r->post("u_email");
    $u_senha=$r->post("u_senha");
    $u_contacto=$r->post("u_contacto");
    $u_contacto=Testos::semEspaco($u_contacto);
    $u_grupo=$grupoU["id"];
    $p_nome=$r->post("p_nome");
    $p_sobrenome=$r->post("p_sobrenome");
    $p_pai=$r->post("p_pai");
    $p_mae=$r->post("p_mae");
    $p_n_documento=$r->post("p_n_documento");
    $p_t_documento=$r->post("p_t_documento");
    $p_genero=$r->post("p_genero");
    $p_data_de_nascimento=$r->post("p_data_de_nascimento");
    $p_provincia=$r->post("p_provincia");
    $p_municipio=$r->post("p_municipio");
    $p_bairro=$r->post("p_bairro");
    $p_local_de_nascimento=$r->post("p_local_de_nascimento");
    $p_naturalidade=$r->post("p_naturalidade");
        #Criando a pessoa
    $pessoa = new Pessoas();
    $pessoa->nome_proprio=$p_nome;
    $pessoa->sobrenome=$p_sobrenome;
    $pessoa->data_de_nascimento=$p_data_de_nascimento;
    $pessoa->pai=$p_pai;
    $pessoa->mae=$p_mae;
    $pessoa->genero=$p_genero;
    $pessoa->contacto=$u_contacto;
    $pessoa->provincia=$p_provincia;
    $pessoa->municipio=$p_municipio;
    $pessoa->bairro=$p_bairro;
    $pessoa->local_de_nascimento=$p_local_de_nascimento;
    $pessoa->n_do_documento=$p_n_documento;
    $pessoa->tipo_de_documento=$p_t_documento;
    $pessoa->naturalidade=$p_naturalidade;
    if ($pessoa->save()){
            #Pessoa foi salva
            //CRIANDO USUARIO
        $usuario = new Usuarios();
        $usuario->email = $u_email;
        $usuario->usuario =  Testos::primeiroEultimo($p_nome,$p_sobrenome);
        $usuario->senha=Testos::encriptar($u_senha);
        $usuario->contacto=$u_contacto;
        $usuario->pessoas_id=$pessoa->id;
        $usuario->grupo_de_usuarios_id=$u_grupo;
        if ($usuario->save()){
                #usuario foi salvo
            $pesquisador->pessoas_id=$pessoa->id;
            $pesquisador->nome=Testos::primeiroEultimo($p_nome,$p_sobrenome);
            if ($pesquisador->save())
            {
                new Alert("Bem vindo. entre com seu email e senha");
                Http::redirecionar("/entrar");
            }
        }
    }
}

}
