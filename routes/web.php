<?php

use Illuminate\Support\Facades\Route;

Route::get('/forms/elements', function () {
    return view('template.elements');
});
Route::get('/forms/layout', function () {
    return view('forms.layout');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/forms', function () {
    return view('forms');
});
Route::get('/forms/general', function () {
    return view('forms.general');
});

Route::get('/forms/advanced', function () {
    return view('forms.advanced');
});

Route::get('/forms/editors', function () {
    return view('forms.editors');
});
Route::get('/forms/validation', function () {
    return view('forms.validation');
});
use App\Http\Controllers\PeranController;

Route::get('/peran', [PeranController::class, 'index'])->name('peran.index');
Route::get('/peran/create', [PeranController::class, 'create'])->name('peran.create');
Route::post('/peran', [PeranController::class, 'store'])->name('peran.store');