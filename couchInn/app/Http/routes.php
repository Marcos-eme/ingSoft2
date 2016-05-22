<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*

POSIBLES tipos de rutas

GET , POST , PUT , DELETE , RESOURCE

*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=> 'admin'],function(){
    Route::resource('usuario','UsuariosControlador');
});







/*
Route::get('hospedaje/{hospedaje_id?}', function($hospedaje_id = 0) {
	if($hospedaje_id == 0)
	echo "Esta es la seccion de hospedajes";
	else
	echo "Esta es la seccion del hospedaje : "  . $hospedaje_id;
});



Route::get('usuarios/{id}',[
    'uses'=>'TestController@view'
]);
*/