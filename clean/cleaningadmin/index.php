<?php require_once('Connections/dbconnection.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? $theValue : $theValue;

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
$query_Recordset1 = "select * from ims_usrpass";
$Recordset1 = mysqli_query( $dbconnection, $query_Recordset1) or die(mysql_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];

  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "home.php";
  $MM_redirectLoginFailed = "index.php?rst=Search.";
  $MM_redirecttoReferrer = false;
  mysqli_select_db($database_dbconnection, $dbconnection);
  
  $LoginRS__query=sprintf("SELECT username, password FROM ims_usrpass WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysqli_query( $dbconnection, $LoginRS__query) or die(mysql_error());
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
	
	date_default_timezone_set('Asia/Kolkata');
$date1 = date( 'd-m-Y h:i:s A', time () );
$insertSQL = sprintf("INSERT INTO log (user, dt) VALUES (%s, %s)",
 GetSQLValueString($_SESSION['MM_Username'], "text"),
 GetSQLValueString($date1, "text"));
  mysqli_select_db( $dbconnection, $database_dbconnection);
  $Result1 = mysqli_query( $dbconnection, $insertSQL) or die(mysql_error());
	 header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Login Page | Cleaning admin</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/custom/general.js"></script>
<script type="text/javascript" src="js/custom/index.js"></script>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="loginpage" style="background-image:url(images/login_background.jpg)">




	<div class="loginbox">
    	<div class="loginboxinner">
        	
            <div class="logo" style="background-color:#FFF">
            	<!--<h1><span>Hanbros</span></h1>-->
           	  <p style="padding:10px; color:#000; font-size:16px;">Cleaning Service</p>
          </div>
            <br />
   	<script type="text/javascript">

</script>
   	<?php
			 if(@$_GET['rst']=='Search.')
				{ 
				
				?>


<h4><span style="color:#F90"><div class="wrg" >Wrong Username or Password</div></span></h4> <?php 
				} 
				?>
            <div class="nousername">
				<div class="loginmsg">The password you entered is incorrect.</div>
            </div><!--nousername-->
            
            
            <div class="nopassword">
				<div class="loginmsg">The password you entered is incorrect.</div>
                
                <div class="loginf">
                    <div class="thumb"><img alt="" src="images/thumbs/avatar1.png" /></div>
                    <div class="userlogged">
                        <h4></h4>
                        <a href="index.html">Not <span></span>?</a> 
                    </div>
                </div><!--loginf-->
            </div><!--nopassword-->

            <form id="login" action="<?php echo $loginFormAction; ?>" method="POST">
            <div class="username">
               	<div class="usernameinner">
                    	<input type="text" name="username" id="username" />
                    </div>
                </div>
                
                <div class="password">
                	<div class="passwordinner">
                    	<input type="password" name="password" id="password" />
                    </div>
                </div>
                
                <button>Sign In</button><br />
<br />

               <center><a href="forget_password.php" style="font-size:18px; color:#FFFFFF">Forget Password</a></center>
                <!--<div class="keep"><input type="checkbox" /> Keep me logged in</div>-->
            
            </form>
            
        </div>
    <?php /*?>	<p><a href="http://vweavers.com" target="_blank"><img src="images/logonw.jpg" width="348" /></a></p><?php */?>
    	<!--loginboxinner-->
    </div><!--loginbox-->


</body>

</html>
<?php
mysqli_free_result($Recordset1);
?>
