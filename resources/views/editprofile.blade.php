@extends('layout/main')

@section('title', 'My Profile')

@section('banner')
<div class="main-banner">
    <div class="container">
        <div class="banner-position-main">

            <div class="banner-right-txt">
                <h4>Edit Profile</h4>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
    <form action="/editprofile" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>
            <div class="col-md-4">
                <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">E-Mail</label>
            <div class="col-md-4">
                <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="savebtn"></label>
            <div class="col-md-4">
                <button id="savebtn" name="savebtn" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection