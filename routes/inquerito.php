<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

#Inquerito
$router->group(['prefix' => 'inquerito','namespace' => 'App\\Http\\Controllers'], function() use ($router) {
    $router->get('/criar_inquerito', 'Inquerito@criar_inquerito')->name("inquerito.criar_inquerito");
    $router->get('/ver_inquerito/{id}', 'Inquerito@ver_inquerito')->name("inquerito.ver_inquerito");
    $router->get('/todos_inqueritos', 'Inquerito@todos_inqueritos')->name("inquerito.todos_inqueritos");
    $router->get('/meus_inqueritos', 'Inquerito@meus_inqueritos')->name("inquerito.meus_inqueritos");
    //$router->get('/inquerito_por_pesquisador', 'Inquerito@inquerito_por_pesquisador')->name("inquerito.inquerito_por_pesquisador");
    $router->post('/salvar_inquerito', 'Inquerito@salvar_inquerito')->name("inquerito.salvar_inquerito");
    $router->get('/eliminar_inquerito/{id}', 'Inquerito@eliminar_inquerito')->name("inquerito.eliminar_inquerito");
    $router->get('/inquerito_por_pesquisador/{id}', 'Inquerito@inquerito_por_pesquisador')->name('inquerito.inquerito_por_pesquisador');
    $router->get('/inquerito_por_pesquisador', 'Inquerito@inquerito_por_pesquisador')->name('inquerito.inquerito_por_pesquisador');
    $router->post('/inscrever_inquerido', 'Inquerito@inscrever_inquerido')->name("inquerito.inscrever_inquerido");
    $router->get('/imprimir_relatorio/{id}', 'Inquerito@imprimir_relatorio')->name("inquerito.imprimir_relatorio");
    $router->get('/remover_inscricao/{id}', 'Inquerito@remover_inscricao')->name("inquerito.remover_inscricao");
    $router->get('/imprimir_respostas/{id}', 'Inquerito@imprimir_respostas')->name("inquerito.imprimir_respostas");
    $router->get('/imprimir_resposta/{id}', 'Inquerito@imprimir_resposta')->name("inquerito.imprimir_resposta");
});
