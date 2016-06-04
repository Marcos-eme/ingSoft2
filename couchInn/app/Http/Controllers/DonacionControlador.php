<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donacion;
use Auth;
use App\Usuario;
use Laracasts\Flash\Flash;
use App\Http\Requests;

class DonacionControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//      $donacion= Usuario::orderBy('id','ASC')->paginate(5);
        return view('admin.donacion.index'); //->with('donacion',$donacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('donner.donar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $donacion=new Donacion($request->all());
        $donacion->usuario_id = Auth::User()->id;
        $user = Usuario::find($donacion->usuario_id);
        $user->rol_id=3;
        Flash::success('Muchas gracias por su contribución, ahora usted es miembro Golden!');
        return redirect('/');


//        $user->save();
//        $donacion->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
        