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

  <a href="/uploadgallery" class="btn btn-dark mb-2">Upload</a>

  <div class="row text-center text-lg-left">

    @foreach($gallerys as $g)
    <div class="col-lg-3 col-md-4 col-6">
    <div>
      <a class="d-block mb-4 h-100">
        <img class="img-fluid img-thumbnail" src="{{asset('storage/images/'.$g->file)}}" alt="">
      </a>
      <form action="galleryuser/{{ $g->id }}" method="post" class="d-inline" >
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger btn-sm float-right">Delete</button>
    </div>
    </div>
    @endforeach
    
  </div>
  {{$gallerys->links()}}
</div>



@endsection