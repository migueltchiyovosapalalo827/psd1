<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

#rotas da bibloteca.
use Illuminate\Http\RedirectResponse;

$router->group(['prefix' => 'biblioteca','namespace' => 'App\\Http\\Controllers'], function() use ($router) {
    #livro
    $router->get('/', 'Biblioteca@pesquisar_livro')->name("biblioteca.pesquisar_livro");
    $router->get('/pesquisar_livro', 'Biblioteca@pesquisar_livro')->name("biblioteca.pesquisar_livro");
    $router->get('/adicionar_livro', 'Biblioteca@adicionar_livro')->name('biblioteca.adicionar_livro');

    $router->get('/adicionar_livro/{id}', 'Biblioteca@adicionar_livro')->name('biblioteca.adicionar_livro');

    $router->get('/todos_livros', 'Biblioteca@todos_livros')->name('biblioteca.todos_livros');
    $router->get('/livros_por_areas/{id}', 'Biblioteca@livros_por_curso')->name('biblioteca.livros_por_curso');
    $router->get('/livros_por_areas', 'Biblioteca@livros_por_curso')->name('biblioteca.livros_por_curso');
    $router->get('/ver_livro/{id}', 'Biblioteca@ver_livro')->name('biblioteca.ver_livro');
    $router->post('/salvar_livro', 'Biblioteca@salvar_livro')->name('biblioteca.salvar_livro');
    $router->post('/editar_livro', 'Biblioteca@editar_livro')->name('biblioteca.editar_livro');
    $router->get('/eliminar_livro/{id}', 'Biblioteca@eliminar_livro')->name('biblioteca.eliminar_livro');
    $router->get('/areas_por_livros', function () use ($router){return new RedirectResponse("/biblioteca/areas_por_livros/0");});
    $router->get('/areas_por_livros/{id}', 'Biblioteca@curso_por_livros')->name('biblioteca.curso_por_livros')->defaults("id",0)->fallback();
    #curso
    $router->get('/adicionar_area', 'Biblioteca@adicionar_curso')->name('biblioteca.adicionar_curso');
    $router->get('/adicionar_area/{id}', 'Biblioteca@adicionar_curso')->name('biblioteca.adicionar_curso');
    $router->get('/listar_areas', 'Biblioteca@listar_cursos')->name('biblioteca.listar_cursos');
    $router->get('/ver_area', 'Biblioteca@ver_curso')->name('biblioteca.ver_curso');
    $router->get('/salvar_area', 'Biblioteca@salvar_curso')->name('biblioteca.salvar_curso');
    $router->get('/editar_area', 'Biblioteca@editar_curso')->name('biblioteca.editar_curso');
    $router->get('/eliminar_areas/{id}', 'Biblioteca@eliminar_curso')->name('biblioteca.eliminar_curso');
    #autor
    $router->get('/adicionar_autor', 'Biblioteca@adicionar_autor')->name('biblioteca.adicionar_autor');
    $router->get('/ver_autor/{id}', 'Biblioteca@ver_autor')->name('biblioteca.ver_autor');
    $router->post('/salvar_autor', 'Biblioteca@salvar_autor')->name('biblioteca.salvar_autor');
    $router->get('/eliminar_autor/{id}', 'Biblioteca@eliminar_autor')->name('biblioteca.eliminar_autor');
});
