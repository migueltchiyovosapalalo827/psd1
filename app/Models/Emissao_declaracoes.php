<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Emissao_declaracoes extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['id_estudante','curso','turma','id_instituicao','classe','tipo_declaracao','comprovativo','efeito','requerimento'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estudante(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Estudantes::class,'id_estudante');
    }
    public function instituicao(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Instituicoes::class,'id_instituicao');
    }


}
