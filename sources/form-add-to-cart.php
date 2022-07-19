<form action="" method="post">
    <div class=" form-outline mb-2" hidden>
        <label class="form-label" for="" style="float:left;" hidden>Username</label>
        <input type="hidden" id="" class="form-control" name="userName" value="<?php echo $username;?>" readonly
            required />
    </div>

    <div class="form-outline mb-2" hidden>
        <label class="form-label" for="" style="float:left;">Tracking No.</label>
        <input type="text" id="" class="form-control" name="trackingNo" value="<?php echo $randomNumber; ?>" required />
    </div>

    <div class="form-outline mb-2" hidden>
        <label class="form-label" for="" style="float:left;">First
            Name</label>
        <input type="text" id="" class="form-control" name="firstName" value="<?php echo $firstname; ?>" required />
    </div>

    <div class="form-outline mb-2" hidden>
        <label class="form-label" for="" style="float:left;">Last
            Name</label>
        <input type="text" id="" class="form-control" name="lastName" value="<?php echo $lastname; ?>" required />
    </div>

    <div class="form-outline mb-2" hidden>
        <label class="form-label" for="" style="float:left;">Contact
            Number</label>
        <input type="tel" id="" class="form-control" name="contactNumber" pattern="^(09|\+639)\d{9}"
            value="<?php echo $contactnumber;?>" required />
    </div>

    <div class="form-outline mb-2" hidden>
        <label class="form-label" for="" style="float:left;">Email
            Address</label>
        <input type="email" id="" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}"
            value="<?php echo $userEmail;?>" required />
    </div>

    <div class="form-outline mb-2" hidden>
        <label class="form-label" for="" style="float:left;">Address</label>
        <input type="address" id="" class="form-control" name="homeAddress" value="<?php echo $userAddress;?>"
            required />
    </div>

    <div class="form-outline mb-2" hidden>
        <label class="form-label" for="" style="float:left;">Item
            Name</label>
        <input type="text" id="" class="form-control" name="item" value="Girl Kids Dress" readonly required />
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
        <input type="number" id="price" class="form-control" name="price" value="599.26" readonly required />
    </div>

    <div class="quantity-content">
        <div class="left-content">
            <h6>No. of Orders</h6>
        </div>
        <div class="right-content mb-4">
            <div class="quantity buttons_added">
                <input type="button" value="-" class="minus" />
                <input type="number" step="1" min="1" max="" name="quantity" value="1" id="quantity" title="Qty"
                    class="input-text qty text" size="4" pattern="" inputmode="" required />
                <input type="button" value="+" class="plus" />
            </div>
        </div>
    </div>

    <div class="form-outline mb-4" hidden>
        <label class="form-label" for="" style="float:left;">Shipping
            Fee (₱)
        </label>
        <input type="number" id="shippingFee" class="form-control" name="shippingFee" value="60.00" readonly required />
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
        <input style="margin-top:30px; float:left;" type="number" step="0.01" id="totalPrice" class="form-control"
            name="totalPrice" value="" readonly />
    </div>

    <div class="form-outline mb-4" hidden>
        <label class="form-label" for="" style="float:left;">Status</label>
        <input type="hidden" id="" class="form-control" name="status" value="Add To Cart" />
    </div>

    <div class="form-outline mb-4" hidden>
        <label class="form-label" for="" style="float:left;">Url</label>
        <input type="hidden" id="" class="form-control" name="url" value="kids1.php" />
    </div>

    <div class="form-outline mb-4" hidden>
        <label class="form-label" for="" style="float:left;">Rate</label>
        <input type="int" id="" class="form-control" name="rate" value="1" />
    </div>

    <div class="text-center">
        <button class="btn btn-dark" type="submit" name="submit" onclick="multiply()">Add to
            Cart</button>
    </div>
</form>