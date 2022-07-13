<?php
$db = mysqli_connect("localhost", "root", "", "my_movie");
?>
<!doctype html>
<html lang="en">
<!-- Mirrored from movie.themepul.com/details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 15:06:32 GMT -->
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Template by themepul.com">
    <meta name="keywords" content="film review, movie, movie database, movie series, presentation, showcase, tv show">
    <meta name="author" content="Themepul">
    <title>Movie Details</title>
    <link href="images/mo.png" rel="icon" />
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
        ?> 
     <div class="main page-template">
         <div class="inner-page">
             <!-- PRODUCT LIST VIEW -->
             <div class="container">
                 <!--<h1 class="text-center" style="margin-top: 3vw; margin-bottom: 3vw; color:red;">Movie Details</h1>-->
                 <div class="details-page">
                     <?php
                         $db = mysqli_connect("localhost", "root", "", "my_movie");
                         $id = $_GET["id"];
                         $sel = "SELECT * FROM `allmovies` WHERE `id` = $id";
                         $result = mysqli_query($db, $sel);
                         $row = mysqli_fetch_array($result);    
                       ?>
                     <div class="details-big-img">
                         <img src="../admin/profile/trailer.png" style="width: 100%;" alt="Watch Your Tariler Here" />
                         <div class="play-icon">
                             <a href="#" class="flat-icons" data-video-url="<?php echo $row[3]; ?>"><span class="flaticon-play-button"></span></a>
                         </div>
                     </div>
                     <div class="details-contents">
                         <div class="row">
                             <div class="col-md-offset-1 col-lg-offset-1 col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                 <div class="details-content">
                                     <!-- REVIEW WITH IMAGE -->
                                     <div class="details-reviews">
                                         <div class="row">
                                             <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                                 <div class="dec-review-img">
                                                     <img src="../admin/profile/<?php echo $row[1]?>" alt="" />
                                                 </div>
                                             </div>
                                             <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                                                 <div class="dec-review-dec">
                                                     <div class="details-title">
                                                         <h2><?php echo $row[2]?></h2>
                                                     </div>
                                                     <div class="ratting">
                                                         <span class="fa fa-star"></span>
                                                         <span class="fa fa-star"></span>
                                                         <span class="fa fa-star"></span>
                                                         <span class="fa fa-star"></span>
                                                         <span class="fa fa-star"></span>
                                                         <a href="#">6/5 ratitng</a>
                                                     </div>
                                                     <div class="dec-review-meta">                                                              
                                                         <table class="table">                                                            
                                                             <tbody>
                                                                 <tr class="row">
                                                                     <th class="col-3" style="color: white;"><b>Actor</b></th>
                                                                     <td class="col-8" style="color: white; text-align: start;"><?php echo " : " . $row[7]?></td>
                                                                 </tr>
                                                                 <tr class="row">
                                                                     <th class="col-3" style="color: white;"><b>Genre</b></th>
                                                                     <td class="col-8" style="color: white; text-align: start;"><?php echo " : " . $row[5]?></td>
                                                                 </tr>
                                                                 <tr class="row">
                                                                     <th class="col-3" style="color: white;"><b>Country</b></th>
                                                                     <td class="col-8" style="color: white; text-align: start;"><?php echo " : " . $row[6]?></td>
                                                                 </tr>
                                                             </tbody>
                                                         </table>
                                                     </div>
                                                     <div class="social-links">
                                                         <strong>Share :</strong>
                                                         <a href="#" class="socila-fb"><span class="fa fa-facebook"></span></a>
                                                         <a href="#" class="socila-tw"><span class="fa fa-twitter"></span></a>
                                                         <a href="#" class="socila-sk"><span class="fa fa-skype"></span></a>
                                                         <a href="#" class="socila-pin"><span class="fa fa-pinterest"></span></a>
                                                         <a href="#" class="socila-ins"><span class="fa fa-instagram"></span></a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- END REVIEW WITH IMAGE -->
                                     <!-- DISCRIPTION -->
                                     <div class="details-dectiontion">
                                         <h2 class="title">Movie story</h2>
                                         </p><?php echo $row[4]?></p>
                                     </div>
                                     <!-- END DISCRIPTION -->
                                     
                                     <!-- COMMENT -->
                                     <div class="comment-area">
                                         <h2 class="title">comment</h2>
                                         <?php
                                         $query = "SELECT * FROM `review`";
                                         $results = mysqli_query($db,$query);
                                         if(mysqli_num_rows($results))
                                         {
                                            while($rows = mysqli_fetch_array($results)){
                                                
                                         ?>
                                         <ol class="comment-list">
                                              <li class="single-comment">
                                                 <div class="comment-body">
                                                     <div class="comment-img">
                                                         <img src="images/author/1.png" alt="">
                                                     </div>
                                                     <div class="comment-content">
                                                         <div class="comment-header">
                                                             <h3 class="comment-title"><?php echo $rows[2];?></h3>
                                                         </div>
                                                         <p><?php echo $rows[4];?></p>
                                                         <div class="blog-details-reply-box">
                                                             <div class="comment-time"><?php echo "date(format,timestamp)"?></div>
                                                             <div class="comment-reply">
                                                                 <a href="#" class="Repost">Repost</a>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ol>
                                         <?php
                                         
                                        }
                                    }
                                    ?>
                                         <!-- COMMENT RESPOND -->
                                         <div class="comment-respond">
                                             <h2 class="title">Leave a Comment</h2>
                                             <div class="respons-box">
                                                 <div class="form">
                                                     <form action="myreview.php" method="post">
                                                         <div class="row">
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                     <label for="name">Nick Name :</label>
                                                                     <input class="form-control form-mane" required type="text" name="name">
                                                                 </div>
                                                             </div>
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                     <label for="email">E-mail :</label>
                                                                     <input class="form-control form-email" required type="email" name="email">
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="form-group">
                                                             <label for="message">Write a Message :</label>
                                                             <textarea class="form-control form-comment" cols="10" rows="8" required name="msg"></textarea>
                                                         </div>
                                                         <input type="hidden" name="mid" value="<?php echo $row[0]; ?>">
                                                         <div class="buttons">
                                                             <input type="submit" name="submit" class="btn btn-success" value="Send Comment">
                                                         </div>
                                                     </form>       
                                                 </div>
                                             </div>
                                         </div>
                                        <!-- END COMMENT RESPOND -->
                                     </div>
                                     <!-- END COMMENT -->
                                 </div>
                             </div>
                         </div>
                     </div>
    

                     <!-- CATEGORY MOVIE -->
                     <section class="category-movie pb-75">
                         <!-- HADDING SECTION -->
                         <div class="haddings">
                             <div class="container">
                                 <div class="hadding-area">
                                     <h2>Latest Movies</h2>
                                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                 </div>
                             </div>
                         </div>
                         <!-- HADDING SECTION -->
                         <!-- ITEMS -->
                         <div class="category-movie-items col-4">
                             <div class="container">
                                 <div class="cat-menu"></div>
                                 <div class="category-items">
                                     <div class="tab-contents">
                                         <div id="latestmovie" class="tab-pane fade active in" role="tabpanel">
                                             <div class="category-slide2">
                                                 <!-- pic-1 -->
                                                 <?php
                                                     $select = "SELECT * FROM `allmovies` ORDER BY `id` DESC;";
                                                     $result3 = mysqli_query($db, $select);
                                                     while($row = mysqli_fetch_array($result3)){
                                                    ?>
                                                 <div class="item">
                                                     <div class="movie-item-contents gradient">
                                                     <img src="../admin/profile/<?php echo $row[1]; ?>" alt="">
                                                         <div class="movie-item-content">
                                                             <div class="movie-item-content-top">
                                                                 <div class="pull-right">
                                                                     <div class="movie-ratting">
                                                                         <a href="#"><span class="fa fa-star"></span>2/20</a>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="movie-item-content-center">
                                                                 <a href="#" class="flat-icons" data-video-url="<?php echo $row[3]; ?>"><span class="flaticon-play-button"></span></a>
                                                             </div>
                                                             <div class="movie-item-content-buttom">
                                                                 <div class="movie-item-title">
                                                                     <a href="#"><?php echo $row[2]?></a>
                                                                 </div>
                                                                 <div class="item-cat">
                                                                     <ul>
                                                                         <li><span>Category :</span><a href="#"><?php echo $row[6]?></a></li>
                                                                     </ul>
                                                                     <div class="item-cat-hover">
                                                                         <ul>
                                                                             <!--<li><span>Release :</span><a href="#">October 26, 2017</a></li>-->
                                                                             <li><span>Genre :</span><a href="#"><?php echo $row[5]?></a></li>
                                                                         </ul>
                                                                     </div>
                                                                 </div>
                                                                 <div class="movie-item-beta">
                                                                     <div class="movie-details">
                                                                         <a href="details.php?id=<?php echo $row[0] ?>" class="btn btn-button button-detals blck-bg">details</a>
                                                                     </div>
                                                                     <div class="view-movie hover-right">
                                                                         <a class="blck-bg" href="#">15k view</a>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
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
                         </div>
                         <!-- END ITEMS -->
                     </section>
                     <!-- END CATEGORY MOVIE -->
                 </div>
             </div>
            <!-- END PRODUCT LIST VIEW -->
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
<!-- Mirrored from movie.themepul.com/details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 15:06:37 GMT -->
</html>