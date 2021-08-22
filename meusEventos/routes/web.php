<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// function = callback
Route::get('/hello-world', [\App\Http\Controllers\HelloWorldController::class, 'helloWorld']);

// ? indica que não é um parâmetro não obrigatório
// assim a varável dinâmica deve ter um valor padrão (= null ou = "Usuário")
Route::get('/hello/{name?}', [\App\Http\Controllers\HelloWorldController::class, 'hello']);

// Route::get, Route::post, Route::put, Route::patch, Route::delete, Route::options
// dominio.com.br ou 127.0.0.1:8000 = callback na view de acordo com a /
// verbos HTTP: GET, POST, PUT, PATCH, DELETE e Options