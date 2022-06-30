<?php
    session_start();
    if(!isset($_SESSION["userName"])) {
        header("Location: fill-buy2.php");
        exit();
    }
?>
