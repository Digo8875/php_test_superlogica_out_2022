<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterPostRequest;
use App\Models\User;

class FormExerciseController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function store(RegisterPostRequest $request)
    {
        $userData = $request->only(
            'fullName',
            'userName',
            'zipCode',
            'email',
            'password'
        );

        User::create($userData);

        return redirect()->route('home');
    }
}
