<!doctype html>
<html class="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">	
	<title>Contact us</title>
		
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
	<?php include"header.php" ?><!-- Header Section /- -->

	<!-- Page Banner -->
	<div id="page-banner" class="page-banner">
		<img src="images/page-banner.png" alt="page-banner" />
		<!-- container -->
		<div class="page-detail">
			<div class="container">
				<h3 class="page-title">Contact Us</h3>
				<div class="page-breadcrumb pull-right">	
					<ol class="breadcrumb">
						<li><a title="Home" href="index.php">Home</a></li>
						
						<li>Contact</li>
					</ol>
				</div>
			</div>
		</div><!-- container /- -->
	</div><!-- Page Banner /- -->
		
	<!-- contact Details -->
	<div id="contact-detail" class="contact-detail">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 col-sm-4 col-xs-4 contact-detail-box">
				<img src="images/icon/address-icon.png" alt="Address" />
				<h3>contact Address</h3>
				<p>16 kathleen st,</p>
				<p>Richlands</p>
				<p>Brisbane 4077.</p>
			</div>
			
			<div class="col-md-4 col-sm-4 col-xs-4 contact-detail-box">
				<img src="images/icon/customer-service-icon.png" alt="Address" />
				<h3>24/7 customer service</h3>
				<p>+(01) 800 527 4800</p>
				<p><a title="Mail Title" href="mailto:Clean@Example.com">Clean@Example.com</a></p>
			</div>
			
			<div class="col-md-4 col-sm-4 col-xs-4 contact-detail-box">
				<img src="images/icon/area-icon.png" alt="Address" />
				<h3>area we serve</h3>
				<p>Canberra, Brisbane, Sydney, Alice Springs.</p>
				<p>Perth and Cairns.</p>
			</div>
		</div>
		<!-- container /- -->
	</div><!-- contact Details -->
	
	<!-- Contact Form -->
	<div id="contact" class="contact-form-section ow-section">
		<!-- container -->
		<div class="container">
			<div class="row">
				<h3>Request Service or Estimate </h3>
				<p>Feel free to call us directly or simply complete our form below and we will follow up with you.</p>
				<form class="main-contact-form" method="post">
					<div class="col-md-6 col-sm-6">
						<label>Name <span>*</span></label>
						<input type="text" id="input_name" name="contact-name" required />
					</div>
					<div class="col-md-6 col-sm-6">
						<label>Email <span>*</span></label>
						<input type="text" id="input_email" name="contact-email" required />
					</div>
					<div class="col-md-6 col-sm-6">
						<label>Phone <span>*</span></label>
						<input type="text" id="input_phone" name="contact-phone" required />
					</div>
					<div class="col-md-6 col-sm-6">
						<label>Street</label>
						<input type="text" id="input_street" name="contact-street" />
					</div>
					<div class="col-md-6 col-sm-6">
						<label>Suite, Unit, Apt</label>
						<input type="text" id="input_category" name="contact-category" />
					</div>
					<div class="col-md-6 col-sm-6">
						<label>City</label>
						<input type="text" id="input_city" name="contact-city" />
					</div>
					<div class="col-md-6 col-sm-6">
						<label>State</label>
						<input type="text" id="input_state" name="contact-state" />
					</div>
					<div class="col-md-6 col-sm-6">
						<label>Zip Code</label>
						<input type="text" id="input_zipcode" name="contact-zipcode" />
					</div>
					<div class="col-md-12 col-sm-12">
						<label>Description of work or services needed</label>
						<textarea id="textarea_message" name="contact-message"></textarea>
					</div>
					<div class="col-md-12 col-sm-12">
						<input type="submit" class="btn" id="btn_smt" value="send Request" />
					</div>
					<div class="col-md-12 col-sm-12">
						<div id="alert-msg" class="alert-msg"></div>
					</div>
				</form>
			</div>
		</div><!-- container /- -->
	</div><!-- Contact Form /- -->
	
	<!-- Map Section -->
	<div class="map-section">
		<div id="gmap" class="mapping"></div>
	</div>
	<!-- Map Section /- -->
	
	<!-- Footer Section -->
	<?php include"footer.php"; ?><!-- Footer Section /- -->

	<!-- jQuery Include -->
	<script src="libraries/jquery.min.js"></script>	
	<script src="libraries/jquery.easing.min.js"></script><!-- Easing Animation Effect -->
	<script src="libraries/bootstrap/bootstrap.min.js"></script> <!-- Core Bootstrap v3.3.4 -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBg0VrLjLvDLSQdS7hw6OfZJmvHhtEV_sE"></script>
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

<!-- contact 06:16:14 GMT -->
</html>
