@extends('layouts.main')

@section('content')
  <div class="row flex-wrap justify-content-center margin-box">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header text-light">
          <h3 class="text-center text-info">Register</h3>
        </div>
        <div class="card-body">
          <form id="login-form" class="form" action="{{ route('register') }}" method="post">
          @csrf
          @if(session('errors'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Regestrasi Gagal:
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
          @endif
            <div class="form-group">
              <label for="name" class="text-dark mt-3">Username:</label><br>
              <input type="text" name="name" placeholder="Username" id="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="email" class="text-dark">Email:</label><br>
              <input type="text" name="email" placeholder="Email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password" class="text-dark">Password:</label><br>
              <input type="password" name="password" placeholder="Password" id="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="comfirmpassword">Confirm Password:</label>
              <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
          </div>
            <div class="form-group d-flex justify-content-center">
              <br>
              <input type="submit" name="submit" class="btn btn-dark" value="Register">
            </div>
          </form>
        </div>
        <p class="ml-3">Sudah punya Akun?<a href="{{ route('login') }}" class="float-right mr-4">Login</a></p>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
@endsection