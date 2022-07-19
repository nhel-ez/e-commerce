<?php
	include('sources/db.php');
	date_default_timezone_set('Asia/Manila');
	
	$id=$_GET['id'];
	
	$status=$_POST['status'];

	$updated_datetime = date("Y-m-d H:i:s");

	mysqli_query($con, "UPDATE `fillup` SET status='$status', updated_datetime='$updated_datetime' WHERE id='$id'");
	header('location: admin-delivered.php');
?>