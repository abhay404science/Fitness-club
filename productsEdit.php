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
    <!----------------------------admimn-------------------- -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminPanel/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="AdminPanel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="AdminPanel/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="AdminPanel/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminPanel/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="AdminPanel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="AdminPanel/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="AdminPanel/plugins/summernote/summernote-bs4.min.css">



        <!--------------------admin-------------------- -->      
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

<body style="padding-top: 5px;">
    
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
    <div class="col-md-12 cfm" style="margin-left:250px">
        <div class="contact-form">
           
            <?php 
            
            


if (isset($_GET['id'])) {
    $id = $_GET['id'];

//    echo $id;
   $sql = "SELECT id,name,image,price FROM items  WHERE id = $id";
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
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="productsEditScript.php" enctype = "multipart/form-data">
				    
                <div class="form-group col-sm-9">
                    <input id="id" type="hidden" name="id" class="form-control" required="required" placeholder="id" value="<?php 
                    $sql = "SELECT id,name,image,price FROM items  WHERE id = $id";
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
                    <!--  -->
                    <!-- <div class="form-group col-sm-9">
				        <input id = "id" type="text" name="" class="form-control" required="required" placeholder="Item Name">

				    </div> -->
                    
				   

<div class="card card-primary" style=" ">
              <div class="card-header">
                <h3 class="card-title">Edit Item</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
              <div class="card-body" style="width:800px">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Item Name</label>
                    <input id = "name" type="text" name="name" class="form-control" required="required" placeholder="Item Name" value="<?php 
                    $sql = "SELECT id,name,image,price FROM items  WHERE id = $id";
                    $result = $con->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Output the results
                        while ($row = $result->fetch_assoc()) {

                            echo $row["name"];
                           
                        }
                    } 
                    
                    
                    ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input id="price" type="text" name="price" class="form-control" required="required" pattern="[0-9]+" placeholder="Price" min="0" value="<?php 
                    $sql = "SELECT id,name,image,price FROM items  WHERE id = $id";
                    $result = $con->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // Output the results
                        while ($row = $result->fetch_assoc()) {

                            echo $row["price"];
                           
                        }
                    } 
                    
                    
                    ?>">
  <div id="checkprint"></div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="file" id="img" name="img" accept=".png, .jpg, .jpeg" onchange="updateFileName()">
                        <label class="custom-file-label" id = "fileLabel"for="img">Choose file</label>
                      </div>
                     
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
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" onclick = "myfncc(event)">Submit</button>
                </div>
              </form>
            </div>
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
				            
                    <!-- <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit" onclick = "myfncc(event)">
				    </div> -->

                    <div id="result" style="text-align:left;"></div>
				</form>
                
        </div>
    </div>
	    		
        
    </div>
</div>
<div class="col-md-6">




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

<script src="AdminPanel/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="AdminPanel/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="AdminPanel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="AdminPanel/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="AdminPanel/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="AdminPanel/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="AdminPanel/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="AdminPanel/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="AdminPanel/plugins/moment/moment.min.js"></script>
<script src="AdminPanel/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="AdminPanel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="AdminPanel/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="AdminPanel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
    </body>
</html>
