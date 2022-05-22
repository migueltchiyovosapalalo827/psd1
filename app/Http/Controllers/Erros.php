<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Http\Controllers;

class Erros extends Controller
{

    public  function e404()
    {
        return view("Erros.404",["titulo"=>"Pagina não encontrada"]);
    }
    public  function e500($erro=[])
    {
        return view("Erros.500",["titulo"=>"Erro interno do servidor","erro"=>$erro]);
    }
    public  function e000()
    {
        return view("Erros.000",["titulo"=>"Erro de autenticação"]);
    }
    public  static function e111($dados=[])
    {
        return view("Erros.111",["titulo"=>"Erro","dados"=>$dados]);
    }

}
