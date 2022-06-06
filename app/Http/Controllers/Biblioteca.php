<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */
namespace App\Http\Controllers;
use App\Models\Autores;
use App\Models\Cursos;
use App\Models\Livros;
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
class Biblioteca extends Controller
{
    #Gestão de livros
    public function pesquisar_livro(Request $r)
    {
        $this->verifica();
        if (($r->q !== null) and (!empty($r->q))){
            $livros = Livros::where('titulo','like','%'.$r->q.'%')
                ->orWhere('sigla','like','%'.$r->q.'%')
                ->get()
                ->fresh('curso','autor')
                ->toArray();
           return view("Biblioteca.Livro.pesquisar_livro",["titulo"=>"Pesquisar livro",'livros'=>$livros,'q'=>$r->q]);

        }
        return view("Biblioteca.Livro.pesquisar_livro",["titulo"=>"Pesquisar livro"]);
    }
    public function adicionar_livro($id=0)
    {
        $this->verifica();
        if ($id !=0 and $id !=null){
            $livro = Livros::where("id","=",$id)->get()->fresh('curso','autor')->first()->toArray();
            return view("Biblioteca.Livro.adicionar_livro",["titulo"=>"Adicionar livro","autores"=>Autores::all()->toArray(),"cursos"=>Cursos::all()->toArray(),"livro"=>$livro]);

        }
        return view("Biblioteca.Livro.adicionar_livro",["titulo"=>"Adicionar livro","autores"=>Autores::all()->toArray(),"cursos"=>Cursos::all()->toArray()]);
    }
    public function todos_livros()
    {
        $this->verifica();
        $livros = Livros::with("curso","autor")->get()->toArray();
        return view("Biblioteca.Livro.todos_livros",["titulo"=>"Todos livros","livros"=>$livros]);
    }
    public function livros_por_curso(int $id=0)
    {
        $this->verifica();
        $curso=null;
        $cursos=Cursos::all()->toArray();

        $livros=Livros::where("cursos_id","=",$id)->get()->fresh('autor')->toArray();

        if ($id != null){
            $curso=Cursos::where("id","=",$id)->get("nome")->first()->toArray();
        }else{
            $curso=null;
        }
        return view("Biblioteca.Livro.livros_por_curso",["titulo"=>"Livros por curso","cursos"=>$cursos,"curso"=>$curso,"livros"=>$livros]);
    }
    public function curso_por_livros(int $id=0, Request $r)
    {
        $this->verifica();
        $cursos = Cursos::all();
        $livros = Livros::where("cursos_id","=",$r->get("q"));
        $livros = $livros->get();
        $curso = null;
        if ($livros != null){
            $livro =  $livros->fresh(["curso"])->first();
            $curso = $livro->curso;
        }
        return view("Biblioteca.Livro.curso_por_livros",["titulo"=>"Livros por curso","cursos"=>$cursos,"curso"=>$curso,"livros"=>$livros]);
    }
    public function ver_livro(int $id=0)
    {  $this->verifica();
        if ($id != 0){
            $livro= Livros::where("id","=",$id)
                ->get()
                ->fresh('curso','autor')
                ->first()
                ->toArray();
            return view("Biblioteca.Livro.ver_livro",["titulo"=>"Pesquisar livro",'livro'=>$livro]);
            return;
        }
        //return view("Biblioteca.Livro/ver_livro",["titulo"=>"Ver livro"]);
    }
    public function salvar_livro(Request $req)
    {  $this->verifica();
        //Busca os valores das requisições
        $titulo = $req->titulo;
        $curso = $req->curso;
        $autor = $req->autor;
        $descricao = $req->descricao;
        $sigla = Testos::sigla($req->sigla,$titulo);
        $capa = $req->file('capa',null);
        $ficheiro = $req->file('ficheiro',null);
        $capaNovoNome="";
        $ficheiroNovoNome="";
        #verificar se pode mover o ficheiro
        if ($ficheiro != null){
            if(!Ficheiros::eDocumentoValido($ficheiro)){
                new Alert("Envie um ficheiro valido.", "erro", "Documento invalido");
                Http::redirecionar("/biblioteca/adicionar_livro");
                return;
            }
            $ficheiroNovoNome=Ficheiros::novoNome($sigla,$ficheiro->clientExtension());
        }
        #verifica se pode mover a imagem
        if ($capa != null){
            if(!Ficheiros::eImagemValida($capa)){
                new Alert("A capa do livro não é valida.", "erro", "Capa invalida.");
                Http::redirecionar("/biblioteca/adicionar_livro");
                return;
            }
            $capaNovoNome=Ficheiros::novoNome($sigla,$capa->clientExtension());
        }
        try{
            $livro = new Livros();
            if (!empty($ficheiroNovoNome)){
                $ficheiro->move("ficheiros/livros/ficheiros/",$ficheiroNovoNome);
                $livro->ficheiro =$ficheiroNovoNome;
            }
            if (!empty($capaNovoNome)){
                $capa->move("ficheiros/livros/capas/",$capaNovoNome);
                $livro->capa =$capaNovoNome;
            }
            $livro->sigla =$sigla;
            $livro->titulo =$titulo;
            $livro->cursos_id = $curso;
            $livro->autores_id =$autor;
            $livro->descricao = $descricao;
            $livro->save();
            new Alert("O livro ".$titulo." foi salvo.", "sucesso", );
            Http::redirecionar("/biblioteca/adicionar_livro");
        }catch(FileException $e){
            new Alert("Motivado por: <b>".$e->getMessage(), "erro", "Erro critico");
            Http::redirecionar("/biblioteca/adicionar_livro");
            return;
        }
    }
    public function editar_livro(Request $req)
    {
        $this->verifica();
        //Busca os valores das requisições
        $titulo = $req->titulo;
        $curso = $req->curso;
        $autor = $req->autor;
        $descricao = $req->descricao;
        $sigla = Testos::sigla($req->sigla,$titulo);
        $capa = $req->file('capa',null);
        $ficheiro = $req->file('ficheiro',null);
        $capaNovoNome="";
        $ficheiroNovoNome="";
        #verificar se pode mover o ficheiro

        if ($ficheiro != null){
            if(!Ficheiros::eDocumentoValido($ficheiro)){
                new Alert("Envie um documento valido.","erro","Documento invalido!" );
                Http::redirecionar("/biblioteca/adicionar_livro/".$req->id);
                return;
            }else{
                try {
                    $ficheiroNovoNome = Ficheiros::novoNome($sigla, $ficheiro->clientExtension());
                } catch (Exception $e) {
                    new Alert("Erro interno do servidor: ".$e->getMessage(),"erro","Erro critico!" );
                    Http::redirecionar("/biblioteca/adicionar_livro/".$req->id);
                    return;
                }
            }
        }
        #verifica se pode mover a imagem
        if ($capa != null){
            if(!Ficheiros::eImagemValida($capa)){
                new Alert("Envie uma capa valida.","erro","Capa invalida!" );
                Http::redirecionar("/biblioteca/adicionar_livro/".$req->id);
                return;
            }else{
                try {
                    $capaNovoNome = Ficheiros::novoNome($sigla, $capa->clientExtension());
                } catch (Exception $e) {
                    new Alert("Erro interno do servidor: ".$e->getMessage(),"erro","Erro critico!" );
                    Http::redirecionar("/biblioteca/adicionar_livro/".$req->id);
                    return;
                }
            }


        }
        try{
            $elementosQueVao=array();
            $livro = Livros::where("id","=",$req->id)->get()->first();
            if (!empty($ficheiroNovoNome)){
                $ficheiro->move("ficheiros/livros/ficheiros/",$ficheiroNovoNome);
                $livro->ficheiro =$ficheiroNovoNome;
                $elementosQueVao[] = "ficheiro";
            }
            if (!empty($capaNovoNome)){
                $capa->move("ficheiros/livros/capas/",$capaNovoNome);
                $livro->capa = $capaNovoNome;
                $elementosQueVao[] = "capa";
            }
            $elementosQueVao[] = ["sigla", "cursos_id", "autores_id", "descricao"];
            $livro->sigla =$sigla;
            $livro->titulo =$titulo;
            $livro->cursos_id = $curso;
            $livro->autores_id =$autor;
            $livro->descricao = $descricao;
            $livro->update($elementosQueVao);
            new Alert("O livro ".$titulo." foi atualizado", "sucesso", "Livro atualizado!" );
            Http::redirecionar("/biblioteca/ver_livro/".$req->id);
        }catch(FileException $e){
            new Alert("Motivado por: <b>".$e->getMessage(), "erro", "Erro critico!" );
            Http::redirecionar("/biblioteca/adicionar_livro/".$req->id);
        }
    }
    public function eliminar_livro(int $id)
    {
        $this->verifica();
        $livro = Livros::find($id);
        if ($livro != null){
            try{
                $livroE=$livro->delete();
                if (($livroE != null) || ($livroE != false)){
                    new Alert("livro eliminado com sucesso", "sucesso", "Livro eliminado" );
                    Http::redirecionar("/biblioteca/todos_livros");
                    return;
                }
            }catch (\PDOException $e){
                new Alert("Não foi possivel eliminar o livro pelo movito:".$e->getMessage(), "erro", "Erro critico" );
                Http::redirecionar("/biblioteca/todos_livros");
                return;
            }
        }
        new Alert("Não é possivel eliminar um livro que não existe!", "erro", "Erro ao eliminar o livro." );
        Http::redirecionar("/biblioteca/todos_livros");
    }
    #Gestão de cursos
    public function adicionar_curso($id=0)
    {
        $this->verifica();
        if ($id != 0 && $id !=null){
            $curso = Cursos::where("id","=",$id)->get()->first()->toArray();
            return view("Biblioteca.Curso.adicionar_curso",["titulo"=>"Editar curso","curso"=>$curso]);
            return;
        }
        return view("Biblioteca.Curso.adicionar_curso",["titulo"=>"Adicionar curso"]);
    }
    public function salvar_curso(Request $req)
    {
         $this->verifica();
        $nome = $req->get("nome");
        $sigla = Testos::sigla($req->sigla,$nome);

        $curso = new Cursos();
        $curso->nome = $nome;
        $curso->sigla = $sigla;
        if ($curso->save()){
            new Alert("O curso   ".$nome." foi salvo com sucesso", "success", "Curso salvo." );
            Http::redirecionar("/biblioteca/adicionar_area");
        }else{
            new Alert("Não foi possivel salvar o curso.", "danger", "Erro ao salvar o curso." );
            Http::redirecionar("/biblioteca/adicionar_area");
        }
    }

