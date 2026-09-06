<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\genrecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Halaman Utama (Homepage / Index)
Route::get('/', function () {
    return view('template.index');
})->name('home');

// 2. Halaman Register (GET & POST)
Route::get('/register', function () {
    return view('template.register');
})->name('register.page');

Route::post('/register', function () {
    return redirect()->route('login');
})->name('register.store');

// 3. Halaman Login (GET & POST)
Route::get('/login', function () {
    return view('template.login');
})->name('login');

Route::post('/login', function () {
    return redirect()->route('dashboard');
})->name('login.post');

// 4. Halaman Dashboard Utama
Route::get('/dashboard', function () {
    return view('template.dashboard');
})->name('dashboard');

// 5. Halaman Layout / Template Tambahan
Route::get('/form', function () {
    return view('template.form');
})->name('form.page');

Route::get('/table', function () {
    return view('template.table');
})->name('table.page');

Route::get('/chart', function () {
    return view('template.chart');
})->name('chart.page');

Route::get('/widget', function () {
    return view('template.widget');
})->name('widget.page');

/*
|--------------------------------------------------------------------------
| CRUD Genre Routes
|--------------------------------------------------------------------------
*/
// 1. Menampilkan list data genre (index)
Route::get('/genre', [genrecontroller::class, 'index'])->name('genre.index');

// 2. Menampilkan form untuk membuat data baru (create)
Route::get('/genre/create', [genrecontroller::class, 'create'])->name('genre.create');

// 3. Menyimpan data baru ke tabel genre (store)
Route::post('/genre', [genrecontroller::class, 'store'])->name('genre.store');

// 4. Menampilkan detail data dengan id tertentu (show)
Route::get('/genre/{genre_id}', [genrecontroller::class, 'show'])->name('genre.show');

// 5. Menampilkan form untuk edit data dengan id tertentu (edit)
Route::get('/genre/{genre_id}/edit', [genrecontroller::class, 'edit'])->name('genre.edit');

// 6. Menyimpan perubahan data (update) untuk id tertentu (update)
Route::put('/genre/{genre_id}', [genrecontroller::class, 'update'])->name('genre.update');

// 7. Menghapus data dengan id tertentu (destroy/delete)
Route::delete('/genre/{genre_id}', [genrecontroller::class, 'destroy'])->name('genre.destroy');