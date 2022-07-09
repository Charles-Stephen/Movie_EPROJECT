<?php
session_start();
$movie_id = $_POST['id'];
$_SESSION["whatmovie"] = $movie_id;

$db = mysqli_connect("localhost", "root", "", "my_movie");
$sel = "SELECT t.id,t.name FROM `movie_sch2` m INNER JOIN theater t ON m.theater_id = t.id  WHERE m.movie_id = $movie_id";
// echo $sel;
$result = mysqli_query($db, $sel);

?> <option value="0">Please Select</option><?php
while($row = mysqli_fetch_array($result)) { 

?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
<?php 
}
exit();