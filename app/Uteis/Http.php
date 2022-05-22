<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Uteis;

use Symfony\Component\HttpFoundation\RedirectResponse;


/**
 * Class Http
 * @package App\Uteis
 */
class Http
{
    /**
     * @param String $url
     * @param int $estado
     * @param array $cabecalho
     * @param Flash|null $flash
     */
    public static function redirecionar(String $url): void
    {
        $redirect = new RedirectResponse($url);
        $redirect->send();

    }
}