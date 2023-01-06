<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class PlanoContasRequest extends BaseRequest
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
            'nome' => ['required','string','max:255'],
            'tipo' => ['required', Rule::in(['C','G'])],
            'grupo' => ['required_if:tipo,C']
        ];
    }

    public function attributes()
    {
        return [
            'nome' => 'Nome',
            'tipo' => 'Tipo',
            'grupo' => 'Grupo'
        ];
    }

    public function messages()
    {
        return [
            'grupo.required_if' => 'É obrigatório informar ao qual grupo pertence essa conta'
        ];
    }
}
