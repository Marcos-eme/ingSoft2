<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected  $table ="reserva";
    protected  $fillable =['fechaInicio','fechaFin','Estado','usuario_id','hospedaje_id','baja_logica'];

    public function hospedaje(){
        return $this->belongsTo('App\Hospedaje');
    }

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }
}
