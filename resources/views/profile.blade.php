@extends('layout/main')

@section('title', 'My Profile')

@section('banner')
<div class="main-banner">
    <div class="container">
        <div class="banner-position-main">

            <div class="banner-right-txt">
                <h4>Profile</h4>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="container py-lg-5 py-md-4 py-sm-4 py-3">

    <div class="form">
        <table class="table">
            <tr>
                <th>Name</th>
                <td>{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <th>E-Mail</th>
                <td>{{ Auth::user()->email }}</td>
            </tr>
            <tr>
                <td><a href="/editprofile" class="btn btn-primary">Edit Profile</a></td>
                <td><a href="/changePassword" class="btn btn-primary">Ganti Password</a></td>
            </tr>
        </table>


    </div>
    <!-- <form action="#" method="POST">
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
                <button id="savebtn" name="savebtn" class="btn btn-info">Save</button>
            </div>
        </div>
    </form> -->
</div>
@endsection