<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home|M.H.Sajib Associates</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



  </head>
  <body>
  	<form>
  		{{@csrf_field()}}
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    				 @foreach($contacts as $acc)
    				<div  align="center"><a  href=""><img src="images/logo.jpg"  width="25%" ></a><br>
    					<span><b><i>We give you better ideas</i></b></span>
    				</div>
    				<!-- <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4"><br/> -->
    						
					    	<!-- <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane" style="color:blue;"></span></div> -->
					    	<div class="text">
					    		<span class="icon-paper-plane" style="color:blue;">Email:<b>{{$acc['email']}}</b>&nbsp;&nbsp;</span>
						    	<!-- <span><b> </b> &nbsp; &nbsp; </span> -->
						    </div>
						    <!-- <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2" style="color:blue;" ></span></div> -->
						    <div class="text">
						    	<span class="icon-phone2" style="color:blue;" >Call Us:<b>{{$acc['mobile']}}</b></span>
						    	<!-- <span>&nbsp;<b></b></span> -->
						    </div>
					  @endforeach
						

    			<!-- <div class="col-md-4 d-flex align-items-center py-4" align="center">
    			
    			</div> -->
	    		<!-- <div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>sajibrma@email.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Call</span>
						    	<span>Call Us: +880186555651</span>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0 d-block">
					    		<a href="#" class="btn py-2 px-3 btn-primary">
					    			<span>Free Consulting</span>
					    		</a>
					    	</p>
					    </div>
				    </div>
			    </div> -->
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <!-- <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div> -->
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="{{route('home.index')}}" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="#about" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="#team" class="nav-link">Team Member</a></li>
	        	<li class="nav-item"><a href="#service" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="{{route('login.index')}}" class="nav-link">Login</a></li>
	        	<li class="nav-item"><a href="{{route('home.review')}}" class="nav-link">Review</a></li>
	          <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
      	@foreach($mottoes as $acc)
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<span class="subheading">{{$acc['motto']}}</span>
            <h1 class="mb-4">{{$acc['sol']}}</h1>
           <!--  <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p> -->
          </div>
        </div>
        </div>
         @endforeach
      </div>

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<span class="subheading">Todays Talent, Tommorow Success</span>
            <h1 class="mb-4">We Help to Grow Your Business</h1>
            <!-- <p><a href="" class="btn btn-primary px-4 py-3 mt-3"></a></p> -->
          </div>
        </div>
        </div>
      </div>
    </section>

        <div id="about">
		<section class="ftco-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about align-items-stretch">
						<h1 style="color: blue;" ><b>About Us</b></h1>
						<div class="wrap-about-border ftco-animate">
							<div class="img" style="background-image: url(images/ab.jpg); border"></div>
							
								
							  <div class="text">
								@foreach($admins as $acc)
								<span>{{$acc['about']}}</span>
								 @endforeach
						</div>
						</div>
					</div>
					<div class="col-md-7 wrap-about pr-md-4 ftco-animate">
          	<h2 class="mb-4" style="color: blue;">Our Main Features</h2>
						<p>We give you better services</p>
						<div class="row mt-5">
							<div class="col-lg-6">
									@foreach($services as $acc)
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
									<div class="text media-body">
										<h3>{{$acc['head']}}</h3>
										<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> -->
									</div>
								</div>
								 @endforeach
							</div>
							<!-- <div class="col-lg-6">
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
									<div class="text media-body">
										<h3>Marketing Strategy</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
								<div class="services text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-handshake"></span></div>
									<div class="text media-body">
										<h3>Capital Market</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">You Always Get the Best Guidance</h2>
          </div>
        </div>	
    	</div>
    </section>

		<section class="ftco-counter" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="wrapper">
    				<div class="row d-md-flex align-items-center">
    					 @foreach($events as $acc)
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="{{$acc['pro']}}">0</strong>
		                <span>Projects Completed</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="{{$acc['cus']}}">0</strong>
		                <span>Satisfied Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="{{$acc['aww']}}">0</strong>
		                <span>Awwards Received</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="{{$acc['exp']}}">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		           @endforeach
	          </div>
          </div>
        </div>
    	</div>
    </section>
    	<div id="service">
    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Best Services</h2>
            <p>We give you better services</p>
          </div>
        </div>
				<div class="row no-gutters">
					 @foreach($services as $acc)
					<div class="col-lg-4 d-flex">
						<div class="services-2 noborder-left text-center ftco-animate">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
							<div class="text media-body">
								<h3>{{$acc['head']}}</h3>
								<p>{{$acc['details']}}</p>
							</div>
						</div>
					</div>
					  @endforeach
				</div>
			</div>
		</section>
		</div>
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">You Always Get the Best Guidance</h2>
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="#" class="btn btn-white py-3 px-4">Request Quote</a></p>
          </div>
        </div>	
    	</div>
    </section>
    	<div id="team">
		<section class="ftco-section ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row no-gutters justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Team Member</h2>
           
          </div>
        </div>
				<div class="row no-gutters">
				<!-- image -->
				  @foreach($users as $acc)
    			<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style=" background-image: url({{asset($acc->img)}} );background-size: 80% 80%;">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">{{$acc['name']}}</a></h3>
	    					<span>{{$acc['des']}}</span><br/>
	    					<span>{{$acc['edu']}}</span>
	    				</div>
    				</div>
  				</div>
  				 @endforeach

  				<!-- <div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/sarzil.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Mueed Hasan Sarzil</a></h3>
	    					<span>Director,Software Division</span><br/>
	    					<span>Bsc.CSSE(AIUB)</span>
	    				</div>
    				</div>
  				</div>

    			<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/afifa.jpeg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Isra Hasan Afifa</a></h3>
	    					<span>Director,HR &  Admin</span>
	    				</div>
    				</div>
    			</div>
					<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-4.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-5.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-6.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-7.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-8.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">Branding &amp; Illustration Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div> -->

  				</div>
    		</div>
			</div>
		</section>
