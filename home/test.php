<!doctype html>
 <html lang="en">
 <!-- Mirrored from movie.themepul.com/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 15:07:17 GMT -->
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Template by themepul.com">
    <meta name="keywords" content="film review, movie, movie database, movie series, presentation, showcase, tv show">
    <meta name="author" content="Themepul">
    <title>CMM Movie</title>
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
             session_start();
         include_once("nav.php");
        $db = mysqli_connect("localhost", "root", "", "my_movie");
        ?>  
     <div class="main page-template">
         <div class="inner-page">
             <div class="contact-page pt-75 pb-75">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
                             <div class="row">
                                 <h1 class="text-center" style="margin-top: 3vw; margin-bottom: 3vw; color:red;">Book Your Tickets</h1>
                                 <span style=" color:red;"><h2>Available Tickets</h2></span>
                                 <form action="#" class="mt-5 contact-form">
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                         <div class="form-group">
                                             <label>SELECT MOVIE</label>
                                             <select onchange="this.form.submit();" id="ghtf" name ="myselmov" class="form-control">
                                                 <option>Select Movie</option>
                                                 <?php
                                                    $sel = "SELECT * FROM `allmovies`";
                                                    $result = mysqli_query($db, $sel);
                                                    if(mysqli_num_rows($result)) {
                                                        $i = 0;
                                                        while($row = mysqli_fetch_array($result)) {
                                                            $i++;
                                                 ?>                        
                                                    <option value="<?php echo $row[0]; ?>">
                                                        <?php echo $row[2]; ?>                                                                               
                                                    </option>                                                
                                                 <?php
                                                        }
                                                    }
                                                 ?>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                         <div class="form-group">              
                                             <label>SELCT CINEMA</label>                                             
                                             <select class="form-control">
                                                 <option>Select Cinema</option>
                                                 <?php                                                                                        
                                                    $_SESSION["chmovie"] = $_GET[myselmov];
                                                    $chmovie = $_SESSION["chmovie"];
                                                    $sel2 = "SELECT * FROM `movie_sch2` WHERE `movie_id` = $chmovie";
                                                    $result2 = mysqli_query($db, $sel2);                                                
                                                    if(mysqli_num_rows($result2)) {
                                                        while($row2 = mysqli_fetch_array($result2)) {                      
                                                 ?>
                                                 <option>
                                                    <?php 
                                                        $sel3 = "SELECT * FROM `theater` WHERE `id` = $row2[3]";
                                                        $result3 = mysqli_query($db, $sel3);                                                        
                                                        while($row3 = mysqli_fetch_array($result3)) {
                                                            echo $row3[1];
                                                        }
                                                    ?>
                                                </option>                                                 
                                                 <?php
                                                        }
                                                    }
                                                 ?>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                         <div class="form-group">                                         
                                             <label>SELECT  SEAT CATEGORY</label>
                                             <select class="form-control">
                                                 <option>Select Seat Category</option>
                                                 <option>Golden</option>
                                                 <option>Platinum</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                         <div class="form-group">
                                             <label>QUANTITY OF SEAT FOR ADULT</label>
                                             <select class="form-control">
                                                 <option>Select Seat</option>
                                                 <option>For Adult</option>
                                                 <option>For Kid</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                         <div class="form-group">
                                             <label>QUANTITY OF SEAT FOR KIDS</label>
                                             <select class="form-control">
                                                 <option>Select Seat</option>
                                                 <option>For Adult</option>
                                                 <option>For Kid</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                         <div class="form-group">
                                             <label for="email">SELECT DATE</label>
                                             <select class="form-control">
                                                 <option>Select Date</option>
                                                 <option>...</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                         <div class="form-group">
                                             <label for="email">SELECT TIME</label>
                                             <select class="form-control">
                                                 <option>Select Time</option>
                                                 <option>...</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                         <div class="form-group">
                                             <label for="message">TICKETS</label>
                                             <input class="form-control" placeholder="How many tickets you want?" required="" type="number">
                                         </div>
                                         <div class="submit-button">
                                             <input type="submit" class="btn btn-success"  value="GET TICKETS">
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
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
     <script src="assets/jquery-ui/jquery-ui.min.js"></script>
     <script src="assets/Video/video.popup.js"></script>
     <script src="js/jquery.syotimer.min.js"></script>
     <script src="js/jquery.mixitup.min.js"></script>
     <script src="js/tab.js"></script>
     <script src="js/main.js"></script>
 </body>
 <!-- Mirrored from movie.themepul.com/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 15:07:17 GMT -->
</html>