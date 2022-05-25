<?php

namespace App\Providers;

use App\Uteis\Flash;
use App\Uteis\Sessoes;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Twig\Environment;
use TwigBridge\Command\TwigBridge;
use TwigBridge\Facade\Twig;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();
        $loader = new \Twig\Loader\FilesystemLoader();
        $loader->addPath(base_path() . '/resources/views/_include', 'include');
         Twig::getLoader()->addLoader($loader);

    }

}