    public function editar_curso(Request $req)
    {  $this->verifica();
        $id=$req->get("id");
        $curso = Cursos::where("id","=",$id)->get()->first();
        $nome = $req->get("nome",null);
        $sigla = Testos::sigla($req->get("sigla",null),$nome);
        $curso->nome = $nome;
        $curso->sigla = $sigla;
        if ($curso->update(["nome,sigla"])){
            new Alert("O curso ".$nome." foi atualizado com sucesso", "success", "Sucesso" );
            Http::redirecionar("/biblioteca/adicionar_curso/".$id);
        }else{
            new Alert("Não foi possivel atualizar o curso.", "erro", "Erro critico" );
            Http::redirecionar("/biblioteca/adicionar_curso/".$id);
        }

    }
    public function eliminar_curso(int $id)
    {
        $this->verifica();
        $curso = Cursos::find($id);
        if ($curso != null){
            try{
                $cursoE=$curso->delete();
                if (($cursoE != null) || ($cursoE != false)){
                    new Alert("Curso eliminado com sucesso", "success", "Curso eliminado" );
                    Http::redirecionar("/biblioteca/listar_cursos/");
                    return;
                }
            }catch (\PDOException $e){
                new Alert("Não é possivel eliminar o curso, por ter livros associados.", "erro", "Erro critico." );
                Http::redirecionar("/biblioteca/livros_por_curso/".$id);
                return;
            }
        }
        new Alert("Não é possivel eliminar um curso que não existe!", "aviso", "Informação" );
        Http::redirecionar("/biblioteca/listar_cursos/");
        return;
    }
    public function listar_cursos()
    {
        $this->verifica();
        return view("Biblioteca.Curso.listar_cursos",["titulo"=>"Listar Cursos","cursos"=>Cursos::all(["nome","id"])->fresh("livros")->toArray()]);
    }
    public function ver_curso($id)
    {
        $this->verifica();
        return view("Biblioteca.Curso.listar_cursos",["titulo"=>"Listar cursos"]);
    }
    #Gestão de autores
    public function adicionar_autor()
    {
        $this->verifica();
        return view("Biblioteca.Autor.adicionar_autor",["titulo"=>"Adicionar autor","autores"=>Autores::all(["id","nome"])->fresh("livros")]);
    }
    public function ver_autor(Int $id)
    {  $this->verifica();
        $autor = Autores::where(['id' => $id])
            ->get()
            ->fresh(['livros.curso'])
            ->first();

        if ($autor != null){
            return view("Biblioteca.Autor.ver_autor",["titulo"=>"Ver autor", "autor"=>$autor->toArray()]);
            return;
        }
        Http::redirecionar("/404");
    }
    public function eliminar_autor(int $id)
    {
        $this->verifica();
        $autor = Autores::find($id);
        if ($autor != null){
            try{
                $autorE=$autor->delete();
                if (($autorE != null) || ($autorE != false)){
                    new Alert("Autor eliminado com sucesso", "success", "Autor eliminado." );
                    Http::redirecionar("/biblioteca/adicionar_autor/");
                    return;
                }
            }catch (\PDOException $e){
                new Alert("Não é possivel eliminar um autor que tenha livros associados.", "Erro", "Erro ao eliminar autor." );
                Http::redirecionar("/biblioteca/ver_autor/".$id);
                return;
            }
        }
        new Alert("Não é possivel eliminar um autor que não existe!", "aviso", "Informação" );
        Http::redirecionar("/biblioteca/adicionar_autor/");
    }
    public function salvar_autor(Request $req)
    {
        $this->verifica();
        $autor = new Autores();
        $autor->nome = $req->nome;
        if ($autor->save()){
            new Alert("$autor->nome"." Foi salvo com sucesso.");
            Http::redirecionar("/biblioteca/adicionar_autor");
            return;
        }else{
            new Alert("Não foi possivel salvar o autor.", "danger", "Erro critico" );
            Http::redirecionar("/biblioteca/adicionar_autor/");
            return;
        }
    }

}
