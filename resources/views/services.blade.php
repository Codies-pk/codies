@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/default_bg.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Services</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services</span></p>
        </div>
      </div>
    </div>
  </section>
<section class="ftco-section mb-5">
		<div class="container">
			<div class="row justify-content-center mb-2 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Our Main Services</h2>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-lg-4 d-flex">
					<div class="services-2 noborder-left text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
								class="flaticon-monitor"></span></div>
						<div class="text media-body">
							<h3>Website Development</h3>
							<P>Our web development team creates intuitive user experiences wrapped up in beautiful designs. Everything we create is custom and precisely made to your specification. Our web apps have enabled businesses to maximize their ROI, and more.</P>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
								class="flaticon-application-development"></span></div>
						<div class="text media-body">
							<h3>Mobile App Development</h3>
							<p>Our team builds elegant apps for all smartphone platforms. Our engineers work closely with you to understand your specifications and develop apps that provide an intuitive end user experience. Our ongoing support ensures your app is ever-ready for your users.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
								class="flaticon-web"></span></div>
						<div class="text media-body">
							<h3>Software Solutions</h3>
							<p>Leveraging the latest developments in tech</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
								class="flaticon-computer-graphic"></span></div>
						<div class="text media-body">
							<h3>Graphics Designing</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center noborder-bottom ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
								class="flaticon-online-shop"></span></div>
						<div class="text media-body">
							<h3>Onilne Marketing</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center noborder-bottom ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
								class="flaticon-ad"></span></div>
						<div class="text media-body">
							<h3>Content Writing</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-12 wrap-about pr-md-4 ftco-animate">
						<h2 class="mb-4 text-center">Our Main Features</h2>
						<p>
						</p>
						<div class="row mt-5">
							<div class="col-lg-4">
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
											class="flaticon-time"></span></div>
									<div class="text media-body">
										<h3>Timely Development</h3>
										<p>Codies has a whole unit team of professionals to identify and analyze the issues that occur in the projects and to work on safe risk analysis to eliminate the causes of the issues and<span id="dots1">...</span><span id="more1" style="display: none;"> avoid negative impacts on the projects underhand. Our experts are always here to help the organization grow by mitigating those risks that may prove to be harmful and by conquering those risks that are taken to benefit the project in every way possible.</span></p>
										<p style="cursor:pointer;" onclick="readFunction1()" id="readMore1">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
											class="flaticon-customer-review"></span></div>
									<div class="text media-body">
										<h3>Customer Satisfaction</h3>
										<p>Codies has a whole unit team of professionals to identify and analyze the issues that occur in the projects and to work on safe risk analysis to eliminate the causes of the issues and<span id="dots2">...</span><span id="more2" style="display: none;"> to avoid negative impacts on the projects underhand. Our experts are always here to help the organization grow by mitigating those risks that may prove to be harmful and by conquering those risks that are taken to benefit the project in every way possible.</span></p>
										<p style="cursor:pointer;" onclick="readFunction2()" id="readMore2">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
											class="flaticon-develop"></span></div>
									<div class="text media-body">
										<h3>Risk Analysis</h3>
										<p>Codies has a whole unit team of professionals to identify and analyze the issues that occur in the projects and to work on safe risk analysis to eliminate the causes of the issues and <span id="dots3">...</span><span id="more3" style="display: none;">to avoid negative impacts on the projects underhand. Our experts are always here to help the organization grow by mitigating those risks that may prove to be harmful and by conquering those risks that are taken to benefit the project in every way possible.</span></p>
										<p style="cursor:pointer;" onclick="readFunction3()" id="readMore3">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection
<script>
		function readFunction1() {
			var dots = document.getElementById("dots1");
			var moreText = document.getElementById("more1");
			var btnText = document.getElementById("readMore1");
		
			if (dots.style.display === "none") {
			dots.style.display = "inline";
			btnText.innerHTML = "Read more"; 
			moreText.style.display = "none";
			} else {
			dots.style.display = "none";
			btnText.innerHTML = "Read less"; 
			moreText.style.display = "inline";
			}
		}
		function readFunction2() {
			var dots = document.getElementById("dots2");
			var moreText = document.getElementById("more2");
			var btnText = document.getElementById("readMore2");
		
			if (dots.style.display === "none") {
			dots.style.display = "inline";
			btnText.innerHTML = "Read more"; 
			moreText.style.display = "none";
			} else {
			dots.style.display = "none";
			btnText.innerHTML = "Read less"; 
			moreText.style.display = "inline";
			}
		}
		function readFunction3() {
			var dots = document.getElementById("dots3");
			var moreText = document.getElementById("more3");
			var btnText = document.getElementById("readMore3");
		
			if (dots.style.display === "none") {
			dots.style.display = "inline";
			btnText.innerHTML = "Read more"; 
			moreText.style.display = "none";
			} else {
			dots.style.display = "none";
			btnText.innerHTML = "Read less"; 
			moreText.style.display = "inline";
			}
		}
	</script>