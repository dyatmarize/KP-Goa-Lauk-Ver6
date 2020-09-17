@extends('layout/main')

@section('title', 'About')

@section('content')
    <!-- //header -->
    <!-- banner -->
    <!-- <div class="main-banner">
      <div class="container">
        <div class="banner-position-main">

          <div class="banner-right-txt">
            <h5 class="mb-sm-3 mb-2">Thrill & Joy</h5>
            <h4>Adventure begins</h4>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- //banner -->
  <!-- about -->
  <div class="container"><br>
    <div class="col-lg-8 mx-auto my-5">	
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/artikeluser/{{ $artikel->id }}" method="POST" enctype="multipart/form-data">
                    @method('patch')
					{{ csrf_field() }}
				
                    <div class="form-group">
						<b>Judul</b>
						<input type="text" class="form-control" id="judul" name="judul" value="{{ $artikel->judul }}">
					</div>

					<div class="form-group">
						<b>Keterangan</b>
						<input class="form-control" id="deskripsi" name="deskripsi" value="{{ $artikel->deskripsi }}">
					</div>

					<input type="submit" value="submit" class="btn btn-primary"><br><br>
                </form>
                </div>
        	
            </div>
@endsection