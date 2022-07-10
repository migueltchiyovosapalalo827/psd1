<?php

namespace App\Http\Controllers;

use App\Models\Arquitectura_escola;
use App\Models\Cursos_escolas;
use App\Models\Emissao_certificados;
use App\Models\Emissao_declaracoes;
use App\Models\Estudantes;
use App\Models\Fotos_escolas;
use App\Models\Historial_escolas;
use App\Models\Instituicoes;
use App\Models\Pessoas;
use App\Models\Usuarios;
use App\Notifications\SendSms;
use App\Uteis\Alert;
use App\Uteis\Ficheiros;
use App\Uteis\Sessoes;
use App\Uteis\Http;
use App\Uteis\Testos;
use Exception;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
//use Barryvdh\DomPDF\Facade\Pdf;
use PDF;

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
        $usuarios = Usuarios::where("grupo_de_usuarios_id", "=", "11")->whereNotIn('id', function ($query) {
            return $query->select('id_usuario')->from('instituicoes');
        })->get();

        $instituicoes = Instituicoes::where('tipo', '=', 'publica')->get();
        return view("Instituicao.gerais.adicionar_instituicao", ["titulo" => "Adicionar Instituição", "usuarios" => $usuarios, "instituicoes" => $instituicoes]);
    }


    public function salvar_instituicao(Request $requisicao)
    {
        $this->verifica();
        $validateRules = [
            'nome' => 'required|string|min:4|max:255|unique:instituicoes',
            'tipo' => 'required',
            'nivel' => 'required',
            'administrador' => 'required',
            'email' => 'required|string|email|max:255|unique:instituicoes',
            'telefone' => 'required|string|max:20|unique:instituicoes',
            'localizacao' => 'required|string|max:255',
            'sobre_escola' => 'required|string|max:1000',
            'logotipo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];

        $validator = Validator::make($requisicao->all(), $validateRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $nome = $requisicao->post("nome");
        $email = $requisicao->post("email");
        $telefone = $requisicao->post("telefone");
        $localizacao = $requisicao->post("localizacao");
        $tipo = $requisicao->post("tipo");
        $sobre = $requisicao->post("sobre_escola");
        $logotipo = $requisicao->file('logotipo', null);
        $id_usuario = $requisicao->post("administrador");
        $parent_id = $requisicao->post("parent_id");
        $nivel = $requisicao->post("nivel");
        $logotipoNovoNome = "";
        if ($logotipo != null) {
            if (!Ficheiros::eImagemValida($logotipo)) {
                new Alert("A imagem não é valida.", "danger", "Foto invalida.");
                Http::redirecionar("/instituicao/adicionar_instituicao");
                return;
            }
            $logotipoNovoNome = Ficheiros::novoNome("psdlogoinst" . $id_usuario, $logotipo->clientExtension());
        }
        $instituicao = new Instituicoes();
        if (!empty($logotipoNovoNome)) {
            $logotipo->move("ficheiros/escolas/logotipo/", $logotipoNovoNome);
            $instituicao->logotipo = $logotipoNovoNome;
        }

        $instituicao->nome = $nome;
        $instituicao->email = $email;
        $instituicao->telefone = $telefone;
        $instituicao->localizacao = $localizacao;
        $instituicao->tipo = $tipo;
        $instituicao->sobre = $sobre;
        $instituicao->id_usuario = $id_usuario;
        $instituicao->logotipo = $logotipoNovoNome;
        $instituicao->parent_id = $parent_id;
        $instituicao->nivel = $nivel;

        if ($instituicao->save()) {
            new Alert("Os Dados foram Salvos com Sucesso.", "success", "");
            return redirect()->back();
        }
    }
    public function editar_instituicao()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $MinhaInstituicao = Instituicoes::where("id_usuario", "=", $usuario["id"])->get();

        return view("Instituicao.gerais.editar_instituicao", ["titulo" => "Adicionar Instituição", "instituicao" => $MinhaInstituicao]);
    }
    public function update_instituicao(Request $req)
    {
        $validateRules = [
            'nome' => 'required|string|min:4|max:255',
            'tipo' => 'required',
            'nivel' => 'required',
            'administrador' => 'required',
            'email' => 'required|string|email|max:255',
            'telefone' => 'required|string|min:9|max:20',
            'localizacao' => 'required|string|max:255',
            'sobre_escola' => 'required|string|max:1000',
            'logotipo' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ];

        $validator = Validator::make($req->all(), $validateRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $instituicao = Instituicoes::where("id", "=", $req->id)->get()->first();
        $instituicao->nome = $req->post("nome");
        $instituicao->email = $req->post("email");
        $instituicao->telefone = $req->post("telefone");
        $instituicao->localizacao = $req->post("localizacao");
        $instituicao->sobre = $req->post("sobre_escola");
        $instituicao->id_usuario = $req->post("administrador");
        $instituicao->nivel = $req->post("nivel");
        $logotipo = $req->file('logotipo', null);
        if ($logotipo != null) {
            if (!Ficheiros::eImagemValida($logotipo)) {
                new Alert("A imagem não é valida.", "danger", "Foto invalida.");
                return redirect()->back();
            }
            $logotipoNovoNome = Ficheiros::novoNome("psdlogoinst" . $instituicao->id, $logotipo->clientExtension());
        }
        if (!empty($logotipoNovoNome)) {
            $logotipo->move("ficheiros/escolas/logotipo/", $logotipoNovoNome);
            $instituicao->logotipo = $logotipoNovoNome;
        }

        if ($instituicao->update()) {
            new Alert("Os Dados foram Actualizados com Sucesso!.", "success", "");
            return redirect()->back();
        }
    }
    public function minha_instituicao()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");

        $instituicao =  Pessoas::where("id", "=", $usuario["pessoa_id"])->get()->first();
        if ($instituicao != null) {

            $dados = Instituicoes::where("id_usuario", "=", $usuario)->get();
            return view("Instituicao.gerais.minha_instituicao", ["titulo" => "Minha Instituição", "dados" => $dados]);
        }
    }
    public function adicionar_curso()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst = Instituicoes::where("id_usuario", "=", $usuario)->get()->first();

        return view("Instituicao.cursos.adicionar_curso", ["titulo" => "Adicionar Cursos Leccionados", "usuario" => $inst]);
    }
    public function salvar_curso(Request $req)
    {
        $this->verifica();
        $validateRules = [
            "nome" => "required|string|min:3|max:255",
            "principais_disciplinas" => "required|string|min:3|max:2000",
            "perfil_de_saida" => "required|string|min:3|max:255",
        ];

        $validator = Validator::make($req->all(), $validateRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $cursos = new Cursos_escolas();
        $cursos->nome = $req->post("nome");
        $cursos->principais_disciplinas = $req->post("principais_disciplinas");
        $cursos->perfil_de_saida = $req->post("perfil_de_saida");
        $cursos->id_instituicao = $req->post("id_instituicao");
        if ($cursos->save()) {
            new Alert("Os Dados foram Salvos com Sucesso.", "success", "");
            return redirect()->back();
        }
    }
    public function cursos_leccionados()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst = Instituicoes::where("id_usuario", "=", $usuario)->get()->first();
        $cursos = Cursos_escolas::where("id_instituicao", "=", $inst["id"])->get();
        return view("Instituicao.cursos.cursos_leccionados", ["titulo" => "Cursos Leccionados", "cursos" => $cursos]);
    }
    public function editar_curso(Request $req)
    {
        $this->verifica();
        $curso = Cursos_escolas::where("id", "=", $req->post("id_curso"))->get()->first();
        return view("Instituicao.cursos.editar_curso", ["titulo" => "Editar Curso ", "curso" => $curso]);
    }
    public function update_curso(Request $req)
    {
        $curso = Cursos_escolas::where("id", "=", $req->post("id"))->get()->first();
        $curso->nome = $req->post("nome");
        $curso->principais_disciplinas = $req->post("principais_disciplinas");
        $curso->perfil_de_saida = $req->post("perfil_de_saida");

        if ($curso->update()) {
            new Alert("Os Dados foram Actualizados com Sucesso!.", "success", "");
            return redirect()->back();
        }
    }

    public function eliminar_curso(int $id)
    {
        $this->verifica();
        $curso = Cursos_escolas::find($id);
        if ($curso != null) {
            $curso->delete();
            new Alert("Curso eliminado com sucesso", "success", "");
            return redirect()->back();
        }
    }

    public function adicionar_historial()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst = Instituicoes::where("id_usuario", "=", $usuario)->get()->first();

        return view("Instituicao.historial.adicionar_historial", ["titulo" => "Adicionar Historial", "usuario" => $inst]);
    }
    public function salvar_historial(Request $req)
    {
        $this->verifica();
        $validateRules = [
            "historial" => "required|string|min:20|max:2000",

        ];
        $validator = Validator::make($req->all(), $validateRules);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }
        $historial = new Historial_escolas();
        $historial->historial = $req->post("historial");
        $historial->id_instituicao = $req->post("id_instituicao");

        if ($historial->save()) {
            new Alert("Os Dados foram Salvos com Sucesso.", "success", "");
            return redirect()->back();
        }
    }
    public function ver_historial()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $inst = Instituicoes::where("id_usuario", "=", $usuario)->get()->first();
        $historiais = Historial_escolas::where("id_instituicao", "=", $inst["id"])->get();
        return view("Instituicao.historial.ver_historial", ["titulo" => "Ver historial", "historiais" => $historiais]);
    }
    public function editar_historial(Request $req)
    {
        $this->verifica();
        $historial = Historial_escolas::where("id", "=", $req->post("id_historial"))->get()->first();

        return view("Instituicao.historial.editar_historial", ["titulo" => "Editar Historial ", "historial" => $historial]);
    }
    public function update_historial(Request $req)
    {
        $historial = Historial_escolas::where("id", "=", $req->post("id"))->get()->first();
        $historial->historial = $req->post("historial");
        if ($historial->update()) {
            new Alert("Os Dados foram Actualizados com Sucesso!.", "success", "");
            return redirect()->route("instituicao.ver_historial");
        }
    }


    public function eliminar_historial(int $id)
    {
        $this->verifica();
        $historial = Historial_escolas::find($id);
        if ($historial != null) {
            $historial->delete();
            new Alert("Historial eliminado com sucesso", "success", "");
            return redirect()->back();
        }
    }


    public function ver_fotos()
    {

        $usuario = Sessoes::obter("usuario");
        $inst = Instituicoes::where("id_usuario", "=", $usuario)->get()->first();
        $fotos = Fotos_escolas::where("id_instituicao", "=", $inst["id"])->get();
        return view("Instituicao.fotos.ver_fotos", ["titulo" => "Ver Fotos", "fotos" => $fotos->fotos_escolas]);
    }
    public function eliminar_fotos(int $id)
    {
        $this->verifica();
        $foto = Fotos_escolas::find($id);

        $foto->delete();
        if ($foto != null) {
            new Alert("Foto eliminado com sucesso", "success", "Foto eliminado");
            return redirect()->back();
        }
    }
    public function emitir_certificado()
    {
        $this->verifica();

        $usuario = Sessoes::obter("usuario");
        $vrfca = Usuarios::where("id", "=", $usuario)->get()->first();
        $estudante = Estudantes::where("pessoas_id", "=", $vrfca['pessoas_id'])->get()->first();
        $instituicoes = Instituicoes::all();
        return view("Instituicao.documentos.emitir_certificado", ["titulo" => "Emitir Certificado", "instituicoes" => $instituicoes, "usuario" => $estudante]);
    }
    public function salvar_certificado(Request $req)
    {
        $this->verifica();
        $validateRules = [

            "curso" => "required|string|min:4|max:100",
            "turma" => "required|string|min:3|max:100",
            "classe" => "required|string|min:2|max:10",
            "numero_estudantil" => "required|int|min:1|max:10",
            "ano_termino" => "required|int|min:4|max:8",
            "comprovativo" => "required|file|mimes:pdf,jpg,jpeg,png",
        ];

        $validator = Validator::make($req->all(), $validateRules);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $estudante = Estudantes::find($req->post("id_estudante"));
        $instituicao = $estudante->instituicao;
        $curso = $req->post("curso");
        $turma = $req->post("turma");
        $classe = $req->post("classe");
        $id_estudante = $estudante->id;
        $numero_estudantil = $req->post("numero_estudantil");
        $ano_termino = $req->post("ano_termino");
        $comprovativo = $req->file('comprovativo', null);
        $id_instituicao = $instituicao->id;
        $docNovoNome = "";
        if ($comprovativo != null) {
            if (!Ficheiros::eDocumentoValido($comprovativo)) {
                new Alert("O Documento não é valida.", "erro", "documento invalida.");
                return redirect()->back();
            }
            $docNovoNome = Ficheiros::novoNome("psddocemiss" . $id_instituicao, $comprovativo->clientExtension());
        }
        $emitir_certificado = new Emissao_certificados();
        if (!empty($docNovoNome)) {
            $comprovativo->move("ficheiros/escolas/doc_emiss_certificado/", $docNovoNome);
            $emitir_certificado->comprovativo = $docNovoNome;
        }

        $requerimento  = Testos::sigla("", "requerimento");
        $emitir_certificado->id_instituicao = $id_instituicao;
        $emitir_certificado->curso = $curso;
        $emitir_certificado->turma = $turma;
        $emitir_certificado->classe = $classe;
        $emitir_certificado->numero_estudantil = $numero_estudantil;
        $emitir_certificado->ano_termino = $ano_termino;
        $emitir_certificado->id_estudante = $id_estudante;
        //$emitir_certificado->efeito=$efeito;
        $emitir_certificado->requerimento = $requerimento . ".pdf";
        $emitir_certificado->save();
        if ($instituicao->nivel == "superior") {

            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('Instituicao.documentos.certificado', ['emitir_certificado' => $emitir_certificado, 'tipo_documento' => 'certificado']);
            $pdf->save("ficheiros/escolas/doc_emiss_certificado/" . $requerimento . ".pdf");
        } else {

            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('Instituicao.documentos.declaracao', ['emitir_certificado' => $emitir_certificado, 'tipo_documento' => 'certificado']);
            $pdf->save("ficheiros/escolas/doc_emiss_certificado/" . $requerimento . ".pdf");
        }
        new Alert("A Emissão do Certificado foi enviado com Sucesso", "success", "");
        return redirect()->back();
    }
    public function emitir_declaracao()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $vrfca = Usuarios::where("id", "=", $usuario)->get()->first();
        $estudante = Estudantes::where("pessoas_id", "=", $vrfca['pessoas_id'])->get()->first();
        $instituicoes = Instituicoes::all();
        $curso_escolas = Cursos_escolas::where(["id_instituicao" => $estudante->id_instituicao])->get();
        return view("Instituicao.documentos.emitir_declaracao", ["titulo" => "Emitir Declaração", "instituicoes" => $instituicoes, "usuario" => $estudante]);
    }
    public function salvar_declaracao(Request $req)
    {
        $this->verifica();
        $validateRules = [

            "curso" => "required|string|min:4|max:100",
            "turma" => "required|string|min:3|max:100",
            "classe" => "required|string|min:2|max:10",
            "ano_termino" => "required|int|min:4|max:8",
            "comprovativo" => "required|file|mimes:pdf,jpg,jpeg,png",
            "tipo_declaracao" => "required|string|min:4|max:100",
            "efeito" => "required|string|min:4|max:100",
        ];

        $validator = Validator::make($req->all(), $validateRules);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }
        $estudante = Estudantes::find($req->post("id_estudante"));
        $instituicao = $estudante->instituicao;
        $curso = $req->post("curso");
        $turma = $req->post("turma");
        $id_estudante = $req->post("id_estudante");
        $classe = $req->post("classe");
        $tipo_declaracao = $req->post("tipo_declaracao");
        $comprovativo = $req->file('comprovativo', null);
        $id_instituicao = $instituicao->id;
        $efeito = $req->post("efeito");

        $docNovoNome = "";
        if ($comprovativo != null) {
            if (!Ficheiros::eDocumentoValido($comprovativo)) {
                new Alert("O Documento não é valido.", "error", "documento invalida.");
                return redirect()->back();
            }
            $docNovoNome = Ficheiros::novoNome("psddocemiss" . $id_instituicao, $comprovativo->clientExtension());
        }
        $emitir_declaracao = new Emissao_declaracoes();

        if (!empty($docNovoNome)) {
            $comprovativo->move("ficheiros/escolas/doc_emiss_declaracao/", $docNovoNome);
            $emitir_declaracao->comprovativo = $docNovoNome;
        }
        $requerimento  = Testos::sigla("", "requerimento");
        $emitir_declaracao->curso = $curso;
        $emitir_declaracao->turma = $turma;
        $emitir_declaracao->id_estudante = $id_estudante;
        $emitir_declaracao->classe = $classe;
        $emitir_declaracao->tipo_declaracao = $tipo_declaracao;
        $emitir_declaracao->id_instituicao = $id_instituicao;
        $emitir_declaracao->efeito = $efeito;
        $emitir_declaracao->requerimento = $requerimento . ".pdf";
        $emitir_declaracao->save();
        if ($instituicao->nivel == "superior") {
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('Instituicao.documentos.certificado', ['emitir_certificado' => $emitir_declaracao, 'tipo_documento' => 'Declaração']);
            $pdf->save("ficheiros/escolas/doc_emiss_declaracao/" . $requerimento . ".pdf");
        } else {

            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('Instituicao.documentos.declaracao', ['emitir_certificado' => $emitir_declaracao, 'tipo_documento' => 'Declaração']);
            $pdf->save("ficheiros/escolas/doc_emiss_declaracao/" . $requerimento . ".pdf");
        }
        new Alert("A Emissão da Declaração foi enviada com Sucesso", "success", "");
        return redirect()->back();
    }

    public function meus_pedidos()
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $vrfca = Usuarios::where("id", "=", $usuario)->get()->first();
        $estudante = Estudantes::where("pessoas_id", "=", $vrfca['pessoas_id'])->get()->first();
        $certificado = Emissao_certificados::where("id_estudante", "=", $estudante['id'])->get()->first();
        $declaracao = Emissao_declaracoes::where("id_estudante", "=", $estudante['id'])->get()->first();
        $escolacert = Instituicoes::where("id", "=", (is_null($certificado)) ? null : $certificado['id_instituicao'])->get()->first();
        $escoladecl = Instituicoes::where("id", "=", (is_null($declaracao)) ? null : $declaracao['id_instituicao'])->get()->first();
        return view("Instituicao.documentos.meus_pedidos", [
            "titulo" =>
            "Meus Pedidos",
            "escolacert" => $escolacert,
            "escoladecl" => $escoladecl,
            "certificado" => $certificado,
            "declaracao" => $declaracao
        ]);
    }
    public function certificados_solicitados(Request $request)
    {

        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $instituicao = Instituicoes::where("id_usuario", "=", $usuario['id'])->get()->first();
        $request->merge(['id_instituicao' => $instituicao['id']]);
        $certificados = Emissao_certificados::buscar($request);
        //  $estudante=Estudantes::where("id","=",$certificados['id_estudante'])->get()->first()

        return view("Instituicao.documentos.certificados_solicitados", [
            "titulo" =>
            "Certificados solicitados",
            "certificados" => $certificados,
        ]);
    }

    public function validacao_pronto_cert(Request $req)
    {
        $dados = 1;
        $id = $req->post("id");
        $certificado_pronto = Emissao_certificados::find($id);
        $certificado_pronto->estado = $dados;
        if ($certificado_pronto->save()) {
            //emitir_certificado.estudante.pessoa.
            new Alert("O certificado esta pronto para ser entregue !.", "success", "");
            $user = Usuarios::where("pessoas_id", $certificado_pronto->estudante->pessoas_id)->get()->first();
            $user->notify(new SendSms("O certificado esta pronto para ser entregue !."));
            // Notification::send($user, new SendSms("O certificado esta pronto para ser entregue !."));
            return redirect()->back();
        }
    }
    public function validacao_entregue_cert(Request $req)
    {
        $dados = 2;
        $id = $req->post("id");
        $certificado_pronto = Emissao_certificados::find($id);
        $certificado_pronto->estado = $dados;
        if ($certificado_pronto->save()) {
            new Alert("O certificado foi entregue com Sucesso!.", "success", "");
            $user = Usuarios::where("pessoas_id", $certificado_pronto->estudante->pessoas_id)->get()->first();
            $user->notify(new SendSms("O certificado foi entregue com Sucesso!."));
            // Notification::send($user, new SendSms("O certificado esta pronto para ser entregue !."));
            return redirect()->back();
        }
    }
    public function declaracoes_solicitados(Request $request)
    {
        $this->verifica();
        $usuario = Sessoes::obter("usuario");
        $instituicao = Instituicoes::where("id_usuario", "=", $usuario['id'])->get()->first();
        $request->merge(['id_instituicao' => $instituicao['id']]);

        $declaracoes = Emissao_declaracoes::buscar($request);
        // $estudante=Estudantes::where("id","=",$declaracoes['id_estudante'])->get()->first();
        return view("Instituicao.documentos.declaracoes_solicitados", [
            "titulo" =>
            "Declaraçoes solicitados",
            "declaracoes" => $declaracoes,
        ]);
    }
    public function validacao_pronto_decl(Request $req)
    {
        $dados = 1;
        $id = $req->post("id");
        $declaracao_pronto = Emissao_declaracoes::find($id);
        $declaracao_pronto->estado = $dados;
        if ($declaracao_pronto->save()) {
            new Alert("A declaração esta pronta para ser entregue!.", "success", "");
            $user = Usuarios::where("pessoas_id", $declaracao_pronto->estudante->pessoas_id)->get()->first();
            $user->notify(new SendSms("A declaração esta pronta para ser entregue!."));
            //  Notification::send($user, new SendSms("O certificado esta pronto para ser entregue !."));
            return redirect()->back();
        }
    }
    public function validacao_entregue_decl(Request $req)
    {
        $dados = 2;
        $id = $req->post("id");
        $declaracao_pronto = Emissao_declaracoes::find($id);
        $declaracao_pronto->estado = $dados;
        if ($declaracao_pronto->save()) {
            new Alert("a declaração foi entregue Sucesso!.", "success", "");
            $user = Usuarios::where("pessoas_id", $declaracao_pronto->estudante->pessoas_id)->get()->first();
            $user->notify(new SendSms("O certificado esta pronto para ser entregue !."));
            //    Notification::send($user, new SendSms("O certificado esta pronto para ser entregue !."));
            return redirect()->back();
        }
    }
    //listar instituição
    public function ListarInstituicao()
    {
        # code...
        $this->verificaSeEstaLogado();
        $instituicoes = Instituicoes::all();
        return view("Instituicao.gerais.listar", ["titulo" => 'Lista de Instituição', 'instituicoes' => $instituicoes]);
    }
    //listar actulizar instituição
    public function AtualizarInstituicao($id)
    {  # code...
        $this->verificaSeEstaLogado();
        $instituicao = Instituicoes::find($id);
        $instituicoes = Instituicoes::where('tipo', '=', 'publica')->get();
        $usuarios = Usuarios::where("grupo_de_usuarios_id", "=", "11")->get();
        return view("Instituicao.gerais.atualizar", [
            "titulo" => "Atualizar Instituicao",
            "instituicao" => $instituicao, 'usuarios' => $usuarios, "instituicoes" => $instituicoes
        ]);
    }
    //atualizar instituição

    public function actualizar_Instituicao(Request $request, Instituicoes $instituicao)
    {
        # code...
        $validateRules = [
            'nome' => 'required|string|min:4|max:255',
            'tipo' => 'required',
            'nivel' => 'required',
            'administrador' => 'required',
            'email' => 'required|string|email|max:255',
            'telefone' => 'required|string|min:9|max:20',
            'localizacao' => 'required|string|max:255',
            'sobre' => 'required|string|max:1000',
            'logotipo' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ];

        $validator = Validator::make($request->all(), $validateRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $logotipo = $request->file('logotipo', null);
        $logotipoNovoNome = "";
        if ($logotipo != null) {
            if (!Ficheiros::eImagemValida($logotipo)) {
                new Alert("A imagem não é valida.", "danger", "Foto invalida.");
                return redirect()->back();
            }
            $logotipoNovoNome = Ficheiros::novoNome("psdlogoinst" . $instituicao->id, $logotipo->clientExtension());
        }
        if (!empty($logotipoNovoNome)) {
            $logotipo->move("ficheiros/escolas/logotipo/", $logotipoNovoNome);
            $instituicao->logotipo = $logotipoNovoNome;
        }
        $instituicao->update($request->all());
        new Alert("Instituicao Atualizada com Sucesso!.", "success", "");
        return redirect()->back();
    }
    //eliminar instituição
    public function eliminar_Instituicao(Instituicoes $instituicao)
    {
        # code...
        $instituicao->delete();
        new Alert("Instituicao Eliminada com Sucesso!.", "success", "");
        return redirect()->back();
    }
}
