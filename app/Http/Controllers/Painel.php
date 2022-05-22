<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Http\Controllers;


use App\Models\Cursos;
use App\Models\Inqueridos;
use App\Models\Inqueritos;
use App\Models\Livros;
use App\Uteis\Http;
use App\Uteis\Sessoes;

class Painel extends Controller
{
    public  function meu_painel()
    {
        $this->verificaSeEstaLogado();
        $inquerido = Sessoes::obter("usuario");
        if($inquerido["pessoa"]->inqueridos()->count() != null){
            Http::redirecionar("inquerido/inqueritos");
        }
        $total=["cursos"=>Cursos::all(["id"])->count(),"livros"=>Livros::all(["id"])->count(),"inqueritos"=>Inqueritos::all()->count(),"inqueridos"=>Inqueridos::all()->count()];
        return view("Painel.painel",["titulo"=>"Meu painel","total"=>$total]);
    }

}
