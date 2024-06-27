<?php
     

     echo '<div class="panel panel-default" id = "ADDP">';
     echo    '<div class="panel-heading  color">';
     echo      '<h3 id="prolab" style="color:orange">Added Product</h3>';
     echo '</div>';
     echo  '<div class="card panel-body down-body" style="background-color: green; position: relative; display: flex; flex-direction:column">';
     while ($row = $result->fetch_assoc()) {
         $id = $row['id'];
         $image = $row['image'];
         $name = $row['name'];
         $item_price = $row['price'];
       
       $sql2 = "SELECT email FROM users WHERE email = 'anirudhadmin@gmail.com'";
     $result2 = $con->query($sql2);
     $row2 = $result2->fetch_assoc();
     // echo $row2['email'];
     
     
         echo '<div style="margin-top:10px; background-color:red" class=" sec col-sm-4 home-feature">';
         echo '<div class="thumbnail">';
         echo '<div class="img-holder">';
         echo '<img class="pimg"src="uploads/' . $image .'"alt="Product Image: ' . $name . '">';
         echo '</div>';
         echo '<div class="caption">';
         echo '<h3>' . $name . '</h3>';
         echo '<p>Price: Rs. ' . number_format($item_price, 2) . '</p>';
     
         if (!isset($_SESSION['email'])) {
             echo '<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
         } else {
            
         if($_SESSION['email'] === 'anirudhadmin@gmail.com'){
             echo '<a href="productsEdit.php?id='.$id.'"name="edit" value="add" class="btn btn-block btn-success">Edit</a>';
             echo '<a  href="delete.php?id='.$id.'"name="delete" value="add" class="btn btn-block btn-danger nocyrus">Delete</a>';
     
         }
      
         else {
               if(check_if_added_to_cart($id)){
                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
     
               }
               else {
                 echo '<a href="cart-add.php?id='.$id.'"name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
               
                 echo '<div id="result" style="text-align:left;"></div>';
                
                 
               }
             
         }
     }
         echo '</div>';
         echo '</div>';
         echo '</div>';
        
        
     }
     echo '</div>';
     ?>