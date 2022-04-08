<?php
include_once 'dbconfig1.php';
if(isset($_POST['username'])){

    $uname=$_POST['username'];
    $password=md5($_POST['password']);

    $sql="select * from users where Username='".$uname."'AND Password='".$password."' limit 1";
    // echo $sql;
    // $sql="select * from users where Username='".$uname."'AND Password='".$password."' limit 1";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        header('Location: http://localhost/FeeTc/home1.php');

        exit();
    }
    else{//$password= "";
        echo " You Have Entered Incorrect Password";
        header('Location: http://localhost/FeeTc/');
        exit();
    
    
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
<body>
  <div class="loginbox">
  <img src="avatar.png" class="avatar">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <h1>Login Here</h1>
      <p>Username</p>
      <input type="text" name="username" placeholder="Enter Username" required >
      <p>Password</p>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="submit" value="login" >
 </form>
</div>
</head>
</body>
</html>
        