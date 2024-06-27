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
   
  <?php include 'headLink/link.php'; ?>
        <!-- Bootstrap Core CSS -->
          <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
        <!-- Custom CSS -->
         

   <link rel = "stylesheet" href = "css/style.css?v=<?php    echo time(); ?>">
 <!-- <link rel = "stylesheet" href = "mainPage/style.css"> -->
        <!-- jQuery -->
        
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>

<body style="padding-top: 5px;overflow-y:hidden;">
    
    <!-- Header -->
    <?php include 'AdminPanel/component/header.php'; ?>
       <?php include 'AdminPanel/component/aside.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  
      </div>
        <div class="col-sm-2">
      
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9 cfm" style="margin-left:250px">
        <div class="contact-form">
            <!-- <h2>Edit Contact</h2> -->
            <?php 
            
            


if (isset($_GET['id'])) {
    $id = $_GET['id'];


   $sql = "SELECT * FROM users  WHERE id = $id";
   $result = $con->query($sql);
   

  if ($result->num_rows > 0) {
    // Output the results
    while ($row = $result->fetch_assoc()) {
        // echo "ID: " . $row["id"];
        // echo "Name: " . $row["name"];
        // echo "Img: " . $row["image"];
        // echo "Price:" . $row["price"];
    }
} else {
    echo "No results found.";
} 

}


            
            ?>
	           <div class="status alert alert-success" style="display: none"></div>
               <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>
              </div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="profileAdmin_script.php" enctype = "multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <input id="id" type="hidden" name="id" class="form-control" required="required" placeholder="id" value="<?php 
                  $sql = "SELECT * FROM users  WHERE email = email = '{$_SESSION['email']}'";
                    $result = $con->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Output the results
                        while ($row = $result->fetch_assoc()) {

                            echo $row["id"];
                           
                        }
                    } 
                    
                    
                    ?>">


				    </div>

                <!---- -->
                  
                    <!-- <div class="form-group col-sm-9">
				        <input id = "id" type="text" name="" class="form-control" required="required" placeholder="Item Name">

				    </div> -->
                    <div class="form-group">
                    <label for="exampleInputFile">Name</label>
				        <!-- <input id = "name" type="text" name="name" class="form-control" required="required" placeholder="Name"> -->
                        <input id="name" type="address" name="name" class="form-control" required="required" placeholder="address" value="<?php 
            $sql = "SELECT * FROM users  WHERE email = '{$_SESSION['email']}'";
                    $result = $con->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Output the results
                        while ($row = $result->fetch_assoc()) {

                            echo $row["name"];
                           
                        }
                    } 
                    
                    
                    ?>">
                    </div>
                    <div class="form-group ">
                    <label for="exampleInputFile">Email</label>
                    <input id="name" type="email" name="email" class="form-control" required="required" placeholder="email"  readonly value="<?php 
             $sql = "SELECT * FROM users  WHERE email = '{$_SESSION['email']}'";
                    $result = $con->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Output the results
                        while ($row = $result->fetch_assoc()) {

                            echo $row["email"];
                           
                        }
                    } 
                    
                    
                    ?>">
                    
				    </div>
                    <div class="form-group">
                    <label for="exampleInputFile">Phone No</label>
                    <input id = "phoneno" type="text" name="pnumber" class="form-control" required="required" placeholder="Phone No. 98xxxxxxxx" pattern="[0-9]{10}"  oninput="check()" maxlength="10" value="<?php 
             $sql = "SELECT * FROM users  WHERE email = '{$_SESSION['email']}'";
                    $result = $con->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Output the results
                        while ($row = $result->fetch_assoc()) {

                            echo $row["contact"];
                           
                        }
                    } 
                    
                    
                    ?>">

<div id="checkprint"></div>
				    </div>
                    <div class="form-group">
                    <label for="exampleInputFile">Address</label>
				        <!-- <input id = "name" type="text" name="name" class="form-control" required="required" placeholder="Name"> -->
                        <input id="name" type="address" name="address" class="form-control" required="required" placeholder="address" value="<?php 
            $sql = "SELECT * FROM users  WHERE email = '{$_SESSION['email']}'";
                    $result = $con->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Output the results
                        while ($row = $result->fetch_assoc()) {

                            echo $row["address"];
                           
                        }
                    } 
                    
                    
                    ?>">
 
</div>
                  
                    
<div class="form-group">
  <label for="exampleInputFile">File input</label>
  <div class="input-group">
    <div class="custom-file">
      <input type="file" id="img" name="img" accept=".png, .jpg, .jpeg" required="required" onchange="updateFileName()">
      <label class="custom-file-label" for="img" id="fileLabel">Choose file</label>
    </div>
    
  </div>
</div>

<script>
function updateFileName() {
  const fileInput = document.getElementById("img");
  const fileLabel = document.getElementById("fileLabel");

  if (fileInput.files.length > 0) {
    fileLabel.innerText = fileInput.files[0].name;
  } else {
    fileLabel.innerText = "Choose file";
  }
}
</script>
                  
                

<script>
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
</script>
				
</div>
<div class="card-footer" style="margin-bottom:-3px;margin-left:8px;width:840px">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit" onclick = "myfncc(event)">

                </div>

                    <div id="result" style="text-align:left;"></div>
				</form>
                
        </div>
    </div>
	    		
        
    </div>
</div>
<script>
                  const btn = document.querySelector('#btn');

function showNotification (){
  new Notify ({
    status: 'success',
    title: 'Updated',
    text: 'Profile Updated',
    effect: 'fade',
    speed: 300,
    customClass: '',
    customIcon: '',
    showIcon: true,
    showCloseButton: true,
    autoclose: true,
    autotimeout: 2000,
    gap: 20,
    distance: 20,
    type: 1,
    position: 'right top'
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


<!-- <script>
        // Get the file input element
        var fileInput = document.getElementById('img');

        // Add an event listener to the file input element
        fileInput.addEventListener('change', function() {
            // Get the selected file
            var selectedFile = fileInput.files[0];

            // Check if a file is selected
            if (selectedFile) {
                // Extract the file name without the path
                var fileName = selectedFile.name;

                // Display the file name (you can do whatever you want with it)
                console.log('Selected file name: ' + fileName);
            }
        });
    </script> -->

<script>
    function myfncc(){

        var imgP = document.querySelector("#price");
 console.log(imgP.value);
 onkeypress = (event) => {
   
    console.log("dd");

    if(imgP.value == "-"){

        console.log("print");
    }
 };
    }

 

</script>
 <script src="index.js"></script>
<!-- <script>
    $(document).ready(function () {
        $('#main-contact-form').submit(function (e) {
            e.preventDefault(); 

            var formData = new FormData(this);
           console.log(formData);
            $.ajax({
                type: 'POST',
                url: 'addItem.php', 
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    $('#result').html(response); 
                   
                    
                },
                error: function () {
                    alert('Error occurred during AJAX request');
                }
            });
        });
    });
</script> -->


<br>
<br>
<br>
<br><br><br>

<?php include 'headLink/dlink.php'; ?>
    </body>
</html>
