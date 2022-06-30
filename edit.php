<?php
	include('db.php');

	$id=$_GET['id'];
	$query=mysqli_query($con,"select * from `fillup` where id='$id'");
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/jpg" href="images/leigelogo.JPG">
    <title>Leige Stitches | Edit</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Toys">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Stitch" />
    <meta name="author" content="Leonel Esguerra" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="form.css">
</head>

<body>
    <div class="header">
        <li>
            <div class="leigelogo"><a href="index.html">
                    <img src="images/leigelogo.JPG" alt="Leige Stitches Logo"></a></div>
        </li>

        <li>
            <div class="dropdown">
                <div class="dropbtn">Items</div>
                <div class="dropdown-content">
                    <a href="stitch1.html">
                        <img src="images/leigelogo.JPG" alt="acc">Giant Cartoon Stitch</a>
                    <a href="stitch2.html">
                        <img src="images/leigelogo.JPG" alt="acc">Kawaii Plush Stuff Soft Cute Anime</a>
                    <a href="stitch3.html"><img src="images/leigelogo.JPG" alt="acc">
                        Lovely New 18cm Lilo</a>
                    <a href="stitch4.html">
                        <img src="images/leigelogo.JPG" alt="acc">New Big Lilo Stitch</a>

                </div>
            </div>
        </li>

        <li>
            <div class="search"><a href="Search.html"><i class="fa fa-search"></i></a></div>
        </li>

        <li>
            <div class="search"><a href="user-info.php"><i class="fa fa-user-circle"></i></a></div>
        </li>

        <li class="menu">
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                <div class="overlay-content">
                    <a href="index.html">Home</a>
                    <a href="About.html">About us</a>
                    <a href="Search.html">Search</a>
                    <a href="user-info.php">Edit Order</a>
                    <a href="user-info.php">History</a>

                    <div class="media">
                        <p>Follow us on Social Media</p>
                        <table>
        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
        </table>
    </div>
    </div>
    </div>
    <a style="font-size:23px;" onclick="openNav()"><i class="fa fa-bars"></i></a>

    <script>
    function openNav() {
        document.getElementById('myNav').style.height = "100%";
    }

    function closeNav() {
        document.getElementById('myNav').style.height = "0%";
    }
    </script>
    </li>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

    <center>

        <form class="form" action="update.php?id=<?php echo $id; ?>" method="post">
            <h1 class="login-title">Edit</h1>

            <input type="text" class="login-input" name="userName" placeholder="Username"
                value="<?php echo $row['userName']; ?>" readonly required />
            <input type="text" class="login-input" name="firstName" placeholder="Firstname"
                value="<?php echo $row['firstName']; ?>" required />
            <input type="text" class="login-input" name="lastName" placeholder="Lastname"
                value="<?php echo $row['lastName']; ?>" required />
            <input type="text" class="login-input" name="item" placeholder="Item No."
                value="<?php echo $row['item']; ?>" readonly required />
            <input type="email" class="login-input" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}"
                placeholder="Email Adress" value="<?php echo $row['email']; ?>" required />
            <input type="tel" class="login-input" name="contactNumber" pattern="^(09|\+639)\d{9}"
                placeholder="Contact Number" value="<?php echo $row['contactNumber']; ?>" required />

            <input type="submit" name="submit" value="Update" class="login-button">

        </form>

    </center>

    <center>
        <div class="footer">
            <p style="padding-top:20px;">Follow us on Social Media</p>
            <div class="media">
                <table>
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                </table>
            </div>

            <p>Copyright &copy; 2020 Leige Stitches. All rights reserved.</p>
        </div>
        </div>

</body>

</html>