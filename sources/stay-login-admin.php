<?php
if(!empty($_POST["admin-remember"])) {
	setcookie ("adminName",$_POST["adminName"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
}
else {
	setcookie("adminName","");
	setcookie("password","");
}

?>