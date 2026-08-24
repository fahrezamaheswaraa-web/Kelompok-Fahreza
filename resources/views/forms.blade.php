@extends('layout')

@section('content')
<div class="content-wrapper p-3">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example Form</h3>
    </div>
    <form>
      <div class="card-body">
        <div class="form-group mb-3">
          <label>Email address</label>
          <input type="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group mb-3">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group mb-3">
          <label>File input</label>
          <input type="file" class="form-control">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection