<?php
session_start();
    if(isset($_POST["sbt"])) {
        $chmovie = $_POST["mysearch"];
        $_SESSION["srch"] = $chmovie;
        ?>
            <Script>
                window.location.assign("../home/test2.php");
            </Script>            
        <?php
    }
?>