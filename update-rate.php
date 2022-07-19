<?php
	include('sources/db.php');
	date_default_timezone_set('Asia/Manila');
	
	$id=$_GET['id'];
	
	$rate=$_POST['rate'];

    $ratePlus = $rate + 1;

	$updated_datetime = date("Y-m-d H:i:s");

	mysqli_query($con, "UPDATE `fillup` SET rate='$ratePlus', updated_datetime='$updated_datetime' WHERE id='$id'");
	header('location: delivered.php');
?>