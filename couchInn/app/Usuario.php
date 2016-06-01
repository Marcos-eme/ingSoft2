<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuario';
    protected $fillable = [
        'nombre', 'email', 'password','apellido','foto','telefono','rol_id'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hospedajes (){
        return $this->hasMany('App\Hospedaje');
    }

    public function donaciones(){
        return $this->hasMany('App\Donacion');
    }

    public function rol (){
        return $this->belongsTo('App\Rol');
    }

    public function evaluaciones(){
        return $this->hasMany('App\Evaluacion');
    }
/*
 * ESTO LO COMENTE PAR PROBAR COMO SERIA CON UNA ASOCIACION 1POR PARTE USUARIO MUCHOS EN ROLESS
    public function roles (){
        return $this->belongsToMany('App\Rol')->withTimestamps();
    }*/
}
