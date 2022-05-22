<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->get('/', static function () use ($router) {
    return new RedirectResponse("/entrar");
});

require __DIR__.'/inquerito.php';
require __DIR__.'/biblioteca.php';
require __DIR__.'/instituicao.php';
require __DIR__.'/inqueridos.php';
require __DIR__.'/relatorios.php';
require __DIR__.'/pesquisadores.php';
require __DIR__.'/sistema.php';
require __DIR__.'/site.php';

//$router->
// catch-all route
$router->any('{many}', function () {
    return new RedirectResponse("/404");
})->where('any', '(.*)');
