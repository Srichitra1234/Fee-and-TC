<?php
include_once 'dbconfig1.php';
$name=$_POST['name'];
$uname=$_POST['Username'];
$email=$_POST['Email'];
$password=md5($_POST['Password']);
$sql="INSERT INTO student (name,Username,Email,Password) VALUES ('$name,''$uname',$email','$password');";
mysqli_query($conn,$sql);
header('Location: http://localhost/FeeTc/register.php?register=success');
mysqli_close($conn);
?>
