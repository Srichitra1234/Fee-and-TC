<?php
include_once 'dbconfig1.php';
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($db,"select Username from student where Username='$user_check'");
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['username'];
?>