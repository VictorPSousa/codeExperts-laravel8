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
    return view('welcome');
});

Route::get('/hello-world', function () {
    return "Hello World!!";
});

Route::post('/save', function(){
    
});


// dominio.com.br ou 127.0.0.1:8000 = callback na view de acordo com a /

// verbos HTTP: GET, POST, PUT, PATCH, DELETE e Options