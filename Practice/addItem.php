<?php
if(isset($_FILES['img']))
// echo"<pre>";
//     print_r($_FILES);
//     echo"</pre>";
//     echo $file_size = $_FILES['img']['size'];
{// { echo rand(10,15).time();
  
  if($file_size < 500000)
  {
    // echo"<pre>";
    // // print_r($_FILES);
    // echo"</pre>";
    
    echo $file_name = rand(0,100).time().$_FILES['img']['name']; //image
    echo  $file_tmpname = $_FILES['img']['tmp_name'];  //temp name
    
    if (move_uploaded_file($file_tmpname, "uploads/" . $file_name)) {
      echo "File uploaded successfully.";
  } else {
      echo "Error uploading file.";
  }


  }
  else {

    "not allowed";
  }
//rand(0,100).time()
// getClientOriginalExtension
}
?>