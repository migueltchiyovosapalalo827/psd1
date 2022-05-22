<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

#geral
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Router;
$router->group(['namespace' => 'App\\Http\\Controllers'], static function (Router $router) {
    $router->get('/entrar', 'Usuario@entrar')->name("usuario.entrar");
    $router->post('/entrar', 'Usuario@entrar_finalizar')->name("usuario.entrar_finalizar");
    $router->get('/sair', 'Usuario@sair')->name("usuario.sair");
    $router->get('/404', 'Erros@e404')->name("erros.e404");
    $router->get('/500', 'Erros@e500')->name("erros.e500");
    $router->get('/acesso_negado', 'Erros@e000')->name("erros.acesso_negado");
    $router->get('/criar_conta/{tipo}', 'Usuario@criar_conta')->name("usuario.criar_conta");
    $router->post('/salvar_nova_conta', 'Usuario@salvar_nova_conta')->name("usuario.salvar_nova_conta");
    $router->get('/recuperar_senha', 'Usuario@recuperar_senha')->name("usuario.recuperar_senha");
    $router->get('/enviar_nova_senha', 'Usuario@enviar_nova_senha')->name("usuario.enviar_nova_senha");
    $router->get('/i/{referencia}', 'Inquerido@responderInqueritoPublico')->name("Inquerido.responderInqueritoPublico");
    $router->get('/obrigado', 'Inquerido@obrigado')->name("Inquerido.obrigado");
});
#usuario
$router->group(['prefix' => 'usuario','namespace' => 'App\\Http\\Controllers'], function() use ($router) {
    //Redireciona para o entrar
    $router->get('/entrar', function () use ($router){return new RedirectResponse("/entrar");});
    $router->get('/grupo', 'Usuario@grupo')->name("usuario.grupo");
    $router->get('/grupo/{id}', 'Usuario@grupo')->name("usuario.grupo");
    $router->get('/usuarios', 'Usuario@usuarios')->name("usuario.usuarios");
    $router->get('/novo_usuario', 'Usuario@criar_usuario')->name("usuario.criar_usuario");
    $router->post('/salvar_usuario', 'Usuario@salvar_usuario')->name("usuario.salvar_usuario");
    $router->post('/salvar_grupo', 'Usuario@salvar_grupo')->name("usuario.salvar_grupo");
    $router->post('/salvar_permicoes', 'Usuario@salvar_permicoes')->name("usuario.salvar_permicoes");
    $router->get('/redefinir_senha/{id}', 'Usuario@redefinir_senha')->name("usuario.redefinir_senha");
    $router->get('/eliminar_usuario/{id}', 'Usuario@eliminar_usuario')->name("usuario.eliminar_usuario");
    $router->get('/meu_perfil', 'Usuario@meu_perfil')->name("usuario.meu_perfil");
    $router->post('/atualizar_informacoes_pessoais', 'Usuario@atualizar_informacoes_pessoais')->name("usuario.atualizar_informacoes_pessoais");
    $router->post('/atualizar_usuario', 'Usuario@atualizar_usuario')->name("usuario.atualizar_usuario");
    $router->post('/atualizar_senha', 'Usuario@atualizar_senha')->name("usuario.atualizar_senha");
});
#Painel
$router->group(['prefix' => 'painel','namespace' => 'App\\Http\\Controllers'], function() use ($router) {
    $router->get('/', 'Painel@meu_painel')->name("painel.meu_painel");
    $router->get('/administrador', 'Painel@administrador')->name('painel.administrador');
    $router->get('/inquerido', 'Painel@inquerido')->name('painel.inquerido');
    $router->get('/pesquisador', 'Painel@pesquisador')->name('painel.pesquisador');
});

#rotas de configuração e instalação do sistema.
$router->group(['prefix' => 'instalar','namespace' => 'App\\Http\\Controllers'], function() use ($router) {
    $router->get('/', 'Instalar@instalar')->name("instalar.instalar");
});

