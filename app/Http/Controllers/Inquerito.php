<?php

/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Http\Controllers;

use App\Models\Compartilhamentos;
use App\Models\Inqueridos;
use App\Models\Inqueritos;
use App\Models\Inscricoes;
use App\Models\Opcoes;
use App\Models\Perguntas;
use App\Models\Pesquisadores;
use App\Uteis\Alert;
use App\Uteis\Ficheiros;
use App\Uteis\Http;
use App\Uteis\Testos;
use Illuminate\Http\Request;


class Inquerito extends Controller
{

    public function criar_inquerito()
    {
        $this->verifica();
        return view("Inquerito.criar_inquerito", ["titulo" => "Criar inquerito", "pesquisadores" => Pesquisadores::all()]);
    }

    public function remover_inscricao(int $id)
    {
        $this->verifica();
        $inscricao = Inscricoes::where("id", "=", $id);
        if ($inscricao != null) {
            $inscricao = $inscricao->first();
            if ($inscricao != null) {
                $id_inquerito = $inscricao->inqueritos_id;
                if ($inscricao->delete()) {
                    new Alert("Inscricao eliminada com sucesso.", "success");
                    Http::redirecionar("/inquerito/ver_inquerito/" . $id_inquerito);
                    return;
                }
            }
        }
        new Alert("Não foi possivel eliminar a inscrição.", "danger", "Erro ao eliminar inscrição");
        Http::redirecionar("/inquerito/ver_inquerito/0");
        return;
    }
    public function ver_inquerito(int $id = 0)
    {
        $this->verifica();
        $inquerito = Inqueritos::where("id", "=", $id);
        if ($inquerito != null) {
            $inquerito = $inquerito->first()->fresh(["inscricoes.inquerido.pessoa", "perguntas.respostas", "perguntas.opcoes", "pesquisador", "compartilhamento"]);
        }
        $inqueridos = Inqueridos::where("tipo", "=", 0)->get();
        return view("Inquerito.ver_inquerito", ["titulo" => "Ver inquerito", "inquerito" => $inquerito, "inqueridos" => $inqueridos]);
    }
    public function todos_inqueritos(Request $r)
    {
        $this->verifica();
        $ano = $r->get("ano", 0);
        $inqueritos = null;
        if ($ano == 0) {
            $ano = date("Y");
        }
        if ($ano == 1) {
            $inqueritos  = Inqueritos::all()->fresh('pesquisador.pessoa', 'inscricoes')->toArray();
            return view("todos_inqueritos", ["titulo" => "Todos os inqueritos", "inqueritos" => $inqueritos, "ano" => $ano]);
        }
        $inqueritos  = Inqueritos::where("ano", "=", $ano)->get()->fresh('pesquisador.pessoa', 'inscricoes')->toArray();
        return view("Inquerito.todos_inqueritos", ["titulo" => "Todos os inqueritos", "inqueritos" => $inqueritos, "ano" => $ano]);
    }
    public function inquerito_por_pesquisador(int $id = 0)
    {
        $this->verifica();
        $pesquisador = null;
        $inqueritos = null;
        if (!($id == 0)) {
            $pesquisador = Pesquisadores::find($id);
            if (!($pesquisador == null)) {
                $inqueritos = Inqueritos::where("pesquisadores_id", "=", $pesquisador->id)->get()->fresh("inscricoes")->toArray();
            }
        }
        $pesquisadores = Pesquisadores::all()->fresh("pessoa");
        return view("Inquerito.inquerito_por_pesquisador", ["titulo" => "Inqueritos por", "pesquisador" => $pesquisador, "inqueritos" => $inqueritos, "pesquisadores" => $pesquisadores]);
    }
    public function eliminar_inquerito(int $id)
    {
        $this->verifica();
        $inquerito = Inqueritos::where("id", "=", $id)->get()->first();
        if (!($inquerito == null)) {
            $compartilhamento = Compartilhamentos::where("id", "=", $inquerito->compartilhamentos_id);
            if ($compartilhamento != null) {
                $compartilhamento->delete();
            }

            try {
                $inquerito->delete();
            } catch (\PDOException $e) {
                Http::redirecionar("/500");
            }
            new Alert("Inquerito eliminado com sucesso", "success", "Sucesso");
            Http::redirecionar("/inquerito/todos_inqueritos");
            return;
        }
        new Alert("Não foi possivel eliminar iquerito.", "danger", "erro");
        Http::redirecionar("/inquerito/todos_inqueritos");
        return;
    }

