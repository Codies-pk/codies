@extends('layouts.app')

@section('content')


<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">Welcome to Consolve</span>
                    <h1 class="mb-4">We Are The Best Consulting Agency</h1>
                    <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">Todays Talent, Tommorow Success</span>
                    <h1 class="mb-4">We Help to Grow Your Business</h1>
                    <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 wrap-about pr-md-4 ftco-animate">
                <h2 class="mb-4">Our Main Features</h2>
                <p>
                </p>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="services text-center">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                    class="flaticon-collaboration"></span></div>
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
                                    class="flaticon-search-engine"></span></div>
                            <div class="text media-body">
                                <h3>Customer Satisfection</h3>
                                <p>Codies has a whole unit team of professionals to identify and analyze the issues that occur in the projects and to work on safe risk analysis to eliminate the causes of the issues and<span id="dots2">...</span><span id="more2" style="display: none;"> to avoid negative impacts on the projects underhand. Our experts are always here to help the organization grow by mitigating those risks that may prove to be harmful and by conquering those risks that are taken to benefit the project in every way possible.</span></p>
                                <p style="cursor:pointer;" onclick="readFunction2()" id="readMore2">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services text-center">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                    class="flaticon-search-engine"></span></div>
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


<section class="ftco-section mb-5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">Our Best Services</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-4 d-flex">
                <div class="services-2 noborder-left text-center ftco-animate">
                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                            class="flaticon-analysis"></span></div>
                    <div class="text media-body">
                        <h3>Website Development</h3>
                        <P>Our web development team creates intuitive user experiences wrapped up in beautiful designs. Everything we create is custom and precisely made to your specification. Our web apps have enabled businesses to maximize their ROI, and more.</P>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="services-2 text-center ftco-animate">
                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                            class="flaticon-business"></span></div>
                    <div class="text media-body">
                        <h3>Mobile App Development</h3>
                        <p>Our team builds elegant apps for all smartphone platforms. Our engineers work closely with you to understand your specifications and develop apps that provide an intuitive end user experience. Our ongoing support ensures your app is ever-ready for your users.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="services-2 text-center ftco-animate">
                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                            class="flaticon-insurance"></span></div>
                    <div class="text media-body">
                        <h3>Software Solutions</h3>
                        <p>Leveraging the latest developments in tech</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                            class="flaticon-money"></span></div>
                    <div class="text media-body">
                        <h3>Graphics Designing</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="services-2 text-center noborder-bottom ftco-animate">
                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                            class="flaticon-rating"></span></div>
                    <div class="text media-body">
                        <h3>Onilne Marketing</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="services-2 text-center noborder-bottom ftco-animate">
                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                            class="flaticon-search-engine"></span></div>
                    <div class="text media-body">
                        <h3>Content Writing</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro ftco-no-pb img" style="background-image: url('images/default_bg.jpg');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-3 mb-md-0">You Always Get the Best Guidance</h2>
            </div>
            <div class="col-lg-3 col-md-4 ftco-animate">
                <p class="mb-0"><a href="/contact" class="btn btn-white py-3 px-4">Contact Us</a></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Our Recent Projects</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country</p>
                <p></p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(images/project-2.jpg);">
                    <div class="overlay"></div>
                    <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
                            class="icon-subdirectory_arrow_right"></span></a>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(images/project-1.jpg);">
                    <div class="overlay"></div>
                    <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
                            class="icon-subdirectory_arrow_right"></span></a>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(images/project-3.jpg);">
                    <div class="overlay"></div>
                    <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
                            class="icon-subdirectory_arrow_right"></span></a>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(images/project-4.jpg);">
                    <div class="overlay"></div>
                    <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
                            class="icon-subdirectory_arrow_right"></span></a>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
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
            <div class="col-md-3">
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
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(images/project-7.jpg);">
                    <div class="overlay"></div>
                    <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span
                            class="icon-subdirectory_arrow_right"></span></a>
                    <div class="text text-center p-4">
                        <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                        <span>Web Design</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(images/project-8.jpg);">
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


<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url('images/default_bg.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-3 px-md-5">
                <div class="py-md-5">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <h2 class="mb-4">Request A Quote</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                    <form class="appointment-form ftco-animate">
                        {{ csrf_field() }}
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="num" class="form-control" placeholder="Last Name" id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
								<input type="number" class="form-control" placeholder="Phone" id="phone" name="phone">
                            </div>
                            <div class="form-group ml-md-4">
                                <textarea id="message" name="message" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Request A Quote" id="ajaxQuoteSubmit" class="btn btn-white py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">Our Clients Says</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                    necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(images/person_1.jpg)">
                            </div>
                            <div class="text pl-4">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <p class="name">Racky Henderson</p>
                                <span class="position">Father</span>
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
