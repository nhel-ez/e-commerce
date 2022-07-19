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

    <title>Admin Checkout</title>

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
                                <a href="javascript:;" class="active">Orders</a>
                                <ul>
                                    <li><a href="admin-checkout.php" class="active">Checkout</a></li>
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
                            <h3 style="color:white;">Checkout</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12">
                    <div class="shadow p-3 bg-body rounded">
                        <div class="card-body">
                            <table class="table table-responsive table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tracking No.</th>
                                        <th>Name</th>
                                        <th>Contact No.</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Item</th>
                                        <th>Variation</th>
                                        <th>Size</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Shipping Fee</th>
                                        <th>Payment Method</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th>Date of Order</th>
                                        <th>Arrival</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>

                                <?php
                                    include('sources/db.php'); 
                                    $query = "SELECT * FROM fillup WHERE status='Checkout' ORDER BY create_datetime DESC";
                                    $result = mysqli_query($con, $query) or die ("Could not Connect to database");

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {

                                            include('sources/rows.php');

                                        echo '<tbody>
                                                <tr>
                                                    <td>'.$trackingNo.'</td>
                                                    <td>'.$field2name.' '.$field3name.'</td>
                                                    <td>'.$field4name.'</td>
                                                    <td>'.$field5name.'</td>
                                                    <td>'.$field6name.'</td>
                                                    <td>'.$field7name.'</td>
                                                    <td>'.$variation.'</td>
                                                    <td>'.$size.'</td>
                                                    <td>'.$peso .' '.$commaPrice.'</td>
                                                    <td>'.$field9name.'</td>
                                                    <td>'.$peso .' '.$field10name.'</td>
                                                    <td>'.$field11name.'</td>
                                                    <td>'.$peso .' '.$commaTotalPrice.'</td>
                                                    <td>'.$field13name.'</td>
                                                    <td>'.$date.'</td>
                                                    <td>'.$arrival.'</td>
                                                    <td>
                                                        <a href="confirm-to-ship.php?id='.$field0name.'">
                                                            <button type="button" class="btn btn-warning">To Ship</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>';
                                        }
                                    $result->free();
                                }
                                else {
                                   echo '<tbody>
                                                <tr>
                                                    <td>No Item Found</td>
                                                </tr>
                                        </tbody>';
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include('sources/footer-admin.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

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