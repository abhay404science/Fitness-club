<?php
require("component/comon.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];
//    echo $id;
   $sql = "SELECT photo FROM testimon  WHERE id = $id";
$result = $con->query($sql);
$row = $result->fetch_assoc();
// echo $row["img"];
$imageToDelete = $row['photo'];
// echo $imageToDelete;
$imagePath = "uptestiimg/" . $imageToDelete;
if(unlink($imagePath)){
echo "yessklo";
}

   $sql = "DELETE FROM testimon  WHERE id = $id";

   if ($con->query($sql) === TRUE) {
// echo "<script>alert('Item deleted successfully');</script>";
// header('location: EditTestimonalAdmin.php');
header("Location: EditTestimonalAdmin.php?notification=2");
    // echo "delete";
} else {
    echo "Error deleting record: " . $conn->error;
};
}
?>
