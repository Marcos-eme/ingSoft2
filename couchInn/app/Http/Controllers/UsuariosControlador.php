<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class UsuariosControlador extends Controller
{
    public function index(){
        $usuarios= Usuario::orderBy('id','ASC')->paginate(5);
        return view('admin.template.Usuarios.index')->with('usuarios',$usuarios);
    }
    public function create(){
        return view('admin.template.Usuarios.crear');

    }
    public function store(Request $request){
        $usuario=new Usuario($request->all());
        $usuario->password = bcrypt($request->password);
        Flash::success('se ha guardado con exito');
        $usuario->save();
        return redirect()->route('admin.usuario.index');
    }
    public function show($id){

    }
    public function edit($id){
        $usuario=Usuario::find($id);
        return view('admin.template.Usuarios.edit')->with('usuario', $usuario);

    }
    public function update(Request $request, $id){
        
        dd($id);
    }
    public function destroy($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        Flash::error('Se ha eliminado a '.$usuario->nombre.' '.$usuario->apellido.' correctamente');
        return redirect()->route('admin.usuario.index');

    }
}
