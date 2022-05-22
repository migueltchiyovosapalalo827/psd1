<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property int $id
 * @property int $cursos_id
 * @property string $sigla
 * @property string $titulo
 * @property string $autores_id
 * @property string $ficheiro
 * @property string $extencao
 * @property string $descricao
 * @property Curso $curso
 * @property string capa
 * @author Fabrício Gonga
 */
class Livros extends Model
{

    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['cursos_id', 'sigla', 'titulo', 'autores_id', 'ficheiro', 'capa', 'descricao'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curso(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Cursos::class, 'cursos_id');
    }
     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function autor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Autores::class, 'autores_id');
    }
}
