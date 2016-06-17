<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected  $table ="rol";
    protected  $fillable =['rol','baja_logica'];

    /*public function usuarios (){
        return $this->belongsToMany('App\Usuario')->withTimestamps();
    }*/
}
