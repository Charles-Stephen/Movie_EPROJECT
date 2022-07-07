<?php
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
                                 <span style=" color:red;"><h2>Available Tickets</h2></span>
                                 <form action="#" method="post" class="mt-5 contact-form">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label>SELECT MOVIE</label>
                                                <select  id="movie" name ="myselmov" class="form-control">
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
                                                <label>SELECT THEATER</label>
                                                <select class="form-control" id="cinema">
                                                    <option>Select Theater</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>SELECT  SEAT CATEGORY</label>
                                                <select class="form-control" name="mycat">
                                                    <option>Select Seat Category</option>
                                                    <?php
                                                        $selct = "SELECT * FROM `seat_catgory`";
                                                        $resultct = mysqli_query($db, $selct);
                                                        if(mysqli_num_rows($result)) {
                                                            while($rowct = mysqli_fetch_array($resultct)) {                                                        
                                                    ?>                        
                                                        <option value="<?php echo $rowct[0]; ?>">
                                                            <?php echo $rowct[1]; ?>                                                                               
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
                                                <label>ADULT SEATS</label>                                    
                                                <select class="form-control" name="myseat1">
                                                    <option>No. of Seats</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label>KIDS SEATS <i>50% off</i> (<i>bellow 10yrs</i>)</label>
                                                <select class="form-control" name="myseat2">
                                                    <option>No. of Seats</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="email">SELECT TIME & DATE</label>
                                                <select class="form-control" id="date">
                                                    <option>Select Date</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-default">Submit</button>
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

     <script>
        $('#movie').on('change', function() {
    const id =$(this).find(":selected").val();

    $.ajax({
  url: "get_cinema_data.php",
  cache: false,
  type: "POST",
  data: {id : id},
  success: function(html){
    // alert(html);
    $('#cinema').html(html);
  }
});

});;
        $('#cinema').on('change', function() {
    const id =$(this).find(":selected").val();

    $.ajax({
  url: "get_moviedate_data.php",
  cache: false,
  type: "POST",
  data: {id : id},
  success: function(html){
    $('#date').html(html);

  }
});
 
});;
// $('#date').on('change', function() {
//     const id =$(this).find(":selected").val();

//     $.ajax({
//   url: "get_movietime_data.php",
//   cache: false,
//   type: "POST",
//   data: {id : id},
//   success: function(html){
//     $('#mytime').html(html);

//   }
// });

// });;
     </script>
 </body>
 <!-- Mirrored from movie.themepul.com/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 15:07:17 GMT -->
</html>