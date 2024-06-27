<?php
        include 'component/modal.php';
        include 'component/comon.php';

        ?>
   <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  href="index.php"><img src = to.png ></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
            
               
            if(isset($_SESSION['email']) && $_SESSION['email'] != 'anirudhadmin@gmail.com'){
                    ?>
                     <li><a href="index.php #about"> <span class = "fa fa-user"> </span>&nbsp;&nbsp;About Us</a></li>
                         <li> <a href = "products.php"><span class="fa fa-product-hunt"></span>&nbsp;&nbsp;Products</a></li>
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;Cart</a></li>
                        <li><a href = "settings.php"><span class = "fa fa-cog"></span>&nbsp;&nbsp;Settings</a></li>
                        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span>&nbsp;&nbsp; Logout</a></li>
                        <li><a href="contact_us.php"><span class="fa fa-phone"></span>&nbsp;&nbsp;Contact Us</a></li>
                        <li><div class = "admin">
                            <?php
                             $s = "SELECT name, email FROM users WHERE email = '{$_SESSION['email']}'";
                             $rs = $con->query($s);
                             $row = $rs->fetch_assoc();
                           
                             $name = $row['name'];
                             $email = $row['email'];
                             // print_r (explode(" ",$name));
                             $lastname = explode(" ", $name);
                            //    $ln = $lastname[1];
                            //    $lastName = strtoupper($ln[0])   ;
                               $firstalphabet = $name[0];
                             echo '<a href="#" ><span class=""></span><span class="circle" style="background-color:#777777; color:white">&nbsp;&nbsp; '.$firstalphabet.'</span></a>';
                            ?>
                            <div class = "admin-box" >
                            <?php
                           
                        
                       
                            echo '<p class="small" >'.$name.'</p>';
                            echo '<p class="small">'.$email.'</p>';
?>


                            </div>
                            </div>
                        </li>
    
               <?php }
                else {
                    ?>
                      <li><a href="index.php #about"><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp;About Us</a></li>
                    <li><a href="signup.php"> <span class = "glyphicon glyphicon-user"> </span>&nbsp;&nbsp;Sign Up</a></li>
                    
                   <li> <a href = "products.php"><span class="fa fa-product-hunt"></span>&nbsp;&nbsp;Products</a></li>
                  
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;Cart</a></li>
                    <li><a href="contact_us.php"><span class="fa fa-phone"></span>&nbsp;&nbsp;Contact Us</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="fa fa-sign-in">&nbsp;&nbsp;</span> Log in</a></li>
                    <li><a href="php"></a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>


