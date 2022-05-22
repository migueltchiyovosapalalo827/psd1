<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Uteis;
use Illuminate\Http\UploadedFile;

/**
 * Class Ficheiros
 * @package App\Uteis
 */
class Ficheiros
{
    /**
     *
     */
    public static function eImagem()
    {

    }

    /**
     * @param string $caminh
     * @param string $nome
     * @return bool
     */
    public static function moverPara(string $caminh, string $nome):bool
    {
        return true;
    }

    /**
     * @param string $testo
     * @param String $extensao
     * @return string
     * @throws \Exception
     */
    public static function novoNome(string $testo, String $extensao): string
    {
        return $testo.Testos::str_rand(5).".".$extensao;
    }



    /**
     * @param UploadedFile $ficheiro
     * @return bool
     * @return retorna verdadeiro se a imagem for valida
     */
    public static function eImagemValida($ficheiro): bool
    {
        //Tem um ficheiro
        if ($ficheiro != null){
            // Busca a estenção do ficheiro
            $extencao = $ficheiro->clientExtension();
            //busca o tamanho do ficheiro
            $tamanho = $ficheiro->getSize();
            #o ficheiro é uma imagem valida?
            if (($extencao == "png") || ($extencao == "jpg") || ($extencao=="jpeg")){
                #A imagem não é superior ao configurado?
                if (!($tamanho > SISTEMA["max_imagem"])){
                    //Podes mover a imagem ela é perfeita
                    return true;
                }
                //Imagem de tamnho superior estipulado
                return false;
            }
            //Não é uma imagem que tenha uma extensão valida.
            return false;
        }
        return false;
    }
    public static function eDocumentoValido($ficheiro): bool
    {
        //Tem um ficheiro
        if ($ficheiro != null){

            // Busca a estenção do ficheiro
            $extencao = $ficheiro->clientExtension();
            //busca o tamanho do ficheiro
            $tamanho = $ficheiro->getSize();

            #O ficheiro não é superior ao configurado?
            if (!($tamanho > SISTEMA["max_ficheiro"])){
                //Podes mover o ficheiro ela é perfeita
                return true;
            }
            //Imagem de tamanho superior estipulado
            return false;

        }
        return false;
    }
    public static function config()
    {
        $x = file_get_contents(raiz . "/config/tarefas.json");
        return json_decode($x);
    }
}