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
 * @property int $grupo_de_usuarios_id
 * @property int $tarefas_id
 * @property GrupoDeUsuario $grupoDeUsuario
 */
class Tarefas_dos_grupos extends Model
{

    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['grupo_de_usuarios_id', 'tarefas_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grupoDeUsuario()
    {
        return $this->belongsTo(Grupo_de_usuarios::class, 'grupo_de_usuarios_id');
    }
    public function tarefas(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Tarefas::class, 'tarefas_id');
    }
    public function tarefasMany(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Tarefas::class, 'tarefas_id');
    }
}
