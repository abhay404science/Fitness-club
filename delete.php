<?php
require("component/comon.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

//    echo $id;
$sql = "SELECT image FROM items  WHERE id = $id";
$result = $con->query($sql);
$row = $result->fetch_assoc();
// echo $row["img"];
$imageToDelete = $row['image'];
echo $imageToDelete;
$imagePath = "uploads/".$imageToDelete;
if(unlink($imagePath)){
// echo "yessklo";
}

   $sql = "DELETE FROM items  WHERE id = $id";

   if ($con->query($sql) === TRUE) {
    header("Location: EditItemAdmin.php?notification=2");
    // echo "<script>alert('Item deleted successfully');  window.location.href = 'EditItemAdmin.php'</script>";
} else {
    echo "Error deleting record: " . $con->error;
};
}
?>
