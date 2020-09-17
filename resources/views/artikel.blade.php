@extends('layout/main')

@section('title', 'About')

@section('content')
<section class="service py-lg-4 py-md-4 py-sm-3 py-3" id="service">
  <div class="container py-lg-5 py-md-4 py-sm-4 py-3">

    <h3 class="title text-center mb-2">Services</h3>
    <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
      <h6>Artikel anda nih</h6>
      <a href="{{ url('/tambahartikel') }}">tambah</a>
      <a href="{{ url('/artikeluser') }}">liat</a>
    </div>
    <div class="row">
      @foreach($artikel as $a)
      <div class="col-lg-4 col-md-6 col-sm-6 ser-icon my-3">
        <div class="grid-wthree-service">
          <span class="" aria-hidden="true"></span>
          <div class="ser-text-wthree mt-3">
            <h4>
              {{ $a->judul }}
            </h4>
            <p class="mt-2">{{$a->deskripsi}}</p>
            <h1 class="mt-2">{{$a->nama}}</h1>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection