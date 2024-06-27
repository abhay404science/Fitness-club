<?php

//This code checks if the product is added to cart. 
function check_if_added_to_cart($item_id) {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        $user_id = 9; // Default user ID when the session is not set
    }
    require("comon.php"); // connecting to the database

    $query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}

?>