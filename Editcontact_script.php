<?php
require("component/comon.php");

if (isset($_POST['pnumber']) && isset($_POST['id']) && isset($_POST['email']) && isset($_POST['address'])) {
    $pnumber = strtoupper($con->real_escape_string($_POST['pnumber']));
    $id = $con->real_escape_string($_POST['id']);
   
    $email = $con->real_escape_string($_POST['email']);
   $address = $con->real_escape_string($_POST['address']);
//    echo $id;
//    echo $pnumber;
//    echo $email;
  

       $sql =  "UPDATE q_contact
        SET phone_no = '$pnumber', email = '$email', address = '$address'
        WHERE id = $id";

        if ($con->query($sql) === TRUE) {
            header("Location: EditContactAdmin.php?notification=1");
            // echo '<script>alert("Item updatedd");window.location.href = "EditContactAdmin.php"</script>';
            // echo "ip wo img";
        } else {
            echo "Error updating record: " . $con->error;
        }
    }

?>
