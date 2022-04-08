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
      padding-left: 450px;
    }

    input[type="submit"] {
      width: 200px;
      height: 50px;
      background-color: #fb2525;
      color: #fff;
      border-radius: 25px;
      font-size: 25px;
      font: sans-serif;
    }

    input[type='submit']:hover {
      outline: none;
      border: none;
      cursor: pointer;
      background-color: #ffc107;
      color: #000;
    }

    .container {
      padding-top: 40px;
      background-color: #000;
      width: 350px;
      height: 350px;
      text-align: center;
    }

    input[type='text'] {
      height: 30px;
      width: 250px;
      font-size: 20px;
      border-radius: 10px;
    }

    input[type='password'] {
      height: 30px;
      width: 250px;
      font-size: 20px;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="registration.php" method="POST" onsubmit="return validate()">
      <br>
      <input type="text" name="htno" placeholder="Roll Number" required>
      <br><br>
      <input type="text" name="name" placeholder="Name" required>
      <br><br>
      
      <input type="text" name="Email" placeholder="Email" required>
      <br><br>
      <input type="password" id="pwd1" name="Password" placeholder="Password" required>
      <br><br>
      <input type="password" id="pwd2" name="Password2" placeholder="Retype Password" required>
      <br><br>
      <input type="submit" name="Submit">
    </form>
  </div>
  <script>
    function validate() {
      var pwd1 = document.getElementById("pwd1").value;
      var pwd2 = document.getElementById("pwd2").value;
      if (pwd1 != pwd2) {
        alert("Passwords mismatch");
        return false;
        
      }
      return true;
    }
  </script>
</body>

</html>