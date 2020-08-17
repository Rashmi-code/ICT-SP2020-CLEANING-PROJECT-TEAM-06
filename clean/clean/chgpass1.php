<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php
if (!isset($_SESSION)) {
  @session_start();
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

$MM_restrictGoTo = "index.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
$user = $_SESSION['MM_Username'];
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

 <script> 
function amtchk()
  {  
 

  var  username= document.getElementById("username").value;
 
  var  password= document.getElementById("password").value;
 var  hidden1= document.getElementById("hidden1").value;

  if(password != hidden1)
  {
	  alert("Wrong Old Password!!" );
	   document.getElementById("password").focus();
	   	 document.getElementById("password").value=""; 
	 }
	 //else{alert("Password!!" );}	 
  } 
  function chk()
  {  
 
  var  newpass = document.getElementById("newpassword").value;
 var  repass= document.getElementById("repassword").value;

  if(newpass != repass)
  {
	  alert("Please retype the same password!!" );
	   document.getElementById("newpassword").value="";
	   	 document.getElementById("repassword").value=""; 
	 }
	 //else{alert("Password!!" );}	 
  }
  </script>


    <!-- FIRST SORTABLE COLUMN START --><!-- FIRST SORTABLE COLUMN END -->
      <!-- SECOND SORTABLE COLUMN START --><!--  SECOND SORTABLE COLUMN END -->

    <?php require_once('Connections/dbconfig.php'); ?>
    
    <?php
$user = $_SESSION['MM_Username'];
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE ims_usrpass SET password=%s WHERE username=%s",
                       GetSQLValueString($_POST['newpassword'], "text"),
                       GetSQLValueString($_POST['username'], "text"));

  mysqli_select_db( $dbconfig, $database_dbconfig);
  $Result1 = mysqli_query( $dbconfig, $updateSQL) or die(mysql_error());

  $updateGoTo = "chgpass.php?id=1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE `ims_usrpass` SET password=%s WHERE username=%s",
                       GetSQLValueString($_POST['repassword'], "text"),
                       GetSQLValueString($_POST['username'], "text"));

  mysqli_select_db( $condb, $database_condb);
  $Result1 = mysqli_query( $condb, $updateSQL) or die(mysql_error());?>

<?php }


mysqli_select_db( $dbconfig, $database_dbconfig);
$query_Recordset1 = "SELECT * FROM ims_usrpass WHERE username='$user'";
$Recordset1 = mysqli_query( $dbconfig, $query_Recordset1) or die(mysql_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
//echo($updateSQL);
?> <div align="center">
   <h3><?php  if($_GET['id']== 1)
   { echo('Password Changed successfully');}
    ?> </h3>
</div>
 
<form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
  <label for="newpassword"></label>
  <table width="73%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="3"><h3>Change Password</h3></td>
      </tr>
    <tr>
      <td width="12%">&nbsp;</td>
      <td width="26%"><p>Username</p></td>
      <td width="62%"><input name="username" type="text" id="username" value="<?php echo $row_Recordset1['username']; ?>" readonly="readonly" /></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>Previous Password</p></td>
      <td><span id="sprytextfield1">
        <input name="password" type="text" id="password" onblur="amtchk();"  />
      
        <input name="hidden1" type="hidden" id="hidden1" value="<?php echo $row_Recordset1['password']; ?>" /></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>New Password</p></td>
      <td><label for="username"></label>
        <span id="sprytextfield2">
          <input type="password" name="newpassword" id="newpassword" />
          </td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><p>Retype New Password</p></td>
      <td><span id="sprytextfield3">
        <input type="password" name="repassword" id="repassword" onblur="chk();"/>
       </td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" /></td>
      </tr>
    </table>
  <input type="hidden" name="MM_update" value="form1" />
</form>



<?php
mysql_free_result($Recordset1);
?>
