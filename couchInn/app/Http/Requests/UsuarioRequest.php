<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'min:4|max:150|required',
            'apellido'=>'min:4|max:150|required',
            'email'=>'min:4|max:150|required|unique:usuario',
            'password'=>'min:4|max:150|required',
            'telefono'=>'min:4|max:50'
        ];
    }
}
