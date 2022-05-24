<?php

namespace App\Http\Controllers;

use App\Models\Arquitectura_escola;
use App\Models\Cursos_escolas;
use App\Models\Emissao_Certificados;
use App\Models\Emissao_declaracoes;
use App\Models\Estudantes;
use App\Models\Fotos_escolas;
use App\Models\Historial_escolas;
use App\Models\Instituicoes;
use App\Models\Pessoas;
use App\Models\Usuarios;
use App\Uteis\Alert;
use App\Uteis\Ficheiros;
use App\Uteis\Sessoes;
use App\Uteis\Http;
use App\Uteis\Testos;
use Exception;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Barryvdh\DomPDF\Facade\Pdf;
/**
 * Class Instituicao
 * @package App\Controllers
 */
class Instituicao extends Controller
{
    #Gestão de Escolas
    public function adicionar_instituicao()
    {
        $this->verifica();
        $instituicao = Usuarios::where("grupo_de_usuarios_id", "=", "11")->get();

       return view("Instituicao.gerais.adicionar_instituicao", ["titulo" => "Adicionar Instituição", "instituicoes" => $instituicao]);
    }
    public function salvar_instituicao(Request $requisicao)
    {
        $this->verifica();

        $nome = $requisicao->post("nome");
        $email = $requisicao->post("email");
        $telefone = $requisicao->post("telefone");
        $localizacao = $requisicao->post("localizacao");
        $tipo = $requisicao->post("tipo");
        $sobre = $requisicao->post("sobre_escola");
        $logotipo = $requisicao->file('logotipo', null);
        $id_usuario = $requisicao->post("id_usuario");
        $logotipoNovoNome="";
        if ($logotipo != null){
            if(!Ficheiros::eImagemValida($logotipo)){
                new Alert("A imagem não é valida.", "erro", "Foto invalida.");
                Http::redirecionar("/instituicao/adicionar_instituicao");
                return;
            }
            $logotipoNovoNome=Ficheiros::novoNome("psdlogoinst".$id_usuario,$logotipo->clientExtension());
    }
    $instituicao = new Instituicoes();
    if (!empty($logotipoNovoNome)){
        $logotipo->move("ficheiros/escolas/logotipo/",$logotipoNovoNome);
        $instituicao->logotipo =$logotipoNovoNome;
    }

    $instituicao->nome =$nome;
    $instituicao->email =$email;
    $instituicao->telefone =$telefone;
    $instituicao->localizacao =$localizacao;
    $instituicao->tipo =$tipo;
    $instituicao->sobre =$sobre;
    $instituicao->id_usuario =$id_usuario;
    $instituicao->logotipo =$logotipoNovoNome;

        if ($instituicao->save()){
            new Alert("Os Dados foram Salvos com Sucesso.");
            Http::redirecionar("/instituicao/adicionar_instituicao");
            return;
        }
    }
    public function editar_instituicao()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $MinhaInstituicao=Instituicoes::where("id_usuario","=",$usuario["id"])->get();

