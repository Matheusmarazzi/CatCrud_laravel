<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'raca'=> 'required|max:50',
            'peso'=> 'required|between:1,100'
         ];
    }
    public function messages(): array{
        return [ 
        'raca.required' => 'Este campo é obrigatório',
        'raca.max' => 'O nome da raça é muito grande',
        'peso.*' => 'este campo é obrigatorio, digite um valor entre 1 e 100'
        ];
    }
}
