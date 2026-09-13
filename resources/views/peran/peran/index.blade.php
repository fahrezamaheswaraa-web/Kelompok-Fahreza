@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Peran</h3>
            <div class="card-tools">
                <a href="{{ route('peran.create') }}" class="btn btn-sm btn-primary">Tambah Peran</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama Peran</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($peran as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->nama }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center">Data masih kosong</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection