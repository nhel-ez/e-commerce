<?php
	include('db.php');
	$id=$_GET['id'];
	
	$userName=$_POST['userName'];
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$item=$_POST['item'];
     $email=$_POST['email'];
	$contactNumber=$_POST['contactNumber'];

	mysqli_query($con, "update `fillup` set userName='$userName', firstName='$firstName', lastName='$lastName', item='$item', email='$email', contactNumber='$contactNumber' where id='$id'");
	header('location:user-info.php');
?>