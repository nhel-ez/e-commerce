<?php
include('sources/session.php');
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

    <title>Spring</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css" />

    <link rel="stylesheet" href="assets/css/owl-carousel.css" />

    <link rel="stylesheet" href="assets/css/lightbox.css" />
</head>

<body>
    <?php
    include('sources/product-header.php');
    ?>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">

    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <center>
                        <div class="left-images">
                            <img src="assets/images/image7.png" alt="" style="width:320px; height:320px;" />
                            <img src="assets/images/image7-1.png" alt="" style="width:320px; height:320px;" />
                            <img src="assets/images/image7-2.png" alt="" style="width:320px; height:320px;" />
                        </div>
                    </center>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>Spring</h4>
                        <span class="price">PHP 977.68</span>
                        <ul class="stars">
                            <?php
                                require('sources/db.php');

	                            $query = mysqli_query($con,"SELECT SUM(rate) FROM `fillup` WHERE url='men2.php'");
	                            $row = mysqli_fetch_array($query);

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
                        <span>Mens Jackets Spring Autumn Bomber Zipper Casual Jackets Fashion Solid Color Male
                            Outwear Baseball Collar Men Tops Brand Clothing
                        </span>
                        <hr>
                        <br>
                        <h6>Variation</h6>
                        <br>
                        <button class="btn btn-outline-dark pick1" onclick="setInputVariation(this.innerHTML)">Black
                        </button>
                        <button class="btn btn-outline-dark pick1" onclick="setInputVariation(this.innerHTML)">White
                        </button>
                        <button class="btn btn-outline-dark pick1" onclick="setInputVariation(this.innerHTML)">Gray
                        </button>
                        <br>

                        <br>
                        <h6>Size</h6>
                        <br>
                        <button class="btn btn-outline-dark pick2" onclick="setInputSize(this.innerHTML)">S
                        </button>
                        <button class="btn btn-outline-dark pick2" onclick="setInputSize(this.innerHTML)">M
                        </button>
                        <button class="btn btn-outline-dark pick2" onclick="setInputSize(this.innerHTML)">L
                        </button>
                        <button class="btn btn-outline-dark pick2" onclick="setInputSize(this.innerHTML)">XL
                        </button>
                        <br>

                        <br>
                        <h6>Payment Method</h6>
                        <br>
                        <button class="btn btn-outline-dark pick3" onclick="setInputPaymentMethod(this.innerHTML)">COD
                        </button>
                        <button class="btn btn-outline-dark pick3" onclick="setInputPaymentMethod(this.innerHTML)">GCash
                        </button>
                    </div>

                    <div class="total">
                        <?php
                        require('sources/db.php');
    
                        if (isset($_REQUEST['userName'])) {

                            include('sources/insert.php');
                            
                            if ($result) {

                                echo "<center>
                                        <div class='container'>
                                            <br>
                                            <h5 style='color:green'>Successfully Added to Cart!</h5><br />
                                            <a href='orders.php'>
                                                <button type='button' class='btn btn-dark' style='width:50%;'>View in Shopping Cart</button>
                                            </a>
                                        </div>
                                    </center>";

                            }
                            else {
                                echo "<div class='container' style='margin-top:150px; max-width:65%;'>
                                        <h3 style='color:red'>Required fields are missing.</h3><br />
                                        <p class='link'>Click here to <a href='fill-buy1.php'>fill up</a> again.</p>
                                    </div>";
                            }
                        }
                        else {

                        require('sources/db.php');
                        include('sources/select-user-info.php');

                        ?>
                        <form action="" method="post">
                            <div class=" form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;" hidden>Username</label>
                                <input type="hidden" id="" class="form-control" name="userName"
                                    value="<?php echo $username;?>" readonly required />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">Tracking No.</label>
                                <input type="text" id="" class="form-control" name="trackingNo"
                                    value="<?php echo $randomNumber; ?>" required />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">First
                                    Name</label>
                                <input type="text" id="" class="form-control" name="firstName"
                                    value="<?php echo $firstname; ?>" required />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">Last
                                    Name</label>
                                <input type="text" id="" class="form-control" name="lastName"
                                    value="<?php echo $lastname; ?>" required />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">Contact
                                    Number</label>
                                <input type="tel" id="" class="form-control" name="contactNumber"
                                    pattern="^(09|\+639)\d{9}" value="<?php echo $contactnumber;?>" required />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">Email
                                    Address</label>
                                <input type="email" id="" class="form-control" name="email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}" value="<?php echo $userEmail;?>"
                                    required />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">Address</label>
                                <input type="address" id="" class="form-control" name="homeAddress"
                                    value="<?php echo $userAddress;?>" required />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">Item
                                    Name</label>
                                <input type="text" id="" class="form-control" name="item" value="Spring" readonly
                                    required />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">Variation</label>
                                <input type="text" id="variation" class="form-control" name="variation" required />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">Size</label>
                                <input type="text" id="size" class="form-control" name="size" required />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">Price</label>
                                <input type="number" id="price" class="form-control" name="price" value="977.68"
                                    readonly required />
                            </div>

                            <div class="quantity-content">
                                <div class="left-content">
                                    <h6>No. of Orders</h6>
                                </div>
                                <div class="right-content mb-4">
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus" />
                                        <input type="number" step="1" min="1" max="" name="quantity" value="1"
                                            id="quantity" title="Qty" class="input-text qty text" size="4" pattern=""
                                            inputmode="" required />
                                        <input type="button" value="+" class="plus" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-outline mb-4" hidden>
                                <label class="form-label" for="" style="float:left;">Shipping
                                    Fee (₱)
                                </label>
                                <input type="number" id="shippingFee" class="form-control" name="shippingFee"
                                    value="60.00" readonly required />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">Payment Method</label>
                                <input type="text" id="paymentMethod" class="form-control" name="paymentMethod" />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">Reference
                                    Number
                                    (For Gcash Payment Only)</label>
                                <input type="text" id="" class="form-control" name="paymentProof" />
                            </div>

                            <div class="form-outline mb-2" hidden>
                                <label class="form-label" for="" style="float:left;">Total
                                    Price</label>
                                <input style="margin-top:30px; float:left;" type="number" step="0.01" id="totalPrice"
                                    class="form-control" name="totalPrice" value="" readonly />
                            </div>

                            <div class="form-outline mb-4" hidden>
                                <label class="form-label" for="" style="float:left;">Status</label>
                                <input type="hidden" id="" class="form-control" name="status" value="Add To Cart"
                                    readonly />
                            </div>

                            <div class="form-outline mb-4" hidden>
                                <label class="form-label" for="" style="float:left;">Url</label>
                                <input type="hidden" id="" class="form-control" name="url" value="men2.php" readonly />
                            </div>

                            <div class="form-outline mb-4" hidden>
                                <label class="form-label" for="" style="float:left;">Url</label>
                                <input type="number" id="" class="form-control" name="rate" value="0" />
                            </div>

                            <div class="text-center">
                                <button class="btn btn-dark" type="submit" name="submit" onclick="multiply()">Add to
                                    Cart</button>
                            </div>
                        </form>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->

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
    <script src="assets/js/quantity.js"></script>

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

    <script>
    function multiply() {
        var price = document.getElementById('price').value;
        var quantity = document.getElementById('quantity').value;
        var shippingFee = document.getElementById('shippingFee').value;
        var multiply = Number(price) * Number(quantity) + Number(shippingFee);
        document.getElementById('totalPrice').value = multiply;
    }

    setInputVariation = (val1) => {

        document.getElementById('variation').value = val1;

    }
    setInputSize = (val2) => {

        document.getElementById('size').value = val2;

    }
    setInputPaymentMethod = (val3) => {

        document.getElementById('paymentMethod').value = val3;

    }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
    // pick variation and size
    $('.pick1').on('click', function() {
        $('.pick1').removeClass('selected');
        $(this).addClass('selected');
    });

    $('.pick2').on('click', function() {
        $('.pick2').removeClass('selected');
        $(this).addClass('selected');
    });

    $('.pick3').on('click', function() {
        $('.pick3').removeClass('selected');
        $(this).addClass('selected');
    });
    </script>

</body>

</html>