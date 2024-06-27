<?php
include "component/comon.php"
?>
<!DOCTYPE html>

<html>
    <head>
        

          <meta name="viewport" content="width=device-width, initial-scale=1">
           <!-- <script src="bootstrap/js/jquery-3.6.0.min.js" type="text/javascript"></script> -->
  
  <!-- <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  
  <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->


  <?php include 'headLink/link.php'; ?>

        <!-- Bootstrap Core CSS -->
          <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
        <!-- Custom CSS -->
         

        <link rel = "stylesheet" href = "style.css">

        <!-- jQuery -->
        
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>

<body style="padding-top: 5px;overflow-y:hidden">
    
    <!-- Header -->
 <!-- Header -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="AdminPanel/index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="#" class="nav-link">Contact</a> -->
      </li>
      <li class="nav-item d-none d-sm-inline-block" style="margin-left:1000px"  >
       
        <button style="padding:0;"type="button" class="btn btn-block btn-primary" ><a style="color:white" href="addProduct.php" class="nav-link" style="font-weight:bold">Add New </a></button>
      </li>
    </ul>

    <!-- Right navbar links -->
    <!-- */ -->
  </nav>
    <?php include 'AdminPanel/component/aside.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  
      </div>
        <div class="col-sm-2">
      
        </div>
    </div>
    


	    		
    <div class="gh" style="margin-left:80px">    

    <div class="card" style="margin-left:-10px;width:1230px;">
              <div class="card-header" style="margin-left:0px;;">
              <h2 style="font-weight:bold"class="card-title">Items</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="width:1230px;height:600px;overflow-y:scroll;overflow-x:hidden">
                <table class="table table-bordered"  style="width:1180px;">
                  <thead>
                    <tr>
                    <th scope="col">S.No</th>
      <th scope="col">Image</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    
                    </tr>
                  </thead>
                  <tbody>
    <?php
     $x = 0;
    $limit = 6;
    if(isset($_GET['page'])){
        $page = $_GET['page'];

    }else{
        $page = 1;
    }
   
    $offset = ($page - 1)* $limit;
  
    $sql = "SELECT * FROM items";
   
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
       $id = $row['id'];
    //    echo $id;
    //    echo $row['image'];
    $price = $row['price'];
    
       $Image = $row['image'];
    //    echo '<tr>';
    //    echo '$image';
       echo '<th scope="row">'.++$x.'</th>';
      echo '<td><img name = "img" src = "uploads/'.$Image.'" style = "width:50px; heihgt:50px;"></td>';
      echo '<td>'.$name.'</td>';
      echo '<td> ₹ '.$price.'</td>';
      //  echo '<td><a href="productsEdit.php?id='.$id.'"name="edit" value="add" class="btn btn-block btn-success"><i class="fas fa-edit text-success"></i></a></td>';
       echo '<td style="width:5px"><a href="productsEdit.php?id='.$id.'"name="edit" value="add" class="btn btn btn-success"><i class="fas fa-edit"></i></a></td>';
       echo '<td style="width:5px"><a href="#" onclick="confirmDelete('.$id.')" class="btn btn btn-danger nocyrus"><i class="fas fa-trash-alt"></i></a></td>';
     echo '</tr>';
       
    echo '<ul id="demo" class="pagination-lg pull-right"></ul>';

    }

    
    ?>
   <script>
function confirmDelete(id) {
    if (window.confirm("Are you sure you want to delete this item?")) {
        window.location.href = "delete.php?id=" + id + "&confirm=1";
    }
}
</script>
  
  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix" style="width:1230px">
              
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
                  const btn = document.querySelector('#btn');

function showNotification (){
  new Notify ({
    status: 'success',
    title: 'Updated',
    text: 'Item updated',
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
    text: 'Item Deleted',
    effect: 'fade',
    speed: 300,
    customClass: '',
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
    text: 'New Item Added',
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
</script>
                   <?php
    if (isset($_GET['notification']) && $_GET['notification'] === '3') {
        echo '<script>AddNotification()</script>;';
    }
    ?>
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
<script>
    $(document).ready(function () {
        $('#main-contact-form').submit(function (e) {
            e.preventDefault(); 

            var formData = new FormData(this);
           console.log(formData);
            $.ajax({
                type: 'POST',
                url: 'addBannerScript.php', 
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
</script>
<script src = "active.js"></script>

<br>
<br>
<br>
<br><br><br>

<?php include 'headLink/dlink.php'; ?>

    </body>
</html>
