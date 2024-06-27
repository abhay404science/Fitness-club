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
            <h2>Edit Slide Banner</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="editSlideImage_script.php" enctype = "multipart/form-data">
				    
                <form action="process_form.php" method="POST">
                <table class="table">
  <thead class="thead-dark " style = 'background-color:#E9ECEF; color:black'>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $x = 0;
    $sql = "SELECT * FROM slide_image ORDER BY id";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
       $id = $row['id'];
    //    echo $id;
    //    echo $row['image'];
    
       $Image = $row['image'];
    //    echo '<tr>';
    //    echo '$image';
       echo '<th scope="row">'.++$x.'</th>';
      echo '<td><img name = "img" src = "./upSlideimage/'.$Image.'" style = "width:500px; heihgt:500px;"></td>';
       echo '<td><a href="slideBannerEdit.php?id='.$id.'"name="edit" value="add" class="btn btn-block btn-success">Edit</a></td>';
       echo '<td><a  href="deleteSlideImage.php?id='.$id.'"name="delete" value="add" class="btn btn-block btn-danger nocyrus">Delete</a></td>';
     echo '</tr>';

    }

    
    ?>
  
   
  </tbody>
</table>
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

      <?php include 'component/footer.php'; ?>
    </body>
</html>
