<?php
 session_start();
 $db = mysqli_connect("localhost", "root", "", "my_movie");
?>
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
                <div class="contact-page pt-75 pb-75">
                    <div class="container">
                        <div class="jumbotron">
                            <div class="container">
                                <h1 class="text-center">My <span class="pink">Profile</span></h1>
                            </div>
                        </div>

                        <div class="row">
                            <img src="../admin/profile/<?php echo $_SESSION["profile"]; ?>" class="col-lg-4 col-md-4 col-sm-4 col-xs-12" alt="">

                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <table class="table table-bordered">
                                    <tbody>                       
                                        <?php
                                            $id = $_SESSION["profile"];
                                            $psel = "SELECT * FROM `users` WHERE `profile` = '$id'";
                                            $myresult = mysqli_query($db, $psel);

                                            
                                            if(mysqli_num_rows($myresult)) {
                                                while ($row = mysqli_fetch_array($myresult)) {
                                                    
                                        ?>
                                        <tr>
                                            <th style="color: white;" scope="col">Name</th>
                                            <td style="color: white;"><?php echo $row[2]; ?></td>
                                        </tr> 
                                        <tr>
                                        <tr>
                                            <th style="color: white;" scope="col">Email</th>
                                            <td style="color: white;"><?php echo $row[3]; ?></td>
                                        </tr> 
                                        <tr>
                                            <th style="color: white;" scope="col">Phone</th>
                                            <td style="color: white;"><?php echo $row[5]; ?></td>
                                        </tr>       
                                        <tr>
                                            <th style="color: white;" scope="col">Credit Card No.</th>
                                            <td style="color: white;"><?php echo $row[6]; ?></td>
                                        </tr>                
                                        <?php
                                        
                                                }
                                            }
                                        ?>
                                    </tbody>                                                 
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div style="background-color: solid red; width: 100%; height:200px;">

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

 <!-- Mirrored from movie.themepul.com/index_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 15:00:05 GMT -->
</html>