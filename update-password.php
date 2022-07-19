<?php
	include('sources/db.php');
	$id=$_GET['id'];
	
    $password=$_POST['password'];

	mysqli_query($con, "UPDATE `users` SET password='$password' where id='$id'");
	header('location:profile.php');
?>