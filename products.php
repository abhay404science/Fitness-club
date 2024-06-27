<!--

/*session_start();
require_once ('component/CreateDb.php');
require_once ('component/component.php');
//create instance 
$database = new CreateDb('Productdb','producttb');


if (isset($_POST['add'])){
    
    ///print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){
        
        
        $item_array_id = array_column($_SESSION['cart'],"product_id");
      
     if(in_array($_POST['product_id'],$item_array_id)){
         
        // echo "<script> alert('product is already added..') </script>";
         echo "<script> window.location = index.php </script>" ;
     }else {
         
        $count = count($_SESSION['cart']);
        $item_array = array (
            
            'product_id' => $_POST['product_id']
            
        );
        $_SESSION['cart'][$count] = $item_array;
        //print_r($_SESSION['cart'][$count]);
       
     }
    }
    
    else {
        
        $item_array = array(
            
            'product_id' => $_POST['product_id']
            
        );
        $_SESSION['cart'][0] = $item_array;
       
        
    }
}*/-->
<?php
include "component/comon.php";
$sql = "SELECT * FROM items WHERE id >= 1";
$result = $con->query($sql);
// $cookie_name = "user";
// $cookie_value = rand(1000, 9999);;
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// if(!isset($_COOKIE[$cookie_name])) {
//     echo "Cookie named '" . $cookie_name . "' is not set!";
//   } else {
//     echo "Cookie '" . $cookie_name . "' is set!<br>";
//     echo "Value is: " . $_COOKIE[$cookie_name];
//   }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        

          <meta name="viewport" content="width=device-width, initial-scale=1">
           <script src="bootstrap/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  
  <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.css" />

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.js"></script>
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
         

   <link rel = "stylesheet" href = "css/style.css?v=<?php    echo time(); ?>">

        <!-- jQuery -->
        
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>

<script src="pslide/src/skdslider.min.js" type="text/javascript"></script>
<link href="pslide/src/skdslider.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#demo1').skdslider({
          slideSelector: '.slide',
          delay:5000,
          animationSpeed:2000,
          showNextPrev:true,
          showPlayButton:false,
          autoSlide:true,
          animationType:'fading'
        });

        
    });
</script>
</head>
<body>
    
    
   <?php
   
        include 'component/header.php';
        include 'component/check-if-added.php';
        include 'component/modal.php';
        ?>
   <!--   <section class ="banner"> 
           
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container container-fluid">
    
        <a class="navbar-brand" href="#"> <img src ="to.png "> </a>
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
 
  <span class="navbar-toggler-icon"></span>
    </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#top">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">ABOUT US </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">SERVICES</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
      </section>-->    
      <?php 
      
      $sqlo = "SELECT * FROM slide_image WHERE id >= 1";
$resu = $con->query($sqlo);

echo  "";


          echo '<div id="demo1" style="width:1690px; height:600px">';
          while ($roow = $resu->fetch_assoc()){
            $newImage = $roow['image'];
            $ID = $roow['id'];
            echo '<div class="slide">';
            echo '<img style="width:1690px; height:600px" src="./upSlideimage/'.$newImage.'" alt="">';
       
    
           echo '</div>';
          }
 
  
    echo '</div>';
   
  ?>

 
          
         <!-- <section id  ="tab">
              
              
              
              <div class = "container">
            <div class ="row">
            <div class ="col-md-4"> 
                <table class ="table table-hover">
                    <tr class = "tr">
<td align = center >
    <a href = product.html> 
        <img src = products/br5.jpg    height = 68></a>
</td>
   </tr>

   <tr class = tr>
       <td align = center><a href = venkys.html><img src = products/br4.png width = 100 height = 68></td></tr>

<tr class = tr>
    <td align = center>
        <a href = Bnutrition.html> <img src = products/br8.jpg ></a>
    </td>
</tr>


