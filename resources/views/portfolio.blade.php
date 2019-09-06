@extends('layouts.app')
	
@section('content')    
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/default_bg.jpg');">
		<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
			<h1 class="mb-2 bread">Portfolio</h1>
			<p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Project</span></p>
			</div>
		</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb">
        <div class="container-fluid px-0">
            <div class="row no-gutters justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Our Projects</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/project-1.jpg);">
                        <div class="overlay"></div>
                        <a href="https://www.arzu.pk/" target="_blank" class="btn-site d-flex align-items-center justify-content-center"><span
                                class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="https://www.arzu.pk/" target="_blank">Online Shopping Site</a></h3>
                            <span>Arzu.pk</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/project-2.jpg);">
                        <div class="overlay"></div>
                        <a href="https://simpplo.com/" target="_blank" class="btn-site d-flex align-items-center justify-content-center"><span
                                class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="https://simpplo.com/" target="_blank">Simpplo</a></h3>
                            <span>simpplo.com</span>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/project-3.jpg);">
                        <div class="overlay"></div>
                        <a href="http://remindzapp.com/" target="_blank" class="btn-site d-flex align-items-center justify-content-center"><span
                                class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="http://remindzapp.com/" target="_blank">Remindz Mobile Application</a></h3>
                            <span>remindzapp.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/project-4.jpg);">
                        <div class="overlay"></div>
                        <a href="http://www.civixa.com/" target="_blank" class="btn-site d-flex align-items-center justify-content-center"><span
                                class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="http://www.civixa.com/" target="_blank">Civixa Enabling AI transformation</a></h3>
                            <span>civixa.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/project-5.jpg);">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
                                class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/project-6.jpg);">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
                                class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
