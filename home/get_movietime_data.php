<?php
$timeid = $_POST['id'];


$db = mysqli_connect("localhost", "root", "", "my_movie");
$sel = "SELECT mt.id,mt.time FROM `movie_sch2` m INNER JOIN movie_time mt ON m.movie_time_id = mt.id  WHERE m.id = $timeid";
echo $sel;

$result = mysqli_query($db, $sel);
while($row = mysqli_fetch_array($result)) { ?>
<option value="0">Please Select</option>
<option value="<?php echo $row['id']; ?>"><?php echo $row['time']; ?></option>
<?php 
}
exit();