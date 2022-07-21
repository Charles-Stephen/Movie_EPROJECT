<?php
$timeid = $_POST['id'];

$db = mysqli_connect("localhost", "root", "", "my_movie");
$sel = "SELECT * FROM `movie_sch2` WHERE `id` = $timeid";

$result = mysqli_query($db, $sel);
while($row = mysqli_fetch_array($result)) { ?>
    <?php echo "Available Seats <br>" . "|" . " " . "Box : " . $row["7"] . " " . "|" . " " . "Gold : " . $row["8"] . " " . "|" . " " . "Platinum : " . $row["9"] . " " . "|"; ?>
<?php 
}
exit();