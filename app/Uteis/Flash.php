<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Uteis;


/**
 * Class Flash
 * @package App\Uteis
 */
class Flash
{
    /**
     * @var sucesso | erro | aviso
     */
    public static  $tipo;
    /**
     * @var
     */
    public static $titulo;
    /**
     * @var
     */
    public static $mensagem;

    public static function toArray(){
        return ["tipo"=>self::$tipo,"titulo"=>self::$titulo,"mensagem"=>self::$mensagem];
    }

}