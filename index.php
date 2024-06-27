<?php
include "component/comon.php"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        

          <meta name="viewport" content="width=device-width, initial-scale=1">
           <script src="bootstrap/js/jquery-3.6.0.min.js" type="text/javascript"></script>
           <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
           <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">

  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  
  <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
         

   <link rel = "stylesheet" href = "style.css">

        <!-- jQuery -->
        
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
    </head>
  
   
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<body>
    
  
                                                             
<section> 
    <img class="banner" src="Fitness_Men_462721_1920x1080.jpg" alt="">

    <?php
$sql = "SELECT img FROM baneer_image WHERE id = 9";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $image = $row['img'];
    echo '<img class="banner" src="upbanner/' . $image . '" alt="">';
}
?>
</section>

        
            <!-- <img class ="banner" src="picture.jpg" alt=""> -->

           
<?php
        include 'component/head.php';
        ?>
            <div class ="contain">
            <div class ="quote wow fadeInLeft"> Wake up </div> 
            <div class ="quote2 wow fadeInRight"> & Rise</div> </div>
        </section>
    
    <!-----welcome--->
    <section id ="welcome">
        
    <!-- <script>
    var category = 'fitness'
    var a;
$.ajax({
    method: 'GET',
    url: 'https://api.api-ninjas.com/v1/quotes?category=' + category,
    headers: { 'X-Api-Key': '4ki7UnsHY3amMQ7A7ou18w==ZIIURgd5fluNzb5v'},
    contentType: 'application/json',
    success: function(result) {
    a = result;
       
    for (var i = 0; i < result.length; i++) {
            var quote = result[i].quote; // Access the 'quote' property
            var author = result[i].author; // Access the 'author' property

            // Do something with the quote and author
            console.log('Quote: ' + quote);
            console.log('Author: ' + author);
            document.getElementById("quote").innerHTML = quote;
            document.getElementById("quoteContainer").style.visibility = "visible";
            // document.getElementById("quoteContainer").style.animation = "fadeInUp";
            document.getElementById("quoteContainer").classList.add("fadeInUp");
        }
    },
    error: function ajaxError(jqXHR) {
        console.error('Error: ', jqXHR.responseText);
    }
});

