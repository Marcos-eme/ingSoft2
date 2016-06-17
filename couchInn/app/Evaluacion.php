<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected  $table ="evaluacion";
    protected  $fillable =['comentario','puntuacion','usuario_id','hospedaje_id','baja_logica'];
    
    public function hospedaje(){
        return $this->belongsTo('App\Hospedaje');
    }

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }

}
