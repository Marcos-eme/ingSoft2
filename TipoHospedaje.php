<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipohospedaje extends Model
{
    protected  $table ="tipos_hospedaje";
    protected  $fillable =['tipo'];

    public function hospedajes (){
        return $this->hasMany('App\Hospedaje');
    }
}

