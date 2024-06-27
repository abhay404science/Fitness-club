<?php
include "component/comon.php";






if((isset($_POST['submit'])))



//fetching and storing the form data in variables


$Email = $con->real_escape_string($_POST['email']);


$sql="INSERT INTO newletter (Email) VALUES ('".$Email."')";



//Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo '<script>alert("Submitted!! you recieve message soon"); window.location.href = "index.php"</script>';