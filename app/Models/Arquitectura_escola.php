<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arquitectura_escola extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['arquitectura','id_instituicao','descricao'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function instituicao(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Instituicoes::class, 'id_instituicao');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fotos_escolas(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Fotos_escolas::class, 'id_arquitectura_escola');
    }
}
