@extends('layout')

@section('content')
<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title">Form Validation Example</h3>
  </div>
  <form>
    <div class="card-body">
      <div class="form-group mb-3">
        <label>Email address</label>
        <input type="email" class="form-control is-invalid" placeholder="Enter email">
        <span class="error invalid-feedback">Please enter a valid email address</span>
      </div>
      <div class="form-group mb-3">
        <label>Password</label>
        <input type="password" class="form-control is-valid" value="123456">
        <span class="valid-feedback">Password looks good!</span>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-warning">Submit</button>
    </div>
  </form>
</div>
@endsection