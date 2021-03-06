<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    protected  $table ="disponibilidad";
    protected  $fillable =['fechaInicio','fechaFin','hospedaje_id','baja_logica'];

    public function hospedaje(){
        return $this->belongsTo('App\Hospedaje');
    }
}
