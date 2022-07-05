<?php
$id = $_POST['id'];


$db = mysqli_connect("localhost", "root", "", "my_movie");
$sel = "SELECT m.id,m.movie_date FROM `movie_sch2` m INNER JOIN theater t ON m.theater_id = t.id WHERE t.id = $id";
echo $sel;

$result = mysqli_query($db, $sel);
while($row = mysqli_fetch_array($result)) { ?>
<option value="0">Please Select</option>
<option value="<?php echo $row['id']; ?>"><?php echo $row['movie_date']; ?></option>
<?php 
}
exit();