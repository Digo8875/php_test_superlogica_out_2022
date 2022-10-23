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

#Exercício 2 - Processamento e Dados
Route::get('/data_processing', [App\Http\Controllers\DataProcessingController::class, 'dataProcessing'])->name('exercise_2.data_processing');

#Exercício 3 - Database
Route::get('/exercise_3_users', [App\Http\Controllers\DatabaseExerciseController::class, 'index'])->name('exercise_3.index');
