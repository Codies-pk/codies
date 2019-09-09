<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ !empty($title) ? $title : 'Page Not Found' }} - Codies</title>

  <link rel="prefetch" href="images/progress.gif">
  {{-- <link rel="stylesheet" href="css/app.css"> --}}
  <link rel="stylesheet" href="css/result.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white nav-box-shadow">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <a href="/"  class="d-lg-none">
        <img src="images/logo.png">
      </a>
      <div class="position-absolute d-lg-block d-none">
        <a href="/">
          <img src="images/logo.png">
        </a>
      </div>
      <div class="collapse navbar-collapse justify-content-md-center" id="ftco-nav" >
          <ul class="navbar-nav" style="background-color: #ffffff">
            <li class="nav-item {{ Request::is('/') ? 'active-nav-link' : '' }}"><a href="\" class="nav-link">Home</a></li>
            <li class="nav-item {{ Request::is('about') ? 'active-nav-link' : '' }}"><a href="\about" class="nav-link">About</a></li>
            <li class="nav-item {{ Request::is('portfolio') ? 'active-nav-link' : '' }}"><a href="\portfolio" class="nav-link">Portfolio</a></li>
            <li class="nav-item {{ Request::is('services') ? 'active-nav-link' : '' }}"><a href="\services" class="nav-link">Services</a></li>
            <li class="nav-item {{ Request::is('contact') ? 'active-nav-link' : '' }}"><a href="\contact" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
      </nav>
  
  @yield('content')

  <footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">A-7, Block 2, Gulshan-e-iqbal, Karachi.</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+92-334-0305745</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@codies.io</span></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="/"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
              <li><a href="/about"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
              <li><a href="/services"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
              <li><a href="/portfolio"><span class="ion-ios-arrow-round-forward mr-2"></span>Portfolio</a></li>
              <li><a href="/contact"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Subscribe Us!</h2>
            <form class="subscribe-form">
              <div class="form-group">
                <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address" required>
                <input type="button" value="Subscribe" class="form-control submit px-3">
              </div>
            </form>
          </div>
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/Codies-115632089815004/" target="_blank"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | <a href="/" target="_blank">Codies</a>
          </p>
        </div>
      </div>
    </div>
  </footer>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#6c84c2" /></svg></div>
  
  <script src="js/app.js"></script>
  @yield('scripts')
  @include('sweetalert::alert')
</body>
</html>