<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Http\Controllers;
use App\Models\Compartilhamentos;
use App\Models\Grupo_de_usuarios;
use App\Models\Inqueridos;
use App\Models\Inqueritos;
use App\Models\Inscricoes;
use App\Models\Pessoas;
use App\Models\Respostas;
use App\Models\Usuarios;
use App\Uteis\Alert;
use App\Uteis\Http;
use App\Uteis\Sessoes;
use App\Uteis\Testos;
use Illuminate\Http\Request;

/**
 * Class Inquerido
 * @package App\Controllers
 */
class Inquerido extends Controller
{
    /**
     * @param string $referencia
     */
    public function responderInqueritoPublico(string $referencia)
    {

        $compartilhamento = Compartilhamentos::where("endereco","=",$referencia)->where("estado","=","1")->get();
        if ($compartilhamento->count()){
            $inquerito = Inqueritos::where("compartilhamentos_id","=",$compartilhamento->first()->id)->get()->first();

            return view("Inquerido.responder_inquerito_publico",["inquerito"=>$inquerito]);

        }
        Http::redirecionar("/404");

    }
    public function obrigado()
    {

        return view("Inquerido.obrigado",["Obirgado"=>"obrigado"]);

    }

    /**
     * @param Request $r
     * @param int $id
     */
    public function ficha_do_inquerido(Request $r, int $id=0)
    {
        $this->verifica();
        $inqueridoArray=null;
        if ($id != null){
            $inqueridoOb=Inqueridos::find($id);
            if ($inqueridoOb != null){
                $inqueridoArray=$inqueridoOb->fresh(["inscricoes"]);
            }
        }
        $idR = $r->get("id");
        if ($idR != null){
            $inqueridoOb=Inqueridos::find($idR);
            if ($inqueridoOb != null){
                $inqueridoArray=$inqueridoOb->fresh(["inscricoes"]);
            }
        }
        $inqueridos = Inqueridos::all()->fresh(["pessoa"])->toArray();
       return view("Inquerido.ficha_do_inquerido",["titulo"=>"Ficha do inquerido","inqueridos"=>$inqueridos,"inquerido"=>$inqueridoArray]);
    }

    /**
     *
     */
    public function lista_de_inqueridos()
    {
        $this->verifica();
       return view("Inquerido.lista_de_inqueridos",["titulo"=>"Lista de inqueridos","inqueridos"=>Inqueridos::where("tipo","=",0)->get()->fresh(["inscricoes"])]);
    }

    /**
     *
     */
    public function criar_inquerido()
    {
        $this->verifica();
       return view("Inquerido.criar_inquerido",["titulo"=>"Criar inquerido"]);
    }

    /**
     * @param Request $r
     */
    public function salvar_inqueridoInscrevendo(Request $r)
    {
        $this->verifica();
        $id_inquerido=$this->salvar_inquerido($r);
        $inscricao = new Inscricoes();
        $inscricao->inqueritos_id=$r->get("inquerito");
        $inscricao->inqueridos_id=$id_inquerido;
        if ($inscricao->save()){
            Http::redirecionar("/inquerito/ver_inquerito/".$r->get("inquerito"));
        }
    }

