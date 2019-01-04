<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"> -->
  <link href="{{asset('material/fontawesome/css/fontawesome.min.css')}}" rel="stylesheet">
  <link href="fontawesome/css/all.css')}}" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('material/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('material/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{asset('material/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->

	<!-- Main navigation -->
    <header>
      <!--Navbar-->
      	<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
	        <div class="container">
	          	<a class="navbar-brand" href="{{ url('/')}}">
	            	<img src="{{asset ('assets/images/logoz.png')}}" alt="" title="" style="height: 4.8rem;">
	          	</a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
		        	<span class="navbar-toggler-icon"></span>
		        </button>
	          	<div class="collapse navbar-collapse" id="navbarSupportedContent-7">
		            <ul class="navbar-nav mr-auto">
		              <!-- <li class="nav-item">
		                <a class="nav-link" href="index.html">Home</a>
		              </li> -->
		              <li class="nav-item active">
		                <a class="nav-link wow fadeInRight" data-wow-delay="0.3s" href="#"><strong>Full Stack Developer</strong>
		                  <span class="sr-only">(current)</span>
		                </a>
		              </li>
		            </ul>
		            <button class="btn aqua-gradient btn-sm mr-sm-2"><i class="fas fa-phone fa-lg white-text mr-4"></i> <strong>(+254)-717-503-802</strong></button>
		            <button class="btn purple-gradient btn-sm"><i class="fas fa-envelope fa-lg white-text mr-4"></i><strong>sammymwinzi2@gmail.com</strong></button>
	            </div>
	        </div>
      	</nav>
		<!--Carousel Wrapper-->
		<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
		  <!--Indicators-->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-2" data-slide-to="1"></li>
		    <li data-target="#carousel-example-2" data-slide-to="2"></li>
		  </ol>
		  <!--/.Indicators-->
		  <!--Slides-->
		  <div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
		      <div class="view">
		        <img class="d-block w-100" src="{{asset('assets/images/pic6.png')}}" alt="First slide" style="width: 100%; height: 700px">
		        <div class="mask rgba-black-light"></div>
		      </div>
		      <div class="carousel-caption">
		        <h3 class="h3-responsive">Light mask</h3>
		        <p>First text</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <!--Mask color-->
		      <div class="view">
		        <img class="d-block w-100" src="{{asset('assets/images/pic3.png')}}" alt="Second slide">
		        <div class="mask rgba-black-strong"></div>
		      </div>
		      <div class="carousel-caption">
		        <h3 class="h3-responsive">Strong mask</h3>
		        <p>Secondary text</p>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <!--Mask color-->
		      <div class="view">
		        <img class="d-block w-100" src="{{asset('assets/images/pic2.png')}}" alt="Third slide">
		        <div class="mask rgba-black-slight"></div>
		      </div>
		      <div class="carousel-caption">
		        <h3 class="h3-responsive">Slight mask</h3>
		        <p>Third text</p>
		      </div>
		    </div>
		  </div>
		  <!--/.Slides-->
		  <!--Controls-->
		  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		  <!--/.Controls-->
		</div>
		<!--/.Carousel Wrapper-->
    </header>
    <!-- Main navigation -->

    <!-- Jumbotron2 -->
	<div class="jumbotron text-center">

	  <!-- Title -->
	  <h2 class="card-title h2">About Me</h2>
		<div class="text-center">
		  <img src="img/sammy.jpg" class="rounded-circle img-fluid" alt="my photo" style="width: 70px; height: 70px">
		</div>
	  <!-- Subtitle -->
	  <p class="blue-text my-4 font-weight-bold">Tech enthusiast. I use the modern technology in developing Apps</p>

	  <!-- Grid row -->
	  <div class="row d-flex justify-content-center">

	    <!-- Grid column -->
	    <div class="col-xl-7 pb-2">

	      <p class="card-text">Hi there, am Sammy Mwangangi a Full-stack developer, geek, enthusiastic, travel-lover.I major in Python,Ruby,PHP,Elixir and Javascript. Frameworks I work with:- Django, Flask, Phoenix, Laravel, Rails, AngularJS, NODEJS and ReactJS.</p>

	    </div>
	    <!-- Grid column -->

	  </div>
	  <!-- Grid row -->

	  <hr class="my-4">

	  <div class="pt-2">
	    <button type="button" class="btn btn-blue waves-effect">Front End <span class="far fa-smile ml-1"></span></button>
	    <button type="button" class="btn btn-outline-primary waves-effect">Back End <i class="fas fa-users ml-1"></i></button>
	  </div>

	</div>
	<!-- Jumbotron2 -->
	
	<div class="container pt-4">
		<!-- Card deck -->
		<div class="card-deck">

		  <!-- Card -->
		  <div class="card mb-4">

		    <!--Card image-->
		    <div class="view overlay">
		      <img class="card-img-top" src="img/24.jpeg" alt="Card image cap">
		      <a href="#!">
		        <div class="mask rgba-white-slight"></div>
		      </a>
		    </div>

		    <!--Card content-->
		    <div class="card-body">

		      <!--Title-->
		      <h4 class="card-title">Web Development</h4>
		      <!--Text-->
		      <p class="card-text">Am an expert in Responsive Web Design, experienced in the latest web design technologies in the market and who keep abreast of recent developments in the technologies used to develop your website.I translate your requirements and concept idea to a truly unique website within which you can meet your customer needs and increase sales leads. </p>

		    </div>

		  </div>
		  <!-- Card -->

		  <!-- Card -->
		  <div class="card mb-4">

		    <!--Card image-->
		    <div class="view overlay">
		      <img class="card-img-top" src="img/16.jpg" alt="Card image cap">
		      <a href="#!">
		        <div class="mask rgba-white-slight"></div>
		      </a>
		    </div>

		    <!--Card content-->
		    <div class="card-body">

		      <!--Title-->
		      <h4 class="card-title">Web & Mobile Design</h4>
		      <!--Text-->
		      <p class="card-text">I develop complete websites with auto responsive features on various device displays. We value our clients taste and preferences when it comes to developing web interfaces. I have a variety of options, in terms of frameworks, from which my clients can choose from.</p>

		    </div>

		  </div>
		  <!-- Card -->

		  <!-- Card -->
		  <div class="card mb-4">

		    <!--Card image-->
		    <div class="view overlay">
		      <img class="card-img-top" src="img/13.jpg" alt="Card image cap">
		      <a href="#!">
		        <div class="mask rgba-white-slight"></div>
		      </a>
		    </div>

		    <!--Card content-->
		    <div class="card-body">

		      <!--Title-->
		      <h4 class="card-title">Graphics and Design</h4>
		      <!--Text-->
		      <p class="card-text">I have a high level of expertise in various forms of graphical design.I also have incredible skills in using various tools in the field to ensure best designs.I aslo dont stop at developing an online platform for you. I use various legal techniques to ensure your plaform is easily available in various search engine to ensure effective Digital Marketting. </p>

		    </div>

		  </div>
		  <!-- Card -->

		</div>
		<!-- Card deck -->
	</div>

	<div class="container">
		<!--Projects section v.4-->
		<section>

		    <!--Section heading-->
		    <h2 class="h1-responsive font-weight-bold text-center my-5">Some projects I've Done</h2>
		    <!-- Section description -->
		    <p class="grey-text text-center w-responsive mx-auto mb-5">I create every software using the latest two-tier technology. It can work both online and locally through an intranet thereby enabling you to access from any location and use to remotely manage all the locations your business may operate in from any one centralized location or even from your mobile phone. Below is just an iceberg of all projects i have done:-</p>

		    <!--Grid row-->
		    <div class="row mx-1">

		        <!--Grid column-->
		        <div class="col-md-12 mb-4">
		            <div class="card card-image" style="background-image: url(img/upwork1.png);">
		                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
		                    <div>
		                        <h6 class="purple-text"><i class="fas fa-plane"></i><strong>NexForum</strong></h6>
		                        <h3 class="card-title py-3 font-weight-bold"><strong>Courtesy of <a href="https://nextechdevelopers.com">NexTech</a></strong></h3>
		                        <p class="pb-3">A web application where developers interact,to ask questions,update others on upcoming technologies and solve problems together.Both for newbies and advanced developers.</p>
		                        <a class="btn purple-gradient btn-rounded" href="https://nextechdevelopers.com"><i class="far fa-clone left"></i> View project</a> 
		                    </div>
		                </div>
		            </div>
		        </div>
		        <!--Grid column-->

		        <!--Grid column-->
		        <div class="col-md-6 mb-4">
		            <div class="card card-image" style="background-image: url(img/rtp1.png);">
		                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
		                    <div>
		                        <h6 class="pink-text"><i class="fas fa-chart-pie"></i><strong> Royal Purple Tea</strong></h6>
		                        <h3 class="card-title py-3 font-weight-bold"><strong>Courtesy of Danter Enterprise</strong></h3>
		                        <p class="pb-3">It's an online shop for Purple Tea products. The tea is grown in Kenya, manufactured by Danter Enterprise and sold through the website.</p>
		                        <a class="btn peach-gradient btn-rounded"><i class="far fa-clone left"></i> View project</a>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <!--Grid column-->

		        <!--Grid column-->
		        <div class="col-md-6 mb-4">
		            <div class="card card-image" style="background-image: url(img/ppt.png);">
		                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
		                    <div>
		                        <h6 class="green-text"><i class="far fa-eye"></i><strong>Power Purple Tea</strong></h6>
		                        <h3 class="card-title py-3 font-weight-bold"><strong>Courtesy of Danter Enterprise</strong></h3>
		                        <p class="pb-3">It's also an online shop for Purple Tea products. The tea is grown in Kenya, manufactured by Danter Enterprise and sold through the website.</p>
		                        <a class="btn blue-gradient btn-rounded"><i class="far fa-clone left"></i> View project</a>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <!--Grid column-->

		    </div>
		    <!--Grid row-->

		</section>
		<!--Projects section v.4-->

		<!-- Section: Contact v.2 -->
		<section class="my-5">

		  <!-- Section heading -->
		  <h2 class="h1-responsive font-weight-bold text-center my-5">Contact Me</h2>
		  <!-- Section description -->
		  <p class="text-center w-responsive mx-auto mb-5">
		  	Am always upto to task and with that am always listening to what you have to say and respond accordingly.
		  </p>

		  <!-- Grid row -->
		  <div class="row">

		    <!-- Grid column -->
		    <div class="col-md-9 mb-md-0 mb-5">

		      <form>

		        <!-- Grid row -->
		        <div class="row">

		          <!-- Grid column -->
		          <div class="col-md-6">
		            <div class="md-form mb-0">
		              <input type="text" id="contact-name" class="form-control">
		              <label for="contact-name" class="">Your name</label>
		            </div>
		          </div>
		          <!-- Grid column -->

		          <!-- Grid column -->
		          <div class="col-md-6">
		            <div class="md-form mb-0">
		              <input type="text" id="contact-email" class="form-control">
		              <label for="contact-email" class="">Your email</label>
		            </div>
		          </div>
		          <!-- Grid column -->

		        </div>
		        <!-- Grid row -->

		        <!-- Grid row -->
		        <div class="row">

		          <!-- Grid column -->
		          <div class="col-md-12">
		            <div class="md-form mb-0">
		              <input type="text" id="contact-Subject" class="form-control">
		              <label for="contact-Subject" class="">Subject</label>
		            </div>
		          </div>
		          <!-- Grid column -->

		        </div>
		        <!-- Grid row -->

		        <!-- Grid row -->
		        <div class="row">

		          <!-- Grid column -->
		          <div class="col-md-12">
		            <div class="md-form">
		              <textarea type="text" id="contact-message" class="form-control md-textarea" rows="3"></textarea>
		              <label for="contact-message">Your message</label>
		            </div>
		          </div>
		          <!-- Grid column -->

		        </div>
		        <!-- Grid row -->

		      </form>

		      <div class="text-center text-md-left">
		        <a class="btn btn-primary btn-md">Send</a>
		      </div>

		    </div>
		    <!-- Grid column -->

		    <!-- Grid column -->
		    <div class="col-md-3 text-center">
		      <ul class="list-unstyled mb-0">
		        <li>
		          <i class="fas fa-map-marker-alt fa-2x blue-text"></i>
		          <p>Nairobi, CBD 96, Kenya</p>
		        </li>
		        <li>
		          <i class="fas fa-phone fa-2x mt-4 blue-text"></i>
		          <p>+254 717 503 802</p>
		        </li>
		        <li>
		          <i class="fas fa-envelope fa-2x mt-4 blue-text"></i>
		          <p class="mb-0">sammymwinzi2@gmail.com</p>
		        </li>
		      </ul>
		    </div>
		    <!-- Grid column -->

		  </div>
		  <!-- Grid row -->

		</section>
		<!-- Section: Contact v.2 -->
	</div>


	<!-- Footer -->
	<footer class="page-footer font-small indigo">

	    <!-- Footer Links -->
	    <div class="container">

	      <!-- Grid row-->
	      <div class="row text-center d-flex justify-content-center pt-5 mb-3">

	        <!-- Grid column -->
	        <div class="col-md-2 mb-3">
	          <h6 class="text-uppercase font-weight-bold">
	            <a href="#!">Python</a>
	          </h6>
	        </div>
	        <!-- Grid column -->

	        <!-- Grid column -->
	        <div class="col-md-2 mb-3">
	          <h6 class="text-uppercase font-weight-bold">
	            <a href="#!">Laravel</a>
	          </h6>
	        </div>
	        <!-- Grid column -->

	        <!-- Grid column -->
	        <div class="col-md-2 mb-3">
	          <h6 class="text-uppercase font-weight-bold">
	            <a href="#!">NodeJs</a>
	          </h6>
	        </div>
	        <!-- Grid column -->

	        <!-- Grid column -->
	        <div class="col-md-2 mb-3">
	          <h6 class="text-uppercase font-weight-bold">
	            <a href="#!">ReactJs</a>
	          </h6>
	        </div>
	        <!-- Grid column -->

	        <!-- Grid column -->
	        <div class="col-md-2 mb-3">
	          <h6 class="text-uppercase font-weight-bold">
	            <a href="#!">UIKit</a>
	          </h6>
	        </div>
	        <!-- Grid column -->

	      </div>
	      <!-- Grid row-->
	      <hr class="rgba-white-light" style="margin: 0 15%;">

	      <!-- Grid row-->
	      <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

	        <!-- Grid column -->
	        <div class="col-md-8 col-12 mt-5">
	          <p style="line-height: 1.7rem">I work around the clock to develop secure e-commerce systems that i can trust with my financial information. I ensure security by facilitating encrypted transactions among other technologies to deny malicious individuals access.</p>
	        </div>
	        <!-- Grid column -->

	      </div>
	      <!-- Grid row-->
	      <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

	      <!-- Grid row-->
	      <div class="row pb-3">

	        <!-- Grid column -->
	        <div class="col-md-12">

	          <div class="mb-5 flex-center">

	            <!-- Facebook -->
	            <a class="fb-ic" href="https://web.facebook.com/muel.sam.902">
	              <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
	            </a>
	            <!-- Twitter -->
	            <a class="tw-ic" href="https://twitter.com/muel_xerm">
	              <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
	            </a>
	            <!-- Google +-->
	            <a class="gplus-ic" href="https://plus.google.com/u/0/+sammymwinzi">
	              <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
	            </a>
	            <!--Linkedin -->
	            <a class="li-ic" href="https://www.linkedin.com/in/sammy-mwangangi/">
	              <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
	            </a>
	            <!--Instagram-->
	            <a class="ins-ic" href="https://www.instagram.com/rixton_sam/">
	              <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
	            </a>
	            <!--Pinterest-->
	            <a class="pin-ic" href="https://www.pinterest.com/sammymwinzi2/">
	              <i class="fab fa-pinterest fa-lg white-text"> </i>
	            </a>

	          </div>

	        </div>
	        <!-- Grid column -->

	      </div>
	      <!-- Grid row-->

	    </div>
	    <!-- Footer Links -->

	    <!-- Copyright -->
	    <div class="footer-copyright text-center py-3">© 2019 Copyright:
	      <a href="https://mdbootstrap.com/education/bootstrap/"> rixtonsam.com</a>
	    </div>
	    <!-- Copyright -->
	</footer>
  	<!-- Footer -->

  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('material/js/jquery-3.3.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('material/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('material/js/bootstrap.min.js')}}"></script>
  <!-- Fontawesome JavaScript -->
  <script type="text/javascript" src="{{asset('material/fontawesome/js/fontawesome.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('material/js/mdb.min.js')}}"></script>

  <script type="text/javascript" src="{{asset('material/js/style.js')}}"></script>
</body>

</html>
