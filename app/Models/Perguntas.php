<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $inqueritos_id
 * @property string $titulo
 * @property string $tipo
 * @property Respostas $respostas
 */
class Perguntas extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['inqueritos_id', 'titulo', 'tipo'];

    /**
     * @return HasMany
     */
    public function respostas(): HasMany
    {
        return $this->hasMany(Respostas::class, 'perguntas_id');
    }
     /**
     * @return HasMany
     */
    public function opcoes(): HasMany
    {
        return $this->hasMany(Opcoes::class, 'perguntas_id');
    }
    public function tipo(): string
    {
        $i=$this->tipo;

        if ($i == "rl") {
            return "Resposta longa";
        }

        if ($i == "ro") {
            return "Resposta de opção unica";
        }

        if ($i == "rc") {
            return "Resposta Curta";
        }

        return "desconhecido";
    }
}
