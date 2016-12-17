@extends('layouts.master')
@section('title')
Shopping Cart
@endsection
@section('content')
  <div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
      <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
          <span class="sr-only">60% Complete (warning)</span>
        </div>
      </div>
      <h1>Checkout</h1>
      <h4>Your Total: {{ $total }}</h4>
      <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''}}">
        {{ Session::get('error')}}
      </div>
      <form  id="checkout-form" action="{{ route('checkout')}}" method="post">
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
              <p class="help-block">Help text here.</p>
            </div>
          </div>
            <div class="col-xs-12">
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
              <p class="help-block">Help text here.</p>
            </div>
            </div>
            <div class="col-xs-12">
            <div class="form-group">
              <label for="card-name">Card Holder Name</label>
              <input type="text" class="form-control" id="card-name" placeholder="Card Holder Name" required>
              <p class="help-block">Help text here.</p>
            </div>
            </div>
            <div class="col-xs-12">
            <div class="form-group">
              <label for="card-number">Credit Card Number</label>
              <input type="text" class="form-control" id="card-number" placeholder="Credit Card Number" required>
              <p class="help-block">Help text here.</p>
            </div>
            </div>
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="card-expiry-month">Expiration Month</label>
                    <input type="text" class="form-control" id="card-expiry-month" placeholder="Expiration Month" required>
                    <p class="help-block">Help text here.</p>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="card-expiry-year">Expiration Year</label>
                    <input type="text" class="form-control" id="card-expiry-year" placeholder="Expiration Year" required>
                    <p class="help-block">Help text here.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12">
            <div class="form-group">
              <label for="card-cvc">CVC</label>
              <input type="text" class="form-control" id="card-cvc" placeholder="CVC" required>
              <p class="help-block">Help text here.</p>
            </div>
            </div>
          </div>
          {{ csrf_field() }}
          <button type="submit" class="btn btn-success submit" name="button">Buy now</button>
      </form>
    </div>
  </div>
@endsection
@section('scripts')
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <script type="text/javascript" src="{{ URL::to('src/js/checkout.js')}}"></script>
@endsection
