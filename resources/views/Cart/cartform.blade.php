@extends('layouts.mainlogged')

@section('content')
  <div class="row flex-wrap justify-content-center margin-box">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center text-info">Data</h3>
        </div>
        <div class="card-body">
          <form id="cart-form" class="form" action="{{ url('cartstore') }}" method="post">
            @csrf
            @if(session('errors'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Gagal Menambahkan Data:
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </div>
            @endif
            <div class="form-group">
              <label for="username" class="text-dark">Username</label><br>
              <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
              <label for="user_id" class="text-dark">User id</label><br>
              <input type="text" name="user_id" id="user_id" class="form-control">
            </div>
            <div class="form-group">
              <label for="game" class="text-dark">Game (Valorant, PUBG, Genshin Impact)</label><br>
              <input type="text" name="game" id="game" class="form-control">
            </div>
            <div class="form-group">
              <label for="value" class="text-dark">Value($)</label><br>
              <input type="text" name="value" id="value" class="form-control" value="$">
            </div>
            <div class="form-group d-flex justify-content-center">
              <br>
              <input type="submit" name="submit" class="btn btn-info" value="Add">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
@endsection