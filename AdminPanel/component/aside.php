<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="AdminPanel/index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FITNESSCLUB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php 
            $sql = "SELECT * FROM users WHERE email = '{$_SESSION['email']}'";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
            $image = $row['dpimage'];
            $name  = $row['name'];
            $firstLetter = substr($name, 0, 1);
            if($image ==""){
             
              echo '<div class="img-circle elevation-2" style="width:30px;height:25px;text-align:center;translate:0 15px;color:white;background-color:black">'.$firstLetter.'</div>';
              // echo '<img style= "translate:0 10px"src="upProfile/'.$image.'" class="img-circle elevation-2" alt="User Image">';
            }
else{

  echo '<img style= "translate:0 10px"src="upProfile/'.$image.'" class="img-circle elevation-2" alt="User Image">';
}
         
          ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php 
          
          require("component/comon.php");

          $sql = "SELECT name, email FROM users WHERE email = '{$_SESSION['email']}'";
          $result = $con->query($sql);
          $row = $result->fetch_assoc();
          $name = $row['name'];
          $email = $row['email'];
          echo $name;
       
          ?><br>
          <?php echo '<span style="font-size:13px">' . $email. '</span>';
       ?>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="AdminPanel/index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class=""></i>
              </p>
            </a>
           
          </li>
          <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
          
              
             
         
             
          <li class="nav-item">
            <a href="./ProfileAdmin_edit.php" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
               Profile
              
              </p>
            </a>
          </li>
              
          <li class="nav-item"  >
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul id ="dore" class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="./addAdminInxBanner.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banners</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="./addSection.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Services</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="./slideBanner.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Slide Image</p>
                </a>
              </li> -->
             
              <li class="nav-item">
                <a href="./EditItemAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./EditAboutAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./EditServiceAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./EditSlideAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slide Image</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./EditContactAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./EditTestimonalAdmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonial</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="./orderTrans.php" class="nav-link">
            <i class='nav-icon fas fa-dolly'></i>
              <p>
               Order Transaction
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./AdminSetting.php" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
               Setting
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./contactList.php" class="nav-link">
              <i class="nav-icon fas fa-phone-alt"></i>
              <p>
               Contacted List
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./AdminLogout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
              Log Out
              
              </p>
            </a>
          </li>
        
        
         
        
            
             
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <script>
//       function show() {
//         var sidebarLinks = document.querySelectorAll('.nav-sidebar a.nav-link');
//         var check = document.getElementById("dore");
//           var flag = true;
//           if(flag == true){
//    console.log("clicked");
//    console.log(sidebarLinks);
//    for (let i = 2; i < sidebarLinks.length; i++) {
//     console.log(sidebarLinks[i]);
// }
//   //  check.style.display = "block";
//           }
         
   
                 
//         }
//         document.getElementById('myButton').addEventListener('click', show);
    console.log("ff");

var currentPageUrl = window.location.pathname;
console.log(currentPageUrl);
var pageName = currentPageUrl.split('/').pop();
console.log(pageName);

var sidebarLinks = document.querySelectorAll('.nav-sidebar a.nav-link');
console.log(sidebarLinks)

var dore = document.getElementById("dore");
sidebarLinks.forEach(function(link) {
    var linkHref = link.getAttribute('href');
console.log(linkHref);
    if (linkHref === "./"+pageName) {
        link.classList.add('active');
        // link.style.color = "red";
     if(linkHref === "./addAdminInxBanner.php" ||    linkHref  === "./EditItemAdmin.php" || linkHref === "./EditAboutAdmin.php" || linkHref === "./EditServiceAdmin.php" || linkHref === "./EditSlideAdmin.php" || linkHref === "./EditContactAdmin.php" || linkHref === "./EditTestimonalAdmin.php"  ){

      console.log("arnold");
      dore.style.display = "block";
     }
     
    }

});
</script>