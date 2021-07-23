@extends('layouts.mainlogged')

@section('content')
<br>
<br>
<br>
<br>

<div class="container my-5">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-md-11">
                        <h2>Cart</h2>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ route('cartform') }}" ><button class="btn btn-info">Add New</button></a>
                    </div>
                </div>
            </div>
            @csrf
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Menambahkan Data
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
             @endif
            @if(session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Berhasil Menghapus Data
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            @endif
            <table class="table table-bordered my-3">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>User_id</th>
                        <th>Game</th>
                        <th>Value</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartdata as $item)
                    <tr>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->game }}</td>
                        <td>{{ $item->value }}</td>
                        <td>
                            <a href="{{ url('cartedit',$item->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('cartdelete',$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection