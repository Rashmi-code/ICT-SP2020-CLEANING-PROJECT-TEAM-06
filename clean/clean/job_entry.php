<?php require_once('Connections/dbconnection.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? ($theValue) : ($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysqli_select_db( $dbconnection, $database_dbconnection);
$query_Recordset1 = "SELECT * FROM photo
 ORDER BY`sno` asc ";
$Recordset1 = mysqli_query( $dbconnection, $query_Recordset1) or die(mysql_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
	$target_path = "uploads/";
$fi=$_FILES['upload1']['name'];

$target_path = $target_path . basename( $_FILES['upload1']['name']); 

if(move_uploaded_file($_FILES['upload1']['tmp_name'], $target_path)) {
   // echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    //" has been uploaded";
	chmod("uploads/$fi",755); 
} else{
    echo "There was an error uploading the file, please try again!";
}
  $insertSQL = sprintf("INSERT INTO photo (producttype) VALUES (%s)",
                        GetSQLValueString($_FILES['upload1']['name'], "text"));

  mysqli_select_db( $dbconnection, $database_dbconnection);
  $Result1 = mysqli_query( $dbconnection, $insertSQL) or die(mysql_error());

  $insertGoTo = "add_producttype.php?s=s";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO photo (producttype) VALUES (%s)",
                        GetSQLValueString($_FILES['upload']['name'], "text"));

  mysqli_select_db( $dbconfig, $database_dbconfig);
  $Result1 = mysqli_query( $dbconfig, $insertSQL) or die(mysql_error());

  $insertGoTo = "insurance.php?s=in";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }

  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/gsb_template.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Dashboard | Hanbros International</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.slimscroll.js"></script>
<script type="text/javascript" src="js/custom/general.js"></script>
<script type="text/javascript" src="js/custom/dashboard.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
      

<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/plugins/excanvas.min.js"></script><![endif]-->
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body class="withvernav">
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "logout.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<div class="bodywrapper">
    <div class="topheader">
      <div class="left">
            <h1 class="logo">Cleaning<span> Service</span></h1>
            <!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
      	<div class="notification">
                <a class="count" href="ajax/notifications.php"><span>Pendency</span></a>
       	  </div>
            <div class="userinfo">
            	<img src="images/thumbs/avatar.png" alt="" />
                <span>Cleaning</span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">
            	<div class="avatar">
                	<a href="#"><img src="images/thumbs/avatarbig.png" alt="" /></a>
                
                </div><!--avatar-->
                <div class="userdata">
                	<h4>Welcome to Cleaning</h4>
                    <span class="email">youremail@yourdomain.com</span>
                    <ul>
                    	<li><a href="chgpass.php">Change Password</a></li>
                        <li><a href="accountsettings.php">Account Settings</a></li>
                        
                        <li><a href="<?php echo $logoutAction ?>">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
   	  <ul class="headermenu">
        	<li class="current"><a href="home.php"><span class="icon icon-flatscreen"></span>Dashboard</a></li>
          
        </ul>
        
        <div class="headerwidget">
        	<div class="earnings">
            	<div class="one_half">
                	<h4>Today</h4>
                    <h2><?php  $b = time(); 
 print date("d/m/y");?></h2>
                </div>
            	
          	      </div>
            	    <!--[if !IE]>-->
          	    </object>
            	  <!--<![endif]-->
          	  </object>
            	<!--one_half-->
                <!--<div class="one_half last alignright">
                	<h4>SIGN IN TIME</h4>
                    <h2><?php /*?><?PHP echo date("h:i:sa"); ?><?php */?></h2>
                </div>--><!--one_half last-->
            </div><!--earnings-->
        </div><!--headerwidget-->
        
        
    </div><!--header-->
    
    <div class="vernav2 iconmenu">
    	<ul>
        	<li><a href="#error" class="elements"><strong style="color: #FF9900"> Main Entry</strong></a>
            <span class="arrow"></span>
           
          <?php /*?><li><a href="../main_entry.php">New entry</a></li><?php */?>
          <li><a href="job_entry.php">Job Entry</a></li>
          <li><a href="list_assign.php">Assign Job</a></li>
   		  <li><a href="list_main.php">Job List</a></li>
          <li><a href="add_producttype.php">Add Slider</a></li>
          <li><a href="add_coupon.php">Add Coupon</a></li>
                </li>
        
                    
                </li>
 
       
            	<span class="arrow"></span>
            	<?php if($_SESSION['MM_Username']=='admin'){ ?><li><a href="add_user.php">User Manager</a></li>  <?php }?>
   	  </ul> 
        <a class="togglemenu"></a>
        <br /><br />
  </div><!--leftmenu-->
        
    <div class="centercontent">
    
      <div class="pageheader"><!-- InstanceBeginEditable name="content\" -->
 <?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "notauthorized.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
     


 <div class="pageheader notab">
   <h1 class="pagetitle">Add NEW JOB</h1>
