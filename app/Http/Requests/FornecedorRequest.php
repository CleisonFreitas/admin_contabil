<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

class FornecedorRequest extends BaseRequest
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
        if ($this->method() !== "GET") {
            return [
                'nm_fornecedor' => ['bail', 'required', 'string'],
                'nr_cnpj' => ['bail', 'required', 'digits:14', Rule::unique('fornecedores')->ignore($this->fornecedor)->whereNull('deleted_at')]
            ];
        }
    }

    public function attributes()
    {
        return [
            'nm_fornecedor' => 'Nome do Fornecedor',
            'nr_cnpj' => 'CNPJ',
        ];
    }

}
