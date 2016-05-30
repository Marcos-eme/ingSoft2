<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    protected  $table ="donacion";
    protected  $fillable =['monto','usuario_id'];

    public function usuario(){
        return $this->belongsTo('App\Usuario');
    }
}
