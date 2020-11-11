@extends('layout/main')

@section('title', 'Change Password')

@section('banner')
<div class="main-banner">
    <div class="container">
        <div class="banner-position-main">

            <div class="banner-right-txt">
                <h4>Ganti Password</h4>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
 
                    <form class="form-horizontal"action="{{ route('changePassword.update') }}" method="POST">
                        @method('patch')
                        {{ csrf_field() }}
 
                        <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                            <label for="current_password" class="col-md-4 control-label">Current Password</label>
 
                            <div class="col-md-6">
                                <input id="current_password" type="password" class="form-control" name="current_password" autofocus>
                                <span class="help-block">{{ $errors->first('current_password') }}</span>
                            </div>
                        </div>
 
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">New Password</label>
 
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            </div>
                        </div>
 
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password_confirmation" class="col-md-4 control-label">New Password Confirmation</label>
 
                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                                <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
