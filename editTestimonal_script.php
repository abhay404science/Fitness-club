<?php
require("component/comon.php");

if (isset($_POST['name']) && isset($_POST['id']) && isset($_POST['description'])) {
    $name = strtoupper($con->real_escape_string($_POST['name']));
    $id = $con->real_escape_string($_POST['id']);
   
    $description = $con->real_escape_string($_POST['description']);

   echo $id;
   echo $name;
   echo $description;
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
        $file_size = $_FILES['img']['size'];

        
        $file_name = rand(0, 100) . time() . $_FILES['img']['name'];
        $file_tmpname = $_FILES['img']['tmp_name'];

       
        if (move_uploaded_file($file_tmpname, "upSection/" . $file_name)) {
            
            $sql = "UPDATE testimon
                    SET photo = '$file_name', user_name = '$name', caption = '$description'
                    WHERE id = $id";

            if ($con->query($sql) === TRUE) {
                header("Location: EditTestimonalAdmin.php?notification=1");
                // echo '<script>alert("Testimonal updatedd"); window.location.href = "editTestimonalAdmin.php"</script>';
                    //  echo "w img";
            } else {
                echo "Error updating record: " . $con->error;
            }
        } else {
            echo "Error uploading the image file.";
        }
    } else {
       $sql =  "UPDATE testimon
        SET user_name = '$name', caption = '$description'
        WHERE id = $id";

        if ($con->query($sql) === TRUE) {
            header("Location: EditTestimonalAdmin.php?notification=1");
            // echo '<script>alert("Testimonal Updated");window.location.href = "editTestimonalAdmin.php"</script>';
            // echo "ip wo img";
        } else {
            echo "Error updating record: " . $con->error;
        }
    }
}
?>
