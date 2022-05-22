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
    protected $fillable = ['arquitectura','id_instituicao'];
   /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function instituicao(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Instituicoes::class, 'id');
    }
}
