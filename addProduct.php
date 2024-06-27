<?php
include "component/comon.php"
?>
<!DOCTYPE html>

<html>
    <head>
        

          <meta name="viewport" content="width=device-width, initial-scale=1">
         
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
         

   <link rel = "stylesheet" href = "css/style.css?v=<?php    echo time(); ?>">

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


    <div class="parent">
    <div class="row" style = "margin-left:450px; margin-top:20px">
    <div class="col-sm-9">
        

<div class="card card-primary" style="">
              <div class="card-header">
                <h3 class="card-title">Add Item</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" action="addItem.php" enctype = "multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Item Name</label>
                    <input id = "name" type="text" name="name" class="form-control" required="required" placeholder="Item Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input id="price" type="text" name="price" class="form-control" required="required" pattern="[0-9]+" placeholder="Price" min="0">
  <div id="checkprint"></div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="file" id="img" name="img" accept=".png, .jpg, .jpeg" required="required" onchange="updateFileName()">
                        <label class="custom-file-label" id="fileLabel" for="img">Choose file</label>
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
                <input type="submit" name="submit" class="btn btn-primary" value="Submit" onclick = "myfncc(event)">

                </div>
                <div id="result" style="text-align:left;"></div>
              </form>
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
</div>












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
