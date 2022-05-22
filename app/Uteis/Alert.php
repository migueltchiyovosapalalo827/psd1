<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */
namespace App\Uteis;
class Alert
{
    /**
     * @var sucesso | erro | aviso
     */
    private   $tipo;
    /**
     * @var
     */
    private  $titulo;
    /**
     * @var
     */
    private  $mensagem;

    /**
     * Alert constructor.
     * @param aviso|erro|sucesso $tipo
     * @param $titulo
     * @param $mensagem
     */
    public function __construct($mensagem="sucesso", $tipo="sucesso", $titulo="sucesso")
    {
        $this->setTipo($tipo);
        $this->setTitulo($titulo);
        $this->setMensagem($mensagem);
        $this->salvar();
    }


    /**
     * @return aviso|erro|sucesso
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param aviso|erro|sucesso $tipo
     */
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * @param mixed $mensagem
     */
    public function setMensagem($mensagem): void
    {
        $this->mensagem = $mensagem;
    }

    public  function destruir(){
        Sessoes::destruirUm("alert");
    }

    public  function salvar(){

        Sessoes::adicionar("alert",$this);
    }
}