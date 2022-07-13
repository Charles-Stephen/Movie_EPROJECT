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
                                            $usid = "";
                                            $psel = "SELECT * FROM `users` WHERE `profile` = '$id'";
                                            $myresult = mysqli_query($db, $psel);

                                            
                                            if(mysqli_num_rows($myresult)) {
                                                while ($row = mysqli_fetch_array($myresult)) {
                                                    $usid = $row[0];
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
                        <h1 class="text-center" style="color: white;"><i class="fa fa-ticket" aria-hidden="true"></i> TICKETS </h1>
                        <?php
                            $ticket_sel = "SELECT * FROM `tickets` WHERE `user_id` = $usid";
                            $ticket_result = mysqli_query($db, $ticket_sel);
                            if(mysqli_num_rows($ticket_result)) {
                                while($ticket_row = mysqli_fetch_array($ticket_result)) {
                                    
                        ?>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8" style="background-color: #fcba5d; height: 240px; margin-top: 4vw; border-color: white; border-top-style: solid; border-right-style: dashed; border-bottom-style: solid; border-left-style: solid;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><?php echo $ticket_row[5]; ?></h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php                          
                                            $sch = "SELECT * FROM `movie_sch2` WHERE `id` = $ticket_row[6]";
                                            $sch_r = mysqli_query($db, $sch);
                                            $sch_w = mysqli_fetch_array($sch_r);

                                            $movsel = "SELECT * FROM `allmovies` WHERE `id` = $sch_w[4]";
                                            $mov_r = mysqli_query($db, $movsel);
                                            while($mov_w = mysqli_fetch_array($mov_r)) {
                                                ?>
                                                <h3 class="text-center" style="overflow-wrap: break-word;"><b><?php echo $mov_w[2]; ?></b></h3>
                                                <?php
                                            }
                                            
                                            ?>
                                                <p>Kids : <?php echo $ticket_row[4]; ?></p>
                                            
                                                <p>Adults : <?php echo $ticket_row[3]; ?></p>
                                            <?php
                                            
                                            $thesel = "SELECT * FROM `theater` WHERE `id` = $sch_w[3]";
                                            $the_r = mysqli_query($db, $thesel);
                                            while($the_w = mysqli_fetch_array($the_r)) {
                                                ?>
                                                <p>Theater : <?php echo $the_w[1]; ?></p>
                                                <?php
                                            }
                                            
                                            $tmsel = "SELECT * FROM `movie_time` WHERE `id` = $sch_w[2]";
                                            $tm_r = mysqli_query($db, $tmsel);
                                            while($tm_w = mysqli_fetch_array($tm_r)) {
                                                ?>
                                                <p>Time : <?php echo $tm_w[1]; ?></p>
                                                <?php
                                            }
                                                                                    
                                            ?>
                                                <p>Date : <?php echo $sch_w[1]; ?></p>
                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="background-color: #fcba5d; height: 240px; margin-top: 4vw; margin-top: 4vw; border-color: white; border-top-style: solid; border-right-style: solid; border-bottom-style: solid;">
                            <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Pass</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class="text-center" style="overflow-wrap: break-word;"><b><?php echo $ticket_row[7]; ?></b></h3>
                                        <img src="./images/down-removebg-preview.png" class="img-responsive" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        
                                }
                            }
                        ?>
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