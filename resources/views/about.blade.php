@extends('layouts.app')
	
@section('content') 
  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/default_bg.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">About Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us</span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-5 order-md-last wrap-about align-items-stretch">
          <div class="wrap-about-border">
            <div class="img" style="background-image: url(images/about.jpg); border"></div>
            <div class="text">
              <h3>Read Our Success Story for Inspiration</h3>
              <p>In a very short period, Codies has not only established but is also maintaining remarkable business relationships with reputed clients all around the globe. Our trust with our clients is one of the biggest successes for us. They trust us by providing them the best solutions in various verticals of the industry.</p>
              <p>Having had the chance to work for both; local and global clients, Codies has now reached the bar where it is recognized as a strong foundation of software development processes.<span id="dots">...</span></p>
              <div id="more" style="display: none;"><p>We are considered as the provider of much matured, sophisticated delivery models. Codies has marked its identity as a proclaimed place for all software and development needs, with its extensive delivery and successful journey.</p>
              
              <p>Attaining business and software intelligence from raw data is the toughest challenge that most clients encounter. By developing a customized, specialized and tailor-made solution for each Industry, XYZ SOLUTIONS has led its clients to gather and cherish the fullest rewards and accommodations of the next level and next-generation software technologies.</p>
              <p>We have a strong team of professionals, experienced developers, and certified designers. The key to the success of Codies lies within its hardworking employees that include innovative designers, passionate producers and dedicated developers who go to any extent to give the best services possible.</p>
              </div>
              <button class="btn btn-primary py-3 px-4" onclick="readFunction()" id="readMore">Read more</button>
            </div>
          </div>
        </div>
        <div class="col-md-7 wrap-about pr-md-4 ftco-animate">
          <h2 class="mb-4">Welcome to Codies</h2>
          <p>Codies is a professional software and website application development high tech company based in Pakistan.</p>
          <p>We are specialized in Web and Mobile Application Design & Development, Technical Solutions, project management, strategic technology consulting, client-server application, software development, system integration, content management, database management and application development,</p>
          <p>We endeavor on highly seasoned, highly effective and proficient, cost-effective and timely delivered software, and services. We try to assist companies that are at any stage of the software development cycle.</p>
          <p>Since, we have been working on establishing our technological business locally as well as globally by entertaining a variety of clients ranging from startups to well-reputed organization. We are a company of experienced employees working on different platforms.</p>
          <p>The aim is to provide user-friendly web and application experiences and facilitate day to day tasks utilizing unique and effective website solutions.</p>
          <p>The perception of our company in dealing with the projects is slightly different than that of others. Whenever Codies is presented with a task or a project, we see it as a thrilling game with multiple stages. Each stage is an achievement in itself to accomplish. At every stage of the project, whether it is understanding the project requirements and goal, or to design relevant architecture to implement and maintain the system– we bring in our use the most effective and advanced tools which are updated systematically. This is the way by which each stage of the project ensures the successful completion of itself, as well as it increases the effectiveness of the project and avoids typical issues from occurring.</p>
        </div>
      </div>
    </div>
  </section> 
@endsection

<script>
    function readFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("readMore");
    
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