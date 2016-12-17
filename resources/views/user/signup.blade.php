@extends('layouts.master')
@section('content')
  <div class="row">
  <div class="col-md-4 col-md-offset-4">
  <h1>Sign Up</h1>
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
      @endforeach
    </div>
  @endif

  <form action="{{ route('user.signup') }}" method="post">
    <div class="form-group">
      <label for="email">email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      <p class="help-block">Enter Your Email.</p>
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
      <p class="help-block">Enter Your Name.</p>
    </div>	
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <p class="help-block">Enter Your Password.</p>
    </div>
    <button type="submit" name="button" class="btn btn-primary">Signup</button>
    {{ csrf_field() }}
  </form>
  </div>
  </div>
@endsection
