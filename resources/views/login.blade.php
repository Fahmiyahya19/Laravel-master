@extends('layouts.main')

@section('content')
  <div class="row flex-wrap justify-content-center margin-box">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center text-info">Login</h3>
        </div>
        <div class="card-body">
          <form id="login-form" class="form" action="{{ route('login') }}" method="post">
            @csrf
            @if(session('errors'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Login Gagal:
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
                  <ul>
                  <li>Email atau Password salah.</li>
                  </ul>
              </div>
            @endif
            <div class="form-group">
              <label for="email" class="text-dark">Email:</label><br>
              <input type="text" name="email" placeholder="Email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password" class="text-dark">Password:</label><br>
              <input type="password" name="password" placeholder="Password" id="password" class="form-control">
            </div>
            <div class="form-group d-flex justify-content-center">
              <br>
              <input type="submit" name="submit" class="btn btn-success" value="login">
            </div>
          </form>
        </div>
          <p class="ml-3">Belum punya Akun?<a href="{{ route('register') }}" class="float-right mr-4">Register</a></p>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
@endsection