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
            'nome' => 'required',
            'historia' => 'required',
            'data_fundacao' => 'required'
        ];
    }

    public function messages()
{
    return [
        'nome.required' => 'O campo nome é obrigatório',
        'historia.required' => 'O campo história é obrigatório',
        'data_fundacao.required' => 'O campo Data de Fundação é obrigatório',
    ];
}
}
