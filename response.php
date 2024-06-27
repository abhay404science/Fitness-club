<?php
include "component/comon.php";






if((isset($_POST['submit']))){

   
}





 $Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);

$comments = $con->real_escape_string($_POST['message']);
$phoneno = $con->real_escape_string($_POST['pnumber']);

$pattern = "[0-9]";
// if(preg_match($patter,$phoneno)){


   
// }

$sql="INSERT INTO contact (Name, email, Message, phone_no) VALUES ('".$Name."','".$Email."',  '".$comments."','".$phoneno."')";




if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
//    echo "Thank you! We will get in touch with you soon";
// echo "".$comments."";
//    echo "<b>Name</b> : ".$Name."<br/><b>E-mail</b> : ".$Email."<br/><b>Message</b> : ".$comments;
   echo '<script>alert("Thank you! ' . $Name . ' we will contact you soon");location.reload();</script>';
   // header('location: contact_us.php?notification=1');
   // header('location:contact_us.php')
?>