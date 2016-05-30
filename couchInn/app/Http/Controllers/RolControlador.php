<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\RolRequest;
use App\Rol;
use Laracasts\Flash\Flash;

class RolControlador extends Controller
{
    public function index(){
        $roles= Rol::orderBy('id','ASC')->paginate(5);
        return view('admin.roles.index')->with('roles',$roles);
    }

    public function create(){
        return view('admin.roles.crear');
    }
    
    public function store(RolRequest $request){
        $rol=new Rol($request->all());

        Flash::success('se ha guardado con exito');
        $rol->save();
        return redirect()->route('admin.rol.index');
    }
    public function show($id){

    }
    public function edit($id){
        $rol=Rol::find($id);
        return view('admin.roles.edit')->with('rol', $rol);

    }
    public function update(RolRequest $request, $id){
        $rol= Rol::find($id);
        $rol->fill($request->all());
        $rol->save();
        Flash::success('El rol: '.$rol->rol.' se ha editado con exito');
        return redirect()->route('admin.rol.index');
    }
    public function destroy($id){
        $rol = Rol::find($id);
        $rol->delete();
        Flash::error('Se ha eliminado el tipo '.$rol->rol.' correctamente');
        return redirect()->route('admin.rol.index');

    }
}
