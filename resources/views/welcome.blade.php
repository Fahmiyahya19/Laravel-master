@extends('layouts.main')

@section('content')
  <!-- Slide - lg-->
  <div class="head d-none d-md-block">
    <div id="carouselExampleIndicators" class="carousel slide " data-interval="4000" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="0#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <!-- Dekstop -->
      <div class="carousel-caption text-lg-position d-md-none d-lg-block">
        <h1 class="display-4">Top Up Game Terpercaya?</h1>
        <h5 class="display-4 font-weight-bold ">Beli di PAYSHOP!</h5>
        <br>
        <a href="#beli"><button class="btn btn-primary">Beli Sekarang!</button></a>
      </div>
      <!-- Ipad -->
      <div class="carousel-caption text-md-position d-lg-none d-md-block">
        <h1 class="display-5">Top Up Game Terpercaya?</h1>
        <h5 class="display-5 font-weight-bold ">Beli di PAYSHOP!</h5>
        <br>
        <a href="#beli"><button class="btn btn-primary">Beli Sekarang!</button></a>
      </div>
      <div class="carousel-inner height-lg">
        <div class="carousel-item active">
          <img class="d-md-block w-100 opacity" src="img/slide1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-md-block w-100 opacity" src="img/slide2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-md-block w-100 opacity" src="img/slide3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- Slide md lg -->
  <!-- Slide sm xs -->
  <div class="head d-md-none d-sm-block">
    <div id="carouselExampleIndicators" class="carousel slide" data-interval="4000" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
      </ol>
      <!-- Sm -->
      <div class="carousel-caption text-sm-position d-md-none">
        <h1 class="sm-size ">Top Up Game Terpercaya?</h1>
        <h5 class="sm-size font-weight-bold">Beli di PAYSHOP!</h5>
        <a href="#beli" class="sm-size"><button class="btn btn-primary">Beli</button></a>
      </div>
      <div class="carousel-inner margin">
        <div class="carousel-item active">
          <img class="d-block w-100 opacity" src="img/slide1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 opacity" src="img/slide2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 opacity" src="img/slide3.jpg" alt="Third slide">
        </div>
      </div>
    </div>
  </div>
  <!-- Slide sm xs -->
  <br>
  <br>
  <!-- Thumbnail -->
  <div class="container">
    <div class="row justify-content-center ">
      <div class="col-md-3">
        <img src="img/thumb1.jpg" class="" alt="" width="100%">
      </div>
      <!-- Dekstop -->
      <div class="col-md-6 text-left mt-4 ml-5 d-none d-lg-block">
        <h4 class="font-weight-bold">PUBGM 3th Aniversary</h4>
        <br>
        <p class="lead">Tencent selaku developer PUBGM mengadakan acara tahunan terbesar mereka yaitu ulang tahunnya yang ke 3 tahun</p>
        <br>
        <a href="#"><button class="btn btn-primary">Selengkapnya</button></a>
      </div>
      <!-- Tablet -->
      <div class="col-md-6 text-left ml-5 d-none d-md-block d-lg-none">
        <h4 class="font-weight-bold">PUBGM 3th Aniversary</h4>
        <p class="lead py-2">Tencent selaku developer PUBGM mengadakan acara...</p>
        <a href="#"><button class="btn btn-primary">Selengkapnya</button></a>
      </div>
      <!-- Smartphone-->
      <div class="col-md-6 text-left mt-4 d-md-none d-sm-block">
        <h4 class="font-weight-bold">PUBGM 3th Aniversary</h4>
        <br>
        <p class="lead">Tencent selaku developer PUBGM mengadakan acara tahunan terbesar mereka yaitu ulang tahunnya yang ke 3 tahun</p>
        <br>
        <a href="#"><button class="btn btn-primary">Selengkapnya</button></a>
      </div>
      <!-- Dekstop-->
    <div class="row justify-content-center mt-5">
      <div class="col-md-6 text-left mt-4 mr-5 d-none d-lg-block">
        <h4 class="font-weight-bold">Valorant</h4>
        <br>
        <p class="lead">Riot Games meraup banyak untung dari Valorant setelah 1 tahun perilisan. Untuk yang belum tahu ini adalah...</p>
        <br>
        <a href="#"><button class="btn btn-primary">Selengkapnya</button></a>
      </div>
      <!-- Tablet -->
      <div class="col-md-6 text-left mr-5 d-none d-md-block d-lg-none">
        <h4 class="font-weight-bold">Valorant</h4>
        <p class="lead py-2">Riot Games meraup banyak untung dari Valorant...</p>
        <a href="#"><button class="btn btn-primary">Selengkapnya</button></a>
      </div>
      <div class="col-md-3">
        <img src="img/thumb2.png" class="justify-content-end" alt="" width="100%">
      </div>
      <!-- Smartphone-->
      <div class="col-md-6 text-left mt-4 mr-5 d-sm-block d-md-none">
        <h4 class="font-weight-bold">Valorant</h4>
        <br>
        <p class="lead">Riot Games meraup banyak untung dari Valorant setelah 1 tahun perilisan. Untuk yang belum tahu ini adalah...</p>
        <br>
        <a href="#"><button class="btn btn-primary">Selengkapnya</button></a>
      </div>
    </div>
    </div>
  </div>
  <!-- Thumbnail -->
  <!-- Card md-lg-->
  <br id="beli">
  <br>
  <br>
  <h1 class="h1 text-center">Hot Promo</h1>
  <!-- md - lg -->
  <div class="d-none d-md-block">
    <div class="row flex-wrap justify-content-center my-5">
      <div class="col-md-4 p-3">
        <div class="card">
          <img class="card-img-top logo" src="img/logo1.png" alt="image">
          <div class="card-body text-center">
            <h5 class="card-title">PUBG Mobile</h5>
            <p class="card-text">300UC</p>
            <a href="{{ route('cart') }}" class="btn btn-primary">$4.99</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-3">
        <div class="card">
          <img class="card-img-top logo" src="img/logo2.jpg" alt="image">
          <div class="card-body text-center">
            <h5 class="card-title">Valorant</h5>
            <p class="card-text">300Points</p>
            <a href="{{ route('cart') }}" class="btn btn-primary">$3.49</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-3">
        <div class="card">
          <img class="card-img-top logo" src="img/logo3.jpg" alt="image">
          <div class="card-body text-center">
            <h5 class="card-title">Genshin Impact</h5>
            <p class="card-text">300GC</p>
            <a href="{{ route('cart') }}" class="btn btn-primary">$4.99</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 my-4 p-3">
        <div class="card">
          <img class="card-img-top logo" src="img/logo1.png" alt="image">
          <div class="card-body text-center">
            <h5 class="card-title">PUBG Mobile</h5>
            <p class="card-text">900UC</p>
            <a href="{{ route('cart') }}" class="btn btn-primary">$14.99</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 my-4 p-3">
        <div class="card">
          <img class="card-img-top logo" src="img/logo2.jpg" alt="image">
          <div class="card-body text-center">
            <h5 class="card-title">Valorant</h5>
            <p class="card-text">1000Points</p>
            <a href="{{ route('cart') }}" class="btn btn-primary">$9.99</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Card sm -->
  <div class="d-md-none">
    <div class="row flex-wrap justify-content-md-center p-5">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top logo" src="img/logo1.png" alt="image">
          <div class="card-body text-center">
            <h5 class="card-title">PUBG Mobile</h5>
            <p class="card-text">300UC</p>
            <a href="{{ route('cart') }}" class="btn btn-primary">$4.99</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-5">
        <div class="card">
          <img class="card-img-top logo" src="img/logo2.jpg" alt="image">
          <div class="card-body text-center">
            <h5 class="card-title">Valorant</h5>
            <p class="card-text">300Points</p>
            <a href="{{ route('cart') }}" class="btn btn-primary">$3.49</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-5">
        <div class="card">
          <img class="card-img-top logo" src="img/logo3.jpg" alt="image">
          <div class="card-body text-center">
            <h5 class="card-title">Genshin Impact</h5>
            <p class="card-text">300GC</p>
            <a href="{{ route('cart') }}" class="btn btn-primary">$4.99</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-5">
        <div class="card">
          <img class="card-img-top logo" src="img/logo1.png" alt="image">
          <div class="card-body text-center">
            <h5 class="card-title">PUBG Mobile</h5>
            <p class="card-text">900UC</p>
            <a href="{{ route('cart') }}" class="btn btn-primary">$14.99</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 my-5 mt-5">
        <div class="card">
          <img class="card-img-top logo" src="img/logo2.jpg" alt="image">
          <div class="card-body text-center">
            <h5 class="card-title">Valorant</h5>
            <p class="card-text">1000Points</p>
            <a href="{{ route('cart') }}" class="btn btn-primary">$9.99</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- sm -->
@endsection