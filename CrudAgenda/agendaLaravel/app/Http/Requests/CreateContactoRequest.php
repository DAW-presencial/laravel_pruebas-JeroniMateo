<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactoRequest extends FormRequest
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
                    //Fields request & validation
            'nombre'=>'required',
            'telefono'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=> 'El contacto necesita un nombre',
            'telefono.required'=>'El contacto necesita un telefono'
        ];
    }
    }
