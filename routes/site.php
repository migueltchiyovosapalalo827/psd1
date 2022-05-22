<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
#Site
$router->group(['namespace' => 'App\\Http\\Controllers'], static function (Router $router) {
    $router->get('/', 'Site@home')->name("site.home");
    $router->get('/home', 'Site@home')->name("site.home");
    $router->get('/escolas_publicas', 'Site@escolas_publicas')->name("escolas_publicas");
    $router->get('/escolas_privadas', 'Site@escolas_privadas')->name("escolas_privadas");
    $router->get('/escola/{id}', 'Site@escola')->name("escola");

});
