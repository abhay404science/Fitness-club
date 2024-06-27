
<?php

session_start();
require_once("component/CreateDb.php");
require_once("component/component.php");

$db = new CreateDb('Productdb','producttb');


if (isset($_POST['remove'])){
  //print_r($_GET['id']) ;
    if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}
?>


<!DOCTYPE html>


<html lang="en">
  <head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
 
  <script src="bootstrap/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  
  <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
   <link rel = "stylesheet" type = "text/css" href = "style.css">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<script src="http://code.jquery.com/jquery.js"></script>
  </head>
  
  
  
  <body>
      <?php 
      
      require_once('component/header.php');
      ?>
      <div class ="container-fluid">
          <div class ="row px-5">
              <div class =" col-md-5">
                  <div class ="shopping-cart">
                      
                      <h6>MY CART </h6>
                      <hr>
                      <?php
                      $total =0;
                      if(isset($_SESSION['cart'])){
                      $product_id = array_column($_SESSION['cart'],'product_id');
                      
                      $result = $db->getData();
                      while($row = mysqli_fetch_assoc($result)){
                          
                          foreach($product_id as $id){
                              
                              if($row['id'] ==$id){
                                  cartElement($row['product_image'],$row['product_name'],$row['product_price'],$row['id']);
                                  
                                $total = $total + (int)$row['product_price'];  
                              }
                          }
                      } 
                      }else {
                          echo "<h5> Cart isEmpty </h5>";
                          
                      }
                      ?>
                  </div>
                  
                  
              </div>
              <div class ="col-md-5 offset-md-1 border rounded mt-5 bg-white h-25">
                  <div class ="pt-4">
                      <h6>PRICE DETAILS </h6>
                      <hr>
                      <div class ="row price-details">
                          <div class ="col-md-6">
                              
                          <?php  
                          if(isset($_SESSION['cart'])){
                              
                              $count = count($_SESSION['cart']);
                              echo "<h6> Price($count items)</h6>";
                          }else {
                              
                              echo"<h6> Price (0 items)</h6>";
                              
                              
                          }
                              
                              
                          
                          
                          ?>
                              <h6> Delivery Charges </h6>
                              <hr>
                              <h6> Amount Payable </h6>
                              
                              
                          </div>
                          <div class ="col-md-6">
                              
                              <h6>₹<?php  echo $total; ?> </h6>
                              
                                  <h6 class ="text-success"> FREE </h6>
                                  <hr>
                                  
                                  <h6 class="total-price"> ₹ <?php 
                                  echo $total;
                                  
                                  ?></h6>
                              
                             
                              
                          </div>
                          
                      </div>
                  
                  
                  
              </div>
              
              
          </div> 
                  
      </div>
  
        
        <script type="text/javascript" src="./common.js"></script>  
          
         
  
      </body>
</html>
  
  