    /**
     * @param Request $r
     * @return int
     */
    public function salvar_inquerido(Request $r): int
    {
        $this->verifica();
        $grupoU = Grupo_de_usuarios::where("nome","=","inqueridos")->first()->toArray();
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
                $inquerido = new Inqueridos();
                $inquerido->pessoas_id=$pessoa->id;
                if ($inquerido->save())
                {
                    new Alert("Inquerido cadastrado com sucesso.");
                    Http::redirecionar("/inquerido/criar_inquerido");
                    return $inquerido->id;
                }
            }
        }
        return true;
    }

    /**
     * @param int $id
     */
    public function responderInqueritos(int $id)
    {

        $inscricoes=Inscricoes::where("inqueridos_id","=",$id)->where("respondido","=","0")->get();
        if (($inscricoes==null) || ($inscricoes->count()<=0)){
           return view("responder_inqueritos",["titulo"=>"Responder inqueritos"]);
        }elseif($inscricoes->count() == 1){
            $in=$inscricoes->first();
            Http::redirecionar("/inquerido/inquerito/".$in->id);
            return;
        }else{
            #varios inqueritos
            Http::redirecionar("/inquerido/inqueritos");
            return;
        }
    }

    /**
     * @param int $id
     */
    public function inquerito(int $id)
    {
        $this->verifica();
        $inscricao=Inscricoes::find($id)->fresh(["inquerito.perguntas.opcoes"]);
        if ($inscricao != null){
            if (!$inscricao->respondido){
               return view("Inquerido.responder_inquerito",["titulo"=>"Responder inquerito","inscricao"=>$inscricao]);
                return;
            }
           return view("Inquerido.responder_inquerito",["titulo"=>"Obrigado por responder!"]);
            return;
        }
        echo "Desculpe você não foi selecionado para este inquerito";
    }


    public function inqueritos()
    {
        $this->verifica();
        $inscricoes=Inscricoes::where("inqueridos_id","=",Sessoes::obter("inquerido"))->where("respondido","=","0")->get()->fresh(["inquerito"]);
       return view("Inquerido.responder_inqueritos",["titulo"=>'Responder inquerito',"inscricoes"=>$inscricoes]);
    }

    public function responder(Request $r)
    {
        $this->verifica();
        $inscricao  = $r->get("inscricao");

        $inscricaoObjs = Inscricoes::where("id","=",$inscricao)->get()->first();
        if ($inscricaoObjs->respondido==1){
            Http::redirecionar("/inquerido/inquerito/".$inscricaoObjs->id);
            return;
        }
        $respostaObjs=null;
        $repostas  = $r->get("respostas");
        $inquerito  = $r->get("inquerito");
        foreach ($repostas as $pergunta_id => $resposta) {
            $respostaObjs= new Respostas();
            $respostaObjs->perguntas_id = $pergunta_id;
            $respostaObjs->resposta = $resposta;
            $respostaObjs->inqueritos_id = $inquerito;
            $respostaObjs->inscricoes_id = $inscricao;
            $respostaObjs->save();
        }
        $inscricaoObjs->respondido=1;
        $inscricaoObjs->save();
        Http::redirecionar("/inquerido/inquerito/".$inscricaoObjs->id);
    }
    public function responderPublico(Request $r)
    {

        $pessoa=null;
        $inquerido=null;
        $incricaoObjs=null;
        $nome=$r->post("nome",null);
        $sobrenome=$r->post("sobrenome",null);
        $dataNascimento=$r->post("dataNascimento",null);
        $genero=$r->post("genero",null);
        if ($nome != null){
            $pessoa = new Pessoas();
            $pessoa->nome_proprio=$nome;
            $pessoa->sobrenome=$sobrenome;
            $pessoa->data_de_nascimento=$dataNascimento;
            $pessoa->genero=$genero;
            $pessoa->save();
            $inquerido = new Inqueridos();
            $inquerido->pessoas_id=$pessoa->id;
            $inquerido->tipo=1;
            $inquerido->save();
        }else{
            #Porcesso de criação ou insertção da pessoa(Inquerido Anonimo)
            $pessoaAnonima =  Pessoas::where("nome_proprio","=","Anônimo")->get()->first();
            if ($pessoaAnonima == null){
                $pessoa = new Pessoas();
                $pessoa->nome_proprio="Anônimo";
                $pessoa->save();
                $inquerido = new Inqueridos();
                $inquerido->pessoas_id=$pessoa->id;
                $inquerido->tipo=1;
                $inquerido->save();
            }else{
                $inquerido = Inqueridos::where("pessoas_id","=",$pessoaAnonima->id)->get()->first();
            }
        }

        $respostaObjs=null;
        $repostas  = $r->post("respostas");
        $inquerito  = $r->post("inquerito");
        $incricaoObjs = new Inscricoes();
        $incricaoObjs->inqueridos_id=$inquerido->id;
        $incricaoObjs->inqueritos_id=$inquerito;
        $incricaoObjs->save();
        foreach ($repostas as $pergunta_id => $resposta) {
            $respostaObjs= new Respostas();
            $respostaObjs->perguntas_id = $pergunta_id;
            $respostaObjs->resposta = $resposta;
            $respostaObjs->inqueritos_id = $inquerito;
            $respostaObjs->inscricoes_id = $incricaoObjs->id;
            $respostaObjs->save();
        }
        $incricaoObjs->respondido=1;
        $incricaoObjs->update(["respondido"]);
        Http::redirecionar("/obrigado");

    }



}
