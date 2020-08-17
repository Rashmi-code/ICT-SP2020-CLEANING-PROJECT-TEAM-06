<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/gsb_template.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Dashboard | Cleaning</title>
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
      <h2>Please Contact</h2>
      <p>&nbsp;</p>
      <h2 class="ui-dialog-titlebar">Email id: abcd@gmail.com </h2>
      <!-- InstanceEndEditable --><!--contentwrapper-->
        
        <br clear="all" />
      </div>
      <div id="contentwrapper" ><!-- #updates --><div align="center"> 
      </div>
      
    </div><!-- centercontent -->
    
  
</div>

</body>

<!-- InstanceEnd --></html>
