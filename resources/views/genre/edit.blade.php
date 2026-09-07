@extends('template.index')

@section('title', 'Edit Genre')

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card bg-dark text-white">
      <div class="card-header">
        <h3 class="card-title">Edit Genre</h3>
      </div>
      <form action="{{ route('genre.update', $genre->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="nama">Nama Genre</label>
            <input type="text" name="nama" class="form-control bg-dark text-white @error('nama') is-invalid @enderror" id="nama" value="{{ old('nama', $genre->nama) }}" placeholder="Masukkan nama genre">
            @error('nama')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('genre.index') }}" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection