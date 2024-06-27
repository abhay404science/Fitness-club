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
include "component/comon.php"

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        

          <meta name="viewport" content="width=device-width, initial-scale=1">
           <script src="bootstrap/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  
  <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
         

   <link rel = "stylesheet" href = "style.css?v=<?php    echo time(); ?>">

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
    
    
    <?php require_once('component/header.php')
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
          <div id="demo1">
      <div class="slide">
          <img src="pslide/slides/1.jpg" alt=""/>
        <!--Slider Description example-->
         <div class="slide-desc">
           
        </div>
     </div>
    <div class="slide">
        <img src="pslide/slides/2.jpg" alt=""/>
       <div class="slide-desc">
0        
      </div>
   </div>
   <div class="slide">
       <img src="pslide/slides/6.jpg" alt=""/>
      <!--NO Description Here-->
   </div>
  
    
   </div>
          
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


    



  <div class="row">
            <div class="col-sm-3" >
               <div class="panel-group">
               
               <div class="panel panel-default">
                    <div class="panel-heading color">
                        <h3 style="color:orange">Brands</h3>
                    </div>
                    <div class="panel-body">
                       <div class="rmvb">
                           <p><a href="#ios"><span style="color:black">APPLE</span></a></p>
                           <p><a href="#samsung"><span style="color:black">SAMSUNG</span></a></p>
                           <p><a href="#oneplus"><span style="color:black">ONEPLUS</span></a></p>
                            <p><a href="#xiaomi"><span style="color:black">XIAOMI</span></a></p>
                        </div>
                    </div>
                </div>
               <br>
                <div class="panel panel-default">
                    <div class="panel-heading  color">
                        <h3 style="color:orange">Operating System</h3>
                    </div>
                    
                    <div class="panel-body">
                       <div class="rmvb">
                            <p><a href="#samsung"><span style="color:black">ANDROID</span></a></p>
                            <p><a href="#ios"><span style="color:black">IOS</span></a></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            
            
            <div class="col-sm-9 text-center">
                <div class="panel-group">
                  <!----------------------------------------------------featured phone----------------------------------->
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:orange">Featured Mobile</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/iphonex.png" alt="iphone x" >
                                    <div class="caption">
                                        <h3>iPhone X</h3>
                                        <p>Price: Rs. 36000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
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
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/samsungs8.png" alt="samsung s8 plus">
                                    <div class="caption">
                                        <h3>Galaxy S8 PLUS</h3>
                                            <p>Price: Rs. 36000.00 </p>
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
                            <img src="./img/op5t.png" alt="oneplus 5t">
                                <div class="caption">
                                    <h3>OnePlus 5T</h3>
                                        <p>Price: Rs. 36000.00 </p>
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
                            <img src="./img/mimix2.png" alt="mi mix 2">
                                <div class="caption">
                                    <h3>Mi Mix 2</h3>
                                        <p>Price: Rs. 36000.00 </p>
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
                    </div>
                </div>
                   
                   <!----------------------------------------------------iphone----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="ios" style="color:orange">apple</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/iphonex.png" alt="iphone x" >
                                    <div class="caption">
                                        <h3>iPhone X</h3>
                                        <p>Price: Rs. 88000.00 </p>
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
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/ipnone7plus.png" alt="ipnone 7 plus">
                                    <div class="caption">
                                        <h3>iPhone 7 PLUS</h3>
                                            <p>Price: Rs. 69000.00 </p>
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
                            <img src="./img/iphone7.png" alt="iphone 7">
                                <div class="caption">
                                    <h3>iPhone 7</h3>
                                        <p>Price: Rs. 60000.00 </p>
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
                            <img src="./img/iphone6splus.png" alt="iphone 6s plus">
                                <div class="caption">
                                    <h3>iPhone 6S PLUS</h3>
                                        <p>Price: Rs. 40000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
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
                    </div>
                </div>
                   
                   <!----------------------------------------------------samsung----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="samsung" style="color:orange">samsung</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/samsungs8.png" alt="galaxy s8 plus" >
                                    <div class="caption">
                                        <h3>Samsung Galaxy S8 PLUS</h3>
                                        <p>Price: Rs. 65000.00 </p>
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
                                <img src="./img/samsungnote8plus.png" alt="note 8 plus">
                                    <div class="caption">
                                        <h3>Samsung Galaxy Note 8 PLUS</h3>
                                            <p>Price: Rs. 60000.00 </p>
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
                            <img src="./img/samsungs7edge.png" alt="galaxy s7 edge">
                                <div class="caption">
                                    <h3>Samsung Galaxy S7 EDGE</h3>
                                        <p>Price: Rs. 45000.00 </p>
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
                            <img src="./img/samsunga8.png" alt="galaxy a8">
                                <div class="caption">
                                    <h3>Samsung Galaxy A8</h3>
                                        <p>Price: Rs. 35000.00 </p>
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
                    </div>
                </div>
                   
                   <!----------------------------------------------------oneplus----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="oneplus" style="color:orange">oneplus</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/op5t.png" alt="oneplus 5t" >
                                    <div class="caption">
                                        <h3>OnePlus 5T</h3>
                                        <p>Price: Rs. 36000.00 </p>
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
                                <img src="./img/op5.png" alt="oneplus 5">
                                    <div class="caption">
                                        <h3>OnePlus 5</h3>
                                            <p>Price: Rs. 34000.00 </p>
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
                            <img src="./img/op3t.png" alt="oneplus 3t">
                                <div class="caption">
                                    <h3>OnePlus 3T</h3>
                                        <p>Price: Rs. 31000.00 </p>
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
                            <img src="./img/op3.png" alt="oneplus 3">
                                <div class="caption">
                                    <h3>OnePlus 3</h3>
                                        <p>Price: Rs. 28000.00 </p>
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
                </div>
                   
                   <!----------------------------------------------------xiaomi----------------------------------->
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="xiaomi" style="color:orange">xiaomi</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/mimix2.png" alt="mi mix2" >
                                    <div class="caption">
                                        <h3>Mi Mix 2</h3>
                                        <p>Price: Rs. 36000.00 </p>
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
                                <img src="./img/mimax2.png" alt="mi max 2">
                                    <div class="caption">
                                        <h3>Mi Max 2</h3>
                                            <p>Price: Rs. 16000.00 </p>
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
                            <img src="./img/mia1.png" alt="mi a1">
                                <div class="caption">
                                    <h3>Mi A1</h3>
                                        <p>Price: Rs. 15000.00 </p>
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
                            <img src="./img/redminote4.png" alt="redmi note 4">
                                <div class="caption">
                                    <h3>Redmi Note 4</h3>
                                        <p>Price: Rs. 13000.00 </p>
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
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>



    
    
    
</body>
</html>
