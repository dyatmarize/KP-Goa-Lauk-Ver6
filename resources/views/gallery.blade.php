@extends('layout/main')

@section('title', 'Gallery')

@section('banner')
<div class="main-banner">
  <div class="container">
    <div class="banner-position-main">

      <div class="banner-right-txt">
        <h4>Gallery</h4>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="container">

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Thumbnail Gallery</h1>

  <hr class="mt-2 mb-2">
  @if(auth()->user())
    <a href="/uploadgallery" class="btn btn-dark mb-2">Upload</a>
    <a href="/galleryuser">liat</a>
  @else
  @endif
  <div class="row text-center text-lg-left">
  <div class="col-lg-3 col-md-6 col-sm-6 gallery-img-grid ">
        <img src="images/1.jpeg" alt="news image" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 gallery-img-grid ">
        <img src="images/12.jpeg" alt="news image" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 gallery-img-grid ">
        <img src="images/4.jpeg" alt="news image" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 gallery-img-grid ">
        <img src="images/15.jpeg" alt="news image" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 gallery-img-grid ">
        <img src="images/6.jpeg" alt="news image" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 gallery-img-grid ">
        <img src="images/8.jpeg" alt="news image" class="img-fluid">
      </div>
    @foreach($gallerys as $g)
    <div class="col-lg-3 col-md-4 col-6">
      <a class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="{{asset('storage/'.$g->file)}}" alt="">
      </a>
    </div>
    @endforeach
  </div>
  {{$gallerys->links()}}
</div>
@endsection