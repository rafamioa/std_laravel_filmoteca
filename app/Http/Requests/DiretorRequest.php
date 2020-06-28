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
            'imagem' => 'mimes:jpeg,png'
        ];
    }

    public function messages(){
        return [
            'required' => 'O campo :attribute é obrigatório',
            'nome.min' => 'O campo :attribute deve conter mais de 3 caracteres',
            'nome.max' => 'O campo :attribute deve conter menos de 50 caracteres',
            'biografia.min' => 'O campo :attribute deve conter mais de 25 caracteres',
            'biografia.max' => 'O campo :attribute deve conter menos de 4000 caracteres',
            'integer' => 'O campo :attribute deve ser um número inteiro',
            'gt' => 'O campo :attribute deve ser maior do que 1',
            'lt' => 'O campo :attribute deve ser menor do que 120',
            'numeric' => 'O campo :attribute deve ser numérico',
            'mimes' => 'O arquivo de upload deve ser .jpeg ou .png'
        ];
    }
}
