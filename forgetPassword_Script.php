<?php
// This page updates the user password
require("component/comon.php");

if (isset($_SESSION['email'])) {
    header('location: index.php');
}

if (isset($_POST['email']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) { 
    $email = $con->real_escape_string($_POST['email']);
    $newPassword = $con->real_escape_string($_POST['new_password']);
    $confirmPassword = $con->real_escape_string($_POST['confirm_password']);
    if ($newPassword !== $confirmPassword) {
        // Passwords do not match, display an error message
        $error = "Passwords do not match.";
        header("location: forgetPasswordAdmin.php?error=$error");
        exit;
    }

    $updatepassword = MD5($newPassword);
   
  
    // Check if the email exists in the database
    $sql = "SELECT email FROM users WHERE email = '$email'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Email exists in the database, update the password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $query = "UPDATE users SET password = '$updatepassword' WHERE email = '$email'";

        if ($con->query($query) === TRUE) {
            echo '<script>alert("Password updated successfully plase login to continue"); window.location.href = "AdminLogin.php" </script>';
        } else {
            echo "Error updating record: " . $con->error;
        }
    } else {
        // Email not found in the database
        echo '<script>alert("No Email Found of this user"); window.location.href = "AdminLogin.php" </script>';
    }
}
?>
