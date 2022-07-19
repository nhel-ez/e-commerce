<?php

    include('sources/session-admin.php');
	require('sources/db.php');
    if(isset($_POST['submit'])):
        extract($_POST);
        if($old_password!="" && $password!="" && $confirm_pwd!="") :
            $user_id = $_GET['id'];// sesssion id
            $old_pwd = md5(mysqli_real_escape_string($con, $_POST['old_password']));
            $pwd = md5(mysqli_real_escape_string($con, $_POST['password']));
            $c_pwd = md5(mysqli_real_escape_string($con, $_POST['confirm_pwd']));
            if($pwd == $c_pwd) :
                if($pwd != $old_pwd) :
                    $sql = "SELECT * FROM `admin` WHERE `id` = '$user_id' AND `password` = '$old_pwd'";
                    $db_check = $con->query($sql);
                    $count = mysqli_num_rows($db_check);
                    if($count==1) :
                        $fetch=$con->query("UPDATE `admin` SET `password` = '$pwd' WHERE `id`='$user_id'");
                        $old_password = ''; $password =''; $confirm_pwd = '';
                        $msg_sucess = "Your new password update successfully.";
                    else:
                        $error = "The password you gave is incorrect.";
                    endif;
                    else :
                        $error = "Old password new password same Please try again.";
                endif;
                else:
                    $error = "New password and confirm password do not matched";
            endif;
            else :
                $error = "Please fil all the fields";
        endif;   
    endif;
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

    <title>Admin Change Password</title>

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
                                <h3 style="margin-bottom:30px;">Change Password</h3>
                                <form method="post" id="password_form">

                                    <div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?> mb-2" id="logerror">
                                        <?php echo @$error; ?><?php echo @$msg_sucess; ?>
                                    </div>

                                    <div class=" form-outline mb-2 col-md-9">
                                        <label class="form-label" for="" style="float:left;">Old Password</label>
                                        <input type="password" id="old_password" class="form-control"
                                            name="old_password" required />
                                    </div>

                                    <div class="form-outline mb-2 col-md-9">
                                        <label class="form-label" for="" style="float:left;">New Password</label>
                                        <input type="password" id="password" class="form-control" name="password"
                                            required />
                                    </div>

                                    <div class="form-outline mb-4 col-md-9">
                                        <label class="form-label" for="" style="float:left;">Confirm
                                            Password</label>
                                        <input type="password" id="confirm_pwd" class="form-control" name="confirm_pwd"
                                            required />
                                    </div>

                                    <div class="text-center pt-1 mb-2 pb-1 col-md-4">
                                        <button class="btn btn-dark" type="submit" name="submit">Change
                                            Password</button>
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