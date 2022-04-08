<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
    body {
    margin: 0;
    padding-top: 70px;
    background: url(nature.jpeg);
    background-size: cover;
    background-position: cover;
    font-family: sans-serif;
    }
    input[type="submit"]{
      width: 250px;
      height: 70px;
      background-color: red;
      color: #fff;
      border-radius: 25px;
      font-size: 25px;
      font: sans-serif;
    }
    input[type='submit']:hover
    { 
      cursor: pointer;
      background-color: #ffc107;
      color: #000;
    }
    .container
    {
       padding-top: 40px;
       background-color: #000;
       width: 330px;
       height: 350px;
       
    }
    p
    {
      margin: 0;
      font: sans-serif;
      font-size: 45px;
      padding: 5px 5px 5px 5px;
      text-align: center;
     color: #fff;
    }
   </style>
</head>
<body>
  <center><br><br>
  <div class="container">
  <form action="" method="POST">
    <br><br>
    <input type="submit" name="login" value="Login"><br><br>
    <br><br>
    <input type="submit" name="register" value="Register">
  </form>
  </div>
  <?php
  if (isset($_POST['login'])){
    header('Location: http://localhost/FeeTc/student.php');
  }
  if (isset($_POST['register'])){
    header('Location: http://localhost/FeeTc/register.php');
  }

  ?>
</center>
</body>
</html>  