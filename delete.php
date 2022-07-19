<?php
	$id=$_GET['id'];
	require('sources/db.php');
	mysqli_query($con,"delete from `fillup` where id='$id'");
	header('location: orders.php');
?>