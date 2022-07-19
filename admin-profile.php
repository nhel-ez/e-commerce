<?php
include('sources/session-admin.php');
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

    <title>Admin Profile</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css" />
    <link rel="stylesheet" href="assets/css/owl-carousel.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
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
                                <a href="admin-home.php">Home</a>
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
                                <a href="admin-profile.php" class="active">Profile</a>
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
                            <h3 style="color:white;">Admin Profile</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        require('sources/db.php'); 
        $query = "SELECT * FROM admin WHERE adminName='$adminName'";
        $result = mysqli_query($con, $query) or die ("Could not Connect to database");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {

                $field0name = $row["id"];
                $field1name = $row["adminName"];
                $field2name = $row["adminFirstName"];
                $field3name = $row["adminLastName"];
                $field5name = $row["adminEmail"];

                $usernameText = "Admin Name";
                $nameText = "Name";
                $emailText = "Email";

                echo '<section class="">
                        <div class="container">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-12">
                                    <div class="shadow p-3 mb-5 bg-body rounded">
                                        <div class="card-body p-4">
                                            <div class="d-flex justify-content-between align-items-center mb-5">
                                                <div>
                                                    <h3 class="mb-0">'.$field1name.'<span class="text-secondary font-weight-bold"></span></h3>
                                                </div>
                                                <div class="text-end">
                                                        <p class="mb-0"><span></span></p>
                                                </div>
                                            </div>
                                            <p>'.$nameText.' : '.$field2name.' '.$field3name.'</p>
                                            <p>'.$emailText.' : '.$field5name.'</p>
                                            <br>

                                            <a href="admin-edit-profile.php?id='.$field0name.'">
                                                <button class="btn btn-dark">Edit Profile</button>
                                            </a>
                                            <a href="admin-change-password.php?id='.$field0name.'">
                                                <button class="btn btn-outline-dark">Change Password</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>';
                }
            $result->free();
        }
    ?>

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
</body>

</html>