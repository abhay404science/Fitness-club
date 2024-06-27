<?php
 session_start()  ;
  require("component/comon.php");

?>
<!DOCTYPE html>
<html lang="en">
    <style>
        .quant{
            background-color:white;
            color:black;
        }
        .login{
          background-color:red;
        }
        </style>
    <head>
        

          <meta name="viewport" content="width=device-width, initial-scale=1">
           <script src="bootstrap/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

  
  <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 




<!-- Google Fonts -->

<!-- MDB -->



  
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
         



        

   <link rel = "stylesheet" href = "css/style.css?v=<?php    echo time(); ?>">
   <link rel = "stylesheet" href = "css/cartstyle.css?v=<?php    echo time(); ?>">

        <!-- jQuery -->
        
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>


          
    </head>
    <body style="padding-top: 50px;">

        <!-- Header -->
                
<?php
        include 'component/header.php';
        ?>
        <!--Header end-->
        <br><br>
        <?php
                        $sum = 0;
                      if (isset($_SESSION['user_id'])) {
    // If the user is logged in, use the user's ID from the session
    $user_id = $_SESSION['user_id'];
} else {
    
    // If the user is not logged in or 'user_id' is not set in the session, use a default value (e.g., 0 or another ID)
    $user_id = 9; // You can replace 0 with the default user ID you want to use
}
                        // echo $user_id;
                        $query = "SELECT items.image AS Image, items.price AS Price,items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                    
                            ?>
        <div class="body">
        <div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
                            <!-- <div class="col align-self-center text-right text-muted">3 items</div> -->
                        </div>
                    </div>    
              
                        <?php 
                         while ($row = mysqli_fetch_array($result)) {
                            $numRows = mysqli_num_rows($result);
                            $id = $row["id"];
                           echo '
                
                           <div class="row border-top border-bottom" style="">
                        <div class="row main align-items-center" style="display:flex">
                           
                           <div class="col-2" style="">
                           
                            <img class="img-fluid img" src="uploads/'.$row["Image"].'"></div>

                            

                            <div class="col" style=" width:160px">
                                <div class="row text-muted" style="background-color:; font-size:20px">'.$row["Name"].'</div>
                                <!-- <div class="row">Cotton T-shirt</div> -->
                            </div>
                            
                            <div class="col" style=" font-size:20px; margin-left:50px">
                            <form class = "form" action="razorpay-php-testapp-master/pay.php" method="post" style="margin-top:-20px;margin-bottom:-15px">
                                <input class = "input" type="number" name = "quantity-'.$id.'" class="quant" id="quantity-'.$id.'" value="1" min="1" max="5" oninput="calculateTotal('.$id.')" style="height:30px;width:45px;font-size:15px">
                            </div>
                            <div class="col" style="margin-left:50px;font-size:20px;display:none">&#8377;<span id="price-'.$id.'"> '.$row["Price"].'</span> <span style="margin-left:10px" ></span><a href="cart-remove.php?id={$row["id"]}" class="remove_item_link" ><span class="glyphicon glyphicon-trash" ></span></a></div>
                            <div class="col" style="margin-left:50px;font-size:20px">&#8377;<span id="total-'.$id.'"> '.$row["Price"].'</span> <span style="margin-left:10px" ></span><a href="cart-remove.php?id='.$row["id"].'" class="remove_item_link"><span class="glyphicon glyphicon-trash"></span></a></div>
                          
                        </div>
                    </div> ';
                         }
             
                 ?>
                 <?php
                    
                   echo ' <div class="back-to-shop" style="width:180px;position:absolute;top:450px"><a >&leftarrow;</a><span class="text-muted"><a href="products.php">Back to shop</a></span></div>
                </div>
                <div class="col-md-4 summary" style="height:550px;overflow:hidden">
                    <div><h3><b>Summary</b></h3></div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS '.$numRows.'</div>
                        <div class="col text-right">&#8377; <span  id="pass1">132.00</span></div>
                    </div>
                    
                        <p>SHIPPING</p>
                        <select><option class="text-muted">Standard-Delivery- &#8377;5.00</option></select>
                        
                    
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col" >TOTAL PRICE</div>
                       
                        <div class="col text-right">&#8377; <span id = pass name="price">137.00</span></div>
                      
                    </div>
                    <div id="checkoutFormContainer">

        <!-- ... other form elements ... -->
        <input type="hidden" style="border: none; width: 90px" id="pss" name="total-itm" value="">';?>
        
        <?php
        if (!isset($_SESSION["email"])) {
            echo '<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn ntb" style="font-size: 20px" >Buy Now</a></p>';
        }else {
            echo '<button type="submit" data-toggle="mdl" data-target="#atom" class="btn ntb" style="font-size: 20px">CHECKOUT</button>';
        }
    echo '    
    </form>
</div>';
?>
                      <?php
                      
                    
           
                     
                 
                echo'
                </form>
                    </div>
            </div>';            
            ?>
             
                  
        </div>
</div> 

                        
<?php }

else {
    // date_default_timezone_set("Asia/Kolkata");
    // $currentDateTime = date("Y-m-d h:i:s:a");
    // echo $currentDateTime;
    
    echo "<h1 style='margin-left:650px'>Add items to cart First</h1>";
}
?>



<script>
    function calculateTotal(itemId) {
        const price = parseFloat(document.getElementById(`price-${itemId}`).innerText);
        const quantity = parseInt(document.getElementById(`quantity-${itemId}`).value);
        const total = price * quantity;
        document.getElementById(`total-${itemId}`).innerText = total;
        updateTotalPrice(); // Call the function to update the total price for all items
    }

    function updateTotalPrice() {
        let total = 0;
        <?php
        $result = mysqli_query($con, $query) or die($mysqli_error($con));
        while ($row = mysqli_fetch_array($result)) {
            echo "total += parseFloat(document.getElementById('total-" . $row['id'] . "').innerText);";
        }
        ?>
        document.getElementById('pass').innerHTML = total + 5;
        document.getElementById('pass1').innerHTML = total;
        document.getElementById('pss').value = total + 5;
    }

    // Call updateTotalPrice initially to calculate the total price
    updateTotalPrice();
</script>

        
        <!--Footer-->
        
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <?php include 'component/footer.php';?>
        
        <!--Footer end-->
    </body>
</html>