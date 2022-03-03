<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
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
            'name' => ['required', 'max:255', 'min:3'],
            'email' => ['required', 'email', 'max:100', 'min:3', 'unique:clients,email'],
            'cpf' => ['required', 'min:10', 'max:16', 'unique:clients,cpf']
        ];
    }
}
