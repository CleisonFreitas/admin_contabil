<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class RoleRequest extends BaseRequest
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
            'name' => ['required',Rule::unique('roles')->ignore($this->role)]
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nome'
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Esse nome já foi atribuído à outro grupo'
        ];
    }
}
