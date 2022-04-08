<?php

if (isset($_POST['submit']))
{

    $htno=$_POST['htno'];
}
    include_once 'dbconfig1.php';
    $sql="select * from `stinfo` where `htno`='$htno'";
    // echo $sql;
    // $sql="select * from users where Username='".$uname."'AND Password='".$password."' limit 1";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        header('Location: http://localhost/FeeTc/stinfo.php');

        exit();
    }
   // else{//$password= "";
     //   echo " You Have Entered Incorrect rollnumber";
       // header('Location: http://localhost/FeeTc/');
       // exit();
    
    
    //}



?>
