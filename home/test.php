<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "my_movie");
?>
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
                     <div class="row">
                         <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
                             <div class="row">
                                 <h1 class="text-center" style="margin-top: 3vw; margin-bottom: 3vw; color:red;">Book Your Tickets</h1>
                                 <?php
                                        $wdate1 = $_SESSION["wdate"];
                                        $mycat1 = $_SESSION["mycat"];
                                        $myseat3 = $_SESSION["myseat1"];
                                        $myseat4 = $_SESSION["myseat2"];
                                        $sel1 = "SELECT * FROM `adult_package` WHERE `title_id` = $mycat1";
                                        $result1 = mysqli_query($db, $sel1);
                                        $row1 = mysqli_fetch_array($result1);
                                        $sel2 = "SELECT * FROM `kids_package` WHERE `title_id` = $mycat1";
                                        $result2 = mysqli_query($db, $sel2);
                                        $row2 = mysqli_fetch_array($result2);
                                        switch ($mycat1) {
                                            case 1:
                                                $seatresult1 = (int)$myseat3 * $row1[2];
                                                $seatresult2 = (int)$myseat4 * $row2[2];
                                                $totalresult = (int)$seatresult1 + (int)$seatresult2;
                                                break;
                                            case 2:
                                                $seatresult1 = (int)$myseat3 * $row1[2];
                                                $seatresult2 = (int)$myseat4 * $row2[2];
                                                $totalresult = (int)$seatresult1 + (int)$seatresult2;
                                                break;
                                            case 3:
                                                $seatresult1 = (int)$myseat3 * $row1[2];
                                                $seatresult2 = (int)$myseat4 * $row2[2];
                                                $totalresult = (int)$seatresult1 + (int)$seatresult2;
                                                break;
                                            
                                            // default:
                                            //     $seatresult1 = (int)$myseat3 * $row1[2];
                                            //     $seatresult2 = (int)$myseat4 * $row2[2];
                                            //     $totalresult = (int)$seatresult1 + (int)$seatresult2;
                                            //     break;
                                        }

                                        if(isset($_POST["submit2"])) {
                                            $mytypeid = $_SESSION["mytype"];
                                            $creditno = $_POST["creditno"];
                                            $myp = "SELECT * FROM `users` WHERE `Credit_Card` = $creditno && `user_type` = $mytypeid";
                                            $p_result = mysqli_query($db, $myp);
                                            if(mysqli_num_rows($p_result)) {
                                                $b_sel = "SELECT * FROM `accounts` WHERE `id` = 1";
                                                $b_result = mysqli_query($db, $b_sel);
                                                $b_row = mysqli_fetch_array($b_result);
                                                $b_add = (int)$totalresult + $b_row[1];
                                                $b_up = "UPDATE `accounts` SET `balance` = $b_add WHERE `id` = 1";
                                                $b_result2 = mysqli_query($db, $b_up);
                                                $tkno = "TK-" . rand();
                                                $userseats = (int)$myseat3 + (int)$myseat4;
                                                $tk_in = "INSERT INTO `tickets`(`your_package`, `adult_seatNo`, `kids_seatNo`, `ticket_No`, `movie_sch2_Id`, `quantity`, `amount`) VALUES ('$mycat1','$myseat3','$myseat4','$tkno','$wdate1','$userseats','$totalresult')";
                                                $tk_result = mysqli_query($db, $tk_in);
                                                // remove all session variables
                                                session_unset();
                                                // destroy the session
                                                session_destroy();
                                                ?>
                                                <Script>
                                                    window.location.assign("./index.php");
                                                </Script>            
                                                <?php
                                            }
                                            else {
                                                echo '<div class="alert alert-danger" role="alert"><b>Alert:<b/> Please Enter Correct Pin</div>';
                                            }
                                        }
                                    ?>
                                    
                                <div>

                                </div>
                                 <form action="#" method="post" class="mt-5 contact-form">                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>TOTAL Cost</label>                                    
                                            <input type="number" name="c" class="form-control" value="<?php echo $totalresult; ?>" readonly>
                                        </div>
                                    </div>
                                          
                                    <div>
                                        <img src="./images/download__1_removebg_preview.png" alt="" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    </div>    
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Credit Card No.</label>                                    
                                            <input type="number" name="creditno" class="form-control">
                                        </div>
                                    </div>                                          
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" name="submit2" class="pull-right btn btn-default">NEXT <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
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