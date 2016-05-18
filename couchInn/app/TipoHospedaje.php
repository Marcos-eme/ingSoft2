<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHospedaje extends Model
{
    protected  $table ="tipoHospedaje";
    protected  $fillable =['tipo'];

    public function hospedajes (){
        return $this->hasMany('App\Hospedaje');
    }
}

