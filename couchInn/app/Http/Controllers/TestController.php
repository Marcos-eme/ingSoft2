<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;

class TestController extends Controller
{
    function view($id){
        $usuario= Usuario::find($id);
        return view('test_view',['variable'=>$usuario]);
    }
}
    