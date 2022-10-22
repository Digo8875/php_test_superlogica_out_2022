<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterPostRequest;
use App\Models\User;

class FormExerciseController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('exercise_1.index', ['users' => $users]);
    }

    public function form()
    {
        return view('exercise_1.form');
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

        return redirect()->route('exercise_1.index');
    }
}
