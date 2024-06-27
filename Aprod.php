<?php
include "component/comon.php";

// Query to retrieve data from the database (adjust table and column names)
$sql = "SELECT * FROM add_product";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Item Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td><img src='uploads/" . $row['image'] . "' alt='Product Image' style='width: 100px; height: 100px;'></td>";
                echo "<td>" . $row['item name'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
