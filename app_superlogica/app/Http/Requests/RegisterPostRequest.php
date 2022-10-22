<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fullName' => 'required|string|max:240|regex:/^[\pL ]+$/u',
            'userName' => 'required|string|alpha_dash|max:240',
            'zipCode' => 'required|string|digits:8',
            'email' => 'required|string|email:rfc|max:240',
            'password' => 'required|string|min:8|max:240|regex:/^.*(?=.{2,})(?=.*[a-zA-Z])(?=.*[0-9]).*$/',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'fullName.regex' => 'O :attribute deve possuir apenas letra e espaço',
            'password.min' => 'A :attribute deve ter no mínimo :min caracteres',
            'password.max' => 'A :attribute deve ter no máximo :max caracteres',
            'password.regex' => 'A :attribute deve ter pelo menos 1 letra e 1 número',
            '*.required' => 'Preencha o :attribute',
            '*.string' => 'O :attribute deve ser um texto',
            '*.alpha_dash' => 'O :attribute deve possuir apenas letra, número, underline e traço',
            '*.digits' => 'O :attribute deve ter :digits dígitos',
            '*.email' => 'O :attribute deve ser um endereço de email válido',
            '*.max' => 'O :attribute deve possuir no máximo :max caracteres',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'fullName' => 'Nome Completo',
            'userName' => 'Nome de Login',
            'zipCode' => 'CEP',
            'email' => 'Email',
            'password' => 'Senha',
        ];
    }
}
