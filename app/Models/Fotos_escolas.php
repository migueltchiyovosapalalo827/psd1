<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos_escolas extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['foto','id_instituicao', 'id_arquitectura_escola'];


    public function instituicao(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Instituicoes::class, 'id_instituicao');
    }

    //relação muitos para um com a tabela arquitectura_escola

    public function arquitectura(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Arquitectura_escola::class, 'id_arquitectura_escola');
    }




}
