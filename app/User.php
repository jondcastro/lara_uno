<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;

// por ahora no voy a usar autenticacion
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// importar este trait para poder usarlo
use Illuminate\Database\Eloquent\SoftDeletes;


use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications;


//extender de Model para poder traer consultas
// class User extends Authenticatable
class User extends Model
{
    // podemos separar con comas para usar varios
    use Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','country','state'
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
}
