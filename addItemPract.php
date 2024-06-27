<?php
include "component/comon.php";

if (isset($_FILES['img']) && isset($_POST['name']) && isset($_POST['price'])) {
 
    $Name = $con->real_escape_string($_POST['name']);
    $Price = $con->real_escape_string($_POST['price']);
    // "<pre>";
    // print_r($_FILES);
    // echo"</pre>";
    $upload_directory = 'products/'; 
 
     $file_name = $_FILES['img']['name'];
      $file_tmpname = $_FILES['img']['tmp_name'];
    if (move_uploaded_file($file_tmpname, "uploads/".$file_name));
    
    $sql = "INSERT INTO items (image, 'item name', price) VALUES ('".$file_name."','".$Name."', '".$Price."')";


    if ($con->query($sql)) {
        echo '<script>alert("Success"); window.location.href = "products.php";</script>';
    } else {
        echo 'error';
    }
}
//rand(0,100).time()
// getClientOriginalExtension

?>
