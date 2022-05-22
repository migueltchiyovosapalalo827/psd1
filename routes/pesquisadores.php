<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */


$router->group(['prefix' => 'pesquisador','namespace' => 'App\\Http\\Controllers'], static function() use ($router) {
    $router->get('/meus_inqueritos', 'Pesquisador@meus_inqueritos')->name("inquerito.meus_inqueritos");
    $router->get('/criar_pesquisador', 'Pesquisador@criar_pesquisador')->name("inquerito.criar_pesquisador");
    $router->post('/salvar_pesquisador', 'Pesquisador@salvar_pesquisador')->name("inquerito.salvar_pesquisador");
    $router->post('/salvar_pesquisador_publico', 'Pesquisador@salvar_pesquisador_publico')->name("pesquisador.salvar_pesquisador_publico");
});


