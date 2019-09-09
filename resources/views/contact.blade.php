@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/default_bg.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Contact Us</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact</span></p>
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
            <p><span>Email:</span> <a href="mailto:info@codies.io">info@codies.io</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row block-9 justify-content-center mb-5">
      <div class="col-md-8 mb-md-5">
        <h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
        <form class="bg-light p-5 contact-form" method="POST" action="/contactpost">
          {{ csrf_field() }}
          <div class="form-group">
            <input id="name" type="text" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required @error('name') autofocus @enderror minlength="3" maxlength="191">
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Your Email" id="email" name="email" required @error('email') autofocus @enderror maxlength="191">
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="text" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}" placeholder="Subject" id="subject" name="subject" required @error('subject') autofocus @enderror minlength="3" maxlength="191">
            @error('subject')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <textarea cols="30" rows="7" class="form-control @error('message') is-invalid @enderror" placeholder="Message" id="message" name="message" @error('message') autofocus @enderror required minlength="3" maxlength="999">{{ old('message') }}</textarea>
            @error('message')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
{{-- id="ajaxContactSubmit" --}}
<section class="ftco-section ftco-no-pb ftco-no-pt pb-3">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div id="map" class="bg-white"></div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUbRHtu3k_fg3jDGk_qAatE5jA4bC_ndE"></script>
  <script src="js/google-map.js"></script>
@endsection