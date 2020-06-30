<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiretorRequest extends FormRequest
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
            'nome' => 'required|min:3|max:50',
            'biografia' => 'required|min:25|max:4000',
            'idade' => 'required|integer|numeric|gt:1|lt:120',
            'pais_id' => 'required',
            'data_nascimento' => 'required',
            'imagem' => 'mimes:jpeg,png,jpg'
        ];
    }
}
