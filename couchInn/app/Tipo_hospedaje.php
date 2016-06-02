<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_hospedaje extends Model
{
    protected  $table ="tipo_hospedaje";
    protected  $fillable =['tipo'];

    public function hospedajes (){
        return $this->hasMany('App\Hospedaje');
    }
    
    public function scopeTipo($query,$tipo)
    {
        return $query->where('tipo','LIKE','%$tipo%');
    }
   
}

