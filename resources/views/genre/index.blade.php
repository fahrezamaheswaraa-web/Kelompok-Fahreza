@extends('template.index')

@section('title', 'Genre')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card bg-dark text-white">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title m-0">Daftar Genre</h3>
        <a href="{{ route('genre.create') }}" class="btn btn-primary btn-sm ml-auto">+ Tambah Genre</a>
      </div>
      <div class="card-body p-0">
        <table class="table table-dark table-striped m-0">
          <thead>
            <tr>
              <th style="width: 10%">No</th>
              <th>Nama Genre</th>
              <th style="width: 15%" class="text-right">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($genre as $key => $item)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nama }}</td>
                <td class="text-right">
                  <!-- Tombol Edit -->
                  <a href="{{ route('genre.edit', $item->id) }}" class="btn btn-outline-secondary btn-sm p-1">
                    <i class="fas fa-pencil-alt"></i>
                  </a>

                  <!-- Tombol Hapus -->
                  <form action="{{ route('genre.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm p-1" onclick="return confirm('Yakin hapus data?')">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="3" class="text-center">Belum Ada Data</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection