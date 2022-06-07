<?php

/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Http\Controllers;

use App\Models\Grupo_de_usuarios;
use App\Models\Menus;
use App\Models\Pessoas;
use App\Models\Tarefas;
use App\Models\Tarefas_dos_grupos;
use App\Models\Usuarios;
use App\Uteis\Alert;
use App\Uteis\basededados;
use App\Uteis\Ficheiros;
use App\Uteis\Http;
use App\Uteis\Testos;


class Instalar extends Controller
{
    public  function instalar(): void
    {
        $conexao = basededados::tentarConectar();
        if (!$conexao["sucesso"]) {
            $this->erro_bd($conexao["mensagem"]);
            return;
        }
        $this::finalizar_configuracao();
    }

    private  function erro_bd(String $erro)
    {
        return view("erro_bd", ["titulo" => "Erro de bd", 'erro' => $erro, "db_config" => BD_CONFIG]);
    }
    private static function finalizar_configuracao(): void
    {
        $grupo_id = self::criar_grupos();
        $pessoa_id = self::criar_pessoa();
        self::criar_usuario($pessoa_id, $grupo_id);
        self::criarMenusTarefas();
        new Alert("Usuario padrão configurado com sucesso. faça login usando email ou usuario ou contanto e senha", "success");
        Http::redirecionar("entrar");
    }

    private static function criar_grupos(): int
    {
        $grupos = ["sistema", "inqueridos", "administradores", "pesquisadores", "instituicoes", "estudantes"];
        Grupo_de_usuarios::where("id", ">", 0)->delete();
        foreach ($grupos as  $grupo) {
            $grupoU = new Grupo_de_usuarios();
            $grupoU->nome = $grupo;
            $grupoU->save();
        }
        $grupo_sistema = Grupo_de_usuarios::where("nome", "=", "sistema")->get()->first()->toArray();
        return $grupo_sistema["id"];
    }
    private static function criar_pessoa(): int
    {
        Pessoas::where("id", ">", 0)->delete();
        $pessoa = new Pessoas();
        $pessoa->nome_proprio = SISTEMA["usuario"]["nome"];
        $pessoa->sobrenome = SISTEMA["usuario"]["sobrenome"];
        $pessoa->save();
        $pessoa_id = Pessoas::all("id")->last()->toArray();
        return $pessoa_id["id"];
    }

    private static function  criar_usuario(int $pessoa, int $grupo): void
    {
        Usuarios::where("id", ">", 0)->delete();
        $usuario = new Usuarios();
        $usuario->usuario = SISTEMA["usuario"]["usuario"];
        $usuario->email = SISTEMA["usuario"]["email"];
        $usuario->senha = SISTEMA["usuario"]["senha"];
        $usuario->contacto = SISTEMA["usuario"]["contacto"];
        $usuario->senha = Testos::encriptar(SISTEMA["usuario"]["senha"]);
        $usuario->pessoas_id = $pessoa;
        $usuario->grupo_de_usuarios_id = $grupo;
        $usuario->save();
    }
    private static  function criarMenusTarefas()
    {
        $grupo_sistema = Grupo_de_usuarios::where("nome", "=", "sistema")->get()->first()->toArray();
        $menus = null;
        $tarefas = null;
        $confs = Ficheiros::config();

        foreach ($confs->menus as $menu) {
            $menus = new Menus();
            utf8_decode($menus->nome = $menu->nome);
            utf8_decode($menus->icon = $menu->icon);


            if ($menus->save()) {
                foreach ($menu->tarefas as $tarefa) {
                    $tarefas = new Tarefas();
                    $tarefas->nome = $tarefa->nome;
                    $tarefas->caminho = $tarefa->caminho;
                    $tarefas->menus_id = $menus->id;
                    $tarefas->visivel = $tarefa->visivel;
                    $tarefas->save();
                    $tarefasDosGrupos = new Tarefas_dos_grupos();
                    $tarefasDosGrupos->tarefas_id = $tarefas->id;
                    $tarefasDosGrupos->grupo_de_usuarios_id = $grupo_sistema["id"];
                    $tarefasDosGrupos->save();
                }
            }
        }
    }
}
