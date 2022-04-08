<?php
$Username="";
if(isset($_POST['htno'])){
include_once 'dbconfig1.php';
$Username=$_POST['htno'];
$name=$_POST['name'];
$Email=$_POST['Email'];
$Password=md5($_POST['Password']);
$s= " select * from student where htno= '$Username'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo" Username already taken";
}
else{
    $reg=" insert into student(htno,name,Email,Password) values ('$Username','$name','$Email','$Password')";
    mysqli_query($conn,$reg);
    echo"<h3 style='text-align:center; color:green;'> Registration successful</h3>";
    echo "click <a href='http://localhost/FeeTc/student.php'>here</a> to login ";
}
}
