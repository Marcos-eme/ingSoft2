<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Tipo_hospedaje;
use App\Hospedaje;
use App\Imagen;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use Mockery\CountValidator\Exception;

class HospedajeControlador extends Controller
{
    public function create(){
        $tipo_hospedajes =Tipo_hospedaje::all();
        $array=array();
        foreach ($tipo_hospedajes as $tipo_hospedaje){
            $array[$tipo_hospedaje->id]=$tipo_hospedaje->tipo;
        }


        return view('template.default.Hospedaje.create')
            ->with('usuario',Auth::User())
            ->with('tipo_hospedajes',$array);
    }

    public function update(){
        return view('template.default.Hospedaje.edit');
    }

    public function store(Request $request){
        try{
            $hospedaje= new Hospedaje;
            $hospedaje->fill($request->all());
            $hospedaje->usuario_id=Auth::User()->id;
            $hospedaje->tipo_hospedaje_id=$request->tipo_hospedaje;
            $hospedaje->save();
        }catch (Exception $e){
            dd('error al guardar hospedaje  '.$e);
        }

        try{
            $imagen=new Imagen;
            $file=$request->file('imagen');
            $name='Imagen_'.Auth::User()->id.'_'.time().'.'.$file->getClientOriginalExtension();
            $path=public_path().'/images/hospedajes';
            $file->move($path,$name);
            $imagen->nombre=$name;
            //para q no haya un error al momento de agregar los id
            $imagen->hospedaje()->associate($hospedaje);
            $imagen->save();
        }catch (Exception $e){
            dd('error al guardar imagen  '.$e);
        }

        Flash::success('se ha agregado el hospedaje con exito');
        return redirect()->route('usuario.perfil.index');
    }
}
