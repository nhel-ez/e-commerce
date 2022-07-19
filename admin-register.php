<?php
include('sources/session-login-admin.php');
date_default_timezone_set('Asia/Manila');

    require('sources/db.php');

    if (isset($_REQUEST['submit'])) {
        
        $adminName = stripslashes($_REQUEST['adminName']);
        $adminName = mysqli_real_escape_string($con, $adminName);

        $adminFirstName = stripslashes($_REQUEST['adminFirstName']);
        $adminFirstName = mysqli_real_escape_string($con, $adminFirstName);

        $adminLastName = stripslashes($_REQUEST['adminLastName']);
        $adminLastName = mysqli_real_escape_string($con, $adminLastName);

        $adminEmail = stripslashes($_REQUEST['adminEmail']);
        $adminEmail = mysqli_real_escape_string($con, $adminEmail);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $dateCreated = date("Y-m-d H:i:s");

        $query = "INSERT INTO `admin` (adminName, adminFirstName, adminLastName, adminEmail, password, dateCreated)
                    VALUES ('$adminName', '$adminFirstName', '$adminLastName', '$adminEmail', '" . md5($password) . "', '$dateCreated')";
        $result = mysqli_query($con, $query);

        if ($result) {
            $msg_sucess = "Your successfully created a account. Please Sign In.";
        }
        else {
            $error = "The username or email is in used in other account";
        }
    }

        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="logo-tab.png">
    <link rel="icon" type="image/jpg" href="images/leigelogo.JPG">
    <title>Admin Sign Up</title>
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

<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="assets/images/logo-head.png" class="mt-5 mb-5 pb-1" style="width: 185px;"
                                        alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">Shop All You Want!</h4>
                                </div>

                                <form method="post" id="register" name="login"
                                    style="padding-left:15px; padding-right:15px;">
                                    <p>Please register to your admin account</p>

                                    <div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?> mb-2" id="logerror">
                                        <?php echo @$error; ?><?php echo @$msg_sucess; ?>
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="" style="float:left;">Admin Name</label>
                                        <input type="text" id="" class="form-control" name="adminName" required />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="" style="float:left;">First Name</label>
                                        <input type="text" id="" class="form-control" name="adminFirstName" required />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="" style="float:left;">Last Name</label>
                                        <input type="text" id="" class="form-control" name="adminLastName" required />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="" style="float:left;">Email</label>
                                        <input type="email" id="" class="form-control" name="adminEmail" required />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="" style="float:left;">Password</label>
                                        <span>&nbsp;&nbsp;</span>
                                        <span id="result"></span>
                                        <input type="password" id="password" class="form-control" name="password"
                                            required />
                                        <span id="toggle_pwd" class="fa-solid fa-eye-slash"
                                            style="margin-right: 1rem; margin-top: -1.8rem; display:inline; vertical-align: middle; float:right; font-size:18px;"></span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="" style="float:left;">Confirm Password</label>
                                        <span>&nbsp;&nbsp;</span>
                                        <span id="result2"></span>
                                        <input type="password" id="password_confirmation" class="form-control"
                                            name="confirm_password" required />
                                        <span id="toggle_pwd2" class="fa-solid fa-eye-slash"
                                            style="margin-right: 1rem; margin-top: -1.8rem; display:inline; vertical-align: middle; float:right; font-size:18px;"></span>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-dark" type="submit" name="submit">Sign Up</button>
                                    </div>
                                </form>

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <p class="mb-0 me-2">Already have an account?</p>
                                    <a href="admin.php"><button type="button" class="btn btn-outline-dark">Sign
                                            In</button></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">New Startup E-commerce</h4>
                                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
var password = document.getElementById("password"),
    confirm_password = document.getElementById("password_confirmation");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords do not match");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(function() {
    $("#toggle_pwd").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var type = $(this).hasClass("fa-solid fa-eye") ? "text" : "password";
        $("#password").attr("type", type);
    });

    $("#toggle_pwd2").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var type = $(this).hasClass("fa-solid fa-eye") ? "text" : "password";
        $("#password_confirmation").attr("type", type);
    });

    $('#toggle_pwd').hide();
    $('#toggle_pwd2').hide();


    $('#password').keyup(function() {
        $('#toggle_pwd').show();
    });

    $('#password_confirmation').keyup(function() {
        $('#toggle_pwd2').show();
    });

    $('#password').keyup(function() {
        if ($(this).val() == '') {
            $('#toggle_pwd').hide();
        }
    });

    $('#password_confirmation').keyup(function() {
        if ($(this).val() == '') {
            $('#toggle_pwd2').hide();
        }
    });
});

// strong password checker

$(document).ready(function() {
    $('#password').keyup(function() {
        $('#result').html(checkStrength($('#password').val()))
    })

    function checkStrength(password) {
        var strength = 0
        if (password.length < 6) {
            $('#result').removeClass()
            $('#result').addClass('short')
            return 'Too short'
        }
        if (password.length > 7) strength += 1
        // If password contains both lower and uppercase characters, increase strength value.
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
        // If it has numbers and characters, increase strength value.
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
        // If it has one special character, increase strength value.
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
        // If it has two special characters, increase strength value.
        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
        // Calculated strength value, we can return messages
        // If value is less than 2
        if (strength < 2) {
            $('#result').removeClass()
            $('#result').addClass('weak')
            return 'Weak'
        } else if (strength == 2) {
            $('#result').removeClass()
            $('#result').addClass('good')
            return 'Good'
        } else {
            $('#result').removeClass()
            $('#result').addClass('strong')
            return 'Strong'
        }
    }

    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#password_confirmation").val();
        if (password != confirmPassword)
            $("#result2").html("Password does not matched").css("color", "#FF0000");
        else
            $("#result2").html("Password matched").css("color", "limegreen");
    }
    $(document).ready(function() {
        $("#password_confirmation").keyup(checkPasswordMatch);
    });

    $('#password').keyup(function() {
        if ($(this).val() == '') {
            $('#result').hide();
        } else {
            $('#result').show();
        }
    });

    $('#password_confirmation').keyup(function() {
        if ($(this).val() == '') {
            $('#result2').hide();
        } else {
            $('#result2').show();
        }
    });
});

jQuery(".password").toolTip()
</script>
</body>

</html>