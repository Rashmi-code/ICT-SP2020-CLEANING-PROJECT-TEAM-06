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
	
  $logoutGoTo = "notauthorized.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hanbros</title>
<link href="css/style.default.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="topheader">
        <div class="left">
            <h1 class="logo">Hanbros International<span></span></h1><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
   
    </div><!--topheader-->

<div class="notibar announcement"> <a class="close"></a>
  <h3>Not Authorized</h3>
  <p>Your Are not authorized to view this page <a href="index.php"> Please Click here toLogin in</a></p>
</div>

<a href="<?php echo $logoutAction ?>"></a>
<button class="stdbtn btn_black" onclick="history.back()">Go Back to Previous Page</button> &nbsp; 
                <button onclick="location.href='index.php'" class="stdbtn btn_orange">Go Back to Login Page</button>
</body>
</html>