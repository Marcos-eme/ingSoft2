<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected  $table ="pregunta";
    protected  $fillable =['pregunta','usuario_id','hospedaje_id'];

    public function hospedaje(){
        return $this->belongsTo('App\Hospedaje');
    }

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }
}
