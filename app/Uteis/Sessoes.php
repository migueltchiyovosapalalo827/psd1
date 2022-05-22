<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Uteis;

use ErrorException;

session_start();

/**
 * Class Sessoes
 * @package App\Uteis
 */
class Sessoes
{
    /**
     * @param String $chave
     * @return mixed
     */
    public static function obter(String $chave){

        return @$_SESSION[$chave];
    }
    /**
     * @param String $chave
     * @return mixed
     */
    public static function obterOuNull(String $chave){
        $valor = @$_SESSION[$chave];
        if ($valor!=null){
            return $valor;
        }
        return null;
    }
    public static function obter_tudo(){
        return  $_SESSION;
    }
    /**
     * @param $chave
     * @param $valor
     * @return mixed
     */
    public static function adicionar($chave, $valor){
        return $_SESSION[$chave] = $valor;
    }

    /**
     *
     */
    public static function destruir():bool {
        session_unset();
        return session_destroy();
    }

    /**
     * @param string $chave
     * @return bool
     */
    public static function destruirUm(string $chave):bool {
        unset($_SESSION[$chave]);
        return true;
    }
}
