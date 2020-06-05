<!doctype html>
<html class=""> 

<!-- 06:02:07 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">	
	<title>7to7</title>
		
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
			
			
			<div class="carousel-inner" role="listbox">
				
				
				<?php include("connection.php");
				$data_pic =mysqli_query($link,"SELECT * from photo order by sno desc");
	$i=1;			
while($row=mysqli_fetch_array($data_pic)){ 

				?>
				<div class="item <?php if($i==1){?>active<?php }?>">
					<img src="cleaningadmin/uploads/<?php echo $row['producttype'];?>" alt="slide">
					<div class="carousel-caption">
						<div class="container">
							<div class="col-md-6">
								<h3></h3>								
							</div>
						</div>
					</div>
				</div>
				<?php $i++; } ?>
				
				
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
			<!--<form id="quick-contact" class="contact-form col-md-4" method="post">
				<h3>quick contact form <span>call us anytime !</span></h3>
				<div class="form-control">
					<input type="text" id="quick_name" name="quick-name" placeholder="NAME" required /> 
					<input type="text" id="quick_phone" name="quick-phone" placeholder="PHONE" /> 
					<input type="text" id="quick_email" name="quick-email" placeholder="EMAIL" required /> 
					<textarea id="quick_message" name="quick-message" placeholder="Description of services needed"></textarea>
					<input type="submit" id="btn_submit" name="submit" value="Send Message" />
				</div>
				<div id="alert-msg" class="alert-msg"></div>
			</form>-->
		</div>
	</div><!-- Slider Section /- -->
	
	<!-- Service Section -->
	<section id="service-section" class="service-section ow-section">
		<!-- container -->
		<div class="container">

			<!-- Section Header -->
			<div class="section-header">
				<h3><img src="images/icon/sep-icon.png" alt="sep-icon" /> Service we offer</h3>
			</div><!-- Section Header /- -->
			
			<div id="make-clean-service" class="owl-carousel owl-theme services-style1">
				<div class="item">
					<div class="service-box">
						<img src="images/services/services-2.png" alt="services"/>
						<div class="service-box-inner">
							<h4> Office & Commercial Cleaning </h4>
							<a title="View Details" href="#">view details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="service-box">
						<img src="images/services/services-3.png" alt="services"/>
						<div class="service-box-inner">
							<h4> Windows & Upholstery Cleaning</h4>
							<a title="View Details" href="#">view details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="service-box">
						<img src="images/services/services-1.png" alt="services"/>
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
					<h3>Welcome to 7 to 7 Cleaning Services</h3>
				</div><!-- Section Header /- -->
				<p>We are expert in providing Bond cleaning/end of lease cleaning service, <strong>Bond Cleaning</strong> and <strong>Household Cleaning services</strong>.   Our Cleaners are fully skilled and professional who knows that what it   takes to give you an exceptional service and peace of mind. With our   service, we let you enjoy the excitement of moving into your new home.</p>
				<a title="Button" href="about.php">About us</a>
				
				<div class="welcome-content-box row">
					<div class="col-md-4 col-sm-6 welcome-box">
						<img src="images/welcome/high-trained-staff.png" alt="high trained staff" />
						<h4>Highly Trained Staff</h4>
						<p>Our Staff is highly trained and proffessional working. Each of our Cleaner has more than 2 years of experience in cleaning before working for us, making sure they are very good at what they do.</p>
					</div>
					<div class="col-md-4 col-sm-6 welcome-box">
						<img src="images/welcome/quality-cleaning-staff.png" alt="quality-cleaning-staff" />
						<h4>Quality Cleaning Products</h4>
						<p>All the products used by us are of high quality and organic products. When we are done with our clean you can feel the differrent ambiance in your property</p>
					</div>
					<div class="col-md-4 col-sm-6 welcome-box">
						<img src="images/welcome/fast-service.png" alt="fast-service" />
						<h4>Fast & Effective Service</h4>
						<p>All our services are done in time bound manner with high quality. We provide a time frame before start of the job and complete the job in that time frame only</p>
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
					<h3><img src="images/icon/sep-icon.png" alt="sep-icon" /> Proffessional Staff </h3>
				</div><!-- Section Header /- -->
				<p>All Our cleaner are highly proffessional in the work and services. Every Cleaner is Police checked Before hiring.</p>
			</div><!-- col-md-3 /- -->
			
			<!-- col-md-9 -->
			<div class="col-md-9 col-sm-8">
				<div id="make-clean-team" class="owl-carousel owl-theme team-style1">
					<div class="item">
						<div class="team-box">
							<img src="images/team/team-1.png" alt="team" />
							<div class="team-box-inner">
								<img src="images/team/team-icon.png" alt="team icon" />
								<h4>Benjamin Thomas</h4>
								<hr>
								<p>Office Cleaner</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="images/team/team-2.png" alt="team" />
							<div class="team-box-inner">
								<img src="images/team/team-icon.png" alt="team icon" />
								<h4>Diana</h4>
								<hr>
								<p>Domestic Cleaner</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="images/team/team-3.png" alt="team" />
							<div class="team-box-inner">
								<img src="images/team/team-icon.png" alt="team icon" />
								<h4>Sasha</h4>
								<hr>
								<p>Domestic Cleaner</p>
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
								<p>Office Cleaner</p>
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
								<p>Office Cleanr</p>
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
								<p>Office Cleaner</p>
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
					<p> 7 to 7 Cleaning services is providing services to many offices and industries prevailing in Brisbane. Some of these are</p>
					<div class="row">
						<p class="col-md-6 col-sm-6"><img src="images/icon/airline.png" alt="airline" /> Airports & Airlines</p>
						<p class="col-md-6 col-sm-6"><img src="images/icon/school.png" alt="school" /> Schools & Universities</p>
						<p class="col-md-6 col-sm-6"><img src="images/icon/auto-mobile.png" alt="auto-mobile" /> Auto Dealerships</p>
						<p class="col-md-6 col-sm-6"><img src="images/icon/medical.png" alt="medical" /> Medical Facilities</p>
						<p class="col-md-6 col-sm-6"><img src="images/icon/fitness.png" alt="fitness" /> Sports & Fitness Centers</p>
						<p class="col-md-6 col-sm-6"><img src="images/icon/entertainment.png" alt="airline" /> Entertainment Venues</p>
						
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
									<p>House cleaning was superb, no faults at all. Our cleaner covered all that we asked for and more within her time frame. Would highly recommend. Many thanks, will book aga.</p>
									<h3>- Meghan </h3>
								</div>
							</div>
							
							<div class="item">
								<img src="images/testimonial/testimonial-1.png" alt="testimonial" />
								<div class="carousel-caption">									
									<p>I have a regular service and my cleaner does a fabulous job. She is very reliable and extremely efficient. I could not be happier with the service she provides. I love coming home from work on Cleaning days.</p>
									<h3>- Anastasia </h3>
								</div>
							</div>
							
							<div class="item">
								<img src="images/testimonial/testimonial-1.png" alt="testimonial" />
								<div class="carousel-caption">
									<p>Friendly, reliable, and very thorough cleaner - our house looks so perfect after the clean, we love it! Highly recommended to many friends and family. Can’t speak highly enough of 7 to 7 Cleaning Services</p>
									<h3>- Donald </h3>
								</div>
							</div>
						</div>
					</div>
					
				</div><!-- industry-serve -->
			</div><!-- col-md-6 /- -->
		</div><!-- container /- -->
	</section><!-- Industry Serve /- -->
	
	

	
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