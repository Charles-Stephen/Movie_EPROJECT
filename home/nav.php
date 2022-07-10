<div class='preloader'>
 <div class='preloader-lod'></div>
 <div class='preloader-lod'></div>
 <div class='preloader-lod'></div>
 <div class='preloader-loding'>Movie Star…</div>
  <div class='large-square'></div>
</div>
<!-- HEADER SECTION -->
<header class="header-section header-2">
 <!-- HEADER MENU -->
 <nav class="navbar navbar-default bootsnav navbar-sticky">
     <div class="container">
         <!-- Start Header Navigation -->
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                 <i class="fa fa-align-justify"></i>
             </button>
             <a class="navbar-brand" href="index.php"><img src="images/mo.png" class="logo" width="70px" alt=""></a>
         </div>
         <!-- End Header Navigation -->
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbar-menu">
             <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
                 <li>
                     <a href="index.php">Home</a>
                 </li>
                 <li>
                     <a href="gallery.php">Gallery</a>
                 </li>
                 <li>
                     <a href="ticket.php">Ticket Booking</a>
                 </li>
                 <li>
                     <a href="contact.php">Contact</a>
                 </li>
                 <?php
                    if (isset($_SESSION["name"]) == null) {
                        ?>
                        <li>
                            <a href="../admin/signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>
                        </li>
                        <li>
                            <a href="../admin/signin.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                        </li>
                        <?php
                    }
                    else {
                        ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><img src="../admin/profile/<?php echo $_SESSION["profile"]; ?>" style="width: 3vw; height: 3vw;" alt=""> Your Profile</a></li>
                                <li><a href="../admin/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
                            </ul>
                        </li>
                        <?php
                    }
                 ?>
                 <li>
                     <a><form class="ms-auto form-inline" action="test2.php" method="post">
                         <input class="form-control me-2" name="mysearch" type="search" placeholder="Search" aria-label="Search">
                         <button class="btn btn-danger" name="sbt" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                     </form></a>
                 </li>
                 <!-- <li class="float-right">
                     <a href="../admin/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a>
                 </li> -->
             </ul>
         </div>
         <!-- /.navbar-collapse -->
     </div>
   </nav>
   <!-- END HEADER MENU -->
</header>
<!-- END HEADER SECTION -->