@extends('layouts.master')
@section('title')
Shopping Cart
@endsection
@section('content')
@if (Session::has('cart'))
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <div class="progress lightSpeedIn animated">
        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
          <span class="sr-only">60% Complete (warning)</span>
        </div>
      </div>
      <ul class="list-group  flipInX animated">
        @foreach ($products as $product)
          <li class="list-group-item">
            <span class="badge">{{$product['qty']}}</span>
            <strong>{{$product['item']['title']}}</strong>
            <span class="label label-success">{{$product['price']}}</span>
            <div class="btn-group">
                <button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action <span class="caret"></span></button>
                   <ul class="dropdown-menu">
                     <li><a href="{{ route('product.reducebyone', ['id' => $product['item']['id']]) }}">Reduce by 1</a></li>
                     <li><a href="{{ route('product.reduceall', ['id' => $product['item']['id']]) }}">Reduce All</a></li>
                  </ul>
            </div>
          </li>
        @endforeach

      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <strong>Total : {{ $totalprice }}</strong>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <a href="{{ route('checkout')}}" class="btn btn-custom" name="button">Checkout</a>
    </div>
  </div>
@else
  <div class="row">
    <div class="col-sm-12 col-md-12 text-center">
      <h2>No Items in Cart!!!</h2>
    </div>
  </div>
@endif
@endsection
