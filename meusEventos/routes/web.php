<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function () {
    return view('hello-world');
});


// dominio.com.br ou 127.0.0.1:8000 = callback na view de acordo com a /

// verbos HTTP: GET, POST, PUT, PATCH, DELETE e Options