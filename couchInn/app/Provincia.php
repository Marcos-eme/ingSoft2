<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected  $table ="provincia";
    protected  $fillable =['provincia'];

    public function ciudades (){
        return $this->hasMany('App\Ciudad');
    }

    

}
