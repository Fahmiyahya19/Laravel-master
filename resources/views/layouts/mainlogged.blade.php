<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('template/css/datatable.css') }}">
    <link rel="stylesheet" href="{{ url('template/css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="{{ url('template/datatable/DataTables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('template/datatable/Button/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('template/datatable/DataTables/css/dataTables.responsive.min.css') }}">
    <link rel="stylesheet" href="{{ url('template/datatable/datatables.css') }}">
    

    <title>PAYSHOP | {{ $title }}</title>
  </head>
  <body>
    {{-- navbar --}}
    @include('partials.navlogged')
    {{-- Content --}}
    <div class="">
      @yield('content')
    </div>

    <script src="{{ url('template/js/jquery.js') }}"></script>
    <script src="{{ url('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('template/datatable/datatables.js') }}"></script>
    <script src="{{ url('template/datatable/DataTables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('template/datatable/DataTables/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ url('template/datatable/DataTables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ url('template/datatable/DataTables/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ url('template/datatable/DataTables/js/dataTables.select.min.js')}}"></script>
    <script src="{{ url('template/datatable/DataTables/js/dataTables.searchPanes.min.js')}}"></script>
    <script src="{{ url('template/datatable/DataTables/js/dataTables.scroller.min.js')}}"></script>
    @yield('js')
  </body>
  <footer>
    <div class="footer bg-cyan">
      <h3 class="text-center text-light pt-4">Anda senang kami puas!</h3>
      <h6 class="text-center text-light">Copyright 2021</h6>
    </div>
  </footer>
</html>