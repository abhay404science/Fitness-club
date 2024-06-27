<?php
session_start();
require("component/comon.php");

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);

$query = "SELECT id, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$num = mysqli_num_rows($result);

$response = array();

if ($num == 0) {
  $response['success'] = false;
  $response['error'] = "Enter Correct E-mail and Password Combination";
} else {
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  $response['success'] = true;
}

echo json_encode($response);
?>
