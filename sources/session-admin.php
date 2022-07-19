<?php 
session_start(); 
if (isset($_SESSION["adminName"])) {
    $adminName = $_SESSION["adminName"];
    session_write_close();
}

else {
    session_unset(); 
    session_write_close();
    header("Location: admin.php"); 
} 

?>