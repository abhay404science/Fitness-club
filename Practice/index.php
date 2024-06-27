<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    $name = $_POST["name"];
    $price = $_POST["price"];

   
    if ($_FILES["img"]["error"] === 0) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["img"]["name"]);

        if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
         
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    }


}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title>
</head>
<body>
<div class="container">
    <h2>Add Item</h2>
    <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="addItem.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Item Name:</label>
            <input type="text" id="name" name="name" class="form-control" required="required" placeholder="Item Name">
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" class="form-control" required="required" placeholder="Price">
        </div>

        <div class="form-group">
            <label for="img">Image:</label>
            <input type="file" id="img" name="img" accept="image/*">
        </div>

        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>
    </form>
</div>
</body>
</html>
