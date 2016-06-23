<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Donacion;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class PerfilControlador extends Controller
{
    public function index(){
            $hospedajes = Auth::User()->hospedajes;
            $donaciones = Auth::User()->donaciones;
            return view('template.default.Perfil.perfil_main')
                ->with('hospedajes', $hospedajes)
                ->with('donaciones', $donaciones);
            
     
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
