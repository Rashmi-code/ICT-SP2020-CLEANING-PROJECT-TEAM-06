<?php require_once('Connections/dbconnection.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/gsb_template.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Dashboard | Cleaning</title>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
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
   		  <li><a href="list_main.php">List</a></li>
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

      <p><span class="pagetitle">Main Form View </span></p>
      
           
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




$id= $_GET['id'];
//$query_Recordset3 = "SELECT * FROM Cleaning where id=$id ";
$query_Recordset3 = ("SELECT * FROM Cleaning where id=$id");
$Recordset3 = mysqli_query($dbconnection, $query_Recordset3) or die(mysql_error());
$row_Recordset3 = mysqli_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysqli_num_rows($Recordset3);


?>

<head><script type="text/javascript" src="calendarDateInput.js">

/***********************************************
* Jason's Date Input Calendar- By Jason Moon http://calendar.moonscript.com/dateinput.cfm
* Script featured on and available at http://www.dynamicdrive.com
* Keep this notice intact for use.
***********************************************/

</script>
   
     <table width="100%" border="0" cellspacing="0" cellpadding="0" class="stdtable">
       <tr>
         <td></td>
         <td></td>
       </tr>
       <tr>
         <td width="27%"><strong>Name</strong></td>
         <td><span id="sprytextfield2">
           <input name="name" type="text" class="smallinput" id="name" value="<?php echo $row_Recordset3['name']; ?>" readonly="readonly"/>
         </span></td>
</tr>
       <tr>
         <td><strong>Phone</strong></td>
         <td><input name="phone" type="text" class="smallinput" id="phone" value="<?php echo $row_Recordset3['phone']; ?>"  readonly="readonly"/></td>
       </tr>
       <tr>
         <td><strong>Email</strong></td>
         <td><input name="email" type="text" class="smallinput" id="email" value="<?php echo $row_Recordset3['email']; ?>" readonly="readonly"/></td>
       </tr>
       <tr>
         <td><strong>Address</strong></td>
         <td><input name="address" type="text" class="smallinput" id="address" value="<?php echo $row_Recordset3['address']; ?>"  readonly="readonly"/></td>
       </tr>
       <tr>
         <td><strong>Cleaning Type</strong></td>
         <td><input name="type" type="text" class="smallinput" id="type" value="<?php echo $row_Recordset3['type']; ?>" readonly="readonly" /></td>
       </tr>
       <tr>
         <td><strong>Entry by </strong></td>
         <td><input name="enteredby" type="text" class="smallinput" id="enteredby" value="<?php echo $row_Recordset3['enteredby']; ?>"  readonly="readonly"/></td>
       </tr>
       <tr>
         <td><strong>Rooms</strong></td>
         <td><input name="rooms" type="text" class="smallinput" id="rooms" value="<?php echo $row_Recordset3['rooms']; ?>"  readonly="readonly"/></td>
       </tr>
       <tr>
         <td><strong>Bathrooms</strong></td>
         <td><input name="bathrooms" type="text" class="smallinput" id="bathrooms" value="<?php echo $row_Recordset3['bathrooms']; ?>"  readonly="readonly"/></td>
       </tr>
       <tr>
         <td><strong>Balcony </strong></td>
         <td><input name="Balcony" type="text" class="smallinput" id="Balcony" value="<?php echo $row_Recordset3['Balcony']; ?>"  readonly="readonly" /></td>
       </tr>
       <tr>
         <td><strong>Kitchen Cupboards</strong></td>
         <td><input name="Kitchen_Cupboards" type="text" class="smallinput" id="Kitchen_Cupboards" value="<?php echo $row_Recordset3['Kitchen_Cupboards']; ?>" readonly="readonly" /></td>
       </tr>
       <tr>
         <td><strong>Fridge</strong></td>
         <td><input name="Fridge" type="text" class="smallinput" id="Fridge" value="<?php echo $row_Recordset3['Fridge']; ?>" readonly="readonly" /></td>
       </tr>
       <tr>
         <td><strong>Oven</strong></td>
         <td><input name="Oven" type="text" class="smallinput" id="Oven" value="<?php echo $row_Recordset3['Oven']; ?>"  readonly="readonly"/></td>
       </tr>
       <tr> 
         <td><strong>Pantry</strong></td>
         <td><input name="Pantry" type="text" class="smallinput" id="Pantry" value="<?php echo $row_Recordset3['Pantry']; ?>" readonly="readonly" /></td>
       </tr>
       <tr>
         <td><strong>After Party</strong></td>
         <td><input name="After_Party" type="text" class="smallinput" id="After_Party" value="<?php echo $row_Recordset3['After_Party']; ?>" readonly="readonly" /></td>
       </tr>
       <tr>
         <td><strong>Carpet Steam Clean</strong></td>
         <td><input name="Carpet_Steam_Clean" type="text" class="smallinput" id="Carpet_Steam_Clean" value="<?php echo $row_Recordset3['Carpet_Steam_Clean']; ?>" readonly="readonly" /></td>
       </tr>
       <tr>
         <td><strong>Internal_Windows</strong></td>
         <td><input name="Internal_Windows" type="text" class="smallinput" id="Internal_Windows" value="<?php echo $row_Recordset3['Internal_Windows']; ?>"  readonly="readonly"/></td>
       </tr>
       <tr>
         <td><strong>Date</strong></td>
         <td><input name="dateof" type="text" class="smallinput" id="dateof" value="<?php echo $row_Recordset3['dateof']; ?>" readonly="readonly" /></td>
       </tr>
       <tr>
         <td><strong>Time</strong></td>
         <td><input name="timeof" type="text" class="smallinput" id="timeof" value="<?php echo $row_Recordset3['timeof']; ?>"  readonly="readonly"/></td>
       </tr>
       <tr>
         <td><strong>Coupon</strong></td>
         <td><input name="timeof" type="text" class="smallinput" id="timeof" value="<?php echo $row_Recordset3['coupon']; ?>"  readonly="readonly"/></td>
       </tr>
       <tr>
         <td><strong>Coupon Percentage</strong></td>
         <td><input name="timeof" type="text" class="smallinput" id="timeof" value="<?php echo $row_Recordset3['coupon_rates']; ?>"  readonly="readonly"/></td>
       </tr>
       <tr>
         <td><strong>Final Price</strong></td>
         <td><input name="timeof" type="text" class="smallinput" id="timeof" value="<?php echo $row_Recordset3['price']; ?>"  readonly="readonly"/></td>
       </tr>
       
      
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
     </table>
   <p>
     <?php

mysqli_free_result($Recordset3);
?>

      <!-- InstanceEndEditable --><!--contentwrapper-->
        
        <br clear="all" />
      </div>
      <div id="contentwrapper" ><!-- #updates --><div align="center"> 
      </div>
      
    </div><!-- centercontent -->
    
  
</div>

</body>

<!-- InstanceEnd --></html>
