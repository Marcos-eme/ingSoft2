<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    protected  $table ="hospedaje";
    protected  $fillable =['provincia','ciudad','calle','numero',
        'capacidad','descripcion','wifi','cable','baños','habitaciones'
        ,'tipoCama','tipoHabitacion','tipoHospedaje_id','usuario_id'];
    
    public function tipoHospedaje(){
        return $this->belongsTo('App\TipoHospedaje');
    }

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }

    public function imagenes (){
        return $this->hasMany('App\Imagen');
    }

    public function denuncias (){
        return $this->hasMany('App\Denuncia');
    }

    public function preguntas (){
        return $this->hasMany('App\Pregunta');
    }

    public function evaluaciones (){
        return $this->hasMany('App\Evaluacion');
    }

    public function reservas (){
        return $this->hasMany('App\Reserva');
    }

    public function disponibilidades (){
        return $this->hasMany('App\Disponibilidad');
    }
}
