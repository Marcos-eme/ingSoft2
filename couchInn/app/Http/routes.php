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
    return view('index');
});


Route::auth();
Route::group(['prefix'=> 'admin','middleware'=>['auth','admin']],function(){
    Route::resource('usuario','UsuariosControlador');
    Route::resource('tipo_hospedaje','Tipo_HospedajeControlador');
    Route::resource('rol','RolControlador');
    Route::get('donaciones',[
        'uses' => 'DonacionControlador@index',
        'as' => 'admin.donaciones.index'
    ]);


    Route::get('tipo_hospedaje/{id}/destroy',[
        'uses'=>'Tipo_HospedajeControlador@destroy',
        'as'=>'admin.tipo_hospedaje.destroy'
    ]);
    Route::get('usuario/{id}/destroy',[
        'uses'=>'UsuariosControlador@destroy',
        'as'=>'admin.usuario.destroy'
    ]);
    Route::get('rol/{id}/destroy',[
        'uses'=>'RolControlador@destroy',
        'as'=>'admin.rol.destroy'
    ]);

    Route::get('/',['as'=>'admin.index',function(){
        return view('admin.index');
    }]);
});


Route::auth();
Route::group(['prefix'=> 'usuario'],function(){


    Route::resource('perfil','PerfilControlador');
    Route::resource('hospedaje','HospedajeControlador');
    Route::resource('donar','DonacionControlador');

    
    Route::get('hospedaje/{id}/index',[
        'uses'=>'HospedajeControlador@index',
        'as'=>'usuario.hospedaje.index'
    ]);

    Route::get('hospedaje/{id}/imagenes',[
        'uses'=>'HospedajeControlador@imagenes',
        'as'=>'usuario.hospedaje.imagenes'
    ]);

    Route::put('hospedaje/storeImage/{hospedaje}',[
        'uses'=>'HospedajeControlador@storeImage',
        'as'=>'usuario.hospedaje.storeImage'
    ]);

    Route::get('hospedaje/deleteImage/{hospedaje}/{id}',[
        'uses'=>'HospedajeControlador@deleteImage',
        'as'=>'usuario.hospedaje.deleteImage'
    ]);



});

/*
Route::get('auth/login', 'Auth/AuthController@getLogin' );
Route::post('auth/login', 'Auth/AuthController@postLogin' );
Route::get('auth/logout', 'Auth/AuthController@getLogout' );
*/



//Route::get('/home', 'HomeController@index');
