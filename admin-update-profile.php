<?php
	include('sources/db.php');
	$id=$_GET['id'];
	
	$adminName=$_POST['adminName'];
	$adminFirstName=$_POST['adminFirstName'];
	$adminLastName=$_POST['adminLastName'];
	$adminEmail=$_POST['adminEmail'];

	$dateCreated = date("M d, Y D, h:i a");

	mysqli_query($con, "UPDATE `admin` SET adminName='$adminName', adminFirstName='$adminFirstName', adminLastName='$adminLastName', adminEmail='$adminEmail' WHERE id='$id'");
	header('location: admin-profile.php');
?>