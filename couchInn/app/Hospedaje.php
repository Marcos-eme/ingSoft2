<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    protected  $table ="hospedajes";
    protected  $fillable =['title','content','category_id','user_id'];
    public function category(){
        return $this->belongsTo('App\Category');

    }
    public function user(){
        return $this->belongsTo('App\User');

    }
    public function images (){
        return $this->hasMany('App\Image');
    }
}
