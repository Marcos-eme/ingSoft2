<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    protected  $table ="hospedaje";
    protected  $fillable =['title','content','category_id','user_id'];
    public function category(){
        return $this->belongsTo('App\TipoHospedaje');

    }
    public function user(){
        return $this->belongsTo('App\Usuario');

    }
    public function images (){
        return $this->hasMany('App\Imagen');
    }
    
    public function tags (){
        return $this->belongsToMany('App\Tag');
    }
}
