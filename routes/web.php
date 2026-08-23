<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.index');
});

Route::get('/register', function () {
    return view('template.register');
});