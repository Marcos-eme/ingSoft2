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
use PhpParser\Node\Stmt\TryCatch;

class HospedajeControlador extends Controller
{
    public function edit($request){
        $hospedaje = Hospedaje::find($request);
        $tipo_hospedajes= Tipo_hospedaje::all();
        $array=array();
        foreach ($tipo_hospedajes as $tipo_hospedaje){
            $array[$tipo_hospedaje->id]=$tipo_hospedaje->tipo;        }

        return view('template.default.Hospedaje.edit')
            ->with('tipo_hospedajes',$array)
            ->with('hospedaje',$hospedaje);
    }

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


    public function update(Request $request,$id){
        $hospedaje=Hospedaje::find($id);
        try{
            $hospedaje->fill($request->all());
            $hospedaje->tipo_hospedaje_id=$request->tipo_hospedaje;
            $hospedaje->save();
            if($request->file('imagen')!=null){
                $file=$request->file('imagen');
                $name='Imagen_'.Auth::User()->id.'_'.time().'.'.$file->getClientOriginalExtension();
                $path=public_path().'/images/hospedajes';
                $file->move($path,$name);
                //solo se cambia la primera imagen porq no podemos meter mas todabia
                $imagen=Imagen::find($hospedaje->imagenes->first()->id);
                $imagen->nombre=$name;
                $imagen->save();
            }
        }catch (Exception $e){
            dd('error al guardar los cambios'.$e);
        }

        Flash::success('se ha agregado el hospedaje con exito');
        return redirect()->route('usuario.perfil.index');
    }

}