</table>
            </div>     
                
                
                </section>-->
               
      <!--------tableeeeeeeeeee2 ------>        
       
      <!--###################################################################################<div class ="container">
          <div class ="row text-center py-5">
              
              
       <?php /*
      $result = $database->getData();
                  while($row = mysqli_fetch_assoc($result)){
                      
                      component($row["product_name"],$row["product_image"],$row["product_price"],$row["id"]);
                      
                  }
       
       ?>
              
              
          </div> 
          
             
      </div>      
              
              
              
            <!--<php--> 
              <!--$result = $database->getData();
                  while($row = mysqli_fetch_assoc($result)){
                      
                      component($row["product_name"],$row["product_image"]);
                      
                  }*/
              
                ?>-->    
                       
             <!--<img src = products/amino-1900.png height = 150 width = 133> <font style = "vertical-align: top; font-weight: bold;color:#df2705;font-size:18px;margin-left: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AMINO 1900 </font> 
         
             <font style = "position: absolute; margin-top: 120px; margin-left: -160px;">  <a class = "btnfos">Add To Cart </a> </font>
              <font style = "position: absolute; margin-top: 120px; margin-left: -40px;">  <a class = "btnfoss" >View Details </a> </font>
              -->
          
                  
            <!-- <
            
             
             ?>
              <!--<img src = products/bcaa-2000.png height = 150 width = 133> <font style = "vertical-align: top; font-weight: bold;color:#df2705;font-size:18px;margin-left: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BCAA 2000 </font> 
               <font style = "position: absolute; margin-top: 120px; margin-left: -160px;">  <a class = "btnfos">Add To Cart </a> </font>
              
                      <font style = "position: absolute; margin-top: 120px; margin-left: -40px;">  <a class = "btnfoss" >View Details </a> </font>
          -->
         <!-- </td>
               
             
      </tr>
      <tr>
        <td>



            <img src = products/carbo-plus.png height = 150 width = 133><font style = "vertical-align: top; font-weight: bold;color:#df2705;font-size:18px;margin-left: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CARBO PLUS </font> 
          
              <font style = "position: absolute; margin-top: 120px; margin-left: -160px;">  <a class = "btnfos">Add To Cart </a> </font>
              <font style = "position: absolute; margin-top: 120px; margin-left: -40px;">  <a class = "btnfoss" >View Details </a> </font>
        
        
        </td>
        <td>
            <img src = products/chromium-picolinate.png height = 150 width = 133><font style = "vertical-align: top; font-weight: bold;margin-left: 105px;font-size:18px;color:#df2705; margin-right: -20px;">CHROMIUM</font>
               <font style = "position: absolute; margin-top: 120px; margin-left: -165px;">  <a class = "btnfos">Add To Cart </a> </font>
              <font style = "position: absolute; margin-top: 120px; margin-left: -40px;">  <a class = "btnfoss" >View Details </a> </font>
        </td>
       
      </tr>
      <tr>
        <td><img src = products/creatine-powder.png height = 150 width = 133><font style = "vertical-align: top; font-weight: bold;color:#df2705;font-size:18px;margin-left: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CREATINE </font> 
          
              <font style = "position: absolute; margin-top: 120px; margin-left: -160px;">  <a class = "btnfos">Add To Cart </a> </font>
              <font style = "position: absolute; margin-top: 120px; margin-left: -40px;">  <a class = "btnfoss" >View Details </a> </font>
          </td>
        <td><img src = products/18228ghmax.jpg height = 150 width = 133>
        
        <font style = "vertical-align: top; font-weight: bold;margin-left: 105px;font-size:18px;color:#df2705; margin-right: -20px;">GH MAX</font>
               <font style = "position: absolute; margin-top: 120px; margin-left: -140px;">  <a class = "btnfos">Add To Cart </a> </font>
              <font style = "position: absolute; margin-top: 120px; margin-left: -20px;">  <a class = "btnfoss" >View Details </a> </font>
        
        
        
        </td>
        
      </tr>-->
    <!--</tbody>
  </table>
</div>-->
            <!-- <tr>
             <tbody>
                 
             <td align ="center">
                 <td> 
                     
                     <a href = http://gymfoodnutrition.in/product1.php?id=1#shf>
                         <img src = products/amino-1900.png height = 150 width = 133></a> 
                 
                 <strong>AMINO 1900 </strong>
                     
                 
                 </td>
         
<td> 
    
             
    
    
    <img src = products/bcaa-2000.png height = 150 width = 133> </div>

            <strong> AMINO 1900 </strong>
            </td>
            </tr>
            </tbody>
</table>  
            <!--      <tr>
                 
             <td align ="center">
                 <td> 
                     
                     <a href = http://gymfoodnutrition.in/product1.php?id=1#shf>
                         <img src = products/carbo-plus.png .png height = 150 width = 133></a> 
                 </td>

<td> 
    <!--
    <img src = products/chromium-picolinate.png height = 150 width = 133>
