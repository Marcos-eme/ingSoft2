<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Requests;

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
        //dd($request->all());
        $usuario=new Usuario($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->save();
        dd('Usuario creado correctamente');
    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update(Request $request, $id){

    }
}
