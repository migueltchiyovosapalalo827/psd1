<?php

namespace App\Http\Controllers;
use App\Uteis\Alert;
use App\Uteis\Ficheiros;
use App\Uteis\Http;
use App\Uteis\Testos;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

/**
 * Class Biblioteca
 * @package App\Controllers
 */
class Documentos extends Controller
{

    public function emitir_certificado()
    {

        return view("Livro.pesquisar_livro",["titulo"=>"Pesquisar livro"]);
    }


}
