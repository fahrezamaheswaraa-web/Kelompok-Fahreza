<?php

use Illuminate\Support\Facades\Route;

// 1. Awal buka website -> Register
Route::get('/', function () {
    return view('template.register');
})->name('register.page');

// 2. Halaman Login
Route::get('/login', function () {
    return view('template.login');
})->name('login.page');

// 3. Halaman Dashboard Utama
Route::get('/dashboard', function () {
    return view('template.dashboard');
})->name('dashboard');

// 4. Halaman Form
Route::get('/form', function () {
    return view('template.form');
})->name('form.page');

// 5. Halaman Table
Route::get('/table', function () {
    return view('template.table');
})->name('table.page');

// 6. Halaman Chart
Route::get('/chart', function () {
    return view('template.chart');
})->name('chart.page');

Route::get('/', function () {
    return view('template.index');
});

Route::get('/register', function () {
    return view('template.register');
});
