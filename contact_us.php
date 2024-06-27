<?php
include "component/comon.php"
?>
<!DOCTYPE html>

<html>
    <head>
        

          <meta name="viewport" content="width=device-width, initial-scale=1">
           <script src="bootstrap/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  
  <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.css" />

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.js"></script>

        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
         

   <link rel = "stylesheet" href = "css/style.css?v=<?php    echo time(); ?>">

        <!-- jQuery -->
        
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>

<body style="padding-top: 50px;">
    
    <!-- Header -->
    <?php include 'component/header.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  
      </div>
        <div class="col-sm-2">
      
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Get In Touch</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="response.php">
				    
                    <div class="form-group col-sm-9">
				        <input id = "name" type="text" name="name" class="form-control" required="required" placeholder="Name">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input id = "email" type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
                    <div class="form-group col-sm-9">
				        <input id = "phoneno" type="text" name="pnumber" class="form-control" required="required" placeholder="Phone No. 98xxxxxxxx" pattern="[0-9]{10}"  oninput="check()" maxlength="10">
				       <div id="checkprint" style="color:red"></div>
                       <script>
                 
                        </script>
                    
                    </div>
                 
				    
                    <div class="form-group col-sm-9">
				        <textarea id = "message" name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit" onclick = "myfnc()">
				    </div>

                    <div id="result" style="text-align:left;"></div>
				</form>
        </div>
    </div>
	    		<script>
//               function myfnc(){

//                 var phoneInput = document.getElementById("phoneno");

// // Check if the input value matches the pattern
// if (phoneInput.validity.patternMismatch) {
//   console.log("Invalid phone number formatkl");
//   document.getElementById("checkprint").innerHTML = "Invalid phone number format";
//   document.getElementById("checkprint").style.color = "red";
// } else {
//   console.log("Valid phone number format");
//   document.getElementById("checkprint").innerHTML = "Valid Phone number";
//   document.getElementById("checkprint").style.color = "green";
// }




//               }
             
  var phoneno = document.getElementById("phoneno");

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

  })
  
//     console.log("Invalid phone number format");
//     // document.getElementById("checkprint").innerHTML = "Invalid phone number format";
//     document.getElementById("checkprint").innerHTML = "";
//     document.getElementById("checkprint").style.color = "red";
//   } else {
// //     console.log("Valid phone number format");
// //     document.getElementById("checkprint").innerHTML = "Valid Phone number";
// //     document.getElementById("checkprint").style.color = "green";
// //   }




                </script>
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2 class="title">Contact Info</h2>
	               <address>
				    <p>G-2, Mangolpuri near Govt School</p>
				    <p>Delhi, India,</p>
		
				    <p>Phone:+91 9211664330</p>
				    <p>Fax: 222 55 33 6</p>
				    <p>Email: fitnessclub@yahoo.com </p>
	               </address>
	               <br><br>
	            <div><h2 class="title">Follow Us On&#58;</h2>
                   <a href="http://www.facebook.com/estore" target="_blank"><img src="./img/logofb.png" alt="fb logo" style="width:30px; height:30px; border:0"></a>
                   <a href="http://www.twitter.com/estore" target="_blank"><img src="./img/logotwitter.png" alt="twitter logo" style="width:30px; height:30px; border:0 padding-left:10px;"></a>
               </div>
            </div>
        </div>
    </div>
</div>



<!--mappp-->

<div id = "map">

</div>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOd_gE8mGsrcSek3-KRv5WE9riUQxVOiU&callback=initMap&v=weekly"
      defer
    ></script>
<script src="index.js"></script>
<!-- <script>
   
        function myfnc() {
            event.preventDefault();
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;
              if(name != "" || email != ""){
                $.ajax({
                type: 'POST',
                url: 'response.php',
                data: { name: name, email: email, message: message },
                success: function(response) {
                    $('#result').html(response);
                  alert(success);
                    if (response == 'go') {
                        alert(response);
                    }
                }
            });


              }
          
        };
 
</script> -->

                   <script>
                  const btn = document.querySelector('#btn');

function showNotification (){
    console.log("hello");
  new Notify ({
    status: 'success',
    title: 'Thank You For Contacting',
    text: 'we will come in touch with you soon',
    effect: 'fade',
    speed: 300,
    customClass: '',
    customIcon: '<i class="fa fa-shopping-cart"></i>',
    showIcon: true,
    showCloseButton: true,
    autoclose: true,
    autotimeout: 2000,
    gap: 20,
    distance: 20,
    type: 1,
    position: 'x-center'
  })
  history.replaceState({}, document.title, window.location.pathname);
}
// console.log(showNotification);
                  </script>
                  <?php
    if (isset($_GET['notification']) && $_GET['notification'] === '1') {
        echo '<script>showNotification()</script>';
    }
    ?>

<br>
<br>
<br>
<br><br><br>

      <?php include 'component/footer.php'; ?>
    </body>
</html>
