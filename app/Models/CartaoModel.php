<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CartaoModel extends Model
{  use HasFactory;
    protected $table = 'cartao';
    protected $fillable = [ 'curso', 'turma', 'pessoas_id', 'classe', 'foto', 'id_instituicao','numero_estudantil'];

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    public function pessoa()
    {
        return $this->belongsTo(Pessoas::class, 'pessoas_id');
    }
    public function instituicao()
    {
        return $this->belongsTo(Instituicoes::class, 'id_instituicao');
    }
    //função para buscar um cartão  por meio de uma query e um request
    public static function buscar($request)
    {
        $iguais = $request->only('id_instituicao');
        $termos = $request->only('curso','classe');
        $query = CartaoModel::query();
        foreach ($iguais as $nome => $valor) {
            if ($valor) {
                $query->where($nome, '=', $valor);
            }
        }
        foreach ($termos as $nome => $valor) {
            if ($valor) {
               // $query->orWhere($nome, 'LIKE', '%' . $valor . '%');
               $query->where($nome, 'LIKE', '%' . $valor . '%');
            }
        }
        return $query->paginate(10);
    }
/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

}
