<?php

namespace App\Http\Controllers\Auth;

use App\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'rol_id' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Usuario::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'rol_id' => $data['rol_id'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function login()
    {

        // Validamos los datos y ademas mandamos como un segundo parametro la opcion de recordar el usuario.
        if(Auth::attempt(array('email' => Input::get('email'), 'password' =>  Input::get('password')), Input::get('remember-me', 0)))
        {
            // Si es roll administrador lo redirecciona al panel de administrador
            if(Auth::user()->rol->id == 1){return Redirect::to('/admin')->with('success','Bienvenido Administrador');}
            // De ser otro tipo de roll, lo enviara a la seccion de solicitudes
            return Redirect::to('/')->with('success','Ingreso correctamente al sistema');
        }
        // En caso de que la autenticacion haya fallado manda un mensaje al formulario de login y tambien regresamos los valores enviados con withInput().
        return Redirect::to('login')
            ->with('mensaje_error', 'Datos de acceso erroneos, Intentelo nuevamente')
            ->withInput();
    }
    
}