       return view("Instituicao.gerais.editar_instituicao", ["titulo" => "Adicionar Instituição","instituicao"=>$MinhaInstituicao]);
    }
    public function update_instituicao(Request $req)
    {
        $instituicao = Instituicoes::where("id","=",$req->id)->get()->first();
        $instituicao->nome =$req->post("nome");
        $instituicao->email =$req->post("email");
        $instituicao->telefone =$req->post("telefone");
        $instituicao->localizacao =$req->post("localizacao");
        $instituicao->sobre =$req->post("sobre_escola");

        if ($instituicao->update()){
            new Alert("Os Dados foram Actualizados com Sucesso!.");
            Http::redirecionar("/instituicao/minha_instituicao");
            return;
        }


    }
    public function minha_instituicao()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");

       $instituicao =  Pessoas::where("id","=",$usuario["pessoa_id"])->get()->first();
        if ($instituicao != null){

            $dados=Instituicoes::where("id_usuario","=",$usuario)->get();
           return view("Instituicao.gerais.minha_instituicao",["titulo"=>"Minha Instituição","dados"=>$dados]);

        }

    }
    public function adicionar_curso()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst=Instituicoes::where("id_usuario","=",$usuario)->get()->first();

       return view("Instituicao.cursos.adicionar_curso", ["titulo" => "Adicionar Cursos Leccionados","usuario"=>$inst]);
    }
    public function salvar_curso(Request $req)
    {
        $this->verifica();
        $cursos = new Cursos_escolas();
        $cursos->nome = $req->post("nome");
        $cursos->principais_disciplinas = $req->post("principais_disciplinas");
        $cursos->perfil_de_saida = $req->post("perfil_de_saida");
        $cursos->id_instituicao = $req->post("id_instituicao");
        if ($cursos->save()){
            new Alert("Os Dados foram Salvos com Sucesso.");
            Http::redirecionar("/instituicao/adicionar_curso");
            return;
        }
    }
    public function cursos_leccionados()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst=Instituicoes::where("id_usuario","=",$usuario)->get()->first();
        $cursos=Cursos_escolas::where("id_instituicao","=",$inst["id"])->get();
       return view("Instituicao.cursos.cursos_leccionados", ["titulo" => "Cursos Leccionados","cursos"=>$cursos]);

    }
    public function editar_curso(Request $req)
    {
        $this->verifica();
        $curso=Cursos_escolas::where("id","=",$req->post("id_curso"))->get()->first();
       return view("Instituicao.cursos.editar_curso", ["titulo" => "Editar Curso ","curso"=>$curso]);

    }
    public function update_curso(Request $req)
    {

        $curso = Cursos_escolas::where("id","=",$req->post("id"))->get()->first();
        $curso->nome =$req->post("nome");
        $curso->principais_disciplinas =$req->post("principais_disciplinas");
        $curso->perfil_de_saida =$req->post("perfil_de_saida");

        if ($curso->update()){
            new Alert("Os Dados foram Actualizados com Sucesso!.");
            Http::redirecionar("/instituicao/cursos_leccionados");
            return;
        }
    }
    public function eliminar_curso(int $id)
    {
        $this->verifica();
        $curso = Cursos_escolas::find($id);
        if($curso != null){
            $curso->delete();
            new Alert("Curso eliminado com sucesso");
            Http::redirecionar("/instituicao/cursos_leccionados");
            return;
        }
    }
    public function adicionar_historial()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst=Instituicoes::where("id_usuario","=",$usuario)->get()->first();

       return view("Instituicao.historial.adicionar_historial", ["titulo" => "Adicionar Historial","usuario"=>$inst]);
    }
    public function salvar_historial(Request $req)
    {
        $this->verifica();
        $historial = new Historial_escolas();
        $historial->historial = $req->post("historial");
        $historial->id_instituicao = $req->post("id_instituicao");

        if ($historial->save()){
            new Alert("Os Dados foram Salvos com Sucesso.");
            Http::redirecionar("/instituicao/adicionar_historial");
            return;
        }
    }
    public function ver_historial()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst=Instituicoes::where("id_usuario","=",$usuario)->get()->first();
        $historiais=Historial_escolas::where("id_instituicao","=",$inst["id"])->get();
       return view("Instituicao.historial.ver_historial", ["titulo" => "Ver historial","historiais"=>$historiais]);
    }
    public function editar_historial(Request $req)
    {
        $this->verifica();
        $historial=Historial_escolas::where("id","=",$req->post("id_historial"))->get()->first();

       return view("Instituicao.historial.editar_historial", ["titulo" => "Editar Historial ","historial"=>$historial]);


    }
    public function update_historial(Request $req)
    {


        $historial = Historial_escolas::where("id","=",$req->post("id"))->get()->first();
        $historial->historial =$req->post("historial");
        if ($historial->update()){
            new Alert("Os Dados foram Actualizados com Sucesso!.");
            Http::redirecionar("/instituicao/ver_historial");
            return;
        }
    }

    public function adicionar_arquitectura()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst=Instituicoes::where("id_usuario","=",$usuario)->get()->first();
       return view("Instituicao.arquitectura.adicionar_arquitectura", ["titulo" => "Adicionar Arquitectura","usuario"=>$inst]);
    }
    public function salvar_arquitectura(Request $req)
    {
        $this->verifica();
        $arquitectura = new Arquitectura_escola();
        $arquitectura->arquitectura = $req->post("arquitectura");
        $arquitectura->id_instituicao = $req->post("id_instituicao");

        if ($arquitectura->save()){
            new Alert("Os Dados foram Salvos com Sucesso.");
            Http::redirecionar("/instituicao/adicionar_arquitectura");
            return;
        }
    }
    public function ver_arquitectura()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst=Instituicoes::where("id_usuario","=",$usuario)->get()->first();
        $arquitecturas=Arquitectura_escola::where("id_instituicao","=",$inst["id"])->get()  ;
       return view("Instituicao.arquitectura.ver_arquitectura", ["titulo" => "Ver Arquitectura","arquitecturas"=>$arquitecturas]);
    }
    public function editar_arquitectura(Request $req)
    {
        $this->verifica();
        $arquitectura=Arquitectura_escola::where("id","=",$req->post("id_arquitectura"))->get()->first();

       return view("Instituicao.arquitectura.editar_arquitectura", ["titulo" => "Editar Arquitectura ","arquitectura"=>$arquitectura]);


    }
    public function update_arquitectura(Request $req)
    {

        $arquitectura = Arquitectura_escola::where("id","=",$req->post("id"))->get()->first();
        $arquitectura->arquitectura =$req->post("arquitectura");
        if ($arquitectura->update()){
            new Alert("Os Dados foram Actualizados com Sucesso!.");
            Http::redirecionar("/instituicao/ver_arquitectura");
            return;
        }
    }
    public function eliminar_arquitectura(int $id)
    {
        $this->verifica();
        $arquitectura = Arquitectura_escola::find($id);
        if($arquitectura != null){
            $arquitectura->delete();
            new Alert("Arquitectura eliminada com sucesso");
            Http::redirecionar("/instituicao/ver_arquitectura");
            return;
        }
    }
    public function adicionar_fotos()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst=Instituicoes::where("id_usuario","=",$usuario)->get()->first();
       return view("Instituicao.fotos.adicionar_fotos", ["titulo" => "Adicionar Fotos","usuario"=>$inst]);

    }
    public function salvar_foto(Request $req)
    {
        $foto=$req->file('foto', null);
        $id_instituicao=$req->post("id_instituicao");
        $fotoNovoNome="";
        if ($foto != null){
            if(!Ficheiros::eImagemValida($foto)){
                new Alert("A foto não é valida.", "erro", "Foto invalida.");
                Http::redirecionar("/instituicao/adicionar_fotos");
                return;
            }
            $fotoNovoNome=Ficheiros::novoNome("psdinst".$id_instituicao,$foto->clientExtension());
    }
    $fotos= New Fotos_escolas();
    if (!empty($fotoNovoNome)){
        $foto->move("ficheiros/escolas/fotos/",$fotoNovoNome);
        $fotos->foto =$fotoNovoNome;
    }
   $fotos->foto =$fotoNovoNome;
   $fotos->id_instituicao=$id_instituicao;
    $fotos->save();
    new Alert("A foto foi salva com Sucesso", "sucesso", );
    Http::redirecionar("/instituicao/adicionar_fotos");
    return;
}
public function ver_fotos()
    {

        $usuario = Sessoes::obter("usuario");
        $inst=Instituicoes::where("id_usuario","=",$usuario)->get()->first();
        $fotos=Fotos_escolas::where("id_instituicao","=",$inst["id"])->get()  ;
       return view("Instituicao.fotos.ver_fotos", ["titulo" => "Ver Fotos","fotos"=>$fotos]);
    }
    public function eliminar_fotos(int $id)
    {
        $this->verifica();
        $foto = Fotos_escolas::find($id);

        $foto->delete();
                if ($foto != null){
                    new Alert("Foto eliminado com sucesso", "sucesso", "Foto eliminado" );
                    Http::redirecionar("/instituicao/ver_fotos");
                    return;
            }
    }
    public function emitir_certificado()
    {
        $this->verifica();

        $usuario = Sessoes::obter("usuario");
        $vrfca=Usuarios::where("id","=",$usuario)->get()->first();
        $estudante=Estudantes::where("pessoas_id","=",$vrfca['pessoas_id'])->get()->first();
        $instituicoes=Instituicoes::all();
       return view("Instituicao.documentos.emitir_certificado", ["titulo" => "Emitir Certificado","instituicoes"=>$instituicoes,"usuario"=>$estudante]);

    }
    public function salvar_certificado(Request $req)
    {
       /* $estudante = Emissao_Certificados::where("id_estudante","=",$req->post("id_estudante"))->first();
        if ($estudante != null){

            new Alert("Já existe uma solicitação com esses dados.", "erro", "Solicitação existente.");
            Http::redirecionar("/documentos/emitir_certificado");
            return;

    }
    else{*/
        $estudante = Estudantes::find($req->post("id_estudante"));
        $instituicao = $estudante->instituicao;
        $curso=$req->post("curso");
        $turma=$req->post("turma");
        $id_estudante= $estudante->id;
        $numero_estudantil=$req->post("numero_estudantil");
        $ano_termino=$req->post("ano_termino");
        $comprovativo = $req->file('comprovativo', null);
        $id_instituicao= $instituicao->id;
        $docNovoNome="";
        if ($comprovativo != null){
            if(!Ficheiros::eDocumentoValido($comprovativo)){
                new Alert("O Documento não é valida.", "erro", "Foto invalida.");
                Http::redirecionar("/documentos/emitir_certificado");
                return;
            }
            $docNovoNome=Ficheiros::novoNome("psddocemiss".$id_instituicao,$comprovativo->clientExtension());
    }
    $emitir_certificado= New Emissao_Certificados();
    if (!empty($docNovoNome)){
        $comprovativo->move("ficheiros/escolas/doc_emiss_certificado/",$docNovoNome);
        $emitir_certificado->comprovativo = $docNovoNome;
    }
   //$emitir_certificado->documento =$docNovoNome;
   $emitir_certificado->id_instituicao=$id_instituicao;
   $emitir_certificado->curso=$curso;
   $emitir_certificado->turma=$turma;
   $emitir_certificado->numero_estudantil=$numero_estudantil;
   $emitir_certificado->ano_termino=$ano_termino;
   $emitir_certificado->id_estudante=$id_estudante;
   //$emitir_certificado->efeito=$efeito;
   $emitir_certificado->save();
  $emitir_certificado = Emissao_Certificados::where("id_estudante","=",$id_estudante)->get()->first();
    if($instituicao->nivel =="superior"){
    $dompdf = PDF::loadView('Instituicao.documentos.certificado', ['emitir_certificado' => $emitir_certificado,'tipo_documento'=>'certificado']);
    $dompdf->save("ficheiros/escolas/doc_emiss_certificado/"."requerimento".$emitir_certificado->id.".pdf");
    }
    else{
        $dompdf = PDF::loadView('Instituicao.documentos.declaracao', ['emitir_certificado' => $emitir_certificado,'tipo_documento'=>'certificado']);
        $dompdf->save("ficheiros/escolas/doc_emiss_certificado/"."requerimento".$emitir_certificado->id.".pdf");
        }
    new Alert("A Emissão do Certificado foi enviado com Sucesso", "sucesso", );
    Http::redirecionar("/documentos/emitir_certificado");
    return;

    //}

}
    public function emitir_declaracao()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $vrfca=Usuarios::where("id","=",$usuario)->get()->first();
        $estudante=Estudantes::where("pessoas_id","=",$vrfca['pessoas_id'])->get()->first();
        $instituicoes=Instituicoes::all();
        $curso_escolas = Cursos_escolas::where(["id_instituicao" => $estudante->id_instituicao])->get();
       return view("Instituicao.documentos.emitir_declaracao", ["titulo" => "Emitir Declaração","instituicoes"=>$instituicoes,"usuario"=>$estudante]);
    }
    public function salvar_declaracao(Request $req)
    {
        $this->verifica();
        /*$estudante = Emissao_declaracoes::where("id_estudante","=",$req->post("id_estudante"))->first();
        if ($estudante != null){
            new Alert("Já existe uma solicitação com esses dados.", "erro", "Solicitação existente.");
            Http::redirecionar("/documentos/emitir_declaracao");
            return;

    }
    else{*/
        $estudante = Estudantes::find($req->post("id_estudante"));
        $instituicao = $estudante->instituicao;
        $curso=$req->post("curso");
        $turma=$req->post("turma");
        $id_estudante=$req->post("id_estudante");
        $classe=$req->post("classe");
        $tipo_declaracao=$req->post("tipo_declaracao");
        $comprovativo=$req->file('comprovativo', null);
        $id_instituicao= $instituicao->id;
        $efeito=$req->post("efeito");

      $docNovoNome="";
        if ($comprovativo != null){
            if(!Ficheiros::eDocumentoValido($comprovativo)){
                new Alert("O Documento não é valido.", "erro", "Foto invalida.");
                Http::redirecionar("/documentos/emitir_declaracao");
                return;
            }
            $docNovoNome=Ficheiros::novoNome("psddocemiss".$id_instituicao,$comprovativo->clientExtension());
    }
    $emitir_declaracao= New Emissao_declaracoes();

    if (!empty($docNovoNome)){
        $comprovativo->move("ficheiros/escolas/doc_emiss_declaracao/",$docNovoNome);
        $emitir_declaracao->comprovativo = $docNovoNome;
    }
   // $emitir_declaracao->documento =$docNovoNome;
    $emitir_declaracao->curso =$curso;
    $emitir_declaracao->turma =$turma;
    $emitir_declaracao->id_estudante =$id_estudante;
    $emitir_declaracao->classe =$classe;
    $emitir_declaracao->tipo_declaracao =$tipo_declaracao;
    $emitir_declaracao->id_instituicao =$id_instituicao;
    $emitir_declaracao->efeito =$efeito;
    $emitir_declaracao->save();
    $emitir_declaracao = Emissao_declaracoes::where("id_estudante","=",$id_estudante)->get()->first();
    if($instituicao->nivel =="superior"){
        $dompdf = PDF::loadView('Instituicao.documentos.certificado', ['emitir_certificado' => $emitir_declaracao,'tipo_documento'=>'Declaração']);
        $dompdf->save("ficheiros/escolas/doc_emiss_declaracao/"."requerimento".$emitir_declaracao->id.".pdf");
        }
        else{
            $dompdf = PDF::loadView('Instituicao.documentos.declaracao', ['emitir_certificado' => $emitir_declaracao,'tipo_documento'=>'Declaração']);
            $dompdf->save("ficheiros/escolas/doc_emiss_declaracao/"."requerimento".$emitir_declaracao->id.".pdf");
            }
    new Alert("A Emissão da Declaração foi enviada com Sucesso", "sucesso", );
    Http::redirecionar("/documentos/emitir_declaracao");
    return;

    //}

    }

    public function meus_pedidos()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $vrfca=Usuarios::where("id","=",$usuario)->get()->first();
        $estudante= Estudantes::where("pessoas_id","=",$vrfca['pessoas_id'])->get()->first();
        $certificado= Emissao_Certificados::where("id_estudante","=",$estudante['id'])->get()->first();
        $declaracao= Emissao_declaracoes::where("id_estudante","=",$estudante['id'])->get()->first();
        $escolacert=Instituicoes::where("id","=",(is_null($certificado)) ? null : $certificado['id_instituicao'])->get()->first();
        $escoladecl=Instituicoes::where("id","=", ( is_null($declaracao)) ? null : $declaracao['id_instituicao'] )->get()->first();
       return view("Instituicao.documentos.meus_pedidos", ["titulo" =>
        "Meus Pedidos",
        "escolacert"=>$escolacert,
        "escoladecl"=>$escoladecl,
        "certificado"=>$certificado,
        "declaracao"=>$declaracao
        ]);

    }
    public function certificados_solicitados()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $instituicao=Instituicoes::where("id_usuario","=",$usuario['id'])->get()->first();
        $certificados=Emissao_Certificados::where("id_instituicao","=",$instituicao['id'])->get();
      //  $estudante=Estudantes::where("id","=",$certificados['id_estudante'])->get()->first();
       return view("Instituicao.documentos.certificados_solicitados", ["titulo" =>
        "Certificados solicitados",
        "certificados"=>$certificados,
        ]);


    }

    public function validacao_pronto_cert(Request $req)
    {
        $dados=1;
        $id= $req->post("id");
        $certificado_pronto=Emissao_certificados::where("id","=",$id)->get()->first();
        $certificado_pronto->estado =$dados;
        if ($certificado_pronto->update()){
            new Alert("Os Dados foram Actualizados com Sucesso!.");
            Http::redirecionar("/documentos/certificados_solicitados");
            return;
        }
    }
    public function validacao_entregue_cert(Request $req)
    {
        $dados=2;
        $id= $req->post("id");
        $certificado_pronto=Emissao_certificados::where("id","=",$id)->get()->first();
        $certificado_pronto->estado =$dados;
        if ($certificado_pronto->update()){
            new Alert("Os Dados foram Actualizados com Sucesso!.");
            Http::redirecionar("/documentos/certificados_solicitados");
            return;
        }
    }
    public function declaracoes_solicitados()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $instituicao=Instituicoes::where("id_usuario","=",$usuario['id'])->get()->first();
        $declaracoes=Emissao_declaracoes::where("id_instituicao","=",$instituicao['id'])->get();
       // $estudante=Estudantes::where("id","=",$declaracoes['id_estudante'])->get()->first();
       return view("Instituicao.documentos.declaracoes_solicitados", ["titulo" =>
        "Declaraçoes solicitados",
        "declaracoes"=>$declaracoes,
        ]);


    }
    public function validacao_pronto_decl(Request $req)
    {
        $dados=1;
        $id= $req->post("id");
        $declaracao_pronto=Emissao_declaracoes::where("id","=",$id)->get()->first();
        $declaracao_pronto->estado =$dados;
        if ($declaracao_pronto->update()){
            new Alert("Os Dados foram Actualizados com Sucesso!.");
            Http::redirecionar("/documentos/declaracoes_solicitados");
            return;
        }
    }
    public function validacao_entregue_decl(Request $req)
    {
        $dados=2;
        $id= $req->post("id");
        $declaracao_pronto=Emissao_declaracoes::where("id","=",$id)->get()->first();
        $declaracao_pronto->estado =$dados;
        if ($declaracao_pronto->update()){
            new Alert("Os Dados foram Actualizados com Sucesso!.");
            Http::redirecionar("/documentos/declaracoes_solicitados");
            return;
        }
    }
}
