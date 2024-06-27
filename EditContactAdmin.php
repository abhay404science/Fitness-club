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
    


	    		
    <div class="gh" style="margin-left:80px">    

    <div class="card" style="margin-left:-10px;width:1230px;">
              <div class="card-header" style="margin-left:0px;;">
                <h3 class="card-title" style="font-weight:bold">Contact</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="width:1230px;height:200px">
                <table class="table table-bordered"  style="width:1180px;">
                  <thead>
                    <tr>
                    <th scope="col">S.No</th>
      <th scope="col">Phone no</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Edit</th>
    
                    </tr>
                  </thead>
                  <tbody>
    <?php
    $x = 0;
    $sql = "SELECT * FROM q_contact";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        $phone_no = $row['phone_no'];
       $id = $row['id'];
    //    echo $id;
    //    echo $row['image'];
    $email = $row['email'];
    
       $address = $row['address'];
    //    echo '<tr>';
    //    echo '$image';
       echo '<th scope="row">'.++$x.'</th>';
      echo '<td>'.$phone_no.'</td>';
      echo '<td>'.$email.'</td>';
      echo '<td>'.$address.'</td>';
      echo '<td style="width:5px"><a href="Edit_contact.php?id='.$id.'"name="edit" value="add" class="btn btn btn-success"><i class="fas fa-edit"></i></a></td>';
    //   echo '<td><a   href="delete.php?id='.$id.'"name="delete" value="add" class="btn btn-block btn-danger nocyrus">Delete</a></td>';
      
     echo '</tr>';

    }

    
    ?>
  
   
  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix" style="width:1230px">
              
              </div>
</div>
<script>
                  const btn = document.querySelector('#btn');

function showNotification (){
  new Notify ({
    status: 'success',
    title: 'Updated',
    text: 'Contact Updated',
    effect: 'fade',
    speed: 300,
    customClass: '',
    customIcon: '',
    showIcon: true,e
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


<br>
<br>
<br>
<br><br><br>

<?php include 'headLink/dlink.php'; ?>
    </body>
</html>
