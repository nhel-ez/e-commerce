<?php
    $query = "SELECT * FROM users WHERE username='$username'";

    $run = mysqli_query($con, $query);

    while($row = mysqli_fetch_array($run)) {
        $username = $row['username'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $contactnumber = $row['contactnumber'];
        $userEmail = $row['userEmail'];
        $userAddress = $row['userAddress'];

        $randomNumber = rand(1, 999999);// generate unique random number
    }
?>