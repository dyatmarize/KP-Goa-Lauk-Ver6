@extends('layout/main')

@section('title', 'Upload')

@section('content')
<div class="container"><br>
    <div class="col-lg-8 mx-auto my-5">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br />
            @endforeach
        </div>
        @endif

        <form action="/uploadgallery" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <b>Nama</b>
                <input type="text" class="form-control" id="nama" name="nama" value="{{auth()->user()->name}}" readonly>
            </div>

            <div class="form-group">
                <b>Upload</b>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>

            <input type="submit" value="submit" class="btn btn-primary"><br><br>
        </form>
    </div>

</div>
@endsection