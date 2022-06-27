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
        $termos = $request->only('nome', 'curso', 'turma', 'classe');
        $query = CartaoModel::query()->join('instituicoes','instituicoes.id', '=','cartao.id_instituicao')->
        join('pessoas','pessoas.id', '=','cartao.pessoas_id');
        foreach ($iguais as $nome => $valor) {
            if ($valor) {
                $query->where('instituicoes.id', '=', $valor);

            }
        }
        foreach ($termos as $nome => $valor) {
            if ($valor) {
                $query->where('cartao.numero_estudantil', '=', $valor)
                ->orWhere('instituicoes.'.$nome, 'LIKE', '%' . $valor . '%')
                ->orWhere('pessoas.'.$nome, 'LIKE', '%' . $valor . '%')
                ->orWhere('cartao.curso', 'LIKE', '%' . $valor . '%')
                ->orWhere('cartao.classe', 'LIKE', '%' . $valor . '%');
               //$query->where($nome, 'LIKE', '%' . $valor . '%');
            }
        }
        return $query->select('cartao.*')->get();
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