</div>

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5">
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4">Request to Quota</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		          </div>
		          <form action="#" class="appointment-form ftco-animate" method="post">
		          	{{ csrf_field() }}
		    				<div class="d-md-flex">
			    				<div class="form-group">
			    					<input type="text" name="fname" class="form-control" placeholder="First Name">
			    				</div>
			    				<div class="form-group ml-md-4">
			    					<input type="text" name="lname" class="form-control" placeholder="Last Name">
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			    					<div class="form-field">
		        					<div class="select-wrap">
		                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                    <select name="sel" id="" class="form-control">
		                    	<option value="">Select Guidance</option>
		                      <option value="">Tax & Vat</option>
		                      <option value="">Business</option>
		                      <option value="">Software</option>
		                      <option value="">Risk Management</option>
		                      <option value="">Other Services</option>
		                    </select>
		                  </div>
			              </div>
			    				</div>
		    					<div class="form-group ml-md-4">
			    					<input type="text" name="mobile" class="form-control" placeholder="Phone">
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			              <textarea name="mess" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
			            </div>
			            <div class="form-group ml-md-4">
			              <input type="submit" value="Submit" class="btn btn-white py-3 px-4">
			            </div>
		    				</div>
		    			</form>
		    		</div>
    			</div>
        </div>
    	</div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Recent</span> Blog</h2>
            <p><h1 style="color: red;">Coming Soon</h1></p>
          </div>
        </div>
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_1.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_2.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_3.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
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
            <!-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
          </div>
          
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">

            	@foreach($reviews as $acc)
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>{{$acc['msg']}}</p>
                    <p class="name">-{{$acc['name']}}</p>
                  </div>
                </div>
              </div>
              @endforeach
          
            </div>
          </div>
        </div>
      </div>
    </section>

	<div id="contact">	
		<section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Contact Us</h2>
            	<div class="block-23 mb-3">
            		 @foreach($contacts as $acc)
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">{{$acc['address']}}</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{$acc['mobile']}}</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{$acc['email']}}</span></a></li>
	              </ul>
	                @endforeach
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{route('home.index')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#about"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#team"><span class="ion-ios-arrow-round-forward mr-2"></span>Team Member</a></li>
                <li><a href="#service"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Login</a></li>
                <li><a href="#conatact"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script><p style="color:lightblue;">Developed by M.H.Sajib Associates Software Division</p>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    </section>
</div>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    </form>
  </body>
</html>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>