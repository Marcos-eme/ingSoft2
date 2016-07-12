<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Reserva;
use Auth;
use App\Hospedaje;

use App\Http\Requests;

class HomeController extends Controller
{
    public function searchHome(Request $request, $id = 'lalas'){
        //$hospedajes= DB::table('hospedaje')->get();
        $hospedajes= Hospedaje::all();
        if(!$this->isNullOrEmptyString($request->ciudad) ){
            $hospedajes=Hospedaje::SearchCiudad($request->ciudad)->get();
        }elseif(!$this->isNullOrEmptyString($request->provincia)){
            $hospedajes=Hospedaje::SearchProvincia($request->provincia)->get();
        }

        return view('template.default.Busqueda.index')->with('hospedajes',$hospedajes)
            ->with('llegada',$request->llegada)
            ->with('partida',$request->partida);
    }

    function isNullOrEmptyString($question){
        return (!isset($question) || trim($question)==='');
    }

    public function enviarReservaAnfitrion($request, Request $lala){
        dd($request);
    }

    


}
