<nav class="navbar navbar-default navbgcolor">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand zoomIn animated" href="{{ route('product.index') }}"><img class="img-responsive logoimg" src="{{ URL::to('src/images/logos.png')}}" alt="" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{route('product.shoppinCart')}}">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Shopping Cart
            @if (Session::has('cart'))
              <span class="badge bounce animated"> {{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
            @endif
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user" aria-hidden="true"></i>
 User Management <span class="caret"></span></a>
          <ul class="dropdown-menu">
            @if (Auth::check())
              <li><a href="{{ route('user.profile') }}">User Profile</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ route('user.logout') }}">Logout</a></li>
            @else
              <li><a href="{{ route('user.signup') }}">Sign Up</a></li>
              <li><a href="{{ route('user.signin') }}">Sign In</a></li>
            @endif

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
<div class="jumbotron zoomIn animated">
  <div class="row">
    <div class="col-md-6">
      <h1>ShoppyFest!!!!</h1>
      <p>Whoever said money can't buy happiness simply didn't know where to go shopping.</p>
    </div>
    <div class="col-md-6">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="img-rounded" src="{{ URL::to('images/11.jpg')}}" alt="...">
          </div>
          <div class="item  ">
            <img class="img-rounded" src="{{ URL::to('images/2.jpg')}}" alt="...">
          </div>
          <div class="item">
            <img class="img-rounded" src="{{ URL::to('images/3.jpg')}}" alt="...">
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
