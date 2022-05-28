<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emissao_certificados extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['id_estudante','curso','turma','numero_estudantil','efeito','ano_termino','id_instituicao','comprovativo','requerimento'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estudante(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Estudantes::class, 'id_estudante');
    }
    public function instituicao(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Instituicoes::class, 'id_instituicao');
    }



}
