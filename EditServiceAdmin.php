<?php
include "component/comon.php"
?>
<!DOCTYPE html>

<html>
  <style>
  
    body{
        overflow-y:hidden;
    }
    </style>
    </style>
    <head>
        

          <meta name="viewport" content="width=device-width, initial-scale=1">
           <script src="bootstrap/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  
  <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php include 'headLink/link.php'; ?>
        <!-- Bootstrap Core CSS -->
          <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
        <!-- Custom CSS -->
         

        <link rel = "stylesheet" href = "mainPage/style.css?v=<?php    echo time(); ?>">

        <!-- jQuery -->
        
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>

<body style="padding-top: 5px;">
    
    <!-- Header -->
 
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="#" class="nav-link">Contact</a> -->
      </li>
      <li class="nav-item d-none d-sm-inline-block" style="margin-left:1000px"  >
       
        <button style="padding:0;"type="button" class="btn btn-block btn-primary" ><a style="color:white" href="addSection.php" class="nav-link" style="font-weight:bold">Add New </a></button>
      </li>
    </ul>

    <!-- Right navbar links -->
    <!-- */ -->
  </nav>
       <?php include 'AdminPanel/component/aside.php'; ?>
    <br>
    <!-- <h2 style = "margin-left:290px;margin-top:10px">Edit Item</h2> -->
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
            <!-- <h2 style="margin-left:100px">Edit Slide Banner</h2> -->
	           <div class="status alert alert-success" style="display: none"></div>


              

               
				    
                <div class="card-body" style="width:1280px">
              
<!-- <div id="result" style="text-align:left;overflow-y:scroll;overflow-x:hidden;width: 1300px;px;height:700px"> -->
            
                   
            <div class="card" style="margin-left:-5px">
                          <div class="card-header" style="margin-left:0px">
                            <h2 style="font-weight:bold"class="card-title">Edit Service</h2>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body" style="width:1230px;height:500px;overflow-y:scroll;overflow-x:hidden">
                            <table class="table table-bordered"  style="width:1200px;margin-left:-20px">
                              <thead>
                                <tr>
                                <th scope="col">S.No</th>
                  <th scope="col">Image</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                                </tr>
                              </thead>
                              <tbody>
    <?php
    $x = 0;
    $sql = "SELECT * FROM service";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
       $id = $row['id'];
    //    echo $id;
    //    echo $row['image'];
    
       $Image = $row['img'];
       $title = $row['title'];
       $caption = $row['description'];

    //    echo '<tr>';
    //    echo '$image';
       echo '<th scope="row">'.++$x.'</th>';
      echo '<td><img name = "img" src = "upSection/'.$Image.'" style = "width:100px; heihgt:100px;"></td>';
      echo '<td>'.$title.'</td>';
      echo '<td>'.$caption.'</td>';
       echo '<td><a href="serviceEdit.php?id='.$id.'"name="edit" value="add" class="btn btn-block btn-success"><i class="fas fa-edit"></i></a></td>';
       echo '<td><a href="#" onclick="confirmDelete('.$id.')" class="btn btn-block btn-danger nocyrus"><i class="fas fa-trash-alt"></i></a></td>';
     echo '</tr>';

    }

    
    ?>
  <script>
function confirmDelete(id) {
    if (window.confirm("Are you sure you want to delete this Service?")) {
        window.location.href = "serviceDelete.php?id=" + id + "&confirm=1";
    }
}
</script>
   
  </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer clearfix">
                          
                          </div>
                        </div>
            
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
    text: 'Service Updated',
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
        echo '<script>showNotification()</script>;';
    }
    ?>
<script>
function deleteNotification (){
  new Notify ({
    status: 'error',
    title: 'Deleted',
    text: 'Service Deleted',
    effect: 'fade',
    speed: 300,
    customClass: 'delete',
    customIcon: '<i class="fas fa-trash-alt">',
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
    if (isset($_GET['notification']) && $_GET['notification'] === '2') {
        echo '<script>deleteNotification()</script>;';
    }
    ?>

<script>
function AddNotification (){
  new Notify ({
    status: 'success',
    title: 'Added',
    text: 'New Service Added',
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
    if (isset($_GET['notification']) && $_GET['notification'] === '3') {
        echo '<script>AddNotification()</script>;';
    }
    ?>
<script>
function SNotification (){
  new Notify ({
    status: 'warning',
    title: 'Already Exist',
    text: 'This service Already exist',
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
    if (isset($_GET['notification']) && $_GET['notification'] === '4') {
        echo '<script>SNotification()</script>;';
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
                url: 'addSection_script.php', 
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
