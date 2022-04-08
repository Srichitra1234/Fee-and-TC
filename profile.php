<?php

include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <table>
      <tr>
          <th>Profile</th>
      </tr>
      <tr>
          <td>Name:<?php echo $login_session; ?></td>
          <td>Rollno:</td>
          <td>Branch:</td>
      </tr>
     
    </table>
</body>
</html>