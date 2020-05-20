<!doctype html>
<html class=""> 

<!-- 06:02:07 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">	
	<title>CLEAN</title>
		
	<link rel="shortcut icon" href="images/favicon.png">
    <link href="libraries/bootstrap/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="libraries/fuelux/jquery-ui.min.css">
    <linK href="libraries/owl-carousel/owl.carousel.css" rel="stylesheet"/> 
    <linK href="libraries/owl-carousel/owl.theme.css" rel="stylesheet"/> 
	<link href="libraries/fonts/font-awesome.min.css" rel="stylesheet"/>
	<link href="libraries/animate/animate.min.css" rel="stylesheet"/>
	<link href="libraries/flexslider/flexslider.css" rel="stylesheet" /> <!-- flexslider -->
	<link href="libraries/magnific-popup.css" rel="stylesheet" />
    <link href="css/components.css" rel="stylesheet"/>
	<link href="style.css" rel="stylesheet"/>
    <link href="css/media.css" rel="stylesheet"/>
	<link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
</head>
<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">
	<a id="top"></a>
	
	<!-- Header Section -->
	<?php include"header.php"; ?>
    <!-- Header Section /- -->

	<!-- Slider Section -->
	<div id="slider-section" class="slider-section">
		<div id="make-clean-slider" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			<li data-target="#make-clean-slider" data-slide-to="0" class="active"></li>
			<li data-target="#make-clean-slider" data-slide-to="1"></li>
			<li data-target="#make-clean-slider" data-slide-to="2"></li>
			</ol>
			
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/slider/slide-1.jpg" alt="slide">
					<div class="carousel-caption">
						<div class="container">
							<div class="col-md-6">
								<h3>Make your world as Clean As Mine</h3>								
							</div>
						</div>
					</div>
				</div>
				
				<div class="item">
					<img src="images/slider/slide-1.jpg" alt="slide">
					<div class="carousel-caption">
						<div class="container">
							<div class="col-md-6">
								<h3>Make your world as Clean As Mine</h3>								
							</div>
						</div>
					</div>
				</div>
				
				<div class="item">
					<img src="images/slider/slide-1.jpg" alt="slide">
					<div class="carousel-caption">
						<div class="container">
							<div class="col-md-6">
								<h3>Make your world as Clean As Mine</h3>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a title="Slider Control" class="left carousel-control" href="#make-clean-slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a title="Slider Control" class="right carousel-control" href="#make-clean-slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="container">
			<form id="quick-contact" class="contact-form col-md-4" method="post">
				<h3>quick contact form <span>call us anytime !</span></h3>
				<div class="form-control">
					<input type="text" id="quick_name" name="quick-name" placeholder="NAME" required /> 
					<input type="text" id="quick_phone" name="quick-phone" placeholder="PHONE" /> 
					<input type="text" id="quick_email" name="quick-email" placeholder="EMAIL" required /> 
					<textarea id="quick_message" name="quick-message" placeholder="Description of services needed"></textarea>
					<input type="submit" id="btn_submit" name="submit" value="Send Message" />
				</div>
				<div id="alert-msg" class="alert-msg"></div>
			</form>
		</div>
	</div><!-- Slider Section /- -->
	
	<!-- Service Section -->
	<section id="service-section" class="service-section ow-section">
		<!-- container -->
		<div class="container">

			<!-- Section Header -->
			<div class="section-header">
				<h3><img src="images/icon/sep-icon.png" alt="sep-icon" /> service we offer</h3>
			</div><!-- Section Header /- -->
			
			<div id="make-clean-service" class="owl-carousel owl-theme services-style1">
				<div class="item">
					<div class="service-box">
						<img src="images/services/services-1.png" alt="services"/>
						<div class="service-box-inner">
							<h4> Office & Commercial Cleaning </h4>
							<a title="View Details" href="#">view details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="service-box">
						<img src="images/services/services-2.png" alt="services"/>
						<div class="service-box-inner">
							<h4> Windows & Upholstery Cleaning</h4>
							<a title="View Details" href="#">view details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="service-box">
						<img src="images/services/services-3.png" alt="services"/>
						<div class="service-box-inner">
							<h4>House cleaning &amp; Maid Service</h4>
							<a title="View Details" href="#">view details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="service-box">
						<img src="images/services/services-1.png" alt="services"/>
						<div class="service-box-inner">
							<h4> Office & Commercial Cleaning </h4>
							<a title="View Details" href="#">view details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="service-box">
						<img src="images/services/services-2.png" alt="services"/>
						<div class="service-box-inner">
							<h4> Windows & Upholstery Cleaning</h4>
							<a title="View Details" href="#">view details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="service-box">
						<img src="images/services/services-3.png" alt="services"/>
						<div class="service-box-inner">
							<h4>House cleaning &amp; Maid Service</h4>
							<a title="View Details" href="#">view details</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- container /- -->
	</section><!-- Service Section /- -->
	
	<!-- Welcome Section -->
	<Section id="welcome-section" class="welcome-section ow-section">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 col-sm-5">
				<img src="images/welcome/welcome-img.png" alt="welcome" />
			</div>
			<div class="col-md-8 col-sm-7 welcome-content">
				<!-- Section Header -->
				<div class="section-header">
					<h3>welcome to our make clean</h3>
				</div><!-- Section Header /- -->
				<p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo eni sai th ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione kavosvo uptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore</p>
				<a title="Button" href="#">About More</a>
				<a title="Button" href="#">workers</a>
				<div class="welcome-content-box row">
					<div class="col-md-4 col-sm-6 welcome-box">
						<img src="images/welcome/high-trained-staff.png" alt="high trained staff" />
						<h4>HIGHLY-TRAINED STAFF</h4>
						<p>Beatae vitae dicta sunt explicabonie seni sai th ipsam voluptatem.</p>
					</div>
					<div class="col-md-4 col-sm-6 welcome-box">
						<img src="images/welcome/quality-cleaning-staff.png" alt="quality-cleaning-staff" />
						<h4>QULAITY CLEANING TOOLS</h4>
						<p>Beatae vitae dicta sunt explicabonie seni sai th ipsam voluptatem.</p>
					</div>
					<div class="col-md-4 col-sm-6 welcome-box">
						<img src="images/welcome/fast-service.png" alt="fast-service" />
						<h4>Fast & Effective SERVICE</h4>
						<p>Beatae vitae dicta sunt explicabonie seni sai th ipsam voluptatem.</p>
					</div>
				</div>
			</div>
		</div><!-- container /- -->
	</section><!-- Welcome Section /- -->
	
	<!-- Team Section -->
	<section id="team-section" class="team-section ow-section">
		<!-- container -->
		<div class="container">
			<!-- col-md-3 -->
			<div class="col-md-3 col-sm-4">
				<!-- Section Header -->
				<div class="section-header">
					<h3><img src="images/icon/sep-icon.png" alt="sep-icon" /> clever staffs</h3>
				</div><!-- Section Header /- -->
				<p>Totam rem aperiam, eaque ipsa quae inventore veritatis et quasi architect beatae vitae dicta sunt expleo. nemo enim ipsam voluptatem quia.</p>
			</div><!-- col-md-3 /- -->
			
			<!-- col-md-9 -->
			<div class="col-md-9 col-sm-8">
				<div id="make-clean-team" class="owl-carousel owl-theme team-style1">
					<div class="item">
						<div class="team-box">
							<img src="images/team/team-1.png" alt="team" />
							<div class="team-box-inner">
								<img src="images/team/team-icon.png" alt="team icon" />
								<h4>BENJAMIN THOMAS</h4>
								<hr>
								<p>Office Clenaer</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="images/team/team-2.png" alt="team" />
							<div class="team-box-inner">
								<img src="images/team/team-icon.png" alt="team icon" />
								<h4>BENJAMIN THOMAS</h4>
								<hr>
								<p>Office Clenaer</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="images/team/team-3.png" alt="team" />
							<div class="team-box-inner">
								<img src="images/team/team-icon.png" alt="team icon" />
								<h4>BENJAMIN THOMAS</h4>
								<hr>
								<p>Office Clenaer</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="images/team/team-1.png" alt="team" />
							<div class="team-box-inner">
								<img src="images/team/team-icon.png" alt="team icon" />
								<h4>BENJAMIN THOMAS</h4>
								<hr>
								<p>Office Clenaer</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="images/team/team-2.png" alt="team" />
							<div class="team-box-inner">
								<img src="images/team/team-icon.png" alt="team icon" />
								<h4>BENJAMIN THOMAS</h4>
								<hr>
								<p>Office Clenaer</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="images/team/team-3.png" alt="team" />
							<div class="team-box-inner">
								<img src="images/team/team-icon.png" alt="team icon" />
								<h4>BENJAMIN THOMAS</h4>
								<hr>
								<p>Office Clenaer</p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- col-md-9 /- -->
		</div><!-- container /- -->
	</section><!-- Team Section /- -->
	
	<!-- Industry Serve -->
	<section id="industry-serve-section" class="industry-serve-section ow-section">
		<!-- container -->
		<div class="container">
			<!-- col-md-6 -->
			<div class="col-md-6">
				<!-- Section Header -->
				<div class="section-header">
					<h3><img src="images/icon/sep-icon.png" alt="sep-icon" /> INDUSTRIES WE SERVE</h3>
				</div><!-- Section Header /- -->
				<!-- industry-serve -->
				<div class="industry-serve">
					<p>Architecto beatae vitae dicta sunt explicabo. Nemo eni sai th ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit dolores eos qui ratione.</p>
					<div class="row">
						<p class="col-md-6 col-sm-6"><img src="images/icon/airline.png" alt="airline" /> Airports & Airlines</p>
						<p class="col-md-6 col-sm-6"><img src="images/icon/school.png" alt="school" /> Schools & Universities</p>
						<p class="col-md-6 col-sm-6"><img src="images/icon/auto-mobile.png" alt="auto-mobile" /> Auto Dealerships</p>
						<p class="col-md-6 col-sm-6"><img src="images/icon/medical.png" alt="medical" /> Medical Facilities</p>
						<p class="col-md-6 col-sm-6"><img src="images/icon/fitness.png" alt="fitness" /> Sports & Fitness Centers</p>
						<p class="col-md-6 col-sm-6"><img src="images/icon/entertainment.png" alt="airline" /> Entertainment Venues</p>
						<a title="View More" href="#">View More</a>
					</div>
				</div><!-- industry-serve -->
			</div><!-- col-md-6 /- -->
			
			
			<!-- col-md-6 -->
			<div class="col-md-6">
				<!-- Section Header -->
				<div class="section-header">
					<h3><img src="images/icon/sep-icon.png" alt="sep-icon" /> WHAT OUR CLIENTS SAY</h3>
				</div><!-- Section Header /- -->
					<!-- industry-serve -->
					<div class="industry-serve">
						<div id="testimonial" class="carousel slide testimonial" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#testimonial" data-slide-to="0" class="active"></li>
							<li data-target="#testimonial" data-slide-to="1"></li>
							<li data-target="#testimonial" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/testimonial/testimonial-1.png" alt="testimonial" />
								<div class="carousel-caption">									
									<p>Victa sunt explicabo. Nemo eni sai th ipsam satai voluptatem quia voluptas sit aspernatur aut odit fugit sed quia consequuntur magni dolores volup tas sit aspernatur aut odit aut fugit.</p>
									<h3>- ANNA LUSIA <span>FOUNDER OF XYZ COMPANY</span></h3>
								</div>
							</div>
							
							<div class="item">
								<img src="images/testimonial/testimonial-1.png" alt="testimonial" />
								<div class="carousel-caption">									
									<p>Victa sunt explicabo. Nemo eni sai th ipsam satai voluptatem quia voluptas sit aspernatur aut odit fugit sed quia consequuntur magni dolores volup tas sit aspernatur aut odit aut fugit.</p>
									<h3>- ANNA LUSIA <span>FOUNDER OF XYZ COMPANY</span></h3>
								</div>
							</div>
							
							<div class="item">
								<img src="images/testimonial/testimonial-1.png" alt="testimonial" />
								<div class="carousel-caption">
									<p>Victa sunt explicabo. Nemo eni sai th ipsam satai voluptatem quia voluptas sit aspernatur aut odit fugit sed quia consequuntur magni dolores volup tas sit aspernatur aut odit aut fugit.</p>
									<h3>- ANNA LUSIA <span>FOUNDER OF XYZ COMPANY</span></h3>
								</div>
							</div>
						</div>
					</div>
					
				</div><!-- industry-serve -->
			</div><!-- col-md-6 /- -->
		</div><!-- container /- -->
	</section><!-- Industry Serve /- -->
	
	
	
	<!-- Blog Section -->
	<div id="blog-section" class="blog-section ow-section">
		<!-- container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header">
				<h3><img src="images/icon/sep-icon.png" alt="sep-icon" />LATEST NEWS AND TIPS</h3>
			</div><!-- Section Header /- -->
			<!-- col-md-6 -->
			<article class="col-md-6 col-sm-12">
				<div class="blog-box">
					<div class="blog-box-inner">
						<!-- entry header -->
						<header class="entry-header">
							<h3><a title="Blog Title" href="#">12 tips to clean window</a></h3>
						</header><!-- entry header /- -->
						
						<footer class="entry-footer">
							<span class="byline">
								<span class="screen-reader-text">BY </span>
								<a title="Admin" href="#">Admin,</a>
							</span>
							<span class="byline">
								<span class="screen-reader-text">Likes </span>
								<a title="Likes" href="#">23</a>
							</span>
						</footer>
						
						<div class="entry-content">
							<p>Neque porro quisquam est, qui thas dolorem ipsum quia dolor sit amets non numquam[...]</p>
						</div>
						<a href="#">Read more</a>
					</div>
					<div class="entry-cover pull-right">
						<a title="Entry Cover" href="#"><img src="images/blog/blog-1.png" alt="blog-1" /></a>
						<span class="posted-on">
							<span class="like">12</span>
							<span class="date">10 APR</span>
						</span>
					</div>
				</div>
			</article><!-- col-md-6 /- -->
			
			<!-- col-md-6 -->
			<article class="col-md-6 col-sm-12">
				<div class="blog-box">
					<div class="blog-box-inner">
						<!-- entry header -->
						<header class="entry-header">
							<h3><a title="Blog Title" href="#">12 tips to clean window</a></h3>
						</header><!-- entry header /- -->
						
						<footer class="entry-footer">
							<span class="byline">
								<span class="screen-reader-text">BY </span>
								<a title="Admin" href="#">Admin,</a>
							</span>
							<span class="byline">
								<span class="screen-reader-text">Likes </span>
								<a Title="Likes" href="#">23</a>
							</span>
						</footer>
						
						<div class="entry-content">
							<p>Neque porro quisquam est, qui thas dolorem ipsum quia dolor sit amets non numquam[...]</p>
						</div>
						<a href="#">Read more</a>
					</div>
					<div class="entry-cover pull-right">
						<a title="Blog Cover" href="#"><img src="images/blog/blog-2.png" alt="blog-2" /></a>
						<span class="posted-on">
							<span class="like">12</span>
							<span class="date">10 APR</span>
						</span>
					</div>
				</div>
			</article><!-- col-md-6 /- -->
			<a href="#" class="btn">View All</a>
		</div><!-- container /- -->
	</div><!-- Blog Section /- -->
	
	
	<!-- Footer Section -->
	<?php include"footer.php"; ?>
    <!-- Footer Section /- -->

	<!-- jQuery Include -->
	<script src="libraries/jquery.min.js"></script>	
	<script src="libraries/jquery.easing.min.js"></script><!-- Easing Animation Effect -->
	<script src="libraries/bootstrap/bootstrap.min.js"></script> <!-- Core Bootstrap v3.3.4 -->
	<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false'></script>
	<script src="libraries/gmap/jquery.gmap.min.js"></script> <!-- Light Box -->
	<script src="libraries/fuelux/jquery-ui.min.js"></script> <!-- Price Filter -->
	<script src="libraries/jquery.animateNumber.min.js"></script> <!-- Used for Animated Numbers -->
	<script src="libraries/jquery.appear.js"></script> <!-- It Loads jQuery when element is appears -->
	<script src="libraries/jquery.knob.js"></script> <!-- Used for Loading Circle -->
	<script src="libraries/wow.min.js"></script> <!-- Use For Animation -->
	<script src="libraries/owl-carousel/owl.carousel.min.js"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<script src="libraries/portfolio-filter/jquery.quicksand.js"></script> <!-- Portfolio Filter -->
	<script src="libraries/expanding-search/modernizr.custom.js"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<script src="libraries/flexslider/jquery.flexslider-min.js"></script> <!-- flexslider -->
	<script src="libraries/jquery.magnific-popup.min.js"></script> <!-- Light Box -->
	<script src="libraries/expanding-search/modernizr.custom.js"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<script src="libraries/expanding-search/classie.js"></script> 
	<script src="libraries/expanding-search/uisearch.js"></script>
	<script>
		new UISearch( document.getElementById( 'sb-search' ) );
	</script>
	<!-- Customized Scripts -->
	<script src="js/functions.js"></script>
	
</body>
</html>