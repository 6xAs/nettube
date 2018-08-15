<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmeRequest extends FormRequest
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
            // validações campos Filme
            'nome'          => 'required|max:255|min:3',
            'categoria'     => 'required|max:255|min:3',
            'image'         => 'required|max:255',
            'link'          => 'required|max:255',
        ];
    }
}
