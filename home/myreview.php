<?php
$db = mysqli_connect("localhost", "root", "", "my_movie");
if(isset($_POST["submit"]))
{                             
    
    $date = date('m/d/Y h:i:s a', time());
    $mid = $_POST["mid"];                           
    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $Message = $_POST["msg"];
    $cmp = "INSERT INTO `review`(`Id`, `Movie_id`, `Name`, `Email`, `Message`, rv_date) VALUES (Null,'$mid','$Name','$Email','$Message', '$date')";
    $result3 = mysqli_query($db, $cmp);
//  $cp = mysqli_num_rows($result3);
//  if($cp) 
//    {
//      while($row3 = mysqli_fetch_array($result3))        
//        {   
//          header("Location:../admin/index.php");
//         }
//     }
?>
<script>
    window.location.assign("details.php?id=<?php echo $mid; ?>");
</script>
<?php
}
?>