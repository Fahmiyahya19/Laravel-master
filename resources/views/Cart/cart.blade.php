@extends('layouts.mainlogged')

@section('content')
<br>
<br>
<br>
<br>

<div class="container my-5">
    <div class="table">
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
            <table width="100%" id="table" class="table table-bordered table-consoned table-striped my-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>User_id</th>
                        <th>Game</th>
                        <th>Value</th>
                        <th width="300px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
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


@section('js')
    <script>
        $(function(){
            datatable();
        });

        var dataTable;
        function datatable(){
            dataTable =  $('#table').DataTable({
                reponsive:true,
                jQueryUI: true,
                processing: true,
                ajax: '<?= route('cartdata') ?>',
                columns:[
                    {data: 'id', name: 'id'},
                    {data: 'username', name: 'username'},
                    {data: 'user_id', name: 'user_id'},
                    {data: 'game', name: 'game'},
                    {data: 'value', name: 'value'},
                    {data: 'id', name:'users.id', searchable: false, orderable: false, class: 'text-center nowrap',mRender: function(data){
                        return '<button id="btn-view" type="button" class="btn btn-info btn-sm" onclick="view('+data+')">View</button>\n\
                                <button id="btn-edit" type="button" class="btn btn-warning btn-sm" onclick="edit('+data+')">Edit</button>\n\
                                <button id="btn-reset" type="button" class="btn btn-primary btn-sm" onclick="resetPassword('+data+')">Reset Password</button>\n\
                                <button type="button" class="btn btn-danger btn-sm" onclick="destroy('+data+')">Delete</button>';
                    }}
                ]
            });
        }
    </script>
@endsection