<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected  $table ="ciudad";
    protected  $fillable =['ciudad','id_provincia'];

    public function provincia(){
        return $this->belongsTo('App\Provincia');
    }

}
