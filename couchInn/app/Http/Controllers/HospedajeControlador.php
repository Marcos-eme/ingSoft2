<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\Usuario;
use App\Provincia;
use Illuminate\Http\Request;
use Auth;
use Validator;
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
              
        $tipo_hospedajes =Tipo_hospedaje::all();
        $provincias = Provincia::all();
        $ciudades= Ciudad::all();
        $array=array();
        $arrayP=array();
        $arrayC=array();
        foreach ($provincias as $provincia){
            $arrayP[$provincia->id]=$provincia->provincia;
        }
        foreach ($tipo_hospedajes as $tipo_hospedaje){
            $array[$tipo_hospedaje->id]=$tipo_hospedaje->tipo;
        }
        foreach ($ciudades as $ciudad){
            $arrayC[$ciudad->id]=$ciudad->ciudad;
        }
        

        return view('template.default.Hospedaje.edit')
            ->with('tipo_hospedajes',$array)
            ->with('hospedaje',$hospedaje)
            ->with('provincias',$arrayP)
            ->with('ciudades',$arrayC);
    }

    public function index($request){
        $hospedaje = Hospedaje::find($request);
        return view('template.default.Hospedaje.index')
            ->with('hospedaje',$hospedaje);
    }

    public function imagenes($id){
        $hospedaje = Hospedaje::find($id);
        return view('template.default.Hospedaje.images')
            ->with('hospedaje',$hospedaje);
    }

    public function deleteImage($id,$hospedajeid)
    {
        if (Hospedaje::find($hospedajeid)->imagenes()->count() > 1) {
            $imagen = Imagen::find($id);
            $imagen->delete();
            Flash::success('Se ha eliminado la imagen correctamente');
            return $this->imagenes($hospedajeid);

        } else{
            Flash::error('Debe haber al menos una imagen en el hospedaje. Si se quiere modificar se debe: *agregar la imagen deseada *Borrar la imagen antigua');
        }
         return $this->imagenes($hospedajeid);
    }

    public function storeImage(Request $request,$id){
        $hospedaje = Hospedaje::find($id);
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
        return $this->imagenes($id);
    }

    public function create(){
        $tipo_hospedajes =Tipo_hospedaje::all();
        $provincias = Provincia::all();
        $ciudades= Ciudad::all();
        $array=array();
        $arrayP=array();
        $arrayC=array();
        foreach ($provincias as $provincia){
            $arrayP[$provincia->id]=$provincia->provincia;
        }
        foreach ($tipo_hospedajes as $tipo_hospedaje){
            $array[$tipo_hospedaje->id]=$tipo_hospedaje->tipo;
        }
        foreach ($ciudades as $ciudad){
            $arrayC[$ciudad->id]=$ciudad->ciudad;
        }
        return view('template.default.Hospedaje.create')
            ->with('usuario',Auth::User())
            ->with('tipo_hospedajes',$array)
            ->with('provincias',$arrayP)
            ->with('ciudades',$arrayC);
    }

    public function store(Request $request){
        $usuario=Usuario::find(Auth::User()->id);
        if($usuario != null && $usuario->telefono == null){
            $usuario->telefono=$request->telefono;
            $usuario->save();
        }
        $hospedaje= new Hospedaje;
        try{
            $hospedaje->fill($request->all());
            $hospedaje->usuario_id=Auth::User()->id;
            $hospedaje->tipo_hospedaje_id=$request->tipo_hospedaje;
            $hospedaje->ciudad_id=$request->ciudad;
            $hospedaje->provincia_id=$request->provincia;

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
            $hospedaje->provincia_id=$request->provincia;
            $hospedaje->ciudad_id=$request->ciudad;
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

    public function destroy($id){

        $hospedaje = Hospedaje::find($id);
        $hospedaje->delete();
        Flash::error('Se ha eliminado el hospedaje correctamente');
        return redirect()->route('usuario.perfil.index');

    }

    public function show($id){

    }

}
