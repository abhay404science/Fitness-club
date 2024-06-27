<?php
require("component/comon.php");
// if (!isset($_SESSION['email'])) {
    if (isset($_SESSION['email'])) {
        header('location: index.php');
    }
   
// }
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
        <?php include 'component/header.php'; ?>

        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Forget Password</h4>
                    <form action="forgetPassword_Script.php" method="POST">
                        <div class="form-group">
                            <span>Enter your Email</span>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <span>Enter new password :</span>
                            <input type="password" class="form-control" name="new_password"  pattern=".{6,}" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                    <span>Confirm new password :</span>
                    <input type="password" class="form-control" name="confirm_password" pattern=".{6,}" placeholder="Confirm New Password" required>
                </div>
                        <!-- <div class="form-group">
                            <input type="password" class="form-control" name="repnew_password" pattern=".{6,}" placeholder="Re-type New Password" required>
                        </div> -->
                        <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                      <br>
                        <button type="submit" class="btn btn-primary">Change</button>

                    </form>
                </div>
            </div>
        </div>
            <?php include 'component/footer.php'; ?>
    </body>
</html>
