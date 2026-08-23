<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('template.register');
});

Route::get('/login', function () {
    return view('template.login');
});