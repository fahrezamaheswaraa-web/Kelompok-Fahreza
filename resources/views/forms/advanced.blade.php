@extends('layout')

@section('content')
<div class="card card-success">
  <div class="card-header">
    <h3 class="card-title">Advanced Elements</h3>
  </div>
  <div class="card-body">
    <div class="form-group mb-3">
      <label>Pilihan Kategori (Select)</label>
      <select class="form-control">
        <option>Pilihan 1</option>
        <option>Pilihan 2</option>
      </select>
    </div>
    <div class="form-group mb-3">
      <label>Tanggal</label>
      <input type="date" class="form-control">
    </div>
  </div>
</div>
@endsection