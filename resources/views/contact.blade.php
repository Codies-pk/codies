@extends('layouts.app')
	
@section('content')
  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info justify-content-center">
        <div class="col-md-8">
          <div class="row mb-5">
            <div class="col-md-4 text-center py-4">
              <div class="icon">
                <span class="icon-map-o"></span>
              </div>
              <p><span>Address:</span> A-7, Block 2, Gulshan-e-iqbal, Karachi.</p>
            </div>
            <div class="col-md-4 text-center border-height py-4">
              <div class="icon">
                <span class="icon-mobile-phone"></span>
              </div>
              <p><span>Phone:</span> <a href="tel://+92-334-030-5745">+92-334-0305745</a></p>
            </div>
            <div class="col-md-4 text-center py-4">
              <div class="icon">
                <span class="icon-envelope-o"></span>
              </div>
              <p><span>Email:</span> <a href="mailto:info@codies.pk">info@codies.pk</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row block-9 justify-content-center mb-5">
        <div class="col-md-8 mb-md-5"> 
          <h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
          <form action="/contact-us" class="bg-light p-5 contact-form" method="POST">
            @include('inc.message')
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name" name="name">
              <div class="text-danger">{{ $errors->first('name') }}</div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email" name="email">
              <div class="text-danger">{{ $errors->first('email') }}</div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject" name="subject">
              <div class="text-danger">{{ $errors->first('subject') }}</div>
            </div>
            <div class="form-group">
              <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
              <div class="text-danger">{{ $errors->first('message') }}</div>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container-fluid px-0">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div id="map" class="bg-white"></div>
        </div>
      </div>
    </div>
  </section>
@endsection