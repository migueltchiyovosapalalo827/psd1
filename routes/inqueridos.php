<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

$router->group(['prefix' => 'inquerido','namespace' => 'App\\Http\\Controllers'], function() use ($router) {
//    $router->get('/ficha_do_inquerido', 'Inquerido@ficha_do_inquerido')->name("inquerido.ficha_do_inquerido");
    $router->get('/ficha_do_inquerido/{id?}', 'Inquerido@ficha_do_inquerido')->name("inquerido.ficha_do_inquerido");
    $router->get('/lista_de_inqueridos', 'Inquerido@lista_de_inqueridos')->name("inquerido.lista_de_inqueridos");
    $router->get('/criar_inquerido', 'Inquerido@criar_inquerido')->name("inquerido.criar_inquerido");
    $router->get('/salvar_inquerido', 'Inquerido@salvar_inquerido')->name("inquerido.salvar_inquerido");
    $router->get('/salvar_inqueridoInscrevendo', 'Inquerido@salvar_inqueridoInscrevendo')->name("inquerido.salvar_inqueridoInscrevendo");
    $router->get('/inqueritos', 'Inquerido@inqueritos')->name("inquerido.inqueritos");
    $router->get('/inquerito/{id}', 'Inquerido@inquerito')->name("inquerido.inquerito");
    $router->get('/responderInqueritos/{id}', 'Inquerido@responderInqueritos')->name("inquerido.responderInqueritos");
    $router->get('/responder', 'Inquerido@responder')->name("inquerido.responder");
    $router->post('/responderPublico', 'Inquerido@responderPublico')->name("inquerido.responderPublico");


});


