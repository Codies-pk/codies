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
							<p>Test our team of experts that are here to comprehend the client’s requirement to the core after which they provide solutions observed under a high tech environment using advanced tools.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
								class="flaticon-computer-graphic"></span></div>
						<div class="text media-body">
							<h3>Graphics Designing</h3>
							<p>Whether you want a project that looks trendy, modern, plain or technical, we offer you a treasure of creative designs to improve business agility and to enhance its appearance. The advanced and beautiful variety of patterns development not only catches the user’s eye but also makes him crave to explore more about you.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center noborder-bottom ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
								class="flaticon-ad"></span></div>
						<div class="text media-body">
							<h3>Online Marketing</h3>
							<p>The leading business is one that appears on the first page of GOOGLE because of its efficient online marketing. Codies make sure to notch up your business ideas by facilitating you with its exceptional online marketing services.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center noborder-bottom ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
								class="flaticon-writing"></span></div>
						<div class="text media-body">
							<h3>Content Writing</h3>
							<p>The leading business is one that appears on the first page of GOOGLE because of its efficient online marketing. Codies make sure to notch up your business ideas by facilitating you with its exceptional online marketing services.</p>
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
										<p>We respect your time by not only facilitating you with our best services but that too in fixed schedule and meeting deadlines. Our firm belief is to create an environment<span id="dots1">...</span><span id="more1" style="display: none;"> for both our	employees and clients that is organized, structured and friendly.</span></p>
										<p style="cursor:pointer;" onclick="readFunction1()" id="readMore1">Read more</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
											class="flaticon-customer-review"></span></div>
									<div class="text media-body">
										<h3>Customer Satisfaction</h3>
										<p>We value our customer’s satisfaction and their peace of mind regarding their problems. Our business expertise, years of experience and knowledge lead us to engineer<span id="dots2">...</span><span id="more2" style="display: none;"> perfect software solutions every time. We emphasize over continuous involvement of our clients with the project	to analyze their requirements and project’s functionality, and to develop result that satisfies the need of our clients.</span></p>
										<p style="cursor:pointer;" onclick="readFunction2()" id="readMore2">Read more</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
											class="flaticon-develop"></span></div>
									<div class="text media-body">
										<h3>Risk Analysis</h3>
										<p>Codies has a whole unit team of professionals to identify and analyze the issues that occur in the projects and to work on safe risk analysis to eliminate the causes of the<span id="dots3">...</span><span id="more3" style="display: none;"> issues and to avoid negative impacts on the projects underhand. Our experts are always here to help the organization grow by mitigating those risks that may prove to be harmful and by conquering those risks that are taken to benefit the project in every way possible.</span></p>
										<p style="cursor:pointer;" onclick="readFunction3()" id="readMore3">Read more</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection