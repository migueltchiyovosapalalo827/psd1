<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Uteis;
use App\Controllers\Usuario;
use Illuminate\Encryption\Encrypter;

/**
 * Class Testos
 * @package App\Uteis
 */
class  Testos
{
    /**
     * @var
     */
    private static $encriptador;

    /**
     * @param String $testo
     * @return mixed
     */
    public static  function encriptar(String $testo)
    {
        return static::getEncriptador()->encrypt($testo);
    }

    /**
     * @param String $testo
     * @return mixed
     */
    public static function desincriptar(String $testo)
    {
        return static::getEncriptador()->decrypt($testo);
    }


    /**
     * @return mixed
     */
    public static function getEncriptador()
    {
        if (static::$encriptador === null){
            (new Testos)->setEncriptador();
            return static::$encriptador;
        }
        return static::$encriptador;
    }


    /**
     *
     */
    public function setEncriptador(): void
    {
        static::$encriptador = new Encrypter(APP_KEY);

    }

    /**
     * @param string $sigla
     * @param String $testo
     * @return string
     */
    public static function sigla(string $sigla,string $testo)
    {
        if (empty($sigla)){
            $siglas=str_split($testo, 3);
            try {
                return trim($siglas[0]).random_int(0, 10).random_int(0,10);
            } catch (\Exception $e) {
                return $sigla[0];
            }
        }
        return str_replace(" ", "", $sigla);
    }
    public static function gerarLinkParaCompartilhar(string $testo)
    {
        if (empty($testo)){
            echo $testo;
            return;
            /*  $testo=str_split($testo, 3);
              try {
                  return trim($testo[0]).random_int(0, 10).random_int(0,10);
              } catch (\Exception $e) {
                  return $testo[0];
              }*/
        }
        echo str_replace(" ", "", $testo);
    }
    /*PHP >= 7.2*/
    /**
     * @param int $length
     * @return bool|string
     * @throws \Exception
     *
     */
    public static function str_rand(int $length = 16){
        $x = '';
        for($i = 1; $i <= $length; $i++){
            $x .= dechex(random_int(0,255));
        }
        return substr($x, 0, $length);
    }

    public static function primeiroEultimo(string $primeiroP, $ultimoP, $separador = "."): string
    {
        $fim="";
        if ($ultimoP==null){
            $ultimoP="";
        }
        #-----Primeiro nome-----
        $primeiro = self::limparEspaco($primeiroP);
        $primeiroArray = self::dividirPorEspaco($primeiro);
        #-----Ultimo nome-----
        $ultimo = self::limparEspaco($ultimoP);
        $ultimo = self::dividirPorEspaco($ultimo);
        $fim = $primeiroArray[0].$separador.last($ultimo);
        return $fim;


    }


    public static function nomeCompletoDividdo(string $nome){

        $nomeSeparado = explode(" ",$nome);

        if (sizeof($nomeSeparado) >= 2){
            $primeiroNome=$nomeSeparado[array_key_first($nomeSeparado)];
            $ultimoNome=$nomeSeparado[array_key_last($nomeSeparado)];
            $nomeProprio="";
            for ($x=0;$x < array_key_last($nomeSeparado);$x++){
                $nomeProprio .= $nomeSeparado[$x]." ";
            }
            return ["primeiroNome"=>$primeiroNome,"ultimoNome"=>$ultimoNome,"nomeProprio"=>$nomeProprio];
        }
        return $nome;



    }
    public static function limparEspaco(string  $texto): string
    {
        return trim($texto);

    }
    public static function dividirPorEspaco(string  $texto): array
    {
        return explode(" ",$texto);

    }
    public static function semEspaco(string  $texto): string
    {
        if ($texto != null){
            return str_replace(" ", "",$texto);
        }
        return "nome";
    }

}




