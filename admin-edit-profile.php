<?php
    include('sources/session-admin.php');
	include('sources/db.php');

	$id=$_GET['id'];
	$query=mysqli_query($con,"SELECT * FROM `admin` WHERE id='$id'");
	$row=mysqli_fetch_array($query);
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

    <title>Admin Edit Profile</title>

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
                                <a href="home.php">Home</a>
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

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">

    </div>
    <!-- ***** Main Banner Area End ***** -->

    <center>
        <section class="" style="background-color: white;">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="card card-stepper text-black" style="border-radius: 16px;">
                            <div class="card-body p-5">
                                <h3 style="margin-bottom:30px;">Edit Profile</h3>
                                <form action="admin-update-profile.php?id=<?php echo $id; ?>" method="post">

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="" style="float:left;" hidden>Admin Name</label>
                                        <input type="hidden" id="" class="form-control" name="adminName"
                                            value="<?php echo $row['adminName']; ?>" readonly required />
                                    </div>

                                    <div class=" form-outline mb-2 col-md-9">
                                        <label class="form-label" for="" style="float:left;">First Name</label>
                                        <input type="text" id="" class="form-control" name="adminFirstName"
                                            value="<?php echo $row['adminFirstName']; ?>" required />
                                    </div>

                                    <div class="form-outline mb-2 col-md-9">
                                        <label class="form-label" for="" style="float:left;">Last Name</label>
                                        <input type="text" id="" class="form-control" name="adminLastName"
                                            value="<?php echo $row['adminLastName']; ?>" required />
                                    </div>

                                    <div class="form-outline mb-4 col-md-9">
                                        <label class="form-label" for="" style="float:left;">Email</label>
                                        <input type="email" id="" class="form-control" name="adminEmail"
                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}"
                                            value="<?php echo $row['adminEmail']; ?>" required />
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1 col-md-4">
                                        <button class="btn btn-dark" type="submit" name="submit">Save Changes</button>
                                    </div>
                                </form>
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
</body>


</body>

</html>