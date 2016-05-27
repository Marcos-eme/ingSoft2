<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Tipo_hospedajeRequest;
use App\Tipo_hospedaje;
use Laracasts\Flash\Flash;

class Tipo_HospedajeControlador extends Controller
{
    public function index(){
        $tipo_hospedajes= tipo_hospedaje::orderBy('id','ASC')->paginate(5);
        return view('admin.tipo_hospedaje.index')->with('tipo_hospedajes',$tipo_hospedajes);
    }
    public function create(){
        return view('admin.tipo_hospedaje.crear');
    }
    public function store(Tipo_hospedajeRequest $request){
        $tipo_hospedaje=new tipo_hospedaje($request->all());

        Flash::success('se ha guardado con exito');
        $tipo_hospedaje->save();
        return redirect()->route('admin.tipo_hospedaje.index');
    }
    public function show($id){

    }
    public function edit($id){
        $tipo_hospedaje=tipo_hospedaje::find($id);
        return view('admin.tipo_hospedaje.edit')->with('tipo_hospedaje', $tipo_hospedaje);

    }
    public function update(Tipo_hospedajeRequest $request, $id){
        $tipo_hospedaje= tipo_hospedaje::find($id);
        //el atributo fill hace encajar todos los campos y si en usuario no lo uso
        $tipo_hospedaje->fill($request->all());
        $tipo_hospedaje->save();
        Flash::success('El hospedaje: '.$tipo_hospedaje->tipo.' se ha editado con exito');
        return redirect()->route('admin.tipo_hospedaje.index');
    }
    public function destroy($id){
        $tipo_hospedaje = Tipo_hospedaje::find($id);
        $tipo_hospedaje->delete();
        Flash::error('Se ha eliminado el tipo '.$tipo_hospedaje->tipo.' correctamente');
        return redirect()->route('admin.tipo_hospedaje.index');

    }
}