</div>    

<?php if(@$_GET['s']=="s"){print("<script>alert('Data Submitted Sucessfully!');</script>");echo('<script>(location.href="add_producttype.php");</script>');} ?>

		
	<link rel="shortcut icon" href="images/favicon.png">
    <link href="../libraries/bootstrap/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="../libraries/fuelux/jquery-ui.min.css">
    <linK href="../libraries/owl-carousel/owl.carousel.css" rel="stylesheet"/> 
    <linK href="../libraries/owl-carousel/owl.theme.css" rel="stylesheet"/> 
	<link href="../libraries/fonts/font-awesome.min.css" rel="stylesheet"/>
	<link href="../libraries/animate/animate.min.css" rel="stylesheet"/>
	<link href="../libraries/flexslider/flexslider.css" rel="stylesheet" /> <!-- flexslider -->
	<link href="../libraries/magnific-popup.css" rel="stylesheet" />
    <link href="css/components.css" rel="stylesheet"/>
	<link href="style.css" rel="stylesheet"/>
    <link href="css/media.css" rel="stylesheet"/>
    

	<link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
</head>
<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">
	<a id="top"></a>
	
	<!-- Header Section -->
	
	<!-- Page Banner -->
	<!-- Page Banner /- -->
		
	<!-- Welcome Section -->
	<Section id="welcome-section" class="welcome-section ow-section">
		<!-- container -->
	  <div width="99%">
			
			<div class="col-md-8 col-sm-6 welcome-content" style="margin-top:0px;">
<br>
				<center><?php if(@$_GET['action']=='upok'){?><h2 style="color:#009900">Your Request Submited, We will Contact You Shortly</h2><?php }?>
                <?php if(@$_GET['action']=='upno'){?><h2 style="color:#FF0000">Not Submitted, Try Again</h2><?php }?></center>

				<!-- Section Header /- -->
				<div class="slider-section" id="tblstart">
                <form id="quick-contact" class="contact-form col-md-12" method="post" action="home-cleaning_submit.php" style="margin-top:0px;">
				
				<div >
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
   <td width="53%" valign="top"  style="color: #000; font-weight: bold;">
     <h2 style="color: #000000; margin-top: 5px;">Included</h2>
     <span style="color: #000000"><i class="fa fa-check" style="color:#000"> </i> Bathrooms</span><br><br>


<i class="fa fa-check" style="color:#000"> </i> Bedrooms<br><br>

<i class="fa fa-check" style="color:#000"> </i>
Kitchen<br><br>

<i class="fa fa-check" style="color:#000"> </i>

Living & Other Rooms</td>
    <td width="37%" valign="top" style="color: #000000">
         <h2 style="color: #000000; margin-top: 5px;">Extra</h2>

    <input type="checkbox" id="Balcony" name="Balcony" value="Balcony" class="classcheck" onChange="viewvalues();">
    <span style="color: #000"> Balcony ------ $35.00<br>
<input type="checkbox" id="Kitchen_Cupboards" name="Kitchen_Cupboards" value="Kitchen Cupboards" class="classcheck" onChange="viewvalues();"> Kitchen Cupboards ------ $55.00<br>
<input type="checkbox" id="Fridge" name="Fridge" value="Fridge" class="classcheck" onChange="viewvalues();" > Fridge ------ $50.00<br>
<input type="checkbox" id="Oven" name="Oven" value="Oven" class="classcheck" onChange="viewvalues();" > Oven ------ $65.00<br>
<input type="checkbox" id="Pantry" name="Pantry" value="Pantry" class="classcheck" onChange="viewvalues();"> Pantry ------ $55.00<br>
<input type="checkbox" id="After_Party" name="After_Party" value="After Party" class="classcheck" onChange="viewvalues();"> After Party ------ $50.00<br>
<input type="checkbox" id="Carpet_Steam_Clean" name="Carpet_Steam_Clean" value="Carpet Steam Clean" class="classcheck" onChange="viewvalues();"> Carpet Steam Clean ------ $90.00<br>
<input type="checkbox" id="Internal_Windows" name="Internal_Windows" value="Internal Windows" class="classcheck" onChange="viewvalues();"> Internal Windows</span> ------ $45.00<br></td>
  </tr>
  <tr>
    <td valign="top" style="color:#FFFFFF">&nbsp;</td>
    <td valign="top" style="color:#FFFFFF">&nbsp;</td>
  </tr>
