@extends('layouts.master')
@section('title')
Shopping Cart
@endsection
@section('content')
@if (Session::has('success'))
  <div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success')}}
      </div>
    </div>
  </div>
@endif

  @foreach ($products->chunk(4) as $productchunk)
    <div class="row">
      @foreach ($productchunk as $product)
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail zoomIn animated">
            <img  class="img-responsive img-rounded" src="{{$product->imagepath}}" alt="...">
            <div class="caption">
              <h3>{{$product->title}}</h3>
              <p class="description">{{$product->description}}
              </p>
              <div class="clearfix">
                <div class="pull-left price">
                  ${{$product->price}}
                </div>
                <a href="{{ route('product.addtocart', ['id' => $product->id])}}" class="btn btn-custom pull-right" role="button">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach
@endsection
