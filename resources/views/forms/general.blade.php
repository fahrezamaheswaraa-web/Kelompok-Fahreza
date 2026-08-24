@extends('layout')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">General Elements</h3>
  </div>
  <form>
    <div class="card-body">
      <div class="form-group mb-3">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" placeholder="Masukkan nama">
      </div>
      <div class="form-group mb-3">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Masukkan email">
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
</div>
@endsection