</td>

             </tr>
         
              <tr>
                 
             <td align ="center">
                 <td> 
                     
                     <a href = http://gymfoodnutrition.in/product1.php?id=1#shf>
                         <img src = products/creatine-powder.png height = 150 width = 133></a> 
                 </td>

<td> 
    <img src = products/18228ghmax.jpg height = 150 width = 133>
</td>

             </tr>     
              
          
              
              
              
           
          

</section>
---->


    



  <div class="row" style = "padding-top: 50px;";>
            <div class="col-sm-3" >
               <div class="panel-group">
               
               <div class="panel panel-default">
                    <div class="panel-heading color">
                        <h3 style="color:orange"> Products Brands</h3>
                    </div>
                    <div class="panel-body">
                       <div class="rmvb">
                        <p><a href="#carbo"><span style="color:black">CARBO</span></a></p>
                           <p><a href="#venkys"><span style="color:black">VENKYS</span></a></p>
                           <p><a href="#Bnutrition"><span style="color:black">BRITISH NUTRITION</span></a></p>
                           <p><a href="#Matrix"><span style="color:black">MATRIX</span></a></p>
                            <p><a href="#prolab"><span style="color:black">PROLAB</span></a></p>
                        
                        </div>
                    </div>
                </div>
               <br>
                
                </div>
            </div>
           
            <div class="col-sm-9 text-center">
                <div class="panel-group">
                  <!----------------------------------------------------carbo----------------------------------->
                   <!-- <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id = carbo style="color:orange"><img src = br5.jpg alt = universal></h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="products/amino-1900.png" alt="amino" >
                                    <div class="caption">
                                        <h3>AMINO 1200</h3>
                                        <p>Price: Rs. 1000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="products/bcaa-2000.png" alt="bcaa">
                                    <div class="caption">
                                        <h3>BCAA 2000</h3>
                                            <p>Price: Rs. 2500.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="products/carbo-plus.png" alt="">
                                <div class="caption">
                                    <h3>CARBO PLUS</h3>
                                        <p>Price: Rs. ₹750 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="products/chromium-picolinate.png" alt="chromium">
                                <div class="caption">
                                    <h3>CHROMIUM</h3>
                                        <p>Price: Rs. 650.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                   
                   <!----------------------------------------------------venkys----------------------------------->
                <!-- <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="venkys" style="color:orange"><img src = products/br4.png>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="products/13167whey.jpg" height = 89 width = 149 alt="Venkys">
                                    <div class="caption">
                                        <h3>WHEY</h3>
                                        <p>Price: Rs. 2000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                               <img src="products/22094creatine-plus.jpg" height = 89 width = 149 alt="Venkys">
                                    <div class="caption">
                                        <h3>CREATINE PLUS</h3>
                                            <p>Price: Rs. 1100.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="products/19720carbo-ex.jpg" height = 89 width = 149 alt="Venkys">
                                <div class="caption">
                                    <h3>CARBO EX</h3>
                                        <p>Price: Rs. 2000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="products/1203creatine.jpg" height = 89 width = 149 alt="Venkys">
                                <div class="caption">
                                    <h3>CREATINE</h3>
                                        <p>Price: Rs. 2200.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="products/mass-gainer.jpg" height = 89 width = 149 alt="Venkys">
                                <div class="caption">
                                    <h3>MASS GAINER</h3>
                                        <p>Price: Rs. 1600.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                    
                   
                   <!----------------------------------------------------Bnutrition----------------------------------->
                <!-- <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="Bnutrition" style="color:orange"><img src = products/br8.jpg></h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                               <img src="products/x-tra-whey.png" height = 89 width = 149 alt="Venkys">
                                    <div class="caption">
                                        <h3> XTRA WHEY PROTEIN</h3>
                                        <p>Price: Rs. 3000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div> 
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="products/x-tra-mass.png" height = 89 width = 149 alt="Venkys">
                                    <div class="caption">
                                        <h3>EXTRA MASS</h3>
                                            <p>Price: Rs. 250000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                           <img src="products/30768slim-life.png" height = 89 width = 149 alt="Venkys">
                                <div class="caption">
                                    <h3>SLIM LIFE</h3>
                                        <p>Price: Rs. 1400.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="products/power-protein.png" height = 89 width = 149 alt="Venkys">
                                <div class="caption">
                                    <h3>  POWER PROTEIN</h3>
                                        <p>Price: Rs. 2500.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                   
                  <!------------------------------------------venkys------------ -->
                <!-- <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="Matrix" style="color:orange"><img src = products/br7.jpg></h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="products/9434megamass.png"   alt="Venkys">
                                    <div class="caption">
                                        <h3>CLASSIC MASS</h3>
                                        <p>Price: Rs. 3600.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="products/27527megagainer.png"  alt="Venkys">
                                    <div class="caption">
                                        <h3>MEGA GAINER</h3>
                                            <p>Price: Rs. 1400.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="products/8864glucobolics.png" >
                                <div class="caption">
                                    <h3>GLUCOBOLICS</h3>
                                        <p>Price: Rs. 1100.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="products/12195vitapro.png" >
                                <div class="caption">
                                    <h3>VITA PRO</h3>
                                        <p>Price: Rs. 1600.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(17)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                   
                
                   <!-- <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="prolab" style="color:orange"><img src = products/prolab.jpg></h3>
                        </div>
                    
                    <div class="panel-body"> -->
                        <!-- <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                              <img src="products/glutaminePowde1r.jpg" height = 98px width = 85px alt="Venkys">
                                
                                    <div class="caption">
                                        <h3>GLUTAMINE POWDER</h3>
                                        <p>Price: Rs. 3600.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(18)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div> -->
                    
                        <!-- <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                              <img src="products/aminoGelCaps.jpg"  height = 98px width = 85px alt="Venkys">
                                    <div class="caption">
                                        <h3>AMINO CAPS</h3>
                                            <p>Price: Rs. 1600.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(19)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php 
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div> -->
                    
                    <!-- <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                             <img src="products/betaAlanineExtreme1.jpg" height = 98px width = 85px alt="Venkys">
                                <div class="caption">
                                    <h3>ALANTINE ETREME</h3>
                                        <p>Price: Rs. 2500.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(20)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                   
                    </div> -->
                    <div id="result" style="text-align:left;"></div>
                    <!------------- -->
                      
                    <?php
     

