<?php
// This page updates the user password
require("component/comon.php");


if(!isset($_POST['email'])){

  echo "hello";
}

if (isset($_POST['email']) && isset($_POST['password'])){
     $email = $con->real_escape_string($_POST['email']);
    $password = MD5($con->real_escape_string($_POST['password']));
echo $email;
if($email === "anirudhadmin@gmail.com"){
    $query = "SELECT email, id FROM users WHERE email = '" . $email . "' AND password = '" . $password . "'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
    
    $response = array();
    
    if ($num == 0) {
      $response['success'] = false;
      $error = "Password not matched.";
    header("location: AdminLogin.php?error=$error");
    exit;
    
    } else {
      $row = mysqli_fetch_array($result);
      $_SESSION['email'] = $row['email'];
      $_SESSION['user_id'] = $row['id'];
    //   echo '<script>alert("sucess")</script>';
      header("location: AdminPanel/index.php");
      $response['success'] = true;
     
    }
}
else{
    // echo "<script>alert('Please check your password and email combination');window.location.href = 'AdminLogin.php'</script>";
    $err = "username not correct.";
    header("location: AdminLogin.php?err=$err");
    exit;
}
    echo json_encode($response);
   
    // echo $email;
    // echo $password;


}
?>