<?php
require("component/comon.php");
echo "ddddkkl";

if (isset($_POST['pnumber']) && isset($_POST['id']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['name'])) {
    $pnumber = strtoupper($con->real_escape_string($_POST['pnumber']));
    $id = $con->real_escape_string($_POST['id']);
   $name =  $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
   $address = $con->real_escape_string($_POST['address']);
  
//    echo $id;
//    echo $pnumber;
//    echo $email;
if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    $file_size = $_FILES['img']['size'];

    
    $file_name = rand(0, 100) . time() . $_FILES['img']['name'];
    $file_tmpname = $_FILES['img']['tmp_name'];

   
    if (move_uploaded_file($file_tmpname, "upProfile/" . $file_name)) {
        
        $sql = "UPDATE users
        SET name = '$name', contact = '$pnumber', email = '$email', city = '$city', address = '$address',dpimage= '$file_name'
        WHERE email = '$email'";


        if ($con->query($sql) === TRUE) {
            header("Location: profileAdmin_edit.php?notification=1");
            echo "pp";
            // echo '<script>alert("Section updated"); window.location.href = "EditServiceAdmin.php"</script>';
                //  echo "w img";
        } else {
            echo "Error updating record: " . $con->error;
        }
    } else {
        echo "Error uploading the image file.";
    }
} else {
    $sql =  "UPDATE users
    SET name = '$name', contact = '$pnumber', email = '$email', city = '$city',address = '$address'
    WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        // header("Location: EditServiceAdmin.php?notification=1");
        header("Location: ProfileAdmin_edit.php?notification=1");
        echo "dd";
        // echo '<script>alert("Item updatedd");window.location.href = "EditServiceAdmin.php"</script>';
        // echo "ip wo img";
    } else {
        echo "Error updating record: " . $con->error;
    }
}
}
?>
