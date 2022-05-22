<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $administradores_id
 * @property int $pesquisadores_id
 * @property string $titulo
 * @property string $descricao
 * @property string $data_de_criacao
 * @property string $data_de_atualizacao
 * @property string $ano
 * @property String $logotipo
 * @property String $compartilhamentos_id
 * @property int $privacidade
 * @property int $modo_de_exibicao
 * @property Administradore $administradore
 * @property Pesquisadore $pesquisadore
 */
class Inqueritos extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['pesquisadores_id', 'titulo', 'descricao', 'data_de_criacao', 'data_de_atualizacao', 'ano','logotipo','privacidade','modo_de_exibicao',"compartilhamentos_id"];

    /**
     * @return BelongsTo
     */
    public function pesquisador(): BelongsTo
    {
        return $this->belongsTo(Pesquisadores::class, 'pesquisadores_id');
    }
    /**
     * @return HasMany
     */
    public function inscricoes(): HasMany
    {
        return $this->hasMany(Inscricoes::class, 'inqueritos_id');
    }
    /**
     * @return HasMany
     */
    public function perguntas(): HasMany
    {
        return $this->hasMany(Perguntas::class, 'inqueritos_id');
    }
    /**
     * @return BelongsTo
     */
    public function compartilhamento(): BelongsTo
    {
        return $this->belongsTo(Compartilhamentos::class, 'compartilhamentos_id');
    }
}
