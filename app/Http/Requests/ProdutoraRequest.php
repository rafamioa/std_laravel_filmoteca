<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoraRequest extends FormRequest
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
            'historia' => 'required|min:25|max:500',
            'data_fundacao' => 'required'
        ];
    }

    public function messages()
{
    return [
        'nome.required' => 'O campo nome é obrigatório',
        'nome.min' => 'O campo deve conter no mínimo 3 caracteres',
        'nome.max' => 'O campo deve conter no máximo 50 caracteres',
        'historia.min' => 'O campo deve conter no mínimo 25 caracteres',
        'historia.max' => 'O campo deve conter no máximo 500 caracteres',
        'historia.required' => 'O campo história é obrigatório',
        'data_fundacao.required' => 'O campo Data de Fundação é obrigatório',
    ];
}
}
