<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>@yield('title')</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Adventure Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);


    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--booststrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!--stylesheets-->
  <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>

<body>
  <!-- //banner -->
  <div class="banner-left-side" id="home">
    <!-- header -->
    <div class="headder-top">
      <!-- nav -->
      <nav>
        <div id="logo">
          <h1>
            <a href="/">Wisata Goa Lauk</a>
          </h1>
        </div>
        <ul class="menu mt-2">
          <li class="active">
            <a href="/">Home</a>
          </li>
          <li>
            <a href="/about">About</a>
          </li>
          <li>
            <a href="#">Gallery</a>
          </li>
          <li>
            <a href="{{ url('/artikel')}}">Artikel</a>
          </li>
          <li>
          @if(auth()->user())
							<a href="{{ url('/profile')}}" class="btn btn-info btn-sm" >{{ auth()->user()->name }}</a>
									<a href="{{ route('logout') }}" class="btn btn-danger btn-sm"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form></a>

					@else
            <a href="{{ url('/login') }}" class="btn btn-outline-light" role="button">Login</a>
					@endif
          </li>
        </ul>
      </nav>
      <!-- //nav -->
    </div>
    <!-- //header -->
    <!-- banner -->
    <div class="main-banner">
      <div class="container">
        <div class="banner-position-main">

          <div class="banner-right-txt">
            <h5 class="mb-sm-3 mb-2">Thrill & Joy</h5>
            <h4>Adventure begins</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

@yield('content')

<section class="footer-w3layouts-bottem py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
      <div class=" footer-top mt-3 text-center">
        <p>
          <span>Address</span> : Desa Lebak Tipar, Kecamatan Cilograng,
          <br>Kabupaten Lebak, Provinsi Banten
        </p>
        <p class="pt-2">
          <span> Phone</span> : +(000) 123 4565 32</p>
        <p class="pt-2">
          <span>Email</span> :
          <a href="mailto:info@example.com">info@example1.com</a>
        </p>
      </div>
      <div class="social-icons text-center mt-md-4 mt-3">
        <ul>
          <li class="facebook">
            <a href="#">
              <span class="fa fa-facebook"></span>
            </a>
          </li>
          <li class="twitter">
            <a href="#">
              <span class="fa fa-twitter"></span>
            </a>
          </li>
          <li class="rss">
            <a href="#">
              <span class="fa fa-rss"></span>
            </a>
          </li>
        </ul>
      </div>
      <!-- move icon -->
      <div class="text-center mt-lg-5 mt-md-4 mt-3">
        <a href="#home" class="move-top text-center mt-3">
          <span class="fa fa-arrow-up" aria-hidden="true"></span>
        </a>
      </div>
      <!--//move icon -->
    </div>
  </section>
  <!--footer-copy-right -->
  <footer class="bottem-wthree-footer text-center py-md-4 py-3">
    <p>
      © 2019 Adventure. All Rights Reserved | Design by
      <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
    </p>
  </footer>
  <!--//footer-copy-right -->
</html>
