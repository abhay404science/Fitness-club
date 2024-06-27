<?php

include "component/comon.php";

if (isset($_FILES['img'])){
    
 
//   $sql = "SELECT img FROM  WHERE title = '$title'";
//   $result = $con->query($sql);
//   echo $title;
//   echo $discription;
// $con->query($sql);
// $row = $result->fetch_assoc();
// $nameindata = $row['title'];
// echo strtoupper($nameindata);
    $file_size = $_FILES['img']['size'];

    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    // echo $file_size;

    // 263214
  
    
    if($file_size < 86321400000000000000){
        $file_name = rand(0,100).time().$_FILES['img']['name'];
        $file_tmpname = $_FILES['img']['tmp_name'];


        if (move_uploaded_file($file_tmpname, "upSlideimage/".$file_name));

        $sql = "INSERT INTO slide_image (image) VALUES ('$file_name')";
        if ($con->query($sql)) {
            header("Location: EditSlideAdmin.php?notification=3");
            // echo "yesss ";
            } else {
            echo '<script>alert("error")</script>';
            // echo "image size exceeds";
        }
    

    }
    else {
        echo '<script>alert("image size exceeds 80kb"); window.location.href = "products.php";</script>';
     // echo "image size exceed 500kb";
     //    echo '<br>not done';
        }



}

?>

