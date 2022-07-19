<?php
include('sources/session.php');
include('sources/stay-login.php');
date_default_timezone_set('Asia/Manila');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="logo-tab.png">
    <link rel="icon" type="image/png" href="logo-tab.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />

    <title>Jem's Shop E-Commerce</title>

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
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo-head.png" />
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="#top" class="active">Home</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="about.php">About Us</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Shopping Cart</a>
                                <ul>
                                    <li><a href="orders.php">Add to Cart</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="to-ship.php">To Ship</a></li>
                                    <li><a href="cancel.php">Canceled</a></li>
                                    <li><a href="delivered.php">Delivered</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section">
                                <a href="profile.php">Profile</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="logout.php">Logout</a>
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
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4 style="color: black; font-size: 35px">
                                    Shop all you want!
                                </h4>
                                <span style="color: black; font-size: 18px">Elegant and awesome clothes for
                                    everyone.</span>
                                <a href="#women" style="color: white">
                                    <button class="btn-grad">Purchase Now!</button></a>
                            </div>
                            <img src="assets/images/image-white.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content"></div>
                            <img src="assets/images/ribbon-girl2.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Men's Latest</h2>
                        <span>
                            Fashion is the armor to survive the reality of everyday life." -
                            Bill Cunningham
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <a href="men1.php">
                                        <img src="assets/images/image6.png" alt="" style="border: 1px solid gray" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4><a href="men1.php" class="text-dark">Summer Polo</a></h4>
                                    <span>PHP 718.74</span>
                                    <ul class="stars" style="border: 1px solid black; border-radius:20px;">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='men1.php'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['SUM(rate)'] == null) {

                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;0&nbsp;
                                                </span>';
                                            }
                                            else {
                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;'.$row['SUM(rate)'].'&nbsp;
                                                </span>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <a href="men2.php">
                                        <img src="assets/images/image7.png" alt="" style="border: 1px solid gray" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4><a href="men2.php" class="text-dark">Spring</a></h4>
                                    <span>PHP 977.68</span>
                                    <ul class="stars" style="border: 1px solid black; border-radius:20px;">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='men2.php'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['SUM(rate)'] == null) {

                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;0&nbsp;
                                                </span>';
                                            }
                                            else {
                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;'.$row['SUM(rate)'].'&nbsp;
                                                </span>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <a href="men3.php">
                                        <img src="assets/images/image8.png" alt="" style="border: 1px solid gray" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4><a href="men3.php" class="text-dark">Men's Jogger</a></h4>
                                    <span>PHP 988.75</span>
                                    <ul class="stars" style="border: 1px solid black; border-radius:20px;">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='men3.php'");
	                                        $row=mysqli_fetch_array($query);
                        
                                            if ($row['SUM(rate)'] == null) {

                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;0&nbsp;
                                                </span>';
                                            }
                                            else {
                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;'.$row['SUM(rate)'].'&nbsp;
                                                </span>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <a href="men4.php">
                                        <img src="assets/images/image9.png" alt="" style="border: 1px solid gray" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4><a href="men4.php" class="text-dark">Cotton T-Shirt</a></h4>
                                    <span>PHP 1,428.34</span>
                                    <ul class="stars" style="border: 1px solid black; border-radius:20px;">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='men4.php'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['SUM(rate)'] == null) {

                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;0&nbsp;
                                                </span>';
                                            }
                                            else {
                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;'.$row['SUM(rate)'].'&nbsp;
                                                </span>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Women's Latest</h2>
                        <span>
                            "Fashion is very important. It is life-enhancing and, like
                            everything that gives pleasure, it is worth doing well." -
                            Vivienne Westwood
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <a href="women1.php">
                                        <img src="assets/images/women1.png" alt="" style="border: 1px solid gray" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4><a href="women1.php" class="text-dark">Summer Dress</a></h4>
                                    <span>PHP 740.82</span>
                                    <ul class="stars" style="border: 1px solid black; border-radius:20px;">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='women1.php'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['SUM(rate)'] == null) {

                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;0&nbsp;
                                                </span>';
                                            }
                                            else {
                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;'.$row['SUM(rate)'].'&nbsp;
                                                </span>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <a href="women2.php">
                                        <img src="assets/images/women2.png" alt="" style="border: 1px solid gray" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4><a href="women2.php" class="text-dark">Leisure Dress</a></h4>
                                    <span>PHP 3,021.46</span>
                                    <ul class="stars" style="border: 1px solid black; border-radius:20px;">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='women2.php'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['SUM(rate)'] == null) {

                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;0&nbsp;
                                                </span>';
                                            }
                                            else {
                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;'.$row['SUM(rate)'].'&nbsp;
                                                </span>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <a href="women3.php">
                                        <img src="assets/images/women3.png" alt="" style="border: 1px solid gray" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4><a href="women3.php" class="text-dark">Ribbon Butterfly</a></h4>
                                    <span>PHP 17.35</span>
                                    <ul class="stars" style="border: 1px solid black; border-radius:20px;">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='women3.php'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['SUM(rate)'] == null) {

                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;0&nbsp;
                                                </span>';
                                            }
                                            else {
                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;'.$row['SUM(rate)'].'&nbsp;
                                                </span>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <a href="women4.php">
                                        <img src="assets/images/women4.png" alt="" style="border: 1px solid gray" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4><a href="women4.php" class="text-dark">Chiffon Blouse</a></h4>
                                    <span>PHP 734.66</span>
                                    <ul class="stars" style="border: 1px solid black; border-radius:20px;">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='women4.php'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['SUM(rate)'] == null) {

                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;0&nbsp;
                                                </span>';
                                            }
                                            else {
                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;'.$row['SUM(rate)'].'&nbsp;
                                                </span>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Kid's Latest</h2>
                        <span>
                            "What you wear is how you present yourself to the world,
                            especially today, when human contacts are so quick. Fashion is
                            instant language." - Miuccia Prada
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <a href="kids1.php">
                                        <img src="assets/images/kids1.png" alt="" style="border: 1px solid gray" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4><a href="kids1.php" class="text-dark">Girl Kids Dress</a></h4>
                                    <span>PHP 599.26</span>
                                    <ul class="stars" style="border: 1px solid black; border-radius:20px;">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='kids1.php'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['SUM(rate)'] == null) {

                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;0&nbsp;
                                                </span>';
                                            }
                                            else {
                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;'.$row['SUM(rate)'].'&nbsp;
                                                </span>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <a href="kids2.php">
                                        <img src="assets/images/kids2.png" alt="" style="border: 1px solid gray" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4><a href="kids2.php" class="text-dark">Bowknot Ribbon</a></h4>
                                    <span>PHP 94.00</span>
                                    <ul class="stars" style="border: 1px solid black; border-radius:20px;">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='kids2.php'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['SUM(rate)'] == null) {

                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;0&nbsp;
                                                </span>';
                                            }
                                            else {
                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;'.$row['SUM(rate)'].'&nbsp;
                                                </span>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <a href="kids3.php">
                                        <img src="assets/images/kids3.png" alt="" style="border: 1px solid gray" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4><a href="kids3.php" class="text-dark">Summer Calf</a></h4>
                                    <span>PHP 558.97</span>
                                    <ul class="stars" style="border: 1px solid black; border-radius:20px;">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='kids3.php'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['SUM(rate)'] == null) {

                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;0&nbsp;
                                                </span>';
                                            }
                                            else {
                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;'.$row['SUM(rate)'].'&nbsp;
                                                </span>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <a href="kids4.php">
                                        <img src="assets/images/kids4.png" alt="" style="border: 1px solid gray" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h4><a href="kids4.php" class="text-dark">Polo Kids Clothes</a></h4>
                                    <span>PHP 638.98</span>
                                    <ul class="stars" style="border: 1px solid black; border-radius:20px;">
                                        <?php
                                            require('sources/db.php');

	                                        $query=mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='kids4.php'");
	                                        $row=mysqli_fetch_array($query);

                                            if ($row['SUM(rate)'] == null) {

                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;0&nbsp;
                                                </span>';
                                            }
                                            else {
                                                echo '<span style="padding-left:5px; padding-right:5px; color:black;">&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;'.$row['SUM(rate)'].'&nbsp;
                                                </span>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->

    <?php
    include('sources/footer.php');
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
            $("#portfolio div")
                .not("." + selectedClass)
                .fadeOut();
            setTimeout(function() {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);
        });
    });
    </script>
</body>

</html>