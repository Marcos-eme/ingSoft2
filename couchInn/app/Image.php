<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected  $table ="images";
    protected  $fillable =['name','hospedaje_id'];

    public function hospedaje(){
        return $this->belongsTo('App\Hospedaje');

    }
}
