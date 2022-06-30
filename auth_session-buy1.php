<?php
    session_start();
    if(!isset($_SESSION["userName"])) {
        header("Location: fill-buy1.php");
        exit();
    }
?>
