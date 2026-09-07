@extends('template.index')

@section('title', 'Tambah Data Genre')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Genre</h3>
            </div>
            
            <form action="{{ route('genre.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama Genre</label>
                        <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama genre">
                    </div>
                    @error('nama')
                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="card-footer d-flex justify-content-between">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection