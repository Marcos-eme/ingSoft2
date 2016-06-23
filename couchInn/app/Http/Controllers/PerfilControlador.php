<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Http\Requests\PerfilRequest;
use Auth;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class PerfilControlador extends Controller
{
    public function index(){
            $user = Auth::User();
            $hospedajes = Auth::User()->hospedajes;
            return view('template.default.Perfil.perfil_main')->with('hospedajes', $hospedajes)
                                                              ->with('user', $user);
     
}
    public function create($id){

    }
    public function store($id){
    }

    public function edit(){
        $usuario=Auth::User()->all();
        return view('template.default.Perfil.editar_perfil')->with('usuario', $usuario);
    }

    public function update(PerfilRequest $request,$id){
        $usuario= Auth::User();
        $usuario->fill($request->all());
        $usuario->save();
        Flash::success('El usuario: '.$usuario->nombre.' '.$usuario->apellido.' se ha editado con exito');
        return redirect()->route('usuario.perfil.index');
    }
    public function destroy($id){


    }
}
