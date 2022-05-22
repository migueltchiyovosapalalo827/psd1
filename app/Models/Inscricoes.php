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
 * @property int $inqueritos_id
 * @property int $inqueridos_id
 * @property int $respondido
 * @property Inqueritos $inquerito
 * @property Inqueridos $inquerido
 */
class Inscricoes extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['inqueritos_id', 'inqueridos_id', 'respondido'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inquerito()
    {
        return $this->belongsTo(Inqueritos::class, 'inqueritos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inquerido()
    {
        return $this->belongsTo(Inqueridos::class, 'inqueridos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function respostas()
    {
        return $this->hasMany(Respostas::class, 'inscricoes_id');
    }

    public function totalDeInqueritosRespondidos(): int
    {
        if($this->respondido){
            return 1;
        }
        return 0;
    }
    public function inscricoesRespondidas()
    {
        return 1;
       /* if ( $this->respondido == 1){
            return $this;
        };
        return null;*/
    }


}
