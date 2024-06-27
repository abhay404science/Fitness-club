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
            <h2>Edit Testimonal</h2>
            <?php 
            
            


if (isset($_GET['id'])) {
    $id = $_GET['id'];


   $sql = "SELECT id,photo,user_name,caption FROM testimon  WHERE id = $id";
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
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="testimonalEdit_script.php" enctype = "multipart/form-data">
				    
                <div class="form-group col-sm-9">
                    <input id="id" type="hidden"  name="id" class="form-control" required="required" placeholder="id" value="<?php 
                 $sql = "SELECT id,photo,user_name,caption FROM testimon  WHERE id = $id";
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
                    <div class="form-group col-sm-9">
				        <!-- <input id = "name" type="text" name="name" class="form-control" required="required" placeholder="Name"> -->
                        <span>Image: </span><input type="file" id="img" name="img" accept=".png, .jpg, .jpeg">
				    </div>
                    <!-- <div class="form-group col-sm-9">
				        <input id = "id" type="text" name="" class="form-control" required="required" placeholder="Item Name">

				    </div> -->
                    <div class="form-group col-sm-9">
                    <input id="name" type="text" name="name" class="form-control" required="required" placeholder="Item Name" value="<?php 
                 $sql = "SELECT id,photo,user_name,caption FROM testimon  WHERE id = $id";
                    $result = $con->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Output the results
                        while ($row = $result->fetch_assoc()) {

                            echo $row["user_name"];
                           
                        }
                    } 
                    
                    
                    ?>">


				    </div>
				    
                    <div class="form-group col-sm-9">
                    <textarea id = "message" name="description" id="description"  class="form-control" rows="7" placeholder="Enter The Description here" require=required><?php 
               $sql = "SELECT id,photo,user_name,caption FROM testimon  WHERE id = $id";
               $result = $con->query($sql);
                    $result = $con->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Output the results
                        while ($row = $result->fetch_assoc()) {

                            echo $row["caption"];
                           
                        }
                    } 
                    
                    
                    ?> </textarea>
  <div id="checkprint"></div>
</div>

<script>
  var price = document.getElementById("price");


  price.addEventListener("input", function() {
    console.log(price.value)
    console.log("first")
    if (price.value === "") {
     
      document.getElementById("checkprint").innerHTML = "";
      document.getElementById("checkprint").style.color = "";
      document.getElementById("price").style.border = "";
    }
    else if ( price.validity.patternMismatch) {
        console.log("second");
        document.getElementById("checkprint").innerHTML = "The value specified is invalid";
      document.getElementById("checkprint").style.color = "red";
      document.getElementById("price").style.border = "2px solid red";
    
    } else {
        document.getElementById("checkprint").innerHTML = " ";
        document.getElementById("checkprint").style.color = "green";
        document.getElementById("price").style.border = "2px solid #90EE90";


      console.log("third");
    }
  });
</script>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit" onclick = "myfncc(event)">
				    </div>

                    <div id="result" style="text-align:left;"></div>
				</form>
                
        </div>
    </div>
	    		
        
    </div>
</div>


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

      <?php include 'component/footer.php'; ?>
    </body>
</html>