console.log(quote+"hrll");

    </script> -->

    <div class="container">
    <div class="welcome text-center wow fadeInUp" id="quoteContainer">
        <h1 id="quote">
            
            <?php
            $sql = "SELECT quote FROM baneer_image WHERE id = 9";
            $result = $con->query($sql);

            if ($result && $result->num_rows > 0) {
                
                $row = $result->fetch_assoc();
                $quote = $row['quote'];
                if (empty($quote)) {
                    echo '<h1>Exercise is a celebration of what your body can do. Not a punishment for what you ate</h1>';
                } else {
                    echo '<h1>' . $quote . '</h1>';
                }
            } else if ($result && $result->num_rows == 0) {
                echo '<h1>Exercise is a celebration of what your body can do. Not a punishment for what you ate</h1>';
            }
            ?>
                       
            
            </h1>
                <button type ="submit" class ="btn home-btn" onclick = "myFunction()">  Subscribe </button>
         
              
            
            </div>
            </div>
            <script>
                    function myFunction() {
                    
                        alert("Hello! you have successfully subscribe, Now you will recieve updates");
                        
                        
                    }
            </script>
        
    </section>
    
    <!------------ABOUT------------------>
   <section id  ="about">
      
      <div class = "container">
        <div class = "row">
          <div class = "col-md-6 text-center wow fadeInLeft "> 
       
                   <img src = "runn.png" height = 500 width = 600px style = "margin-left:-300px;margin-top:-80px;"> 
                    </div>
                    <div class ="col-md-6 text-justify wow fadeInRight">
                <h3> FITNESS CLUB </h3>
                <p> Health and fitness are two things that we must take care of to lead a good life
                    and this Pandemic has shown us the proof, That staying fit has a lot of advantage.
                    So our FITNESS CLUB has established so we can make People fit healthy and muscular,
                    Nowadays everyone just want body but they dont know the correct procedure, So here we come to provide correct procedure and 
                    gives you tips to stay healthy life.
                    <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp This <b>Fitness Club</b> established on the year 2018 APRIL 30<sup>th </sup> 
                    and in few years we have made this FITNESS CLUB on the top and we have given 30,000+
                     people a healthy fit and muscular body.
                     <br> &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp We give our own trusty products to our customers so they don,t feel uneasy regarding the products. 
            </div></p></div>
             <br>   <div class ="col-md-6 text-justify wow fadeInLeft">
                <?php
                $cql  = "SELECT * FROM about where id = 1";
                $result2 = $con->query($cql);
                $row2 = $result2->fetch_assoc();
                $id = $row2['id'];
                $path = $row2['query'];
                $query = $row2['qid'];
                $heading =  $row2['heading'];
                $detail =  $row2['caption'];
                $link = $row2['Ylink'];
                echo ' <h3> '.$heading.' </h3>';
                echo '<p>'.$detail.'</p>';
                echo '</div>';
                echo '<div class ="col-md-6 wow fadeInRight">';
                  echo  '<div class  = "embed-responsive embed-responsive-16by9">';
                //   https://youtu.be/FH9xdDjpWP4?si=slQ2NDA2lH-CmoWG
                //   https://www.youtube.com/embed/FH9xdDjpWP4?si=slQ2NDA2lH-CmoWG
                    echo   '<iframe class = "embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/'.$path.'?'.$query.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

                                         
                    echo '</div>'; 
                 
              
                ?>
               
           
            <!-- <p> Work hard and follow the instruction and you will see the output yourself, Everything is possible just what we have to do is put some efforts on it and make it our own.
                Fitness is not make you batter than someone else. but it's about being better than than you used to be 
                and this pandemic has thought us.
                Exercise is a celebration of what your body can do. 
                Yoga is most important part of Fit body and and a healthy life we have specialized tutor for yoga and provide you some simple daily life fitness tips. 
                </p> -->
         
                
                  </div></div>
                  <?php 
                   
                   $sql5 = "SELECT email FROM users WHERE email = 'anirudhaadmin@gmail.com'";
                 $result5 = $con->query($sql5);
                 $row5 = $result5->fetch_assoc();
                  
                 if (!isset($_SESSION['email']) || $_SESSION['email'] != 'anirudhaadmin@gmail.com' )  {
                    echo ' ';
                }  else {
                   
                      
                     
                        // echoelse  '<a href="cart-add.php?id='.$id.'"name="add" value="add" class="btn btn-primary">Add to cart</a>';
                        echo '<center><a href="aboutEdit.php?id='.$id.'"name="edit" value="add" class="btn btn-success" style="margin-right:20px">Edit</a>';
                        // echo '<a  href="serviceDelete.php?id='.$id.'"name="delete" value="add" class="btn btn-danger nocyrus">Delete</a></center>';
                        echo '<div id="result" style="text-align:left;"></div>';
                       
                        
                     
                    
                }
                ?>
                    </section>
    
    
    
    <!-----------------------service------------------------------------->
    <section id ="services" style = "display:flex">
        <div class ="container service">

            <div class ="row wow fadeInUp service-cont">
           
             <?php 
                  $sqll = "SELECT * FROM service where id>=5";
               $res = $con->query($sqll);
    
                   while ($row = $res->fetch_assoc()) {
                    echo ' <div class="col-md-4 service-cont2">';
                     $id = $row['id'];
                 $image = $row['img'];
                       $name = $row['title'];
                             $description = $row['description'];

                                 ?>
                                  <center>
                                  <img class="img-fluid wow fadeInRight delay-1s" src="./upSection/<?php echo $image; ?>">
                      </center>
                    <center>
                     <h4 class="wow fadeInRight delay-2s"><?php echo $name; ?></h4>
                  </center>
                  <p><?php echo $description; ?></p>

                <?php
                 if (!isset($_SESSION['email']) || $_SESSION['email'] != 'anirudhaadmin@gmail.com' )  {
                    echo ' ';
                }  else {
                   
                      
                     
                        // echoelse  '<a href="cart-add.php?id='.$id.'"name="add" value="add" class="btn btn-primary">Add to cart</a>';
                        echo '<center><a href="EditServiceAdmin.php?id='.$id.'"name="edit" value="add" class="btn btn-success" target="_blank" style="margin-right:20px">Edit</a>';
                        // echo '<a  href="serviceDelete.php?id='.$id.'"name="delete" value="add" class="btn btn-danger nocyrus">Delete</a></center>';
                        echo '<div id="result" style="text-align:left;"></div>';
                       
                        
                     
                    
                }
                echo ' </div>';
               

                }
                ?>  
          
        
                
                
               
            </div>
        </div>
    </section>
    
    <!---------features-------->
    <section id ="features">
        
        <div class ="container">
                    <div class ="row">
                        <div class = "col-md-6 wow fadeInLeft">
                <img src ="tt.png" class ="img-fluid">
                            
                            
                            
                </div>
        <div class ="col-md-6 wow fadeInDown">
            <div class ="feature-box">
                <div class ="feature-left"> 
                
                    <i class ="fa fa-trophy"> </i>
                
                </div>
                <div class ="feature-right">
                    
                    <h4> Certified Trainer </h4>
                    <p> We have best certified trainer and we also provide certificate after training
                </div>
        
                    </div>
        
              <div class ="feature-box">
                <div class ="feature-left"> 
                
                    <i class ="fa fa-heartbeat"> </i>
                
                </div>
                <div class ="feature-right">
                    
                    <h4> Free Consultant </h4>
                    <p> We provide fred consultant to our new and subscribed users 
                </div>
        
                    </div>
            
            
              <div class ="feature-box">
                <div class ="feature-left"> 
                
                    <i class ="fa fa-clock-o"> </i>
                
                </div>
                <div class ="feature-right">
                    
                    <h4> Flexible Time </h4>
                    <p> We provide flexible time to our users so that they don't need to worry about time. 
                </div>
        
                    </div>
            
            
            
        </div>
        
                    </div>
        </div>
        
        
    </section>
    
    <!-------------------testimonials----------->
    <section id ="testimonals">
        <div class =" container">
            <h1 class ="text-center"> USERS </h1>
            <div class ="row test-box" style = "display:flex;  flex-wrap: wrap;">
               
                <?php 
                  $sqll = "SELECT * FROM testimon where id>=2";
               $res = $con->query($sqll);
    
                   while ($row = $res->fetch_assoc()) {
                    echo '  <div class="col-md-4 wow fadeInLeft delay-1s">';
                     $id = $row['id'];
                 $image = $row['photo'];
                       $name = $row['user_name'];
                             $description = $row['caption'];
 
                                 ?>
                <p class ="review"> <?php echo $description ?> </br>
                    <br>   <i class ="fa fa-twitter"> </i> <span><a href ="https://twitter.com/nikhilc01" target = "_blank" class ="link">@<?php echo $name ?></a> </span>
                    
                    </p>
                    <img src = "./uptestiimg/<?php echo $image ?>">
                    <?php
                 if (!isset($_SESSION['email']) || $_SESSION['email'] != 'anirudhaadmin@gmail.com' )  {
                    echo ' ';
                } 
               
                else {
                   
                      
                     
                        // echo '<a href="cart-add.php?id='.$id.'"name="add" value="add" class="btn btn-primary">Add to cart</a>';
                        echo '<center><a href="testimonalEdit.php?id='.$id.'"name="edit" value="add" class="btn btn-success" target="_blank" style="margin-right:20px">Edit</a>';
                        echo '<a  href="testimonalDelete.php?id='.$id.'"name="delete" value="add" class="btn btn-danger nocyrus">Delete</a></center>';
                        echo '<div id="result" style="text-align:left;"></div>';
                       
                        
                     
                    
                }
                
               
                echo '</div>';
                }
             
                ?> 
        
                   
                  
                
                <!-- <div class="col-md-4 middle wow fadeInUp"> 
                <p class ="review"> I am so grateful that this type of club exist, They help us through out our training even in lockdown via ~ Online mood And help me maintain my health and Immune system in this pandemic which help me to fight with this COVID-19 virus.  </br>
                    <br>   <i class ="fa fa-twitter"> </i> <span> <a href ="https://twitter.com/parveensolank" target = "_blank" class ="link" > @parveensolank </a> </span>
                    
                    </p>
                    <img src ="user2.jfif">
            </div>
                
                
                
                
                <div class="col-md-4 wow fadeInRight delay-1s"> 
                <p class ="review"> I am so grateful that this type of club exist, They help us through out our training even in lockdown via ~ Online mood And help me maintain my health and Immune system in this pandemic which help me to fight with this COVID-19 virus. </br>
                    <br>   <i class ="fa fa-twitter"> </i> <span> <a href ="https://twitter.com/search?q=parveen%20solanki&src=typed_query" target = "_blank" class ="link" > @MrOlympia08 </a> </span>
                    
                    </p>
                    <img src ="user3.jpg">
            </div>
                 -->
            </div>   
                
                
        
    
    </section>
    
    <!------------------subscribe------------>






  <section id ="subscribe">
     <div class="container">
         <div class ="subscribe text-center wow fadeInUp delay-1s">
             
             
             <h3> Enroll For Free TRaining NOw ! </h3>
             <p> Subscribe our Newsletter and Get 1 week consolation free from our top advisor and 2 days for gym trial to check the environment. 
             
                 <div class ="input-group" >
                    <form id="mf" class="con" name="news" method="post" action = "news.php">
                     <input type="email" name = "email"class ="form-control" placeholder ="Email id"  required="required">
             
            <div class = input-group-append> 

<button type = "submit"  name = "submit" class = "input-group-text"> Subscribe</button>




            </div>
    
                 </div>
         </div>
     </div>
     </section>
    
      
    
    <!-----------------footer----------------------->
    <?php 

require_once('component/footer.php')
    ?>
    
    
    <!----scrool------>
    
    <script src ="smooth-scroll.js"> </script>
    <script>
  var scroll = new SmoothScroll('a[href*="#"]');
</script>
    
<!-------------------Animation----------------->    
<script src ="wow.min.js"> </script>
<script>
    
    new WOW().init();
</script>    
    
    </body>
    
    </html>