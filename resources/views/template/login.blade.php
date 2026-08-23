@extends('template.master')

@section('konten')
  <section class="content-header">
    <div class="container-fluid">
      <h1>Halaman Login</h1>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Form Login User</h3>
        </div>
        <form class="form-horizontal">
          <div class="card-body">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" placeholder="Password">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection