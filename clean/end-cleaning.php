<!doctype html>
<html class=""> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">	
	<title>End of Lease Cleaning</title>
		
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
    
    <style type="text/css">
<!--
.style2 {color: #FFFFFF; font-weight: bold; }
-->
    </style>
</head>
<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">
	<a id="top"></a>
	
	<!-- Header Section -->
	<?php include"header.php" ?>
	<!-- Page Banner -->
	<div id="page-banner" class="page-banner">
		<img src="images/page-banner.png" alt="page-banner" />
		<!-- container -->
		<div class="page-detail">
			<div class="container">
				<h3 class="page-title">End of Lease Cleaning</h3>
				<div class="page-breadcrumb pull-right">	
					<ol class="breadcrumb">
						<li><a title="Home" href="index.php">Home</a></li>
						<li>End of Lease Cleaning</li>
					</ol>
				</div>
			</div>
		</div><!-- container /- -->
	</div><!-- Page Banner /- -->
		
	<!-- Welcome Section -->
	<Section id="welcome-section" class="welcome-section ow-section">
		<!-- container -->
		<div class="container">
			
			<div class="col-md-8 col-sm-7 welcome-content" style="margin-top:0px;">
            <table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td width="50%" bgcolor="#fafafa"><div align="center" style="color:000; font-size:20px;"><a href="home-cleaning.php" style="border:none; box-shadow:none;">Domestic Cleaning</a></div></td>
    <td width="50%" bgcolor="#1e4763"><div align="center" style="color:#fff; font-size:20px;"><a href="end-cleaning.php" style="border:none; color:#fff;box-shadow:none;">End of Lease Cleaning</a></div></td>
  </tr>
</table><br>


			  <center><?php if(@$_GET['action']=='upok'){?><h2 style="color:#009900">Your Request Submited, We will Contact You Shortly</h2><?php }?>
                <?php if(@$_GET['action']=='upno'){?><h2 style="color:#FF0000">Not Submitted, Try Again</h2><?php }?></center>

				<!-- Section Header /- -->
				<div class="slider-section">
                <form id="quick-contact" class="contact-form col-md-12" method="post" action="end-cleaning_submit.php" style="margin-top:0px;">
				<h3>End of Lease Cleaning <span>Get a Quote !</span></h3>
				<div class="form-control">
                <select name="rooms" id="rooms" class="classselect" style="float:left" onChange="viewvalues();">
                <option value="1">1 Room</option>
                <option value="2">2 Rooms</option>
                <option value="3">3 Rooms</option>
                <option value="4">4 Rooms</option>
                <option value="5">5 Rooms</option>
                </select>
                 <select name="bathrooms" id="bathrooms" class="classselect" style="float:right" onChange="viewvalues();">
                <option value="1">1 Bathroom</option>
                <option value="2">2 Bathrooms</option>
                <option value="3">3 Bathrooms</option>
                
                </select>
                <table width="98%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td width="53%" valign="top"  style="color:#FFFFFF;">
     <h2 style=" color:#FFFF00; margin-top:5px;">Included</h2>

<i class="fa fa-check" style="color:#FFFF00"> </i> Bathrooms<br><br>


<i class="fa fa-check" style="color:#FFFF00"> </i> Bedrooms/ Entrance/ Hallway/ Lounge/ Dining Rooms<br><br>

<i class="fa fa-check" style="color:#FFFF00"> </i>
Kitchen<br><br>

<i class="fa fa-check" style="color:#FFFF00"> </i>
Wardrobes / Cupboards<br><br>

<i class="fa fa-check" style="color:#FFFF00"> </i>
Pantry / Cupboards<br><br>

<i class="fa fa-check" style="color:#FFFF00"> </i>
Laundry<br><br>

<i class="fa fa-check" style="color:#FFFF00"> </i>

Oven</td>
    <td width="47%" valign="top" style="color:#FFFFFF">
         <h2 style=" color:#FFFF00; margin-top:5px;">Extra</h2>

    <input type="checkbox" id="Balcony" name="Balcony" value="Balcony" class="classcheck" onChange="viewvalues();"> Balcony ------ $35.00<br>
<input type="checkbox" id="Fridge" name="Fridge" value="Fridge" class="classcheck" onChange="viewvalues();" > Fridge ------ $35.00<br>
<input type="checkbox" id="Carpet_Steam_Clean" name="Carpet_Steam_Clean" value="Carpet Steam Clean" class="classcheck" onChange="viewvalues();"> Carpet Steam Clean ------ $90.00<br>
<input type="checkbox" id="Internal_Windows" name="Internal_Windows" value="Wall Wash" class="classcheck" onChange="viewvalues();"> Wall Wash ------ $35.00<br></td>
  </tr>
  <tr>
    <td valign="top" style="color:#FFFFFF">&nbsp;</td>
    <td valign="top" style="color:#FFFFFF">&nbsp;</td>
  </tr>
</table>
<input type="date" id="dateof" name="dateof" placeholder="Date" class="classselect" required /> 
					<input type="time" id="timeof" name="timeof" placeholder="6:00PM"  required /> 
                
               
					
					<input type="text" id="quick_name" name="quick-name" placeholder="NAME" required /> 
					<input type="text" id="quick_phone" name="quick-phone" placeholder="PHONE" required/> 
					<input type="text" id="quick_email" name="quick-email" placeholder="EMAIL" required /> 
					<textarea id="quick_message" name="quick-message" placeholder="ADDRESS"></textarea>
                    <input type="hidden" id="rombathprice" value="0">
                     <input type="hidden" id="extraprice" value="0">
                     <input type="hidden" id="rombathpricefinaltxt" value="0">
                     <input type="hidden" id="finalrateact" name="finalrateact" value="0">
                     
                     <div id="rate"></div>
					<input type="submit" id="btn_submit" name="submit" value="Send"  onClick="calcfinalincome();"/>
				</div>
				<div id="alert-msg" class="alert-msg"></div>
			</form>
				</div>
				
			</div>
            <div class="col-md-4 col-sm-5" style="border:solid 2px #000066">
            <script>
			function viewvalues(){
            var rooms = document.getElementById("rooms").value;
			document.getElementById('rooms1').innerHTML = rooms+" Rooms";
			//alert(rooms);
			var bathrooms = document.getElementById("bathrooms").value;
			document.getElementById('bathrooms1').innerHTML = bathrooms+" Bathrooms";
			//alert(rooms);
			
			//alert(rooms);			
			if(rooms==1 && bathrooms ==1){
			var roomrate=195;
			}
			if((rooms==2 && bathrooms ==1) || (rooms==1 && bathrooms ==2)){
			var roomrate=215;
			}
			if(rooms==2 && bathrooms ==2){
			var roomrate=240;
			}
			if((rooms==3 && bathrooms ==1) || (rooms==1 && bathrooms ==3)){
			var roomrate=315;
			}
			if((rooms==3 && bathrooms ==2) || (rooms==2 && bathrooms ==3)){
			var roomrate=335;
			}
			if(rooms==3 && bathrooms ==3){
			var roomrate=415;
			}
			if(rooms==4 && bathrooms ==1){
			var roomrate=395;
			}
			if(rooms==4 && bathrooms ==2){
			var roomrate=415;
			}
			if(rooms==4 && bathrooms ==3){
			var roomrate=455;
			}
			if(rooms==5 && bathrooms ==1){
			var roomrate=415;
			}
			if(rooms==5 && bathrooms ==2){
			var roomrate=495;
			}
			if(rooms==5 && bathrooms ==3){
			var roomrate=535;
			} 
			document.getElementById('rombathprice').value = roomrate;
			
			var roomratetxt = document.getElementById("rombathprice").value;
			var extraratetxt = document.getElementById("extraprice").value;
			
			var sumfinal=parseInt(roomratetxt)+parseInt(extraratetxt);
			var beforefinal=sumfinal-(sumfinal*.0);
			
			
			
			document.getElementById('rombathpricefinaltxt').value = beforefinal;
			document.getElementById('finalrateact').value = beforefinal;
			document.getElementById('rombathpricefinal').innerHTML = "$"+beforefinal;

			}
            </script>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            <script>
			   
    $(document).ready(function(){
	$('input[type=checkbox]').prop("checked", false);
	$("#extraprice").val(0);
	$("#rombathprice").val(0);
	$("#rombathpricefinaltxt").val(0);
	$("#finalrateact").val(0);
	$("#coupons1").val("");
	var bal=0;
	
        $("#Balcony").click(function(){
            if($(this).is(":checked")){
                $("#Balcony1").html(document.getElementById("Balcony").value);
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(35);
				$("#extraprice").val(bal);
				
            }
            else if($(this).is(":not(:checked)")){
                $("#Balcony1").html("");
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(-35);
				$("#extraprice").val(bal);
            }
        });
		
		
		
		$("#Fridge").click(function(){
            if($(this).is(":checked")){
                $("#Fridge1").html(document.getElementById("Fridge").value);
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(50);
				$("#extraprice").val(bal);
            }
            else if($(this).is(":not(:checked)")){
                $("#Fridge1").html("");
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(-50);
				$("#extraprice").val(bal);
            }
        });
		
		
		
		$("#Carpet_Steam_Clean").click(function(){
            if($(this).is(":checked")){
                $("#Carpet_Steam_Clean1").html(document.getElementById("Carpet_Steam_Clean").value);
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(90);
				$("#extraprice").val(bal);
            }
            else if($(this).is(":not(:checked)")){
                $("#Carpet_Steam_Clean1").html("");
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(-90);
				$("#extraprice").val(bal);
            }
        });
		$("#Internal_Windows").click(function(){
            if($(this).is(":checked")){
                $("#Internal_Windows1").html(document.getElementById("Internal_Windows").value);
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(35);
				$("#extraprice").val(bal);
            }
            else if($(this).is(":not(:checked)")){
                $("#Internal_Windows1").html("");
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(-35);
				$("#extraprice").val(bal);
            }
        });
		
		
		
    });
	
	function calcfinalincome(){
	var beforefinalnew = document.getElementById("rombathpricefinaltxt").value;
	var couponrate=document.getElementById("rates").value;
	var finalrate=parseInt(beforefinalnew)-(parseInt(beforefinalnew)*(parseInt(couponrate)/100));
	
	document.getElementById('finalrateact').value = finalrate;
	document.getElementById('coupondis').innerHTML = "Discount of "+couponrate+"% Applied";
	document.getElementById('rombathpricefinal').innerHTML = "$"+finalrate;
	}
</script>
				<h3 style="margin-top:0px;">Your Selection </h3>
                <hr>
                <div id="rooms1" class="viewvalues" style="font-size:18px; color:#990000"></div>
                <div id="bathrooms1" class="viewvalues" style="font-size:18px; color:#990000"></div>
                <h3>Extras</h3>
                 <div id="Balcony1" class="viewvalues" style="font-size:18px; color:#990000"></div>
                 <div id="Kitchen_Cupboards1" class="viewvalues" style="font-size:18px; color:#990000"></div>
                 <div id="Fridge1" class="viewvalues" style="font-size:18px; color:#990000"></div>
                 <div id="Oven1" class="viewvalues" style="font-size:18px; color:#990000"></div>
                 <div id="Pantry1" class="viewvalues" style="font-size:18px; color:#990000"></div>
                 <div id="After_Party1" class="viewvalues" style="font-size:18px; color:#990000"></div>
                 <div id="Carpet_Steam_Clean1" class="viewvalues" style="font-size:18px; color:#990000"></div>
                 <div id="Internal_Windows1" class="viewvalues" style="font-size:18px; color:#990000"></div>
                 <br>
<br>
Coupon Code : <input type="text" id="coupons1" name="coupon" placeholder="Have any Coupon Code?" onChange="getcoupon(this.value);"> <input type="button" value="Apply"  onClick="calcfinalincome();">
<strong id="coupondis" style="color:#009900"></strong>
<h2>Total : <strong id="rombathpricefinal"></strong></h2>
                 <!-- <h3>Date and Time</h3>
                  <div id="dateof1" class="viewvalues" style="font-size:18px; color:#990000"></div>
                 <div id="timeof1" class="viewvalues" style="font-size:18px; color:#990000"></div>-->
                  
			</div>
		</div><!-- container /- -->
	</section><!-- Welcome Section /- -->
	
	
	
	<!-- Footer Section -->
	<?php include"footer.php"; ?><!-- Footer Section /- -->

	<!-- jQuery Include -->
    <script>



function getcoupon(val) {

	$.ajax({
	type: "POST",
	url: "get_coupon.php",
	data:'coupon='+val,
	success: function(data){
	$("#rate").html(data);
	}
	});

}



</script>	
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
	
	
</body>
</html>