   <?php require_once('Connections/dbconnection.php'); 
	
?>

<?php

if(!empty($_POST["state"])) 
{
$query =mysqli_query($conn,"SELECT distinct(district) FROM state WHERE state = '". mysql_real_escape_string($_POST["state"])."' order by district asc");
?>



<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["district"]; ?>"><?php echo $row["district"]; ?></option>
<?php
}
}
?>
<?php
if(!empty($_POST["district"])) 
{
$query =mysqli_query($conn,"SELECT distinct(area) FROM state WHERE district = '". $_POST["district"]."' order by area asc");
$i=1;?><br/><?php
while($row=mysqli_fetch_array($query))  
{?><b><?php 
echo $i++." ".$row["area"];?></b><br/><?php
}
}




