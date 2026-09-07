<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class genrecontroller extends Controller
{
    // 1. Menampilkan daftar data genre (Read)
    public function index()
    {
        $genre = DB::table('genres')->get();
        return view('genre.index', compact('genre'));
    }

    // 2. Menampilkan form create
    public function create()
    {
        return view('genre.create');
    }

    // 3. Menyimpan data baru (Store)
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        DB::table('genres')->insert([
            'nama' => $request->input('nama'),
        ]);

        return redirect('/genre');
    }

    // 4. Menampilkan detail data genre (Show)
    public function show($genre_id)
    {
        $genre = DB::table('genres')->where('id', $genre_id)->first();
        return view('genre.show', compact('genre'));
    }

    // 5. Menampilkan form edit
    public function edit($genre_id)
    {
        $genre = DB::table('genres')->where('id', $genre_id)->first();
        return view('genre.edit', compact('genre'));
    }

    // 6. Memproses perubahan data (Update)
    public function update(Request $request, $genre_id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        DB::table('genres')
            ->where('id', $genre_id)
            ->update([
                'nama' => $request->input('nama'),
            ]);

        return redirect('/genre');
    }

    // 7. Menghapus data genre (Destroy)
    public function destroy($genre_id)
    {
        DB::table('genres')->where('id', $genre_id)->delete();

        return redirect('/genre');
    }
}