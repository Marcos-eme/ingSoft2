<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Http\Requests\UsuarioRequest;

class UsuariosControlador extends Controller
{
    public function index(){
        $usuarios= Usuario::orderBy('id','ASC')->paginate(5);
        return view('admin.Usuarios.index')->with('usuarios',$usuarios);
    }
    public function create(){
        return view('admin.Usuarios.crear');

    }
    public function store(UsuarioRequest $request){
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
        return view('admin.Usuarios.edit')->with('usuario', $usuario);

    }
    public function update(UsuarioRequest $request, $id){
        $usuario= Usuario::find($id);
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->password=bcrypt($request->password);
        $usuario->email=$request->email;
        $usuario->telefono=$request->telefono;
        $usuario->foto=$request->foto;
        $usuario->save();
        Flash::success('El usuario: '.$usuario->nombre.' '.$usuario->apellido.' se ha editado con exito');
        return redirect()->route('admin.usuario.index');
    }
    public function destroy($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        Flash::error('Se ha eliminado a '.$usuario->nombre.' '.$usuario->apellido.' correctamente');
        return redirect()->route('admin.usuario.index');

    }
}
