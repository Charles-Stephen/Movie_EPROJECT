<?php
    session_start();
    if ($_SESSION["name"] == null) {
        header("Location: signin.php");
    }
    if ($_SESSION["mytype"] == 1) {
        ?>
            <Script>
                window.location.assign("../home/index.php");
            </Script>            
        <?php
    }
    $db = mysqli_connect("localhost", "root", "", "my_movie");
    $id = $_GET["id"];
    $sel = "SELECT * FROM `allmovies` WHERE `id` = $id";
    $result = mysqli_query($db, $sel);
    $row = mysqli_fetch_array($result);    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->
    <link rel="icon" href="img/signage-removebg-preview.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">




<!-- try -->

     <!-- owl carousel css -->
     <link href="../home/assets/owlcarousel/owl.carousel.css" rel="stylesheet" />
     <!-- / owl carousel css -->
     <!--  icon css -->
     <!-- <link href="../home/css/font-awesome.min.css" rel="stylesheet" /> -->
     <link href="../home/css/flaticon.css" rel="stylesheet" />
     <!-- <link href="../home/css/icofont.css" rel="stylesheet" /> -->
     <!-- / icon css -->
     <!-- animations css -->
     <link href="../home/assets/animations/animate.css" rel="stylesheet" />
     <link href="../home/assets/Video/video.popup.css" rel="stylesheet" />
     <!-- / animations css -->
     <!-- animations css -->
     <!-- <link href="../home/assets/navmenu/bootsnav.css" rel="stylesheet" /> -->
     <!-- / animations css -->
     <!-- slider css -->
     <link rel="../home/stylesheet" href="assets/bootstrap-slider/bootstrap-touch-slider.css">
     <!-- / slider css -->
     <!--  style css -->
     <link href="../home/css/style.css" rel="stylesheet" />
     <!-- / style css -->
     <!--  media css -->
     <link href="../home/css/media.css" rel="stylesheet" />
     <!-- / media css -->

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="ms-auto me-auto navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img src="./img/signage-removebg-preview.png" alt=""></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="profile/<?php echo $_SESSION["profile"]; ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION["name"]; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="theater.php" class="nav-item nav-link"><i class="fas fa-hotel"></i>Theater</a>
                    <a href="movie.php" class="nav-item nav-link"><i class="fas fa-film"></i>Movies</a>
                    <a href="schedule.php" class="nav-item nav-link"><i class="fas fa-calendar-alt"></i>Schedule</a>
                    <a href="tickets.php" class="nav-item nav-link"><i class="fas fa-ticket-alt"></i>Tickets</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="profile/<?php echo $_SESSION["profile"]; ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["name"]; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Profile Start -->
            <div class="container-fluid pt-4 px-4">
                <h1 class="text-center">Movies</h1>
                <div class="row g-4">                    
                    <h4>Movie Details</h4>
                    <div class="col-sm-12 col-xl-6">
                    <div class="item">
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
                        <!-- <img src="profile/<?php echo $row[1]; ?>" class="w-100" alt=""> -->
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <table class="table table-dark">

                                <tbody>                                    
                                    <tr>
                                        <th scope="col">Name</th>
                                        <td><?php echo $row[2]; ?></td>
                                    </tr> 
                                    <tr>
                                        <th scope="col">Description</th>
                                        <td><?php echo $row[4]; ?></td>
                                    </tr> 
                                    <tr>
                                        <th scope="col">Genre</th>
                                        <td><?php echo $row[5]; ?></td>
                                    </tr>       
                                    <tr>
                                        <th scope="col">Country</th>
                                        <td><?php echo $row[6]; ?></td>
                                    </tr>                      
                                    <tr>
                                        <th scope="col">Cast</th>
                                        <td><?php echo $row[7]; ?></td>
                                    </tr>                                    
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Profile End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">CMM MOVIES</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed: <a href="#">Charles Stephen, Maryam Fatima, Momna Khan</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <!-- try -->
    <script src="../home/js/jquery-1.12.4.min.js"></script>
     <script src="../home/assets/bootstrap/bootstrap.min.js"></script>
     <script src="../home/js/bootstrap-select.js"></script>
     <script src="../home/assets/navmenu/bootsnav.js"></script>
     <script src="../home/assets/animations/wow.min.js"></script>
     <script src="../home/assets/owlcarousel/owl.carousel.min.js"></script>
     <script src="../home/assets/bootstrap-slider/jquery.touchSwipe.min.js"></script>
     <script src="../home/assets/bootstrap-slider/bootstrap-touch-slider.js"></script>
     <script src="../home/assets/jquery-ui/jquery-ui.min.js"></script>
     <script src="../home/assets/Video/video.popup.js"></script>
     <script src="../home/js/jquery.syotimer.min.js"></script>
     <script src="../home/js/jquery.mixitup.min.js"></script>
     <script src="../home/js/tab.js"></script>
     <script src="../home/js/main.js"></script>
</body>

</html>