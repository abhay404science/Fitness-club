
<?php
require("component/comon.php");

if ( isset($_POST['id']) && isset($_FILES['img'])) {
    $id = $con->real_escape_string($_POST['id']);
//    echo $id;

//  print_r($_FILES);
 $file_name = rand(0, 100) . time() . $_FILES['img']['name'];
 
 $file_tmpname = $_FILES['img']['tmp_name'];


 if (move_uploaded_file($file_tmpname, "upSlideimage/" . $file_name)) {
     
     $sql = "UPDATE slide_image
             SET image = '$file_name'
             WHERE id = $id";

     if ($con->query($sql) === TRUE) {
         
        header("Location: EditSlideAdmin.php?notification=1");

        //    header("Location: slideBannerEdit.php");
        // //  header("Location: EditSlideAdmin.php");
             //  echo "w img";
     } else {
         echo "Error updating record: " . $con->error;
     }
 } else {
     echo "Error uploading the image file.";
 }
   
//    echo $id;
//    echo $pnumber;
//    echo $email;
  

    //    $sql =  "UPDATE q_contact
    //     SET phone_no = '$pnumber', email = '$email', address = '$address'
    //     WHERE id = $id";

    //     if ($con->query($sql) === TRUE) {
    //         echo '<script>alert("Item updatedd");window.location.href = "index.php"</script>';
    //         // echo "ip wo img";
    //     } else {
    //         echo "Error updating record: " . $con->error;
    //     }
    }

?>
