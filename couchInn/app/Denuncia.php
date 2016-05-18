<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected  $table ="denuncia";
    protected  $fillable =['tipo','descripcion','usuario_id','hospedaje_id'];

    public function hospedaje(){
        return $this->belongsTo('App\Hospedaje');
    }

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }
}
