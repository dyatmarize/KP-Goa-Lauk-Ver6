@extends('layout/main')

@section('title', 'Edit Artikel')

@section('content')
<section>
	<div class="container"><br>
		<div class="col-lg-8 mx-auto my-5">
			@if(count($errors) > 0)
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
				{{ $error }} <br />
				@endforeach
			</div>
			@endif

			<div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
				<h6>Edit Artikel</h6>
			</div>

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
</section>
@endsection