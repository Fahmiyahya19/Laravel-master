@extends('layouts.mainlogged')

@section('content')
  <div class="row flex-wrap justify-content-center margin-box">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center text-info">Edit Data</h3>
        </div>
        <div class="card-body">
          <form id="edit-form" class="form" action="{{ route('edit',$data->id) }}" method="post">
            @csrf
            @if(session('errors'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Gagal Mengedit Data:
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
              <input type="text" name="username" id="username" class="form-control" value="{{ $data->username }}">
            </div>
            <div class="form-group">
              <label for="user_id" class="text-dark">User id</label><br>
              <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $data->user_id }}">
            </div>
            <div class="form-group">
                <label for="game" class="text-dark">Game (Valorant, PUBG, Genshin Impact)</label><br>
                <input type="text" name="game" id="game" class="form-control" value="{{ $data->game }}">
              </div>
              <div class="form-group">
                <label for="value" class="text-dark">Value($)</label><br>
                <input type="text" name="value" id="value" class="form-control" value="{{ '$'.$data->value }}">
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