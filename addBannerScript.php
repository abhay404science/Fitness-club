<?php
require("component/comon.php");

if (isset($_POST['id']) && isset($_POST['description'])) {
   
    $id = $con->real_escape_string($_POST['id']);
   
    $description = $con->real_escape_string($_POST['description']);

   echo $id;
 
   echo $description;
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
        $file_size = $_FILES['img']['size'];

        
        $file_name = rand(0, 100) . time() . $_FILES['img']['name'];
        $file_tmpname = $_FILES['img']['tmp_name'];

       
        if (move_uploaded_file($file_tmpname, "upbanner/" . $file_name)) {
            
            $sql = "UPDATE baneer_image
                    SET img = '$file_name', quote = '$description'
                    WHERE id = $id";

            if ($con->query($sql) === TRUE) {
                
                header("Location: addAdminInxBanner.php?notification=1");
                    //  echo "w img";
            } else {
                echo "Error updating record: " . $con->error;
            }
        } else {
            echo "Error uploading the image file.";
        }
    } else {
       $sql =  "UPDATE baneer_image
        SET quote = '$description'
        WHERE id = $id";

        if ($con->query($sql) === TRUE) {
            // echo '<script>alert("Banner updatedd);window.location.href = "addAdminInxBanner.php"</script>';
            header("Location: addAdminInxBanner.php?notification=1");
            // echo "ip wo img";
        } else {
            echo "Error updating record: " . $con->error;
        }
    }
}
?>
