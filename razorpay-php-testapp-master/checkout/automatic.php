<?php 
   require("../component/comon.php");
?>
<!doctype html>
<html lang="en">

<style>
   input{
    background-color:red;
    display:none;
   }
  </style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="form-validation.css">

  </head>

  <body class="bg-light">
  <form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
    <div class="container">
      <div class="py-5 text-center">
        
        <h2>Checkout form</h2>
       
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <?php  
             if (isset($_SESSION['user_id'])) {
              // If the user is logged in, use the user's ID from the session
              $user_id = $_SESSION['user_id'];
          } else {
              
              // If the user is not logged in or 'user_id' is not set in the session, use a default value (e.g., 0 or another ID)
              $user_id = 9; // You can replace 0 with the default user ID you want to use
          }
            
            
            $query = "SELECT items.image AS Image, items.price AS Price,items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1){

                          
                        ?>

            <?php 
            $x = 0;
            $namessArray = array();
             while ($row = mysqli_fetch_array($result)) {
              $numRows = mysqli_num_rows($result);
              $id = $row["id"];
              $name = $row['Name'];
             
              
    
              // Add the name to the array
             
          // $namesArray[] = $name;   
          //   foreach ($namesArray as $name) {
          //     echo $name;
          //     echo '<input type="text" name="names[]" value="' . $name . '">';
          // }
         
              echo '
              
              <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                  <h6 class="my-0">'.$row['Name'].'</h6>
                  
                 
              </div>';
?> 
           <?php  
            if ($id > $row_count) {
              if (isset($_POST['quantity-' . $id])) {
                  $qunt = $con->real_escape_string($_POST['quantity-' . $id]);
               
              }
              else{
      
         
              }}   
          
          
           echo'   <span class="text-muted"><span>&#8377</span>'.$row['Price']*$qunt.'</span>
        
           
            </li>
         
            </li>
           
        ';
      
                $namessArray[] = $name . ' ' . $qunt;
                echo '<input type="text" name="names[]" value="' . $name . ' '.$qunt.' ">';
     } 
     foreach ($namessArray as $namer) {
      // echo $namer.' ';
      $c = count($namessArray);
      // echo $c.'lo';
    
             } 
               
             ?>
             <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-danger">
                <h6 class="my-0">Shipping Money</h6>
            
                <small></small>
              </div>
          
              <span class="text-danger"><span>&#8377</span> +5</span>
            </li>
           <li class="list-group-item d-flex justify-content-between">
              <span>Total (&#8377)</span>
              <strong><span>&#8377</span><?php  echo $price;?></strong>
              <input type="hidden" name = totalprice class="form-control" id="" placeholder=" " value=" <?php  echo $price;?>" >
              <?php               $cartId = time() . rand(1000, 9999);?>
              <input type="hidden" name = "uid" class="form-control" id="uid" placeholder=" " value="<?php  echo $cartId;?>">
            </li>
            </ul>
        </div>

        <?php 
        $sql = "SELECT * FROM users WHERE email = '" . $_SESSION['email'] . "'";
      
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
         $full_name = $row['name'];
         $name_parts = explode(" ", $full_name);

         // Extract the first name and last name
         $first_name = $name_parts[0];
         $last_name = $name_parts[1];
         
         // Output the first name and last name
        
        
        ?>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First Name</label>
                <input type="text" name = name class="form-control" id="firstName" placeholder=" " value=" " required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lname" name = "lastname" placeholder="last name" value=" " required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

         

            <div class="mb-3">
              <label for="email"><span class="">Email</span></label>
              <input type="email" class="form-control" name = email id="email" placeholder="you@example.com" value = "  ">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name = "address" id="address" placeholder="1234 first floor" required value= " ">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Phone number <span class="text-muted"></span></label>
              <!-- <input type="number" name=phonen class="form-control" id="address2" placeholder="Phone no" value = " " max-length="10"> -->
              <input id = "phoneno" type="text" name="phoneno" class="form-control" required="required" placeholder="Phone No. 98xxxxxxxx" pattern="[0-9]{10}"  oninput="check()" maxlength="10">
              <div id="checkprint" style="color:red"></div>
            </div>
           <script>
            var phoneno = document.getElementById("phoneno");
            <?php 
   
?>
//   document.getElementById("checkprint").innerHTML = " ";
console.log("first");

 
  phoneno.addEventListener("input", function() {
    console.log(phoneno.value)
    console.log("first")
    if (phoneno.value === "") {
     
      document.getElementById("checkprint").innerHTML = "";
      document.getElementById("checkprint").style.color = "";
      document.getElementById("phoneno").style.border = "";
    }
    else if ( phoneno.validity.patternMismatch) {
        console.log("second");
        document.getElementById("checkprint").innerHTML = "The value specified is invalid";
      document.getElementById("checkprint").style.color = "red";
      document.getElementById("phoneno").style.border = "2px solid red";
    
    } else {
        document.getElementById("checkprint").innerHTML = " ";
        document.getElementById("checkprint").style.color = "green";
        document.getElementById("phoneno").style.border = "2px solid #90EE90";


      console.log("third");
    }

  })</script>
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option selected>India</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option selected>Delhi</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <!-- <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div> -->
            </div> 
            <hr class="mb-4">
          

      

            <div class="d-block my-3">
              
            </div>
            <div class="row">
              
            </div>
         
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
            <input type="" name="shopping_order_id" value="3456">
</form>
          </form>
        </div>
      </div>
      <?php } 
     
      
      ?>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2023 fitness Club</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
