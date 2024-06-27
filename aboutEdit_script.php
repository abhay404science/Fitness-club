<?php
require("component/comon.php");

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['link']) && isset($_POST['description'])) {
   
    $id = $con->real_escape_string($_POST['id']);
   $heading = $con->real_escape_string($_POST['name']);
    $ylink = $con->real_escape_string($_POST['link']);
   $description = $con->real_escape_string($_POST['description']);
//    echo $id;
//    echo $pnumber;
//    echo $email;
  
// echo $ylink;

    // Extract the video ID from the YouTube link
    $urlParts = parse_url($ylink);
    // print_r ($urlParts);
  
    parse_str($urlParts['query'], $queryParams);
    // $videoId = $queryParams[$urlParts['path']];
    // echo $videoId;
    $path = $urlParts['path'];
    $query = $urlParts['query'];
    // print_r ($urlParts['query']);
       $sql =  "UPDATE about
        SET heading = '$heading', Ylink = '$ylink', caption = '$description', query = '$path', qid = '$query'
        WHERE id = $id";

        if ($con->query($sql) === TRUE) {
            header("Location: EditAboutAdmin.php?notification=1");
            // echo '<script>alert("about section updatedd");window.location.href = "EditAboutAdmin.php"</script>';
            // echo "ip wo img";
        } else {
            echo "Error updating record: " . $con->error;
        }
    }

?>
