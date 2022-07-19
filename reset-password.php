<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="logo-tab.png">
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Toys">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Stitch" />
    <meta name="author" content="Leonel Esguerra" />

    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
    require('sources/db.php');
    include('sources/session-login.php');
    date_default_timezone_set('Asia/Manila');
    
    if(isset($_POST['submit'])):
        extract($_POST);
        if($securityAnswer!="" && $password!="" && $confirm_pwd!="") :
            $securityAnswer = mysqli_real_escape_string($con, $_POST['securityAnswer']);
            $pwd = md5(mysqli_real_escape_string($con, $_POST['password']));
            $c_pwd = md5(mysqli_real_escape_string($con, $_POST['confirm_pwd']));
            if($pwd == $c_pwd) :
                if($pwd != $securityAnswer) :
                    $sql = "SELECT * FROM `users` WHERE `securityAnswer` = '$securityAnswer'";
                    $db_check = $con->query($sql);
                    $count = mysqli_num_rows($db_check);
                    if($count==1) :
                        $fetch=$con->query("UPDATE `users` SET `password` = '$pwd' WHERE `securityAnswer`='$securityAnswer'");
                        $securityAnswer = ''; $password =''; $confirm_pwd = '';
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

                                    <form method="post" id="password_form">

                                        <div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?> mb-2" id="logerror">
                                            <?php echo @$error; ?><?php echo @$msg_sucess; ?>
                                        </div>

                                        <div class=" form-outline mb-2">
                                            <label class="form-label" for="" style="float:left;">Please Enter again the
                                                security answer!</label>
                                            <input type="text" id="securityAnswer" class="form-control"
                                                name="securityAnswer" required />
                                        </div>

                                        <div class="form-outline mb-2">
                                            <label class="form-label" for="" style="float:left;">New Password</label>
                                            <input type="password" id="password" class="form-control" name="password"
                                                required />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="" style="float:left;">Confirm
                                                Password</label>
                                            <input type="password" id="confirm_pwd" class="form-control"
                                                name="confirm_pwd" required />
                                        </div>

                                        <div class="text-center pt-1 mb-4 pb-1">
                                            <button class="btn btn-dark" type="submit" name="submit">Reset
                                                Password</button>
                                        </div>
                                    </form>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Already have an account?</p>
                                        <a href="login.php"><button type="button" class="btn btn-outline-dark">Sign
                                                In</button></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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