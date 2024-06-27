<?php
include "component/comon.php";


if (isset($_FILES['img']) && isset($_POST['name']) && isset($_POST['price'])) {
    $file_size = $_FILES['img']['size'];
    $Name = strtoupper($con->real_escape_string($_POST['name']));
    $Price = $con->real_escape_string($_POST['price']);
    $sql = "SELECT name FROM items WHERE name = '$Name'";
    $result = $con->query($sql);
    // "<pre>";
    // print_r($_FILES);
    // echo"</pre>";
    

        // echo strtoupper($nameindata).'<br>';
        // echo strtoupper($Name);
        if($con->query($sql) &&    $row = $result->fetch_assoc()){

        
       
        $nameindata = $row['name'];
        if(strtoupper($Name) == strtoupper($nameindata)){

         echo "<script>alert('Product with this name is already exist')</script>";
         echo "<script>window.location.href = 'addProduct.php'</script>";
      }
   }
      
        else if($file_size < 500000){
         $file_name = rand(0,100).time().$_FILES['img']['name'];
          $file_tmpname = $_FILES['img']['tmp_name'];
        if (move_uploaded_file($file_tmpname, "uploads/".$file_name));
        
        $sql = "INSERT INTO items (name, price, image) VALUES ('".$Name."','".$Price."', '".$file_name."')";
    
    
        if ($con->query($sql)) {
          header("Location: EditItemAdmin.php?notification=3");
            // echo '<script>alert("Success"); window.location.href = "EditItemAdmin.php";</script>';
            // echo "yesss ";
            } else {
            echo '<script> alert("error")</script>';
        }
    }
    else {
    echo '<script>alert("image size exceeds 500kb"); window.location.href = "addProduct.php";</script>';
   // echo "not";
 // echo "image size exceed 500kb";
   //  echo '<br>not done';
    }

    

       
  
  
   
} 
//rand(0,100).time()
// getClientOriginalExtension

?>
