<?php
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
}
else {
	setcookie("username","");
	setcookie("password","");
}

?>