<?php include'connection.php'; ?>
<?php
if(!empty($_POST["coupon"])) 
{
$query =mysqli_query($link,"SELECT * FROM coupon WHERE coupon = '". $_POST["coupon"]."'");
$row=mysqli_fetch_array($query);
?>
<input type="hidden" id="coupon" value="<?php echo $row["coupon"]; ?>" name="coupon" />

<input type="hidden" id="rates" value="<?php echo $row["percent"]+0; ?>" name="rates" />
<?php
}
?>