<?php

namespace App\Twig;

use App\Uteis\Flash;
use App\Uteis\Sessoes;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class Functions extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('now', [$this, 'now']),
            new TwigFunction('flash', [$this, 'flash']),
            new TwigFunction('sessoes', [$this, 'sessoes']),
            new TwigFunction('alert', [$this, 'alert']),
        ];
    }

    public static function now()
    {
      return date('d/m/Y H:i:s');
    }

    public static function sistema(){  return SISTEMA;}
    public static function sessoes(){return Sessoes::obter_tudo();}
    public static function flash(){return  Flash::toArray();}
    public static function alert() { Sessoes::obterOuNull("alert");}
}
