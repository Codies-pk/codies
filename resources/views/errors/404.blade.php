@extends('layouts.app')

@section('content')
    <section class="mb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <br><br>
                    <img src="images/not_found.jpg" class="img-fluid" />
                    <p class="text-center d-md-block d-none" style="color: black;">The page you are looking for might have been removed <br>had its name changed or is temporary unavailable.</p>
                    <h5 class="text-center mt-2">Go back to <a href="/" class="btn btn-primary">Home</a></h5>
                </div>
            </div>
        </div>
    </section>
@endsection