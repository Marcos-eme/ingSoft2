<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DonacionRequest extends Request
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
        //el maximo tiene que ver con la cantidad de digitos no con el numero real...
        return [
            'monto'=>'integer|required'
        ];
    }
}
