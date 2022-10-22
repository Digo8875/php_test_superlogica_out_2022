<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

#Exercício 1 - Formulário
Route::get('/users', [App\Http\Controllers\FormExerciseController::class, 'index'])->name('exercise_1.index');
Route::get('/form', [App\Http\Controllers\FormExerciseController::class, 'form'])->name('form');
Route::post('/register', [App\Http\Controllers\FormExerciseController::class, 'store'])->name('register');
