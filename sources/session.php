<?php 
session_start(); 
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
}

else {
    session_unset(); 
    session_write_close();
    header("Location: index.php"); 
} 

?>