echo '<div class="panel panel-default" id = "ADDP">';
echo    '<div class="panel-heading  color">';
echo      '<h3 id="prolab" style="color:orange">Product</h3>';
echo '</div>';
echo  '<div class="card  panel-body down-body" >';

while ($row = $result->fetch_assoc()) {
    
    $id = $row['id'];
    $image = $row['image'];
    $name = $row['name'];
    $item_price = $row['price'];
  
  $sql2 = "SELECT email FROM users WHERE email = 'anirudhadmin@gmail.com'";
$result2 = $con->query($sql2);
$row2 = $result2->fetch_assoc();
// echo $row2['email'];


    echo '<div style="margin-top:10px;" class="col-sm-4 home-feature">';
    echo '<div class="thumbnail">';
    echo '<div class="img-holder">';
    echo '<img class="pimg"src="uploads/' . $image .'"alt="Product Image: ' . $name . '">';
    echo '</div>';
    echo '<div class="caption">';
    echo '<h3>' . $name . '</h3>';
    echo '<p>Price: Rs. ' . number_format($item_price, 2) . '</p>';

    if (!isset($_SESSION['email'])) {
        if (isset($_SESSION['item_d'])) {
            $item_id = $_SESSION['item_d'];
           
        
        }
        if(check_if_added_to_cart($id)){
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';

          }
          else {
        echo '<a href="cart-add.php?id='.$id.'"name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
          }
        
        // echo '<p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
    } else {
       
    if($_SESSION['email'] === 'anirudhaadmin@gmail.com'){
        echo '<a href="EditItemAdmin.php?id='.$id.'"name="edit" value="add" class="btn btn-block btn-success">Edit</a>';
        // echo '<a  href="delete.php?id='.$id.'"name="delete" value="add" class="btn btn-block btn-danger nocyrus">Delete</a>';

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
<script>
                  const btn = document.querySelector('#btn');

function showNotification (){
    console.log("hello");
  new Notify ({
    status: 'success',
    title: 'Added',
    text: 'Added to cart',
    effect: 'fade',
    speed: 300,
    customClass: '',
    customIcon: '<i class="fa fa-shopping-cart"></i>',
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
        echo '<script>showNotification()</script>';
    }
    ?>
<!-- <script>
    $(document).ready(function () {
        $('.nocyrus').click(function (e) { // Change to 'click' instead of 'submit'
            e.preventDefault();
            var formData = new FormData(this);
            console.log("Hello");
            $.ajax({
                type: 'POST',
                url: 'delete.php',
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

                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php include 'component/footer.php'; ?>



    
    
    
</body>
</html>
