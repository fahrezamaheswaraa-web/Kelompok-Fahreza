<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeranController extends Controller
{
    // READ: Menampilkan data
    public function index()
    {
        $peran = DB::table('peran')->get();
        return view('peran.index', compact('peran'));
    }

    // CREATE: Form tambah data
    public function create()
    {
        return view('peran.create');
    }

    // CREATE: Simpan data tanpa kolom nama
    public function store(Request $request)
    {
        DB::table('peran')->insert([
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('peran.index');
    }
}