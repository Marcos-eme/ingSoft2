<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = [
        'nombre', 'email', 'password','apellido','foto','telefono'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hospedajes (){
        return $this->hasMany('App\Hospedaje');
    }

    public function roles (){
        return $this->belongsToMany('App\Rol')->withTimestamps();
    }
}
