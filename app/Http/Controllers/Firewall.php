<?php

/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Http\Controllers;

use App\Models\Menus;
use App\Uteis\Http;
use App\Uteis\Sessoes;

/**
 * Class Firewall
 * @package App\Controllers
 */
class Firewall
{
    /**
     * @param $usuario
     */
    public static function entrar($usuario): void
    {
    }
    /**
     * @param $usuario
     */
    public static function montar_menu($usuario): void
    {
        $ar = [];
        $tarefasPermicao = array();
        $tarefasPermicaoObj = array();
        $caminhos = array();
        $menus = Menus::all();
        foreach ($usuario->grupo->tarefasDosGrupos as $t) {
            $tarefasPermicaoObj = $t->tarefas->fresh("menus");
            $tarefasPermicao[] = $t->tarefas->fresh("menus")->toArray();
        }
        foreach ($tarefasPermicao as $tarefa) {
            $caminhos[] = $tarefa["caminho"];
        }

        Sessoes::adicionar("caminhos", $caminhos);
        Sessoes::adicionar("tarefas", $tarefasPermicaoObj);
        echo "Tarefas do usuario";
        $ar = [];
        foreach ($menus as $k => $menu) {
            $tarefa = [];
            foreach ($tarefasPermicao as $kk => $p) {
                if (($p["menus"]["id"] == $menu->id) && ($p["visivel"] != 0)) {
                    $tarefa[] = ["nome" => $p["nome"], "caminho" => $p["caminho"], "visivel" => $p["visivel"]];
                }
            }

            array_push($ar, ["menu" => self::submenu($menu->nome), "id" => $menu->id, "nome" => $menu->nome, "icon" => $menu->icon, "tarefas" => $tarefa]);
            unset($tarefa);
        }

        Sessoes::adicionar("MenuDoUsuario", $ar);
    }

    /**
     * @param string $menu
     *
     * @return string
     */
    private static function submenu(string $menu): ?string
    {
        $menu = str_replace(" ", "_", $menu);
        switch ($menu) {
            case 'Gestão_de_livros':
                return "Biblioteca";
                break;
            case 'Gestão_de_áreas':
                return "Biblioteca";
                break;
            case 'Gestão_de_autores':
                return "Biblioteca";
                break;
            case 'Gestão_de_inquéritos':
                return "Inquerito";
                break;
            case 'Pesquisadores':
                return "Inquerito";
                break;
            case 'Inqueridos':
                return "Inquerito";
                break;
            case 'Gestão_da_instituição':
                return "Instituicao";
                break;
            case 'Gestão_de_cursos':
                return "Instituicao";
                break;
            case 'Gestão_de_historial':
                return "Instituicao";
                break;
            case 'Gestão_de_fotos':
                return "Instituicao";
                break;
            case 'Arquitectura':
                return "Instituicao";
                break;
            case 'Gestão_de_documento':
                return "Documentos";
                break;
            case 'Sistema':
                return "Sistema";
                break;
            case 'Gestão_de_cartões':
                return "Cartoes";
                break;
            default:
                return "Sistema";
        }
    }

    public static function sair(): void
    {
        Sessoes::destruir();
        Http::redirecionar("/entrar");
    }

    public static function  usuarioExiste()
    {
    }
    public static function  usuarioBloqueado()
    {
    }
    public static function  usuarioBloquear()
    {
    }
}