</table>
                <strong>Date: </strong>
                <input type="date" id="dateof" name="dateof" placeholder="Date" class="classselect" required /> 
                </br>
					<strong>Time:</strong>
				  <input type="time" id="timeof" name="timeof" placeholder="6:00PM"  required /> 
					</br>
                
               
					
				  <input type="text" id="quick_name" name="quick-name" placeholder="NAME" required /> 
					<input type="text" id="quick_phone" name="quick-phone" placeholder="PHONE" required/> 
					<input type="text" id="quick_email" name="quick-email" placeholder="EMAIL" required /> 
					<textarea id="quick_message" name="quick-message" placeholder="ADDRESS"></textarea>
                    <input type="hidden" id="rombathprice" value="0">
                     <input type="hidden" id="extraprice" value="0">
                     <input type="hidden" id="rombathpricefinaltxt" value="0">
                     <input type="hidden" id="finalrateact" name="finalrateact" value="0">
                      
                     <input type="text" id="enteredby" name="enteredby" value="<?php echo($_SESSION['MM_Username']); ?>" readonly="readonly"/> 
                     <div id="rate"></div>
					<input type="submit" id="btn_submit" name="submit" value="Send" onClick="calcfinalincome();"/>
				</div>
				<div id="alert-msg" class="alert-msg"></div>
			</form>
				</div>
				
			</div>
            <div class="col-md-3 col-sm-5" style="border:solid 2px #000066">
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
			var beforefinal=sumfinal-(sumfinal*.60);
			
			
			
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
		
		$("#Kitchen_Cupboards").click(function(){
            if($(this).is(":checked")){
                $("#Kitchen_Cupboards1").html(document.getElementById("Kitchen_Cupboards").value);
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(55);
				$("#extraprice").val(bal);
				
            }
            else if($(this).is(":not(:checked)")){
                $("#Kitchen_Cupboards1").html("");
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(-55);
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
		$("#Oven").click(function(){
            if($(this).is(":checked")){
                $("#Oven1").html(document.getElementById("Oven").value);
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(65);
				$("#extraprice").val(bal);
            }
            else if($(this).is(":not(:checked)")){
                $("#Oven1").html("");
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(-65);
				$("#extraprice").val(bal);
            }
        });
		$("#Pantry").click(function(){
            if($(this).is(":checked")){
                $("#Pantry1").html(document.getElementById("Pantry").value);
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(55);
				$("#extraprice").val(bal);
            }
            else if($(this).is(":not(:checked)")){
                $("#Pantry1").html("");
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(-55);
				$("#extraprice").val(bal);
            }
        });
		$("#After_Party").click(function(){
            if($(this).is(":checked")){
                $("#After_Party1").html(document.getElementById("After_Party").value);
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(50);
				$("#extraprice").val(bal);
            }
            else if($(this).is(":not(:checked)")){
                $("#After_Party1").html("");
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
				bal=parseInt(bal) + parseInt(45);
				$("#extraprice").val(bal);
            }
            else if($(this).is(":not(:checked)")){
                $("#Internal_Windows1").html("");
				var bal=document.getElementById("extraprice").value;
				bal=parseInt(bal) + parseInt(-45);
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
	<script src="../libraries/jquery.min.js"></script>	
	<script src="../libraries/jquery.easing.min.js"></script><!-- Easing Animation Effect -->
	<script src="../libraries/bootstrap/bootstrap.min.js"></script> <!-- Core Bootstrap v3.3.4 -->
	<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false'></script>
	<script src="../libraries/gmap/jquery.gmap.min.js"></script> <!-- Light Box -->
	<script src="../libraries/fuelux/jquery-ui.min.js"></script> <!-- Price Filter -->
	<script src="../libraries/jquery.animateNumber.min.js"></script> <!-- Used for Animated Numbers -->
	<script src="../libraries/jquery.appear.js"></script> <!-- It Loads jQuery when element is appears -->
	<script src="../libraries/jquery.knob.js"></script> <!-- Used for Loading Circle -->
	<script src="../libraries/wow.min.js"></script> <!-- Use For Animation -->
	<script src="../libraries/owl-carousel/owl.carousel.min.js"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<script src="../libraries/portfolio-filter/jquery.quicksand.js"></script> <!-- Portfolio Filter -->
	<script src="../libraries/expanding-search/modernizr.custom.js"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<script src="../libraries/flexslider/jquery.flexslider-min.js"></script> <!-- flexslider -->
	<script src="../libraries/jquery.magnific-popup.min.js"></script> <!-- Light Box -->
	<script src="../libraries/expanding-search/modernizr.custom.js"></script> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
	<script src="../libraries/expanding-search/classie.js"></script> 
	<script src="../libraries/expanding-search/uisearch.js"></script>
	
<!-- InstanceEndEditable --><!--contentwrapper-->
        
        <br clear="all" />
      </div>
      <div id="contentwrapper" ><!-- #updates --><div align="center"> 
      </div>
      
    </div><!-- centercontent -->
    
  
</div>

</body>

<!-- InstanceEnd --></html>
<?php
mysqli_free_result($Recordset1);
?>
