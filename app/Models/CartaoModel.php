<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CartaoModel extends Model
{  use HasFactory;
    protected $table = 'cartao';
    protected $fillable = [ 'curso', 'turma', 'pessoas_id', 'classe', 'foto', 'id_instituicao','numero_estudantil'];

    public function pessoa()
    {
        return $this->belongsTo(Pessoas::class, 'pessoas_id');
    }
    public function instituicao()
    {
        return $this->belongsTo(Instituicoes::class, 'id_instituicao');
    }
     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
