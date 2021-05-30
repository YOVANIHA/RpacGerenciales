<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\Rol;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'rol_id', 'email', 'password', 'codigo_usuario', 'nombres', 'apellidos', 'telefono', 'dui',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getEstadoUsuarioStrAttribute()
    {
        return [
            0 => 'Inactivo',
            1 => 'Activo'
        ][$this->estado];
    }

    public function obtenerRol()
    {
        $rol = Rol::find($this->rol_id);
        return $rol;
    }
}