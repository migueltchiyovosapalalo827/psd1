<?php

namespace App\Http\Controllers;

use App\Uteis\Alert;
use App\Uteis\Flash;
use App\Uteis\Http;
use App\Uteis\Sessoes;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
/**
     * @param string $perm
     * Verifica se a url solicitada esta na lista de permição do grupo de usuario em que o usuario se encontra
     */
    public  function verifica(): void
    {

        /*Captura a requisição*/
        $r = SymfonyRequest::createFromGlobals();
        $query=explode("?",$r->getRequestUri());
        $query1=explode("/",$query[0]);
        $perm="/".$query1[1]."/".$query1[2];
        $this->verificaSeEstaLogado();
        if (!in_array($perm, Sessoes::obter("caminhos"), true)) {
            Sessoes::adicionar("acesso_negado",$perm);
            Http::redirecionar("/acesso_negado");
            exit();
        }
    }
    public  function verificaP(string $perm): void
    {
        $this->verificaSeEstaLogado();
        if (!in_array($perm, Sessoes::obter("caminhos"), true)) {
            Sessoes::adicionar("acesso_negado",$perm);
            Http::redirecionar("/acesso_negado");
            exit();
        }
    }
    public  function verificaSeEstaLogado(): void
    {
        if(!Sessoes::obter("usuario")) {
            new Alert("Faça login para continuar!", "danger","Erro");
            Http::redirecionar("entrar");
            exit();
        }
    }

}
