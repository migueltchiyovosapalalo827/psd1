<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $pessoas_id
 * @property string $nome
 * @property string $logo
 * @property Pessoas $pessoa
 */
class Estudantes extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['pessoas_id','nome','logo','id_instituicao'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pessoa(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Pessoas::class, 'pessoas_id');
    }

    public function emissaoCertificado(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Emissao_certificados::class, 'id_estudante');
    }

    public function emissaoDeclaracao(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->HasMany(Emissao_declaracoes::class, 'id_estudante');
    }
// relação inverso de um para muitos entre estudante e instituição
    public function instituicao(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Instituicoes::class, 'id_instituicao');
    }


}
