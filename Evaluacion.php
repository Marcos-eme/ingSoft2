<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected  $table ="evaluaciones";
    protected  $fillable =['comentario','puntuacion','usuario_id','hospedaje_id'];
    
    public function hospedaje(){
        return $this->belongsTo('App\Hospedaje');
    }

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }

}
