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
     *['titulo', 'sinopse','data_lancamento', 'duracao', 'imagem','pais_id','classificacao_id','produtora_id']
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'min:3|max:75|required',
            'sinopse' => 'min:30|max:4000|required',
            'data_lancamento' => 'required',
            'duracao' => 'required|gt:30|lt:800|integer',
            'imagem' => 'mimes:jpeg,png,jpg',
            'pais_id' => 'integer|required',
            'classificacao_id' => 'required|integer',
            'produtora_id' => 'required|integer',
            'genero_id' => 'required',
            'diretor_id' => 'required'
        ];
    }
}
