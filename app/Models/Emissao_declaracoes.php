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
    protected $fillable = ['id_estudante','curso','turma','id_instituicao','classe','tipo_declaracao','comprovativo','efeito','requerimento','updated_at','created_at'];
    public $timestamps = true;
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
   //função para buscar um cartão  por meio de uma query e um request
   public static function buscar($request)
   {
       $iguais = $request->only('id_instituicao');
       $termos = $request->only('nome', 'curso', 'turma', 'classe');
       $query = Emissao_declaracoes::query()->join('instituicoes','instituicoes.id', '=','emissao_declaracoes.id_instituicao')->
       join('estudantes','estudantes.id', '=','emissao_declaracoes.id_estudante')->
       join('pessoas','pessoas.id', '=','estudantes.pessoas_id');
       foreach ($iguais as $nome => $valor) {
           if ($valor) {
               $query->where('instituicoes.id', '=', $valor);

           }
       }
       foreach ($termos as $nome => $valor) {
           if ($valor) {
               $query->where('emissao_declaracoes.numero_estudantil', '=', $valor)
               ->orWhere('instituicoes.'.$nome, 'LIKE', '%' . $valor . '%')
               ->orWhere('pessoas.'.$nome, 'LIKE', '%' . $valor . '%')
               ->orWhere('emissao_declaracoes.curso', 'LIKE', '%' . $valor . '%')
               ->orWhere('emissao_declaracoes.classe', 'LIKE', '%' . $valor . '%');
              //$query->where($nome, 'LIKE', '%' . $valor . '%');
           }
       }
       return $query->select('emissao_declaracoes.*')->get();
   }

}
