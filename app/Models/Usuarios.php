<?php
/**
 * Copyright © 2020 por Fabricio Gonga
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito do programador Fabrício Gonga, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o programador, endereçado a devgonga@gmail.com , com o assunto “Coordenador de Permissões,”.
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
/**
 * @property int $id
 * @property int $grupo_de_usuarios_id
 * @property int $pessoas_id
 * @property string $usuario
 * @property string $email
 * @property string $senha
 * @property string $token
 * @property string $tentativas
 * @property string $contacto
 * @property string $estado
 * @property GrupoDeUsuario $grupoDeUsuario
 * @property Pessoa $pessoa
 */
class Usuarios extends Authenticatable
{
  use HasFactory , Notifiable;
    /**
     * @var array
     */
    protected $fillable = ['grupo_de_usuarios_id', 'pessoas_id', 'usuario', 'email', 'password', 'remember_token', 'tentativas', 'contacto', 'estado'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grupo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Grupo_de_usuarios::class, 'grupo_de_usuarios_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pessoa(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Pessoas::class, 'pessoas_id');
    }
    public function instituicoes(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Instituicoes::class,'id_usuario');
    }

    /**
     * Route notifications for the Vonage channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForNexmo($notification)
    {
        return $this->contacto;
    }
}
