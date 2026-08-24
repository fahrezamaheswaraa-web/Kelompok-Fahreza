@extends('layout')

@section('content')
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Text Editor</h3>
  </div>
  <div class="card-body">
    <div class="form-group mb-3">
      <label>Catatan / Deskripsi</label>
      <textarea class="form-control" rows="4" placeholder="Ketik deskripsi di sini..."></textarea>
    </div>
  </div>
</div>
@endsection