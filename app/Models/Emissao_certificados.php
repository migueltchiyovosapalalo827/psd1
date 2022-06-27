<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emissao_certificados extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['id_estudante','curso','turma','numero_estudantil','efeito','ano_termino','id_instituicao','comprovativo','requerimento','classe'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estudante(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Estudantes::class, 'id_estudante');
    }
    public function instituicao(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Instituicoes::class, 'id_instituicao');
    }

       //função para buscar um cartão  por meio de uma query e um request
       public static function buscar($request)
       {
           $iguais = $request->only('id_instituicao');
           $termos = $request->only('nome', 'curso', 'turma', 'classe');
           $query = Emissao_certificados::query()->join('instituicoes','instituicoes.id', '=','emissao_certificados.id_instituicao')->
           join('estudantes','estudantes.id', '=','emissao_certificados.id_estudante')->
           join('pessoas','pessoas.id', '=','estudantes.pessoas_id');
           foreach ($iguais as $nome => $valor) {
               if ($valor) {
                   $query->where('instituicoes.id', '=', $valor);

               }
           }
           foreach ($termos as $nome => $valor) {
               if ($valor) {
                   $query->where('emissao_certificados.numero_estudantil', '=', $valor)
                   ->orWhere('instituicoes.'.$nome, 'LIKE', '%' . $valor . '%')
                   ->orWhere('pessoas.'.$nome, 'LIKE', '%' . $valor . '%')
                   ->orWhere('emissao_certificados.curso', 'LIKE', '%' . $valor . '%')
                   ->orWhere('emissao_certificados.classe', 'LIKE', '%' . $valor . '%');
                  //$query->where($nome, 'LIKE', '%' . $valor . '%');
               }
           }
           return $query->paginate(10);
       }


}
