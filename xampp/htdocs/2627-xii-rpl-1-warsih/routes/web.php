<?php

use Illuminate\Support\Facades\Route;

Route::get('/forms/elements', function () {
    return view('template.elements');
});
Route::get('/forms/layout', function () {
    return view('forms.layout');
});