<?php
require("component/comon.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
//    echo $id; 
$sql = "SELECT img FROM service  WHERE id = $id";
$result = $con->query($sql);
$row = $result->fetch_assoc();
// echo $row["img"];
$imageToDelete = $row['img'];
// echo $imageToDelete;
$imagePath = "upSection/" . $imageToDelete;
if(unlink($imagePath)){
// echo "yessklo";
}


if ($result->num_rows > 0) {
 
   $sql = "DELETE FROM service  WHERE id = $id";

   if ($con->query($sql) === TRUE) {
    header("Location: EditServiceAdmin.php?notification=2");
    // echo "<script>alert('Item deleted successfully');  window.location.href = 'editSlideImage.php'</script>";
    // echo "delete";
} else {
   
    echo "Error deleting record: " . $conn->error;
};
}
}
?>

