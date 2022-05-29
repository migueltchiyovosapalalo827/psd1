<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Models;

use App\Uteis\Testos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $nome_proprio
 * @property string $sobrenome
 * @property string $data_de_nascimento
 * @property string $pai
 * @property string $mae
 * @property string $genero
 * @property string $deficiencia
 * @property string $contacto
 * @property string $provincia
 * @property string $municipio
 * @property string $bairro
 * @property string $local_de_nascimento
 * @property string $n_do_documento
 * @property string $tipo_de_documento
 * @property string $naturalidade
 * @property Administradores[] $administradores
 * @property Inqueridos[] $inqueridos
 * @property Pesquisadores[] $pesquisadores
 * @property Usuarios $usuario
 */
class Pessoas extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['nome', 'data_de_nascimento', 'pai', 'mae', 'genero', 'deficiencia', 'contacto', 'provincia', 'municipio', 'bairro', 'local_de_nascimento', 'n_do_documento', 'tipo_de_documento', 'naturalidade'];

    /**
     * @return HasMany
     */
    public function administradores(): HasMany
    {
        return $this->hasMany(Administradores::class, 'pessoas_id');
    }

    /**
     * @return HasMany
     */
    public function inqueridos(): HasMany
    {
        return $this->hasMany(Inqueridos::class, 'pessoas_id');
    }

    /**
     * @return HasMany
     */
    public function pesquisadores(): HasMany
    {
        return $this->hasMany(Pesquisadores::class, 'pessoas_id');
    }
    /**
     * @return string
     */
    public function genero(): string
    {
        if ($this->genero == "M"){
            return "Masculino";
        }
        return "Feminino";
    }
   // relação de um para um entre pessoa e estudante
    public function estudante(): HasOne
    {
        return $this->hasOne(Estudantes::class, 'pessoas_id');
    }



    /**
     * @return string
     */
    public function tipo_de_documento(): string
    {
        switch ($this->tipo_de_documento){
            case "BI":
                return "Bilhete de identidade";
                break;
            case "PP":
                return "PASSAPORT";
                break;
            case "NIF":
                return "Nº de identificação fiscal";
                break;
            case "Outros":
                return "Outros";
                break;
            default :
                if ($this->tipo_de_documento != null){
                    return $this->tipo_de_documento;
                }
                return "";
                break;
        }
    }
    /**
     * @return BelongsTo
     */
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuarios::class, 'pessoas_id');
    }
    public function nomeComSobrenome(): string
    {
        return Testos::primeiroEultimo($this->nome,"" ," ");
    }
    public function nome(): string
    {
        return Testos::primeiroEultimo($this->nome,"" ," ");
    }
    public function nome_completo(): string
    {
        return $this->nome;
    }
    public  function  entidade(){
        $pesquisador = $this->pesquisadores()->first();
        $inquerido = $this->inqueridos()->first();
        if ( $pesquisador != null){
            return $pesquisador;
        }
        if ( $inquerido != null){
            return $inquerido;
        }
        return null;
    }
    public  function  tipo_de_entidade(){
        $pesquisador = $this->pesquisadores()->first();
        $inquerido = $this->inqueridos()->first();
        if ($pesquisador != null){
            return "pesquisador";
        }
        if ( $inquerido != null){
            return "inquerido";
        }
        return null;
    }
    public function meu_pesquisador(){
        return  $pesquisador = $this->pesquisadores()->first();
    }
    public function cartao(){
       return $this->hasMany(Cartao::class, 'pessoas_id');
    }
    public function cartao_ativo(){
        return $this->cartao()->where('ativo', 1)->first();
    }
}
