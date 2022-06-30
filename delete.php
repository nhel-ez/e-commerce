<?php
	$id=$_GET['id'];
	include('db.php');
	mysqli_query($con,"delete from `fillup` where id='$id'");
	header('location:user-info.php');
?>