    public function salvar_inquerito(Request $r)
    {
        $this->verifica();
        $privacidade = 1; //publico;
        $modo_de_exibicao = 1;
        if ($r->post("privacidade") != null) {
            $privacidade = 0; //privado;
        }
        if ($r->post("modo_de_exibicao") != null) {
            $modo_de_exibicao = 0;
        }
        $inquerito = new Inqueritos();
        $i_logotipo = $r->file('logotipo', null);
        if ($i_logotipo != null) {
            if (!Ficheiros::eImagemValida($i_logotipo)) {
                new Alert("O logo do inquerito não é valido.", "danger", "Logo invalido.");
                Http::redirecionar("/inquerito/criar_inquerito");
                return;
            }
            try {
                $i_logotipoNovoNome = Ficheiros::novoNome(Testos::str_rand(), $i_logotipo->clientExtension());
                var_dump($i_logotipoNovoNome);
                $i_logotipo->move("ficheiros/inqueritos/logotipos/", $i_logotipoNovoNome);
                $inquerito->logotipo = $i_logotipoNovoNome;
            } catch (\Exception $e) {
                new Alert("Erro ao tentar mover o ficheiro para o servidor", "danger", "Tente novamente");
                Http::redirecionar("/inquerito/criar_inquerito");
                return;
            }
        }

        $perguntas = $r->get("perguntas");
        $tipos = $r->get("tipo");
        $ops = $r->get("opcao");
        $inquerito->titulo = $r->get("titulo");
        $inquerito->pesquisadores_id = $r->get("pesquisador");
        $inquerito->ano = date("Y");
        $inquerito->descricao = $r->get("descricao");
        $inquerito->modo_de_exibicao = $modo_de_exibicao;
        $inquerito->privacidade = $privacidade;
        $compartilhamento = new Compartilhamentos();
        try {
            $compartilhamento->endereco = Testos::str_rand(8);
        } catch (\Exception $e) {
            $inquerito->delete();
        }
        $compartilhamento->estado = 0;
        if ($privacidade) {
            $compartilhamento->estado = 1;
        }
        $compartilhamento->save();
        $inquerito->compartilhamentos_id = $compartilhamento->id;
        if ($inquerito->save() && ($perguntas != null)) {

            foreach ($perguntas as $i => $pergunta) {
                $perguntaObj = new Perguntas();
                $perguntaObj->titulo = $pergunta;
                $perguntaObj->tipo = $tipos[$i];
                $perguntaObj->inqueritos_id = $inquerito->id;
                if ($perguntaObj->save()) {
                    if ($tipos[$i] == "ro") {
                        foreach ($ops[$i] as $op) {
                            $opObj = new Opcoes();
                            $opObj->opcao = $op;
                            $opObj->perguntas_id = $perguntaObj->id;
                            $opObj->save();
                        }
                        $opObj = new Opcoes();
                        $opObj->opcao = "Não responde";
                        $opObj->perguntas_id = $perguntaObj->id;
                        $opObj->save();
                    }
                }
            }
        } else {
            if ($inquerito->logotipo != "padrao.png") {
                unlink("ficheiros/inqueritos/logotipos/" . $inquerito->logotipo);
            }
            $inquerito->delete();
            new Alert("Não foi possivel salvar o inquerito por falta de perguntas.", "danger", "Inquerito sem perguntas!");
            Http::redirecionar("/inquerito/criar_inquerito");
            return;
        }
        new Alert("Inquerito salvo com sucesso");
        Http::redirecionar("/inquerito/criar_inquerito");
    }
    public function inscrever_inquerido(Request $r)
    {
        $this->verifica();
        $inqueridos = $r->post("inqueridos");
        foreach ($inqueridos as $inquerido) {
            $inscricoes = new Inscricoes();
            $inscricao = Inscricoes::where("inqueridos_id", "=", $inquerido)
                ->where("inqueritos_id", "=", $r->get("inquerito"));
            $inscricao = $inscricao->get();
            if ($inscricao->count() == 0) {
                $inscricoes->inqueridos_id = $inquerido;
                $inscricoes->inqueritos_id = $r->get("inquerito");
                $inscricoes->save();
            }
        }
        new Alert("Inqueridos foram inscritos!", "success", "Sucesso");
        Http::redirecionar("/inquerito/ver_inquerito/" . $r->get("inquerito"));
        return;
    }
    public function imprimir_relatorio(int $id)
    {
        $this->verifica();
        $inquerito = Inqueritos::where("id", "=", $id)->get();
        if ($inquerito != null) {
            return view("Inquerito.imprimir_relatorio", ["titulo" => "Imprimir relatorio", "inquerito" => $inquerito->first()->fresh(["inscricoes"])]);
        }
    }
    public function imprimir_respostas(int $id)
    {

        $this->verificaSeEstaLogado();
        $inquerito = Inqueritos::where("id", "=", $id)->get();
        if ($inquerito != null) {
            return view("Inquerito.imprimir_respostas", ["titulo" => "Imprimir relatorio", "inquerito" => $inquerito->first()]);
        }
    }
    public function imprimir_resposta(int $id)
    {

        $this->verificaSeEstaLogado();
        $inscricao = Inscricoes::where("id", "=", $id)->get();
        if ($inscricao != null) {
            return view("Inquerito.imprimir_resposta", ["titulo" => "Imprimir relatorio", "inscricao" => $inscricao->first()]);
            return;
        }
        new Alert("Inscrição invalida ou não existe!", "danger", "Erro de inscrição");
        Http::redirecionar("/inquerito/todos_inqueritos");
    }
}
