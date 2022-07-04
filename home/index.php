<!doctype html>
 <html lang="en">

 <!-- Mirrored from movie.themepul.com/index_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 14:58:01 GMT -->
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="A Template by themepul.com">
     <meta name="keywords" content="film review, movie, movie database, movie series, presentation, showcase, tv show">
     <meta name="author" content="Themepul">
     <title>movie | Multipurpose HTML5 template</title>
     <link href="images/favicon.png" rel="icon" />
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
         include_once("nav.php");
         $db = mysqli_connect("localhost", "root", "", "my_movie");
        ?>  
     <div class="main home-4">
          <!-- slider section -->
         <div class="slider-section slider-2 carousel bs-slider fade control-round indicators-line" id="bootstrap-touch-slider" data-ride="carousel" data-pause="hover" data-interval="5000">
             <div class="slider-items carousel-inner" role="listbox">
                 <div class="item active">
                     <div class="slider-img">
                         <img src="images/slider/home-4/1.jpg" alt="">
                     </div>
                     <div class="slider-contents">
                         <div class="container">
                             <div class="row">
                                 <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-12  col-xs-12">
                                     <div class="slider-content">
                                         <h3 class="delay-03" data-animation="animated slideInRight">Welcome to Our movie site</h3>
                                         <h2 class="delay-04" data-animation="animated slideInLeft ">Our special <span class="pink">Movies</span></h2>
                                         <p class="delay-06" data-animation="animated slideInRight">Lorem Ipsum is simply dummy text of the printing and typesetting industrioy. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
                                         <a href="#" class="btn btn-button pink-bg button-1 animation delay-04" data-animation="animated slideInLeft">Read More</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="item">
                     <div class="slider-img">
                         <img src="images/slider/home-4/2.jpg" alt="">
                     </div>
                     <div class="slider-contents">
                         <div class="container">
                             <div class="row">
                                 <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-12  col-xs-12">
                                     <div class="slider-content">
                                         <h3 class="delay-03" data-animation="animated slideInRight">Welcome to Our movie site</h3>
                                         <h2 class="delay-04" data-animation="animated slideInLeft ">Our special <span class="pink">Movies</span></h2>
                                         <p class="delay-06" data-animation="animated slideInRight">Lorem Ipsum is simply dummy text of the printing and typesetting industrioy. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
                                         <a href="#" class="btn btn-button pink-bg button-1 animation delay-04" data-animation="animated slideInLeft">Read More</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Left Control -->
             <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                 <span class="flaticon-send" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
             </a>
             <!-- Right Control -->
             <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                 <span class="flaticon-send" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
             </a>
         </div>
         <!-- end slider section -->
        
         <!-- CATEGORY MOVIE -->
         <section class="category-movie pt-75">
             <!-- HADDING SECTION -->
             <div class="haddings">
                 <div class="container">
                     <div class="hadding-area">
                         <h2>Top Rating Movies</h2>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
                     </div>
                 </div>
             </div>
             <!-- HADDING SECTION -->
             <!-- ITEMS -->
             <div class="category-movie-items">
                 <div class="container">
                     <div class="cat-menu"></div>
                     <div class="category-items">
                         <div class="tab-contents">
                             <div id="latestmovie" class="tab-pane fade active in" role="tabpanel">
                                 <div class="category-slide2">
                                    <?php
                                        $sel = "SELECT * FROM `allmovies`";
                                        $result = mysqli_query($db, $sel);
                                        if(mysqli_num_rows($result)) {                                            
                                            while($row = mysqli_fetch_array($result)) {                                                                                                    
                                    ?>
                                     <div class="item">
                                        <div class="movie-item-contents gradient3 h-100">
                                            <img src="../admin/profile/<?php echo $row[1]; ?>" style="height: 30vw;" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <!-- <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div> -->
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <!-- <video width="854" height="480" controls src="movievideo/<?php echo $row[3]; ?>"></video> -->
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                    <?php
                                            }
                                        }
                                    ?>
                                     <!-- <div class="item">
                                         <div class="movie-item-contents gradient3">
                                             <img src="images/cat/home-3/2.jpg" alt="">
                                             <div class="movie-item-content">
                                                 <div class="movie-item-content-top">
                                                     <div class="pull-left">
                                                         <span class="movie-count-time hover-left">02.50.20</span>
                                                     </div>
                                                     <div class="pull-right">
                                                         <div class="movie-ratting">
                                                             <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="movie-item-content-center">
                                                     <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                 </div>
                                                 <div class="movie-item-content-buttom">
                                                     <div class="movie-item-title">
                                                         <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                     </div>
                                                     <div class="item-cat">
                                                         <ul>
                                                             <li><span>Category :</span><a href="#">English Movies</a></li>
                                                         </ul>
                                                         <div class="item-cat-hover">
                                                             <ul>
                                                                 <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                 <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                             </ul>
                                                         </div>
                                                     </div>
                                                     <div class="movie-item-beta">
                                                         <div class="movie-details">
                                                             <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                         </div>
                                                         <div class="view-movie hover-right">
                                                             <a class="black-bg" href="#">15k view</a>
                                                         </div>
                                                    </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="item">
                                         <div class="movie-item-contents gradient3">
                                             <img src="images/cat/home-3/3.jpg" alt="">
                                             <div class="movie-item-content">
                                                 <div class="movie-item-content-top">
                                                     <div class="pull-left">
                                                         <span class="movie-count-time hover-left">02.50.20</span>
                                                     </div>
                                                     <div class="pull-right">
                                                         <div class="movie-ratting">
                                                             <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="movie-item-content-center">
                                                     <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                  </div>
                                                 <div class="movie-item-content-buttom">
                                                     <div class="movie-item-title">
                                                         <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                     </div>
                                                     <div class="item-cat">
                                                         <ul>
                                                             <li><span>Category :</span><a href="#">English Movies</a></li>
                                                         </ul>
                                                         <div class="item-cat-hover">
                                                             <ul>
                                                                 <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                 <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                             </ul>
                                                         </div>
                                                     </div>
                                                     <div class="movie-item-beta">
                                                         <div class="movie-details">
                                                             <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                         </div>
                                                         <div class="view-movie hover-right">
                                                             <a class="black-bg" href="#">15k view</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="item">
                                         <div class="movie-item-contents gradient3">
                                             <img src="images/cat/home-3/4.jpg" alt="">
                                             <div class="movie-item-content">
                                                 <div class="movie-item-content-top">
                                                     <div class="pull-left">
                                                         <span class="movie-count-time hover-left">02.50.20</span>
                                                     </div>
                                                     <div class="pull-right">
                                                         <div class="movie-ratting">
                                                             <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="movie-item-content-center">
                                                     <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                 </div>
                                                 <div class="movie-item-content-buttom">
                                                     <div class="movie-item-title">
                                                         <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                     </div>
                                                     <div class="item-cat">
                                                         <ul>
                                                             <li><span>Category :</span><a href="#">English Movies</a></li>
                                                         </ul>
                                                         <div class="item-cat-hover">
                                                             <ul>
                                                                 <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                 <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                             </ul>
                                                         </div>
                                                     </div>
                                                     <div class="movie-item-beta">
                                                         <div class="movie-details">
                                                             <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                         </div>
                                                         <div class="view-movie hover-right">
                                                             <a class="black-bg" href="#">15k view</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div> -->
                                 </div>
                             </div>
                             <div id="top-ratings" class="tab-pane fade" role="tabpanel">
                                <div class="category-slide2">
                                    <div class="item">
                                        <div class="movie-item-contents gradient3">
                                            <img src="images/cat/home-3/1.jpg" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="movie-item-contents gradient3">
                                            <img src="images/cat/home-3/2.jpg" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="movie-item-contents gradient3">
                                            <img src="images/cat/home-3/3.jpg" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="movie-item-contents gradient3">
                                            <img src="images/cat/home-3/4.jpg" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                             <div id="commingsoon" class="tab-pane fade" role="tabpanel">
                                <div class="category-slide2">
                                    <div class="item">
                                        <div class="movie-item-contents gradient3">
                                            <img src="images/cat/home-3/1.jpg" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="movie-item-contents gradient3">
                                            <img src="images/cat/home-3/2.jpg" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="movie-item-contents gradient3">
                                            <img src="images/cat/home-3/3.jpg" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="movie-item-contents gradient3">
                                            <img src="images/cat/home-3/4.jpg" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                             <div id="tvseries" class="tab-pane fade" role="tabpanel">
                                <div class="category-slide2">
                                    <div class="item">
                                        <div class="movie-item-contents gradient3">
                                            <img src="images/cat/home-3/1.jpg" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="movie-item-contents gradient3">
                                            <img src="images/cat/home-3/2.jpg" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="movie-item-contents gradient3">
                                            <img src="images/cat/home-3/3.jpg" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="movie-item-contents gradient3">
                                            <img src="images/cat/home-3/4.jpg" alt="">
                                            <div class="movie-item-content">
                                                <div class="movie-item-content-top">
                                                    <div class="pull-left">
                                                        <span class="movie-count-time hover-left">02.50.20</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="movie-ratting">
                                                            <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie-item-content-center">
                                                    <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                                </div>
                                                <div class="movie-item-content-buttom">
                                                    <div class="movie-item-title">
                                                        <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                                    </div>
                                                    <div class="item-cat">
                                                        <ul>
                                                            <li><span>Category :</span><a href="#">English Movies</a></li>
                                                        </ul>
                                                        <div class="item-cat-hover">
                                                            <ul>
                                                                <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                                <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="movie-item-beta">
                                                        <div class="movie-details">
                                                            <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                        </div>
                                                        <div class="view-movie hover-right">
                                                            <a class="black-bg" href="#">15k view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- END ITEMS -->
         </section>
         <!-- END CATEGORY MOVIE -->

         <!-- Comming section -->
         <div class="timer-section">
             <div class="timer-inner time-bg">
                 <div class="timer-contents">
                     <div class="container">
                         <div class="row">
                             <div class="col-lg-offset-6 col-md-offset-6 col-lg-5 col-md-5 col-sm-offset-6 col-sm-6 col-xs-12">
                                 <div class="timer-content">
                                     <h5 class="pink">Coming soon Movie</h5>
                                     <h2>Max Still</h2>
                                     <p>Jon Player <span class="pink">&</span> Emily Rose</p>
                                     <div id="simple-timer"></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- End Comming section -->

         <!-- CATEGORY MOVIE -->
         <section class="top-rating pt-75">
             <!-- HADDING SECTION -->
             <div class="haddings">
                 <div class="container">
                     <div class="hadding-area">
                         <h2>Latest Movies</h2>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
                     </div>
                 </div>
             </div>
             <!-- HADDING SECTION -->
             <!-- ITEMS -->
             <div class="Top-rating-items pt-50">
                 <div class="container">
                     <div class="row">
                         <div id="toprating">
                             <!-- pic-1 -->
                             <div class="item">
                                 <div class="movie-item-contents gradient3">
                                     <img src="images/cat/1.jpg" alt="">
                                     <div class="movie-item-content">
                                         <div class="movie-item-content-top">
                                             <div class="pull-left">
                                                 <span class="movie-count-time hover-left">02.50.20</span>
                                             </div>
                                             <div class="pull-right">
                                                 <div class="movie-ratting">
                                                     <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="movie-item-content-center">
                                             <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                         </div>
                                         <div class="movie-item-content-buttom">
                                             <div class="movie-item-title">
                                                 <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                             </div>
                                             <div class="item-cat">
                                                 <ul>
                                                     <li><span>Category :</span><a href="#">English Movies</a></li>
                                                 </ul>
                                                 <div class="item-cat-hover">
                                                     <ul>
                                                         <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                         <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <div class="movie-item-beta">
                                                 <div class="movie-details">
                                                     <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                 </div>
                                                 <div class="view-movie hover-right">
                                                     <a class="black-bg" href="#">15k view</a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- pic-2 -->
                             <div class="item">
                                 <div class="movie-item-contents gradient3">
                                     <img src="images/cat/2.jpg" alt="">
                                     <div class="movie-item-content">
                                         <div class="movie-item-content-top">
                                             <div class="pull-left">
                                                 <span class="movie-count-time hover-left">02.50.20</span>
                                             </div>
                                             <div class="pull-right">
                                                 <div class="movie-ratting">
                                                     <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="movie-item-content-center">
                                             <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                         </div>
                                         <div class="movie-item-content-buttom">
                                             <div class="movie-item-title">
                                                 <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                             </div>
                                             <div class="item-cat">
                                                 <ul>
                                                     <li><span>Category :</span><a href="#">English Movies</a></li>
                                                 </ul>
                                                 <div class="item-cat-hover">
                                                     <ul>
                                                         <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                         <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <div class="movie-item-beta">
                                                 <div class="movie-details">
                                                     <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                 </div>
                                                 <div class="view-movie hover-right">
                                                     <a class="black-bg" href="#">15k view</a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- pic-3 -->
                             <div class="item">
                                 <div class="movie-item-contents gradient3">
                                     <img src="images/cat/3.jpg" alt="">
                                     <div class="movie-item-content">
                                         <div class="movie-item-content-top">
                                             <div class="pull-left">
                                                 <span class="movie-count-time hover-left">02.50.20</span>
                                             </div>
                                             <div class="pull-right">
                                                 <div class="movie-ratting">
                                                     <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="movie-item-content-center">
                                             <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                         </div>
                                         <div class="movie-item-content-buttom">
                                             <div class="movie-item-title">
                                                 <a href="#">Hurry Animate Blue Strack New Movie (2018)</a>
                                             </div>
                                             <div class="item-cat">
                                                 <ul>
                                                     <li><span>Category :</span><a href="#">English Movies</a></li>
                                                 </ul>
                                                 <div class="item-cat-hover">
                                                     <ul>
                                                         <li><span>Release :</span><a href="#">October 26, 2017</a></li>
                                                         <li><span>Genre :</span><a href="#">Action, Drama</a></li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <div class="movie-item-beta">
                                                 <div class="movie-details">
                                                     <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                 </div>
                                                 <div class="view-movie hover-right">
                                                     <a class="black-bg" href="#">15k view</a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- END ITEMS -->
         </section>
         <!-- END CATEGORY MOVIE -->

         <!-- LATEST NEWS -->
         <section class="latest-news-section pt-75">
             <!-- HADDING SECTION -->
             <div class="haddings">
                 <div class="container">
                     <div class="hadding-area">
                         <h2>Latest News</h2>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
                     </div>
                 </div>
             </div>
             <!-- HADDING SECTION -->
             <div class="latest-news pt-50">
                 <div class="container">
                     <div class="row">
                         <!-- Img-1 -->
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="movie-item-contents gradient3">
                                 <img src="images/latest/home-3/1.jpg" alt="">
                                 <div class="movie-item-content">
                                     <div class="movie-item-content-top">
                                         <div class="pull-right hover-right">
                                             <span class="movie-count-time">02.50.20</span>
                                         </div>
                                     </div>
                                     <div class="movie-item-content-center">
                                         <a href="#" class="flat-icons" data-video-url="https://www.youtube.com/watch?v=CsVJoCKc9rA"><span class="flaticon-play-button"></span></a>
                                     </div>
                                     <div class="movie-item-content-buttom">
                                         <div class="movie-item-title">
                                             <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                         </div>
                                         <div class="movie-item-beta border-top">
                                             <div class="movie-details">
                                                 <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                             </div>
                                             <div class="blog-meta">
                                                 <ul>
                                                     <li><a href="#">by admin</a></li>
                                                     <li><a href="#">coments</a></li>
                                                 </ul>
                                                 <div class="share-link">
                                                     <div class="share-text">
                                                         <span>Share</span>
                                                         <div class="share-hover">
                                                             <ul>
                                                                 <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                                 <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                                 <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                                 <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                                             </ul>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                             <div class="latest-news-small">
                                 <div class="row">
                                     <!-- Img-2 -->
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-width">
                                         <div class="movie-item-contents gradient3">
                                             <img src="images/latest/home-3/2.jpg" alt="">
                                             <div class="movie-item-content">
                                                 <div class="movie-item-content-top">
                                                     <div class="pull-right hover-right">
                                                         <span class="movie-count-time">02.50.20</span>
                                                     </div>
                                                 </div>
                                                 <div class="movie-item-content-buttom">
                                                     <div class="movie-item-title">
                                                         <a href="#">Nam lectus nibh consequat aucibus turpis.</a>
                                                     </div>
                                                     <div class="movie-item-beta">
                                                         <div class="movie-details">
                                                             <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                         </div>
                                                         <div class="blog-meta">
                                                             <div class="share-link">
                                                                 <div class="share-text">
                                                                     <span>Share</span>
                                                                     <div class="share-hover">
                                                                         <ul>
                                                                             <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                                             <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                                             <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                                             <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                                                         </ul>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                      <!-- Img-3 -->
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-width">
                                         <div class="movie-item-contents gradient3">
                                             <img src="images/latest/home-3/3.jpg" alt="">
                                             <div class="movie-item-content">
                                                 <div class="movie-item-content-top">
                                                     <div class="pull-right hover-right">
                                                         <span class="movie-count-time">02.50.20</span>
                                                     </div>
                                                 </div>
                                                 <div class="movie-item-content-buttom">
                                                     <div class="movie-item-title">
                                                         <a href="#">Nam lectus nibh consequat aucibus turpis.</a>
                                                     </div>
                                                     <div class="movie-item-beta">
                                                         <div class="movie-details">
                                                             <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                         </div>
                                                         <div class="blog-meta">
                                                             <div class="share-link">
                                                                 <div class="share-text">
                                                                     <span>Share</span>
                                                                     <div class="share-hover">
                                                                         <ul>
                                                                             <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                                             <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                                             <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                                             <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                                                         </ul>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                      <!-- Img-4 -->
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-width">
                                         <div class="movie-item-contents pt-30 gradient3">
                                             <img src="images/latest/home-3/4.jpg" alt="">
                                             <div class="movie-item-content">
                                                 <div class="movie-item-content-top">
                                                     <div class="pull-right">
                                                         <span class="movie-count-time hover-right">02.50.20</span>
                                                     </div>
                                                 </div>
                                                 <div class="movie-item-content-buttom">
                                                     <div class="movie-item-title">
                                                         <a href="#">Nam lectus nibh consequat aucibus turpis.</a>
                                                     </div>
                                                     <div class="movie-item-beta">
                                                         <div class="movie-details">
                                                             <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                         </div>
                                                         <div class="blog-meta">
                                                             <div class="share-link">
                                                                 <div class="share-text">
                                                                     <span>Share</span>
                                                                     <div class="share-hover">
                                                                         <ul>
                                                                             <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                                             <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                                             <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                                             <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                                                         </ul>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                      <!-- Img-5 -->
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sm-width">
                                         <div class="movie-item-contents pt-30 gradient3">
                                             <img src="images/latest/home-3/5.jpg" alt="">
                                             <div class="movie-item-content">
                                                 <div class="movie-item-content-top">
                                                     <div class="pull-right hover-right">
                                                         <span class="movie-count-time">02.50.20</span>
                                                     </div>
                                                 </div>
                                                 <div class="movie-item-content-buttom">
                                                     <div class="movie-item-title">
                                                         <a href="#">Nam lectus nibh consequat aucibus turpis.</a>
                                                     </div>
                                                     <div class="movie-item-beta">
                                                         <div class="movie-details">
                                                             <a href="#" class="btn btn-button button-detals black-bg">details</a>
                                                         </div>
                                                         <div class="blog-meta">
                                                             <div class="share-link">
                                                                 <div class="share-text">
                                                                     <span>Share</span>
                                                                     <div class="share-hover">
                                                                         <ul>
                                                                             <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                                             <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                                             <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                                             <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                                                         </ul>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- END LATEST NEWS -->
         <div class="to-top" id="back-top">
             <i class="fa fa-angle-up"></i>
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
     <script src="assets/jquery-ui/jquery-ui.min.js"></script>
     <script src="assets/Video/video.popup.js"></script>
     <script src="js/jquery.syotimer.min.js"></script>
     <script src="js/jquery.mixitup.min.js"></script>
     <script src="js/tab.js"></script>
     <script src="js/main.js"></script>
 </body>

 <!-- Mirrored from movie.themepul.com/index_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 15:00:05 GMT -->
</html>