<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PerfilControlador extends Controller
{
    public function index(){
        return view('template.default.Perfil.perfil_main');
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
