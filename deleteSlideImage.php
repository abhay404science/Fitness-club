<?php
require("component/comon.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

//    echo $id;
$sql = "SELECT image FROM slide_image  WHERE id = $id";
$result = $con->query($sql);
$row = $result->fetch_assoc();
// echo $row["img"];
$imageToDelete = $row['image'];
// echo $imageToDelete;
$imagePath = "upSlideimage/" . $imageToDelete;
if(unlink($imagePath)){
// echo "yessklo";
}

   $sql = "DELETE FROM slide_image  WHERE id = $id";

   if ($con->query($sql) === TRUE) {
    header("Location: EditSlideAdmin.php?notification=2");
    // echo "<script>alert('Slide Image deleted successfully');  window.location.href = 'EditSlideAdmin.php'</script>";
} else {
    echo "Error deleting record: " . $conn->error;
};
}
?>
