<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;

class UsuarioPerfil extends Controller
{
    public function show($id)
    {
        $user=Usuario::find($id);
        dd($user);
    }

    public function donar($id)
    {
        $usuario=Usuario::find($id);
        return view('donner.donar')->with('usuario', $usuario);
    }

}
