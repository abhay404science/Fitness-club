<?php
include "component/comon.php"
?>

<section id = footer>
        
        <div class ="container">
            <div class ="row">
                <div class ="col-md-3">
                  <img src ="to.png" class ="footer-logo">

                  <h4><b> Fitness leads you to a better life.</b></h4>
                </div>
                
                <div class ="col-md-3">
                    
                    <h1> Features </h1>
                    <p> <i class="fa fa-certificate" aria-hidden="true"></i>Certified Trainer </p>
                     <p> <i class="fa fa-heart" aria-hidden="true"></i>Free Consultation </p>
                      <p><i class="fa fa-clock-o" aria-hidden="true"></i> Flexible Time </p>
                       <p><i class="fa fa-asterisk" aria-hidden="true"></i> Free trial </p>
                </div>
                      
                <?php 
                  $sql = "SELECT * FROM q_contact";
               $result = $con->query($sql);
    
                   while ($row = $result->fetch_assoc()) {
                  
                     $id = $row['id'];
                 $contact = $row['phone_no'];
                       $email = $row['email'];
                             $address = $row['address'];

                     }  
                     
                    //  echo $id;
                    //  echo $contact;
                    //  echo  $email;
                    //  echo $address;


                    echo '<div class ="col-md-3">';
                    
                   echo '<h1> Quick Contact </h1>';
                    echo '<p> <i class = "fa fa-phone-square"> </i>'.$contact.'</p>';
                     echo '<p> <i class = "fa fa-envelope"> </i>'.$email.'</p>';
                     echo '<p> <i class = "fa fa-home"> </i><span">'. $address.'</span></p>';
                    //  echo '<p> <i class = "city"> </i> Delhi, India </p>';
                    if (!isset($_SESSION['email']) || $_SESSION['email'] != 'anirudhaadmin@gmail.com' )  {
                      echo ' ';
                  }  else {
                     
                        
                       
                          // echo '<a href="cart-add.php?id='.$id.'"name="add" value="add" class="btn btn-primary">Add to cart</a>';
                          echo '<center><a href="EditContactAdmin.php?id='.$id.'"name="edit" value="add" class="btn btn-success" target="_blank" style="margin-right:20px">Edit</a>';
                         //  echo '<a  href="serviceDelete.php?id='.$id.'"name="delete" value="add" class="btn btn-danger nocyrus">Delete</a></center>';
                          echo '<div id="result" style="text-align:left;"></div>';
                         
                          
                       
                      
                  }
               echo "</div>";
              

               
               
                     ?>
                
                      
                


         <div class ="col-md-3">
       
                    <h1> Follow Us On </h1>
                    <p> <a href = "https://www.facebook.com/Fitness-Club-101452842197073" class ="link-danger"><i class = "fa fa-facebook-official"> </i> Facebook </p></a>
                     <p> <a href = https://www.facebook.com/Fitness-Club-101452842197073><i class = "fa fa-youtube-play"> </i> Youtube </p></a>
                      <p> <a href = #><i class = "fa fa-linkedin"> </i> Linkedin </p></a>
                       <p> <a href= #><i class = "fa fa-twitter"> </i> Twitter </p></a>
                       
                </div>
            </div> 
            
            <hr>
            <p class ="copyright"> Copyright © Fitness Club. 2023. All rights reserved
        
    </section>