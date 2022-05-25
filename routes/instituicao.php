<?php


use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Router;


$router->group(['prefix' => 'instituicao','namespace' => 'App\\Http\\Controllers'], function() use ($router){
    //INSTITUICÃO
    $router->get('/adicionar_instituicao', 'Instituicao@adicionar_instituicao')->name("instituicao.adicionar_instituicao");
    $router->post('/salvar_instituicao', 'Instituicao@salvar_instituicao')->name("instituicao.salvar_instituicao");
    $router->get('/editar_instituicao', 'Instituicao@editar_instituicao')->name("instituicao.editar_instituicao");
    $router->post('/update_instituicao', 'Instituicao@update_instituicao')->name("instituicao.update_instituicao");
    $router->get('/minha_instituicao', 'Instituicao@minha_instituicao')->name("instituicao.minha_instituicao");

    $router->get('/adicionar_curso', 'Instituicao@adicionar_curso')->name("instituicao.adicionar_curso");
    $router->post('/salvar_curso', 'Instituicao@salvar_curso')->name("instituicao.salvar_curso");
    $router->get('/cursos_leccionados', 'Instituicao@cursos_leccionados')->name("instituicao.cursos_leccionados");
    $router->post('/editar_curso', 'Instituicao@editar_curso')->name("instituicao.editar_curso");
    $router->post('/update_curso', 'Instituicao@update_curso')->name("instituicao.update_curso");
    $router->get('/eliminar_curso/{id}', 'Instituicao@eliminar_curso')->name("instituicao.eliminar_curso");

    $router->get('/adicionar_historial', 'Instituicao@adicionar_historial')->name("instituicao.adicionar_historial");
    $router->post('/salvar_historial', 'Instituicao@salvar_historial')->name("instituicao.salvar_historial");
    $router->get('/ver_historial', 'Instituicao@ver_historial')->name("instituicao.ver_historial");
    $router->post('/editar_historial', 'Instituicao@editar_historial')->name("instituicao.editar_historial");
    $router->post('/update_historial', 'Instituicao@update_historial')->name("instituicao.update_historial");

    $router->get('/adicionar_arquitectura', 'Instituicao@adicionar_arquitectura')->name("instituicao.adicionar_arquitectura");
    $router->post('/salvar_arquitectura', 'Instituicao@salvar_arquitectura')->name("instituicao.salvar_arquitectura");
    $router->get('/ver_arquitectura', 'Instituicao@ver_arquitectura')->name("instituicao.ver_arquitectura");
    $router->post('/editar_arquitectura', 'Instituicao@editar_arquitectura')->name("instituicao.editar_arquitectura");
    $router->post('/update_arquitectura', 'Instituicao@update_arquitectura')->name("instituicao.update_arquitectura");
    $router->get('/eliminar_arquitectura/{id}', 'Instituicao@eliminar_arquitectura')->name("instituicao.eliminar_arquitectura");

    $router->get('/adicionar_fotos', 'Instituicao@adicionar_fotos')->name("instituicao.adicionar_fotos");
    $router->post('/salvar_foto', 'Instituicao@salvar_foto')->name("instituicao.salvar_foto");
    $router->get('/ver_fotos', 'Instituicao@ver_fotos')->name("instituicao.ver_fotos");
    $router->get('/eliminar_fotos/{id}', 'Instituicao@eliminar_fotos')->name("instituicao.eliminar_fotos");

});
$router->group(['prefix' => 'documentos','namespace' => 'App\\Http\\Controllers'], static function() use ($router) {
    $router->get('/emitir_certificado', 'Instituicao@emitir_certificado');
    $router->post('/salvar_certificado', 'Instituicao@salvar_certificado');
    $router->get('/emitir_declaracao', 'Instituicao@emitir_declaracao');
    $router->post('/salvar_declaracao', 'Instituicao@salvar_declaracao');
    $router->get('/meus_pedidos', 'Instituicao@meus_pedidos');
    $router->get('/certificados_solicitados', 'Instituicao@certificados_solicitados');
    $router->get('/declaracoes_solicitados', 'Instituicao@declaracoes_solicitados');
    $router->post('/validacao_pronto_cert', 'Instituicao@validacao_pronto_cert');
    $router->post('/validacao_entregue_cert', 'Instituicao@validacao_entregue_cert');
    $router->post('/validacao_pronto_decl', 'Instituicao@validacao_pronto_decl');
    $router->post('/validacao_entregue_decl', 'Instituicao@validacao_entregue_decl');

});
#cartão de estudante
$router->group(['prefix' => 'cartao','namespace' => 'App\\Http\\Controllers'], function() use ($router) {
    $router->get('/emitir_cartao', 'Cartao@criar')->name("cartao.criar");
    $router->get('/', 'Cartao@index')->name('cartao.index');
    $router->post('/salvar_cartao', 'Cartao@salvar')->name('cartao.salvar');
    $router->get('/pesquisar_cartao', 'Cartao@index')->name('cartao.pesquisar');
    $router->get('/ver_cartao/{id}', 'Cartao@verCartao')->name('cartao.ver');
    $router->get('/editar_cartao/{id}', 'Cartao@editarCartao')->name('cartao.editar');
    $router->post('/update_cartao/{id}', 'Cartao@salvarEditarCartao')->name('cartao.update');
    $router->get('/eliminar_cartao/{id}', 'Cartao@excluirCartao')->name('cartao.eliminar');
    $router->get('/cartao_foto/{id}', 'Cartao@baixarFoto')->name('cartao.foto');
    //meu cartão rota
    $router->get('/meu_cartao', 'Cartao@cartaoEstudante')->name('cartao.meu_cartao');


});

