<?php
require("component/comon.php");
  // Start the session

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $item_id = $_GET['id'];

        $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        header('location: products.php?notification=1');
    } else {
        // If the user is not logged in, use a default value for user_id
        $user_id = 9; 
        $item_id = $_GET['id'];
        echo $item_id;
        echo $user_id;
        $_SESSION['item_d'] = $item_id;

   echo "heloo";
   $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        header('location: products.php?item_id=' . $item_id. '&notification=1');
    }
}
?>