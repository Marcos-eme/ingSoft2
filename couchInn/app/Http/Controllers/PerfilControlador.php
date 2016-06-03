<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class PerfilControlador extends Controller
{
    public function index(){
            $hospedajes = Auth::User()->hospedajes;
            return view('template.default.Perfil.perfil_main')->with('hospedajes', $hospedajes);
     
}
    public function create($id){

    }
    public function store($id){
    }

    public function edit($id){
    }

    public function update($id){

    }
    public function destroy($id){


    }
}
