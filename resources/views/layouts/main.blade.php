<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <title>PAYSHOP | {{ $title }}</title>
  </head>
  <body>
    {{-- navbar --}}
    @include('partials.navbar')

    {{-- Content --}}
    <div class="">
      @yield('content')
    </div>

    <script src="{{ url('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
  </body>
  <footer>
    <div class="footer bg-cyan">
      <h3 class="text-center text-light pt-4">Anda senang kami puas!</h3>
      <h6 class="text-center text-light">Copyright 2021</h6>
    </div>
  </footer>
</html>