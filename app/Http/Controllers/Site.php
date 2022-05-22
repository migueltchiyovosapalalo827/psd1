<?php

namespace App\Http\Controllers;

use App\Models\Arquitectura_escola;
use App\Models\Cursos_escolas;
use App\Models\Fotos_escolas;
use App\Models\Instituicoes;
use App\Models\Historial_escolas;

class Site extends Controller
{

    public  function home()
    {
        $instituicoes=Instituicoes::all();
        return view("Site.home",["titulo"=>"PSD Pesquisa e Desenvolvimento","instituicoes"=>$instituicoes]);
    }
    public  function escolas_publicas()
    {
        $escolaspu=Instituicoes::where("tipo","=","publica")->get();
        return view("Site.escolas_publicas",["titulo"=>"PSD - Escolas Públicas","escolaspu"=>$escolaspu]);
    }
    public  function escolas_privadas()
    {
        $escolaspr=Instituicoes::where("tipo","=","privada")->get();
        return view("Site.escolas_privadas",["titulo"=>"PSD - Escolas Privadas","escolaspr"=>$escolaspr]);
    }
    public  function escola($id=0)
    {
        if ($id !=0 and $id !=null){
        $escolar = Instituicoes::where("id","=",$id)->get();
        $curso=Cursos_escolas::where("id_instituicao","=",$id)->get();
        $historial=Historial_escolas::where("id_instituicao","=",$id)->get()->first();
        $arquitecturas=Arquitectura_escola::where("id_instituicao","=",$id)->get();
        $fotos=Fotos_escolas::where("id_instituicao","=",$id)->get();

        return view("Site.escola",["titulo"=>"PSD - Escola","escolar"=>$escolar,"cursos"=>$curso,"historial"=>$historial,"fotos"=>$fotos,"arquitecturas"=>$arquitecturas]);
    }
}


}
