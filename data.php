<?php
header('Content-Type: application/json');

require('sources/db.php');

$sqlQuery = "SELECT id, item, MAX(totalPrice) AS totalPrice FROM fillup WHERE status='Delivered' GROUP BY id ORDER BY MAX(totalPrice) DESC";

$result = mysqli_query($con ,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($con);

echo json_encode($data);
?>