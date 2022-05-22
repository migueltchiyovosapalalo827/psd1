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
    protected $fillable = ['foto','id_instituicao'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function instituicao(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Instituicoes::class, 'id_instituicao');
    }

}
