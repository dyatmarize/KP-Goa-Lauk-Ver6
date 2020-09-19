@extends('layout/main')

@section('title', 'About Us')

@section('banner')
<div class="main-banner">
  <div class="container">
    <div class="banner-position-main">

      <div class="banner-right-txt">
        <h4>About Us</h4>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about">
  <div class="container py-lg-5 py-md-4 py-sm-4 py-3">

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 abut-img-two my-3">
        <img src="images/wisata.jpg" alt="" class="img-fluid float-left">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 left-abut-txt my-3">
        <h3 class="title mb-2">About Us</h3>
        <div class="title-w3ls-text mb-lg-4 mb-md-4 mb-sm-3 mb-3">
          <h6>Some Words About Us
          </h6>
        </div>
        <div class="about-right-grid">
          <p>Goa Lauk kaya akan ornamen. Menurut cerita penduduk, dahulunya di goa ini terdapat banyak ikan, sehingga masyarakat menyebutnya goa ini dengan Goa Lauk.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 abut-img-two my-3">
        <img src="images/goa.jpg" alt="" class="img-fluid float-right">
      </div>
    </div>
  </div>
</section>
<!--//about -->
@endsection