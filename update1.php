<?php
include_once 'dbconfig1.php';
//$name=$_POST['name'];
$name=$_POST['name'];
$branch=$_POST['course'];
$year=$_POST['yrofsty'];
$sql="INSERT INTO stinfo(name,course,yrofsty) VALUES('$name',$branch','$year');";
mysqli_query($conn,$sql);
header('Location: http://localhost/FeeTc/update.php?update=success');
?>
