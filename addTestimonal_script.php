<?php

include "component/comon.php";

if (isset($_FILES['img']) && isset($_POST['title']) && isset($_POST['description'])){
    
  $title = $con->real_escape_string($_POST['title']); //username
  $discription = $con->real_escape_string($_POST['description']);
  $sql = "SELECT user_name FROM testimon WHERE user_name = '$title'";
  $result = $con->query($sql);
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
    if($con->query($sql) &&    $row = $result->fetch_assoc()){

        
       
        $nameindata = $row['user_name'];
        echo $title;
        echo $nameindata;
        if(strtoupper($title) == strtoupper($nameindata) ){

         echo "<script>alert('testimonal name with this name exist')</script>";
        // echo "service with this name exist";
         echo "<script>window.location.href = 'addTestimonal.php'</script>";
      }  
       
   }
    
    else if($file_size < 863214){
        $file_name = rand(0,100).time().$_FILES['img']['name'];
        $file_tmpname = $_FILES['img']['tmp_name'];


        if (move_uploaded_file($file_tmpname, "uptestiimg/".$file_name));

        $sql = "INSERT INTO testimon (photo, user_name, caption ) VALUES ('$file_name', '$title', '$discription')";
        if ($con->query($sql)) {
            header("Location: EditTestimonalAdmin.php?notification=3");
            // echo '<script>alert("Success "); window.location.href = "EditTestimonalAdmin.php";</script>';
            // echo "yesss ";
            } else {
            echo '<script>alert("error")</script>';
            // echo "image size exceeds";
        }
    

    }
    else {
        echo '<script>alert("image size exceeds 80kb"); window.location.href = "addTestimonal.php";</script>';
    //  echo "image size exceed 500kb";
     //    echo '<br>not done';
        }



}

?>

