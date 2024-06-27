<?php
 
    
   require("../component/comon.php");
require('config.php');



require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)

{
    $paymentid = $_POST['razorpay_payment_id'];
    // echo $paymentid;

 
    $query = "SELECT payment_id FROM order_payment WHERE payment_id = '$paymentid'";
    $result = $con->query($query);

    if ($result->num_rows == 0) {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phoneno']) && isset($_POST['name']) && isset($_POST['razorpay_payment_id']) && isset($_POST['lastname']) && isset($_POST['address']) && isset($_POST['totalprice']) ) {
            if (isset($_POST['names']) && is_array($_POST['names'])) {
                $namesArray = $_POST['names'];
        
                // You can now use $namesArray as needed on this page
                foreach ($namesArray as $names) {
                    // echo $names . '<br>';
                    $itemNames = implode(', ', $namesArray);
                    // echo $itemNames;
                }
            } else {
                echo "No names submitted.";
            }
            if(isset($_POST['quantity-6'])){

                $ide = $con->real_escape_string($_POST['quantity-6']);
              
            }
           if(isset($_POST['uid'])){

            $oid = $con->real_escape_string($_POST['uid']);
            // echo $oid;
           }
           
         
           
            $email = $con->real_escape_string($_POST['email']);
           
            $phone_noo = $con->real_escape_string($_POST['phoneno']);
            $totalprice = $con->real_escape_string($_POST['totalprice']);
            $name = $con->real_escape_string($_POST['name']);
          $lastname = $con->real_escape_string($_POST['lastname']);
          $address = $con->real_escape_string($_POST['address']);
        
            $paymentid = $con->real_escape_string($_POST['razorpay_payment_id']);
            date_default_timezone_set("Asia/Kolkata");
            $currentDateTime = date("Y-m-d h:i:s");
            // echo $totalprice;
            // echo $currentDateTime;
            if (isset($_POST['itemname_9'])) {
                foreach ($_POST['itemname'] as $itemname) {
                    $itemname = $con->real_escape_string($itemname);
                    // You can do something with each $itemname here.
                    // echo "Item Name: $itemname<br>";
                }
            }
         
            $sql = "INSERT INTO order_payment (payment_id, email, contact, event_at, status, Fname, Lname, Address,totalprice,itemname) VALUES ('$paymentid', '$email', '$phone_noo', '$currentDateTime', '1' ,'$name','$lastname','$address','$totalprice','$itemNames')";
            $user_id = $_SESSION['user_id']; 
            $sql2 = "DELETE FROM users_items WHERE user_id = $user_id";
            if ($con->query($sql) === TRUE) {
               

                $con->query($sql2) === TRUE;
            } else {
          
                echo "Error: " . $sql . "<br>" . $con->error;
                echo"dsf";
            }
        }
        else {
            echo "adf";
            
        }
    } else {
        echo "  ";
        // date_default_timezone_set("Asia/Kolkata");
        //     $currentDateTime = date("Y-m-d H:i:s:a");
        //     echo $currentDateTime;
      
       
    }

    $html = '
    
    <html>
    <head>
      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    </head>
      <style>
        body {
          text-align: center;
          padding: 40px 0;
          background: #EBF0F5;
        }
          h1 {
            color: #88B04B;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
          }
          p {
            color: #404F5E;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-size:20px;
            margin: 0;
          }
        i {
          color: #9ABC66;
          font-size: 100px;
          line-height: 200px;
          margin-left:-15px;
        }
        .card {
          background: white;
          padding: 60px;
          border-radius: 4px;
          box-shadow: 0 2px 3px #C8D0D8;
          display: inline-block;
          margin: 0 auto;
        }
        a{
            text-decoration:none;
            translate:50px 500px;
        }
      </style>
      <body>
        <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
          <i class="checkmark">✓</i>
        </div>
          <h1>Success</h1> 
          <p>We have received your payment;<br/> well be in touch shortly!</p>
        
          <p>Payment ID: '.$paymentid.'</p><br>
        <a href="../products.php" class="btn btn-block btn-success" disabled style="background-color:black;font-size:25px;padding:10px;color:white;">Home </a>
          </div>
      </body>
  </html>';


}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
