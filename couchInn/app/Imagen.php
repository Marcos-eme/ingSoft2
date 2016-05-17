<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected  $table ="imagen";
    protected  $fillable =['name','hospedaje_id'];

    public function hospedaje(){
        return $this->belongsTo('App\Hospedaje');

    }
}
