<?php
  require("component/comon.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up | FItness club</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
           <script src="bootstrap/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  
  <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
         

   <link rel = "stylesheet" href = "css/style.css?v=<?php    echo time(); ?>">

        <!-- jQuery -->
        
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>


</head>


<body>
    <?php include "component/header.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-7">
               <img src="products/t.jpg">
            </div>

            <div class="col-sm-5">

                <h2 style="color:orange">SIGN UP</h2>

                    <form  action="signup_script.php" method="POST">

                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="City" name="city"  >
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" >
                        </div>

                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>  
                        <div class="col-sm-10">
                                  Already have an account ?<a href="login.php"> Login</a>
                        </div>

                </form>
        </div>
    </div>
    </div>

      <?php include "component/footer.php"; ?>
    </body>
</html>
