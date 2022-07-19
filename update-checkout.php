<?php
	include('sources/db.php');
	date_default_timezone_set('Asia/Manila');
	
	$id=$_GET['id'];
	
	$userName=$_POST['userName'];
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$contactNumber=$_POST['contactNumber'];
	$email=$_POST['email'];
	$homeAddress=$_POST['homeAddress'];
	$item=$_POST['item'];
	$variation=$_POST['variation'];
	$size=$_POST['size'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
	$shippingFee=$_POST['shippingFee'];
	$paymentMethod=$_POST['paymentMethod'];
    $paymentProof=$_POST['paymentProof'];
    $status=$_POST['status'];

	$updated_datetime = date("Y-m-d H:i:s");

	mysqli_query($con, "UPDATE `fillup` SET userName='$userName', firstName='$firstName', lastName='$lastName', contactNumber='$contactNumber', email='$email', homeAddress='$homeAddress', item='$item', variation='$variation', size='$size', price='$price', quantity='$quantity', shippingFee='$shippingFee', paymentMethod='$paymentMethod', paymentProof='$paymentProof', status='$status', updated_datetime='$updated_datetime' WHERE id='$id'");
	header('location:checkout.php');
?>