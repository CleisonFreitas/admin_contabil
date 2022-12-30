<?php

namespace App\Http\Requests;


class FornecedorRequest extends Request
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nm_fornecedor' => ['required','string'],
            'nr_cnpj' => ['required']
        ];
    }

    public function attributes()
    {
        return [
            'nm_fornecedor' => 'Nome do Fornecedor'
        ];
    }
}
