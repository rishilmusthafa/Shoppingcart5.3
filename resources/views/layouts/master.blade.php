<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
      <link rel="stylesheet" href="{{ URL::to('css/all.min.css')}}">
    @yield('styles')
  </head>
  <body>
  @include('partials.header')
  <div class="container">
  @yield('content')
  </div>

  <script
			  src="https://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="https://use.fontawesome.com/b7e4c82b14.js"></script>
  <script src="{{ URL::to('js/all.min.js')}}"></script>
  @include('partials.footer')
  @yield('scripts')
  </body>
</html>
