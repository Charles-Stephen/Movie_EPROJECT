<?php
session_start();
$id = $_POST['id'];
$whatmovie = $_SESSION["whatmovie"];

$db = mysqli_connect("localhost", "root", "", "my_movie");
$sel = "SELECT m.id,m.movie_date,tm.time FROM `movie_sch2` m INNER JOIN theater t ON m.theater_id = t.id INNER JOIN movie_time tm ON m.movie_time_id = tm.id WHERE t.id = $id && m.movie_id = $whatmovie;";


$result = mysqli_query($db, $sel);

?> <option value="0">Please Select</option><?php
while($row = mysqli_fetch_array($result)) { ?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['movie_date'] . " at " . $row["time"]; ?></option>
<?php 
}
exit();