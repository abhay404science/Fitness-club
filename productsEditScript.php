<?php
require("component/comon.php");

if (isset($_POST['name']) && isset($_POST['id']) && isset($_POST['price'])) {
    $name = strtoupper($con->real_escape_string($_POST['name']));
    $id = $con->real_escape_string($_POST['id']);
    $price = $con->real_escape_string($_POST['price']);
    $sql = "SELECT name FROM items WHERE name = '$name' AND id != $id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $con->query($sql);
    // $name != $row['name'];
    // echo $name;
    //   echo $row['name'];

if($name != $row['name']){

    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
        $file_size = $_FILES['img']['size'];

        
        $file_name = rand(0, 100) . time() . $_FILES['img']['name'];
        $file_tmpname = $_FILES['img']['tmp_name'];

       
        if (move_uploaded_file($file_tmpname, "uploads/" . $file_name)) {
            
            $sql = "UPDATE items
                    SET name = '$name', price = '$price', image = '$file_name'
                    WHERE id = $id";

            if ($con->query($sql) === TRUE) {
                header("Location: EditItemAdmin.php?notification=1");
                // echo '<script>alert("Item updated"); window.location.href = "EditItemAdmin.php"</script>';
                // echo "yes";
            } else {
                echo "Error updating record: " . $con->error;
            }
        } else {
            echo "Error uploading the image file.";
        }
    } else {
       
        $sql = "UPDATE items
                SET name = '$name', price = '$price'
                WHERE id = $id";

        if ($con->query($sql) === TRUE) {
            header("Location: EditItemAdmin.php?notification=1");
            // echo '<script>alert("Item updatedd");window.location.href = "EditItemAdmin.php"</script>';
            // echo "yess";
        } else {
            echo "Error updating record: " . $con->error;
        }
    }

}

   else {


    echo "<script>alert('same name exist');
    window.location.href = 'products.php';
    </script>";
   }



}
?>
