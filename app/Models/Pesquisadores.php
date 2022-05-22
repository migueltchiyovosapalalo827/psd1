<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $pessoas_id
 * @property string $nome
 * @property string $logo
 * @property Pessoas $pessoa
 * @property Inqueritos[] $inqueritos
 * @author Fabrício Gonga
 */
class Pesquisadores extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['pessoas_id', 'nome', "logo"];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pessoa(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Pessoas::class, 'pessoas_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inqueritos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Inqueritos::class, 'pesquisadores_id');
    }
}
