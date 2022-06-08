<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Instituicoes extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['nome','email','telefone','localizacao','tipo','sobre','id_usuario','logotipo','nivel','parent_id'];


    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'id_usuario');
    }
    public function cursos_escola(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Cursos_escolas::class, 'id_instituicao');
    }
    public function historial_escolas(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Historial_escolas::class, 'id_instituicao');
    }
    public function fotos_escolas(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Fotos_escolas::class, 'id_instituicao');
    }

    public function emissaoCertificado(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Emissao_certificados::class, 'id_instituicao');
    }

    public function emissaoDeclaracao(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->HasMany(Emissao_declaracoes::class, 'id_instituicao');
    }

    public  function cartao(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CartaoModel::class, 'id_instituicao');
    }

  //relação de um para  muito entre instituição e estudante
  public function estudantes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Estudantes::class, 'id_instituicao');
    }
    //instituição de tutela
    public function tutelas(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Instituicoes::class, 'parent_id', 'id');
    }
    // istituicao pai
    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Instituicoes::class, 'parent_id');
    }

    //função para verificar se uma instituição é pai ou não
    public function isParent(): bool
    {
        return $this->parent_id == null;
    }

    protected $appends = ['isParent'];

    public function getIsParentAttribute()
    {
        if (isset($this->attributes['parent_id'])) {
            # code...
            return false;
        }
        return true;
    }



}
