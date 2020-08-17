<?php include("connection.php"); ?>
<?php
$query="INSERT INTO cleaning SET id='',rooms='".$_POST['rooms']."',bathrooms='".$_POST['bathrooms']."',Balcony='".@$_POST['Balcony']."',Kitchen_Cupboards='".@$_POST['Kitchen_Cupboards']."',Fridge='".@$_POST['Fridge']."',Oven='".@$_POST['Oven']."',After_Party='".@$_POST['After_Party']."',Carpet_Steam_Clean='".@$_POST['Carpet_Steam_Clean']."',Internal_Windows='".@$_POST['Internal_Windows']."',name='".$_POST['quick-name']."',phone='".$_POST['quick-phone']."',email='".$_POST['quick-email']."',address='".$_POST['quick-message']."',type='Home Cleaning',enteredby='".$_POST['enteredby']."',dateof='".$_POST['dateof']."',timeof='".$_POST['timeof']."',price='".$_POST['finalrateact']."',coupon='".$_POST['coupon']."',coupon_rates='".$_POST['rates']."'";
//echo $query; exit();
$run=mysqli_query($link, $query);
if ($run) {

?>

    <script>
    window.location.href='job_entry.php?action=upok';
    </script>
	<?php 	
}
else{
?>
    <script>
   window.location.href='job_entry.php?action=upno';
    </script>
	<?php }


?>