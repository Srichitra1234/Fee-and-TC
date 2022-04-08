<?php
$paidforyr=$_GET['paidforyr'];
$course=$_GET['course'];
include_once 'dbconfig1.php';
$sql = "select * from feepaid where paidforyr='$paidforyr' and course='$course'";
$data=mysqli_query($conn,$sql); 
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fully paid</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
            padding-top: 70px;
            padding-left: 50px;
        }
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 800px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>

<body>
    <table id='customers' align="center">
    <tr>
        <th colspan='4'><h2 >Student Details</h2></th>
    </tr>
        <tr>
            <th>RollNumber</th>
            <th>Student Name</th>
            <th>Branch</th>
        </tr>
        <?php
          while($rows=$data->fetch_assoc())
          {
        ?>
        <tr>
                <td align="center"><?php echo $rows['htno'];?></td>
                <td align="center"><?php echo $rows['name'];?></td>
                <td align="center"><?php echo $rows['course'];?></td>
        </tr>
        <?php
          }
        ?>
    </table>
</body>
</html>




