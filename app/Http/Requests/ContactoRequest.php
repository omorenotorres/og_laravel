<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
            //
            'co_imagen'        =>  'mimes:jpg,jpeg,png,gif',
            'co_descripcion'        =>  'required',
            'co_informacion'        =>  'required',
        ];
    }
}
