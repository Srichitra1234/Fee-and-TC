<?php
if (isset($_POST['submit'])) {
    $htno = $_POST['htno'];
    // echo $htno;
}
$totalDemand=0;
$totalCollection=0;
$balance=0;
include_once 'dbconfig1.php';
$sql = "SELECT `fyrdem`+`secyrdem`+`thyrdem`+`fouryrdem` as totalDemand FROM studtc WHERE `htno`='$htno'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $totalDemand = $row['totalDemand'];
    echo $totalDemand;
} 
$sql2="SELECT SUM(`paidamount`) as totalCollection FROM `feepaid` WHERE htno= '".$htno."'";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    $row2 = mysqli_fetch_assoc($result2);
    $totalCollection = $row2['totalCollection'];
    echo $totalCollection;
} 
$balance=$totalDemand-$totalCollection;
if ($balance>0){
    echo 'You have fee due of '.$balance;
}
else{
    header("Location: http://localhost/FeeTc/tc1.php?htno=$htno"); 
exit();
}
mysqli_close($conn);
?>