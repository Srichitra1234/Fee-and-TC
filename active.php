<!-- <?php

// if(isset($_POST['submit']))
// {    include_once 'dbconfig1.php';
//     $uname=$_SESSION['userId'];
//     $htno=${$uname};
//     $sql= "select * from stinfo where `htno`= '${$uname}'";
//     $result==mysqli_query($conn,$sql);
//     if(mysqli_num_rows($result)==1){
//         //echo " You Have Successfully Logged in";
//         header('Location: http://localhost/FeeTc/stinfo.php');

//         exit();
//     }
//     else{
//         header('Location: http://localhost/FeeTc/');
//         exit();
//     }
// }
?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body{
            background: url(nature.jpeg);
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: cover;
            font-family: sans-serif;
            padding-top: 100px;
            padding-left: 480px;
            
         }
         .container{
             background-color: #000;
             height: 350px;
             width: 300px;
             text-align: center;
             padding-top: 50px;
         }
         p{
          margin: 0;
          font: sans-serif;
          font-size: 30px;
          padding: 5px 5px 5px 5px;
          text-align: center;
          color: #fff;
         }
         input[type="submit"]{
          width: 235px;
          height: 50px;
          background-color: red;
          color: #fff;
          border-radius: 22px;
          font-size: 20px;
          font: sans-serif;
          text-align: center;
          
       }
    input[type='submit']:hover
    { 
      cursor: pointer;
      background-color: #ffc107;
      color: #000;
    }
    input[type='text']
    {
        width: 235px;
        height: 50px;
        font-size: 20px;
       border-radius: 22px;
    }
    </style>
</head>
<body>
    <div class="container">
    <form action="stinfo.php" method="POST">
        <p>Student Details</p>
        <br><br>
        <input type="text" id="rno" name="htno"  placeholder="enter rollnumber" required>
        <br><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
    </div>
</body>
</html>