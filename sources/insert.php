<?php 
    $userName = stripslashes($_REQUEST['userName']);
    $userName = mysqli_real_escape_string($con, $userName);

    $trackingNo = stripslashes($_REQUEST['trackingNo']);
    $trackingNo = mysqli_real_escape_string($con, $trackingNo);

    $firstName = stripslashes($_REQUEST['firstName']);
    $firstName = mysqli_real_escape_string($con, $firstName);

    $lastName = stripslashes($_REQUEST['lastName']);
    $lastName = mysqli_real_escape_string($con, $lastName);

    $contactNumber = stripslashes($_REQUEST['contactNumber']);
    $contactNumber = mysqli_real_escape_string($con, $contactNumber);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);

    $homeAddress = stripslashes($_REQUEST['homeAddress']);
    $homeAddress = mysqli_real_escape_string($con, $homeAddress);

    $item = stripslashes($_REQUEST['item']);
    $item = mysqli_real_escape_string($con, $item);

    $variation = stripslashes($_REQUEST['variation']);
    $variation = mysqli_real_escape_string($con, $variation);

    $size = stripslashes($_REQUEST['size']);
    $size = mysqli_real_escape_string($con, $size);

    $price = stripslashes($_REQUEST['price']);
    $price = mysqli_real_escape_string($con, $price);

    $quantity = stripslashes($_REQUEST['quantity']);
    $quantity = mysqli_real_escape_string($con, $quantity);

    $shippingFee = stripslashes($_REQUEST['shippingFee']);
    $shippingFee = mysqli_real_escape_string($con, $shippingFee);

    $paymentMethod = stripslashes($_REQUEST['paymentMethod']);
    $paymentMethod = mysqli_real_escape_string($con, $paymentMethod);

    $paymentProof = stripslashes($_REQUEST['paymentProof']);
    $paymentProof = mysqli_real_escape_string($con, $paymentProof);

    $totalPrice = stripslashes($_REQUEST['totalPrice']);
    $totalPrice = mysqli_real_escape_string($con, $totalPrice);

    $status = stripslashes($_REQUEST['status']);
    $status = mysqli_real_escape_string($con, $status);

    $url = stripslashes($_REQUEST['url']);
    $url = mysqli_real_escape_string($con, $url);

    $rate = stripslashes($_REQUEST['rate']);
    $rate = mysqli_real_escape_string($con, $rate);
 
    $create_datetime = date("Y-m-d H:i:s");
    $date = date("F j, Y D g:i a", strtotime($create_datetime));

    $multiply = ($price * $quantity) + $shippingFee;

    $query = "INSERT into `fillup` (userName, trackingNo, firstName, lastName, contactNumber, email, homeAddress, item, variation, size, price, quantity, shippingFee, paymentMethod, paymentProof, totalPrice, status, url, rate, create_datetime)
            VALUES ('$userName', '$trackingNo', '$firstName', '$lastName', '$contactNumber', '$email', '$homeAddress', '$item', '$variation', '$size', '$price', '$quantity', '$shippingFee', '$paymentMethod', '$paymentProof', '$totalPrice', '$status', '$url', '$rate', '$create_datetime')";

    $result   = mysqli_query($con, $query);
?>