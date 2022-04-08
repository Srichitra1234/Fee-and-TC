<?php

include_once 'dbconfig1.php';

if (isset($_POST['htno'])) {

    $uname = $_POST['htno'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM `student` WHERE htno='" . $uname . "'AND Password='" . $password . "' limit 1";
    // echo $sql;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['userId'] = $uname;
        echo " You Have Successfully Logged in";
        header('Location: http://localhost/FeeTc/studentHome.php');

        exit();
    } else { //$password= "";
        echo " You Have Entered Incorrect Password";
        header('Location: http://localhost/FeeTc/student.php');
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
            <!-- <form action="a.php" method="POST"> -->
            <h1>Login Here</h1>
            <p>Rollnumber</p>
            <input type="text" name="htno" placeholder="Enter Rollnumber" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="login">
        </form>
    </div>
    </head>
</body>

</html>