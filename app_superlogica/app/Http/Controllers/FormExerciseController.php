<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterPostRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FormExerciseController extends Controller
{
    /**
    * View para exibição do formulário de cadastro de usuário do Exercício 1
    */
    public function index()
    {
        $users = User::get();
        return view('exercise_1.index', ['users' => $users]);
    }

    /**
    * View para exibição do formulário de cadastro de usuário do Exercício 1
    */
    public function form()
    {
        return view('exercise_1.form');
    }

    /**
    * Cadastrar usuário através do formulário recebido no request
    * @param RegisterPostRequest $request parâmetros da requisição que contém
    * campos do formulário para cadastro do usuário. É realizado a validação
    * através da injeção de dependência do formRequest
    */
    public function store(RegisterPostRequest $request)
    {
        $userData = $request->only(
            'fullName',
            'userName',
            'zipCode',
            'email',
            'password'
        );

        $userData['password'] = Hash::make($userData['password']);

        User::create($userData);

        return redirect()->route('exercise_1.index');
    }
}
