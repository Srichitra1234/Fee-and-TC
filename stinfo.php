<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        body {
            padding-top: 70px;
            padding-left: 50px;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 800px;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<?php
session_start();
$htno = $_GET['htno'];
$htno2=$_SESSION['userId'];
if($htno==$htno2){
include_once 'dbconfig1.php';
$sql = "SELECT * FROM `stinfo` where `htno`='$htno'";
//$sql="select * from users where Username='".$uname."'AND Password='".$password."' limit 1";
$data = mysqli_query($conn, $sql);
?>

<body>
    <?php

    while ($row = $data->fetch_assoc()) {

    ?>
        <table id="customers" align="center">
            <tr>
                <th colspan='3'>Student details</th>
            </tr>
            <tr>
                <td>Name:<?php echo $row['name'] ?></td>
                <td>Rollno:<?php echo $row['htno'] ?></td>
                <td>Branch:<?php echo $row['course'] ?></td>

            </tr>
            <tr>
                <td>Year of study:<?php echo $row['yrofsty'] ?></td>
                <td>Father name:<?php echo $row['fname'] ?></td>
                <td>Mother name:<?php echo $row['mname'] ?></td>
            </tr>
        </table>
        <br><br><br>
        <table id="customers" align="center">
            <tr>
                <th colspan='3'>Fee Details</th>
            </tr>
            <tr>
                <td>First year:
                    <?php
                    $sql2 = "SELECT `firyr` as `fyr` FROM `stinfo` WHERE `htno`='$htno' ";
                    $data2 = mysqli_query($conn, $sql2);
                    if (mysqli_num_rows($data2) > 0) {
                        $row2 = mysqli_fetch_assoc($data2);
                        $fyr = $row2['fyr'];
                        //echo $fyr;
                        if ($fyr == 30000) {
                            echo "paid";
                        } else if ($fyr == '0') {
                            echo "--";
                        } else if ($fyr > '0' and $fyr < '30000') {
                            $balance = 0;
                            $balance = 30000 - $fyr;
                            echo "you have a due of '$balance'";
                            echo "please pay the balance amount";
                        }
                    }
                    ?>
                </td>
                <td>Second year:
                    <?php
                    $sql2 = "SELECT `secyr` as `syr` FROM `stinfo` WHERE `htno`='$htno' ";
                    $data2 = mysqli_query($conn, $sql2);
                    if (mysqli_num_rows($data2) > 0) {
                        $row2 = mysqli_fetch_assoc($data2);
                        $syr = $row2['syr'];
                        //echo $fyr;
                        if ($fyr == 30000) {
                            echo "paid";
                        } else if ($syr == '0') {
                            echo "--";
                        } else if ($syr > 0 and $syr < '30000') {
                            $balance = 0;
                            $balance = 30000 - $syr;
                            echo "you have a due of '$balance'";
                            echo "please pay the balance amount";
                        }
                    }
                    ?>
                </td>

            </tr>

            <tr>
                <td>Third year:
                    <?php
                    $sql2 = "SELECT `thyr` as `tyr` FROM `stinfo` WHERE `htno`='$htno' ";
                    $data2 = mysqli_query($conn, $sql2);
                    if (mysqli_num_rows($data2) > 0) {
                        $row2 = mysqli_fetch_assoc($data2);
                        $tyr = $row2['tyr'];
                        //echo $fyr;
                        if ($tyr == 30000) {
                            echo "paid";
                        } else if ($tyr == '0') {
                            echo "--";
                        } else if ($tyr > 0 and $tyr < '30000') {
                            $balance = 0;
                            $balance = 30000 - $tyr;
                            echo "you have a due of '$balance'";
                            echo "please pay the balance amount";
                        }
                    }
                    ?>
                </td>
                <td>Fourth year:
                    <?php
                    $sql2 = "SELECT `fouyr` as `foyr` FROM `stinfo` WHERE `htno`='$htno' ";
                    $data2 = mysqli_query($conn, $sql2);
                    if (mysqli_num_rows($data2) > 0) {
                        $row2 = mysqli_fetch_assoc($data2);
                        $foyr = $row2['foyr'];
                        //echo $fyr;
                        if ($foyr == 30000) {
                            echo "paid";
                        } else if ($foyr == '0') {
                            echo "--";
                        } else if ($foyr > 0 and $fouyr < '30000') {
                            $balance = 0;
                            $balance = 30000 - $fouyr;
                            echo "you have a due of '$balance'";
                            echo "please pay the balance amount";
                        }
                    }
                    ?>
                </td>
            </tr>
        </table>
    <?php
    }
    mysqli_close($conn);
}else{
    echo 'you can not get for this htno';
}

    ?>
    <br>

</body>

</html>