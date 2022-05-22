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
 * @property int $perguntas_id
 * @property int $inqueritos_id
 * @property int $inscricoes_id
 * @property string $resposta
 * @property string $updated_at
 * @property Inquerito $inquerito
 * @property Inscrico $inscrico
 * @property Pergunta $pergunta
 */
class Respostas extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = ['perguntas_id', 'inqueritos_id', 'inscricoes_id', 'resposta', 'updated_at'];

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
    public function inscrico()
    {
        return $this->belongsTo(Inscricoes::class, 'inscricoes_id');
    }


    public function pergunta()
    {
        return $this->belongsTo(Perguntas::class, 'perguntas_id');
    }
}
