<!doctype html>
<html lang="en">
 <!-- Mirrored from movie.themepul.com/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 15:06:38 GMT -->
 <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Template by themepul.com">
    <meta name="keywords" content="film review, movie, movie database, movie series, presentation, showcase, tv show">
    <meta name="author" content="Themepul">
    <title>CMM Movie</title>
    <link rel="icon" href="../admin/img/signage-removebg-preview.png" type="image/x-icon">
    <!-- bootstrap css -->
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- / bootstrap css -->
    <!-- owl carousel css -->
    <link href="assets/owlcarousel/owl.carousel.css" rel="stylesheet" />
    <!-- / owl carousel css -->
    <!--  icon css -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/flaticon.css" rel="stylesheet" />
    <link href="css/icofont.css" rel="stylesheet" />
    <!-- / icon css -->
    <!-- animations css -->
    <link href="assets/animations/animate.css" rel="stylesheet" />
    <link href="assets/Video/video.popup.css" rel="stylesheet" />
    <!-- / animations css -->
    <!-- animations css -->
    <link href="assets/navmenu/bootsnav.css" rel="stylesheet" />
    <link href="assets/gallery/jquery.lighter.css" rel="stylesheet" />
    <!-- / animations css -->
    <!-- slider css -->
    <link rel="stylesheet" href="assets/bootstrap-slider/bootstrap-touch-slider.css">
    <!-- / slider css -->
    <!--  style css -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- / style css -->
    <!--  media css -->
    <link href="css/media.css" rel="stylesheet" />
    <!-- / media css -->
    <!-- / font css -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,900' rel='stylesheet' type='text/css'>
    <!-- / font css -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
 </head>

 <body>
     <?php
        session_start();
         include_once("nav.php");
         $db = mysqli_connect("localhost", "root", "", "my_movie");
        ?>  
     <div class="main page-template">
        <!-- HEADER SECTION -->
        <header class="header-section">
        <div class="inner-page">
            <div class="celebrities-page pt-75 pb-75">
                <div class="container">
                    <div class="row p-4" style="margin-top: 3vw; margin-bottom: 3vw;">
                    <h1 class="mb-3" style="color: white;">Search " <?php echo $_SESSION["srch"]; ?> "</h1>
                    <!-- <form class="ms-auto form-inline" action="test2.php" method="post">
                        <input class="form-control me-2" name="mysearch" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-danger" name="sbt" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form> -->
                    <?php

                        $chmovie = $_SESSION["srch"];
                        $sel = "SELECT * FROM `allmovies` WHERE `movie_name` LIKE '%$chmovie%'";
                        $result = mysqli_query($db, $sel);
                      $i = 0;
                      while($row = mysqli_fetch_array($result)) {                                                    
                          $i++;
                    ?>
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="item col-sm-10 col-md-4 col-lg-4">
                            <div class="movie-item-contents gradient3">
                                <img src="../admin/profile/<?php echo $row[1]?>" alt="">
                                <div class="movie-item-content">
                                    <div class="movie-item-content-top">
                                        <div class="pull-right">
                                            <div class="movie-ratting">
                                                <a href="#"><span class="fa fa-star"></span>2/20</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-item-content-center">
                                        <a href="#" class="flat-icons" style="" data-video-url="<?php echo $row[3]; ?>"><span class="flaticon-play-button"></span></a>
                                    </div>
                                    <div class="movie-item-content-buttom">
                                        <div class="movie-item-title">
                                            <!-- <a href="#"><?php echo $row[2]?></a> -->
                                        </div>
                                        <div class="item-cat">
                                            <!-- <ul>
                                                <li><span>Category :</span><a href="#"><?php echo $row[6]?></a></li>
                                            </ul>
                                            <div class="item-cat-hover">
                                                <ul>
                                                    <li><span>Genre :</span><a href="#"><?php echo $row[5]?></a></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                        <div class="movie-item-beta">
                                            <!-- <div class="movie-details">
                                                <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                            </div>
                                            <div class="view-movie hover-right">
                                                <a class="black-bg" href="#">15k view</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <ul class="list-group col-sm-10 col-md-8 col-lg-8">
                              <li class="list-group-item"><h3><b><?php echo $row[2]; ?></b></h3></li>
                              <li class="list-group-item"><b class="text-white">Descpriction:</b> <?php echo $row[4]; ?></li>
                              <li class="list-group-item"><b class="text-white">Genre:</b> <?php echo $row[5]; ?></li>
                              <li class="list-group-item"><b class="text-white">Country:</b> <?php echo $row[6]; ?></li>
                              <li class="list-group-item"><b class="text-white">Cast:</b> <?php echo $row[7]; ?></li>
                          </ul>
                        </div>
                      </div>
                    <?php
                      }
                    ?>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <?php
         include_once("footer.php");
        ?>  
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="assets/navmenu/bootsnav.js"></script>
    <script src="assets/animations/wow.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/bootstrap-slider/jquery.touchSwipe.min.js"></script>
    <script src="assets/bootstrap-slider/bootstrap-touch-slider.js"></script>
    <script src="assets/Video/video.popup.js"></script>
    <script src="assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/accordion/jquery.accordion.source.js"></script>
    <script src="assets/gallery/jquery.lighter.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.syotimer.min.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/main.js"></script>
 </body>
 <!-- Mirrored from movie.themepul.com/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 15:06:56 GMT -->
</html>
