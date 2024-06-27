 
 <? 
  session_start();?>
 


 
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
  <script src="../js/jquery.js"></script>
  <title>Document</title>
 </head>
 <body>
 <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style = "background-color:#1E1E1E;">
            
          <button type="button" class="close" data-dismiss="modal"><i style="font-size:48px;color:white" class="fa fa-close"></i></button>
          <h4 style="color:white; text-align:center;" class="color"><span class="fa fa-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="login_submit.php" method="POST">
            <div class="form-group">
              <label><span class="fa fa-envelope"></span> E-Mail</label>
              <input type="email" class="form-control"  name="e-mail" placeholder="Enter your Resistered E-Mail" required>
              
            </div>
            <div class="form-group">
              <label><span class="fa fa-eye"></span> Password</label>
              <input type="password" class="form-control" placeholder="Enter password" name="password" required>
            </div>
            <div id="error-message" style="text-align:left;"></div>
            <?php
            if (isset($_GET["error"])) {
              echo "<p>Favorite color is " . $_SESSION["error"] . ".<br>";
                    }
                    ?><br>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class=" login btn btn-default btn-secondary "><span class="fa fa-power-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button><br>
          <p>Not a member? <a href="./signup.php" style="color:#003D82">Sign Up</a></p>
          <p class="pull-left"><a href="./forgetpassword.php" style="color:#003D82">Forgot Password?</a></p>
        </div>
      </div>
    </div>
  </div> 
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->


<script>
$(document).ready(function() {
    $("#loginmodal form").submit(function(event) {
        event.preventDefault(); 

     
        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "login_submit.php",
            data: formData,
            dataType: "json",
            success: function(response) {
                if (response.success) {
                   
                    window.location.href = "products.php";
                } else {
                  
                    $("#error-message").html("<p style='color: red;'>" + response.error + "</p>");
                }
            }
        });
    });
});
</script>
 </body>
 </html>
 
 

 
 

  