<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $pessoas_id
 * @property int $tipo
 * @property Pessoas $pessoa
 * @author Fabrício Gonga
 */
class Inqueridos extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['pessoas_id','tipo'];

    /**
     * @return BelongsTo
     */
    public function pessoa(): BelongsTo
    {
        return $this->belongsTo(Pessoas::class, 'pessoas_id');
    }
    /**
     * @return BelongsTo
     */
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuarios::class, 'pessoas_id');
    }

    /**
     * @return HasMany
     */
    public function inscricoes(): HasMany
    {
        return $this->hasMany(Inscricoes::class, 'inqueridos_id');
    }
}
