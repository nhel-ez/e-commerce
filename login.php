<?php
include('sources/session-login.php');
date_default_timezone_set('Asia/Manila');

        require('sources/db.php');

        if (isset($_POST['submit'])) {
            $username = stripslashes($_REQUEST['username']); 
            $username = mysqli_real_escape_string($con, $username);
        
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
        
            $query = "SELECT * FROM `users` WHERE username='$username'
                AND password='" . md5($password) . "'";
            
            $result = mysqli_query($con, $query) or die(mysql_error());
            $rows = mysqli_num_rows($result);

            if ($rows == 1) {
                $_SESSION['username'] = $username;
            
                header("Location: home.php");
            }
            
            else {
                $error = "The password you gave is incorrect.";
            }
        
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="logo-tab.png">
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <section class="h-100 gradient-form" style="background-color: white;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="assets/images/logo-head.png" class="mt-5 mb-5 pb-1"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Shop All You Want!</h4>
                                    </div>

                                    <form method="post" name="login" style="padding-left:15px; padding-right:15px;">
                                        <p>Please login to your account</p>

                                        <div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?> mb-2" id="logerror">
                                            <?php echo @$error; ?>
                                        </div>

                                        <div class="form-outline mb-2">
                                            <label class="form-label" for="" style="float:left;">Username</label>
                                            <input type="text" id="form2Example11" class="form-control" name="username"
                                                value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"
                                                required />
                                        </div>

                                        <div class="form-outline mb-2">
                                            <label class="form-label" for="" style="float:left;">Password</label>
                                            <input type="password" id="password" class="form-control" name="password"
                                                value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"
                                                required />
                                            <span id="toggle_pwd" class="fa-solid fa-eye-slash"
                                                style="margin-right: 1rem; margin-top: -1.8rem; display:inline; vertical-align: middle; float:right; font-size:18px;"></span>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="checkbox" name="remember" style="margin-right:5px;" />Remember
                                            me
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <a class="text-muted" href="forgot-password.php"
                                                style="margin-right:10px;">Forgot
                                                password?</a>
                                            <button class="btn btn-dark" type="submit" name="submit">Sign In</button>
                                        </div>
                                    </form>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Don't have an account?</p>
                                        <a href="registration.php"><button type="button"
                                                class="btn btn-outline-dark">Sign Up</button>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">New Startup E-commerce</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        seddo eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam,
                                        quis nostrudexercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
    $(function() {
        $("#toggle_pwd").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var type = $(this).hasClass("fa-solid fa-eye") ? "text" : "password";
            $("#password").attr("type", type);
        });

        $('#toggle_pwd').hide();

        $('#password').keyup(function() {
            $('#toggle_pwd').show();
        });

        $('#password').keyup(function() {
            if ($(this).val() == '') {
                $('#toggle_pwd').hide();
            }
        });
    });
    </script>
</body>

</html>