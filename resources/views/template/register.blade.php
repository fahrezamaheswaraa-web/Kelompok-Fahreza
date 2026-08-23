@extends('template.master')

@section('konten')
  <section class="content-header">
    <div class="container-fluid">
      <h1>Halaman Register</h1>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Registrasi User</h3>
        </div>
        <form class="form-horizontal">
          <div class="card-body">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Nama Lengkap">
              </div>
            </div>
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
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Konfirmasi Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" placeholder="Ulangi Password">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection