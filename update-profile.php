<?php
	include('sources/db.php');
	$id=$_GET['id'];
	
	$username=$_POST['username'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$contactnumber=$_POST['contactnumber'];
	$userEmail=$_POST['userEmail'];
	$userAddress=$_POST['userAddress'];

	$create_datetime = date("M d, Y D, h:i a");

	mysqli_query($con, "UPDATE `users` SET username='$username', firstname='$firstname', lastname='$lastname', contactnumber='$contactnumber', userEmail='$userEmail', userAddress='$userAddress' WHERE id='$id'");
	header('location:profile.php');
?>