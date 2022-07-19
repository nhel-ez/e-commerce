<?php
include('sources/session-admin.php');
include('sources/stay-login-admin.php');
date_default_timezone_set('Asia/Manila');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="logo-tab.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />

    <title>Admin Dashboard</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css" />
    <link rel="stylesheet" href="assets/css/owl-carousel.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />

    <!-- Chart JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="admin-home.php" class="logo">
                            <img src="assets/images/logo-head.png">
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="admin-home.php" class="active">Home</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="admin-about.php">About</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Orders</a>
                                <ul>
                                    <li><a href="admin-checkout.php">Checkout</a></li>
                                    <li><a href="admin-to-ship.php">To Ship</a></li>
                                    <li><a href="admin-cancel.php">Canceled</a></li>
                                    <li><a href="admin-delivered.php">Delivered</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section">
                                <a href="admin-profile.php">Profile</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="admin-logout.php">Logout</a>
                            </li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="" style="margin-top: 130px;">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12">
                    <div class="shadow p-3 mb-5 bg-body rounded" style="background-color:black; opacity:80%;">
                        <div class="card-body">
                            <h3 style="color:white;">Dashboard</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-sm">
                    <div class="shadow p-3 mb-3 bg-body rounded" style="background-color:blue; opacity:80%;">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT COUNT(*) FROM `fillup` WHERE status='Checkout'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['COUNT(*)'] == null) {

                                                echo '<h5 style="color:white;">Checkout : &nbsp;0</h5>';
                                            }
                                            else {
                                                echo '<h5 style="color:white;">Checkout : &nbsp;'.$row['COUNT(*)'].'</h5>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="shadow p-3 mb-3 bg-body rounded" style="background-color:orange; opacity:80%;">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT COUNT(*) FROM `fillup` WHERE status='To Ship'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['COUNT(*)'] == null) {

                                                echo '<h5 style="color:white;">To Ship : &nbsp;0</h5>';
                                            }
                                            else {
                                                echo '<h5 style="color:white;">To Ship : &nbsp;'.$row['COUNT(*)'].'</h5>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-sm">
                    <div class="shadow p-3 mb-3 bg-body rounded" style="background-color:darkred; opacity:80%;">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT COUNT(*) FROM `fillup` WHERE status='Canceled'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['COUNT(*)'] == null) {

                                                echo '<h5 style="color:white;">Canceled : &nbsp;0</h5>';
                                            }
                                            else {
                                                echo '<h5 style="color:white;">Canceled : &nbsp;'.$row['COUNT(*)'].'</h5>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="shadow p-3 mb-3 bg-body rounded" style="background-color:green; opacity:80%;">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT COUNT(*) FROM `fillup` WHERE status='Delivered'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['COUNT(*)'] == null) {

                                                echo '<h5 style="color:white;">Delivered : &nbsp;0</h5>';
                                            }
                                            else {
                                                echo '<h5 style="color:white;">Delivered : &nbsp;'.$row['COUNT(*)'].'</h5>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-sm">
                    <div class="shadow p-3 mb-3 bg-body rounded" style="background-color:royalblue; opacity:80%;">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT COUNT(*) FROM `users`");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['COUNT(*)'] == null) {

                                                echo '<h5 style="color:white;">Total Users : &nbsp;0</h5>';
                                            }
                                            else {
                                                echo '<h5 style="color:white;">Total Users : &nbsp;'.$row['COUNT(*)'].'</h5>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="shadow p-3 mb-3 bg-body rounded" style="background-color:indigo; opacity:80%;">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT ROUND(SUM(totalPrice), 2) FROM `fillup` WHERE status='Delivered'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['ROUND(SUM(totalPrice), 2)'] == null) {

                                                echo '<h5 style="color:white;">Total Sales : &nbsp;₱ 0</h5>';
                                            }
                                            else {
                                                echo '<h5 style="color:white;">Total Sales  : &nbsp;₱&nbsp;'.$row['ROUND(SUM(totalPrice), 2)'].'</h5>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <center>
        <section class="">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="shadow p-3 mt-5 mb-5 bg-body rounded">
                            <div class="card-body" id="chart-container">
                                <h4>Sales Report</h4>
                                <canvas id="graphCanvas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </center>

    <?php
    include('sources/footer-admin.php');
    ?>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
    $(function() {
        var selectedClass = "";
        $("p").click(function() {
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("." + selectedClass).fadeOut();
            setTimeout(function() {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        showGraph();
    });


    function showGraph() {
        {
            $.post("data.php",
                function(data) {
                    console.log(data);
                    var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].item);
                        marks.push(data[i].totalPrice);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [{
                            label: 'Total Price',
                            backgroundColor: 'green',
                            borderColor: 'gray',
                            hoverBackgroundColor: 'royalblue',
                            hoverBorderColor: 'gray',
                            data: marks
                        }]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata
                    });
                });
        }
    }
    </script>
</body>

</html>