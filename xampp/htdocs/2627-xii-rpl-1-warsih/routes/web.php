<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/forms/elements', function () {
    return view('template.elements');
});
Route::get('/forms/layout', function () {
    return view('forms.layout');
});
Route::get('/forms/elements', function () {
    return view('template.elements');
});

Route::get('/forms/layout', function () {
    return view('forms.layout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/table', function () {
    return view('table');
});
