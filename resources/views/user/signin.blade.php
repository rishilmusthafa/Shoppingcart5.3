@extends('layouts.master')
@section('content')
  <div class="row">
  <div class="col-md-4 col-md-offset-4">
  <h1>Sign In</h1>
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
      @endforeach
    </div>
  @endif

  <form action="{{ route('user.signin') }}" method="post">
    <div class="form-group">
      <label for="email">email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      <p class="help-block">Enter Your Email.</p>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <p class="help-block">Enter Your Password.</p>
    </div>
    <button type="submit" name="button" class="btn btn-primary">Sign In</button>
    {{ csrf_field() }}
  </form>
  <p>Don't have an Account <a href="{{ route('user.signup')}}">Sign Up</a></p>
  <p><i class="fa fa-facebook-square" aria-hidden="true"></i>
  Login with Facebook <a href="{{ route('fb.redirect')}}">Facebook Login</a></p>
  </div>
  </div>
@endsection
