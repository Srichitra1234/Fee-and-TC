<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Transfer Certifacate</title>
  <style type="text/css">
    <!--
    .style1 {
      font-size: 24px;
      font-weight: bold;
    }

    #Layer1 {
      position: absolute;
      width: 79px;
      height: 79px;
      z-index: 1;
      left: 804px;
      top: 200px;
    }

    body {
      background-image: url('meclogobg.JPG');
      background-repeat: no-repeat;
      background-size: 450px 450px;
      background-position: center;
    }
    -->
  </style>
</head>
<?php
$htno = $_GET['htno'];
require('dbconfig1.php');
// $db = mysql_connect("localhost", "root", "") or die("Couldn't connect to db!");
//mysql_select_db("tufepac") or die("Couldn't select db!"); 

$sql = "SELECT `htno`, `name`, `fname`, `mname`, `course`, `admisno`, `gender`, `dob`, `caste`, `yrofstudy`, `nationality`, `religion`, `bonyrofadmis`, `bondtofleaving`, `tcyradm`, `tcyrleav`, `reforleav`, `conduct`, `ident1`, `ident2`, `batch`, `fyrdem`, `secyrdem`, `thyrdem`, `fouryrdem` FROM `studtc` WHERE `htno`='$htno'";
// echo $sql;
$result = mysqli_query($conn, $sql);
?>

<body>
  <font size="-1">
    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc())
      //while (list($id, $halticketno, $name, $fname,$mname, $course,$admisno, $gender, $dob, $caste, $yrofstudy, $nationality, $religion, $yrofadmis, $dtofleaving, $tcyradm, $tcyrleav, $reforleav, $conduct, $ident1, $ident2, $batch) = mysql_fetch_row($rs))
      //while($row1=mysql_fetch_array($rs))
      {
    ?>
        <table width="626" height="831" border="2" align="center" cellpadding="0" cellspacing="0">
          <tr>

            <td height="105" colspan="4" style="border: 0px;">
              <table width="568" height="92">
                <tr>
                  <td width="106" height="55"><a href="home.php"><img src="meclogo.JPG" alt="mipgs logo" width="75" height="87" border="0" align="right" /></a></td>
                  <td width="452" height="55">
                    <div align="center"><span class="style1">MATRUSRI ENGINEERING COLLEGE </span>(Sponsored by Matrusri Education Society)<br />
                      Affiliated to Osmania University &amp; Recognized by AICTE<br>
                      #16-1-486 Saidabad, Hyderabad-59,
                      Ph: 040-24072764 </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <tr>
            <td height="30" colspan="8">
              <div align="left">&nbsp;Certificate No<strong>: </strong>MEC/<?php //echo $batch; 
                                                                            ?><?php echo $row['htno']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:<?php echo date("d-F-Y") ?> </div>
            </td>
          </tr>
          <tr>
            <td colspan="4" style="border: 0px;">
              <div style="text-align:center;margin-left: 100px;">
                <p><strong><u>TRANSFER CERTIFICATE </u></strong></p>
              </div>
            </td>
            <td style="border: 0px;">

              <div id="Layer1tt" style="float: right;padding-top: 20px; margin-right: 20px;">
                <table width="76" height="79" border="1" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
                      <?php echo "<img src=images/" . $htno . ".jpg  alt='error' border=1 width=100 height=100 />" ?>
                    </td>
                  </tr>
                </table>
              </div>
              <p>&nbsp;</p>
              </div>
            </td>
          </tr>
          <tr>
            <td width="24" height="29">
              <div align="center">1</div>
            </td>
            <td width="316">&nbsp; Student Hallticket No </td>
            <td width="276" colspan="6"> &nbsp;<?php echo $row['htno']; ?></td>
          </tr>
          <tr>
            <td height="25">
              <div align="center">2</div>
            </td>
            <td>&nbsp;Name of the Student </td>
            <td colspan="6"> &nbsp;<?php echo $row['name']; ?></td>
          </tr>
          <tr>
            <td height="29">
              <div align="center">3</div>
            </td>
            <td>&nbsp;<font size="-1">Father's</font> Name / Guardian Name </td>
            <td colspan="6"> &nbsp;<?php echo $row['fname']; ?></td>
          </tr>
          <tr>
            <td>
              <div align="center">4</div>
            </td>
            <td>&nbsp;<font size="-1">Mother's</font> Name</td>
            <td colspan="6">&nbsp;<?php echo $row['mname']; ?></td>
          </tr>
          <tr>
            <td>
              <div align="center">5</div>
            </td>
            <td>&nbsp;Date of Birth </td>
            <td colspan="6"> &nbsp;<?php
                                    $dob = $row['dob'];
                                    $newDate = date("d-m-Y", strtotime($dob));
                                    echo  $newDate;
                                    //echo date('d-m-y',$dob); 
                                    ?></td>
          </tr>
          <tr>
            <td>
              <div align="center">6</div>
            </td>
            <td>&nbsp;Caste Category </td>
            <td colspan="6"> &nbsp;<?php echo $row['caste']; ?></td>
          </tr>
          <tr>
            <td>
              <div align="center">7</div>
            </td>
            <td>&nbsp;Nationality</td>
            <td colspan="6"> &nbsp;<?php echo $row['nationality']; ?></td>
          </tr>
          <tr>
            <td>
              <div align="center">8</div>
            </td>
            <td>&nbsp;Religion</td>
            <td colspan="6"> &nbsp;<?php echo $row['religion']; ?></td>
          </tr>
          <tr>
            <td>
              <div align="center">9</div>
            </td>
            <td>&nbsp;Date of Admission </td>
            <td colspan="6"> &nbsp;&nbsp;<?php

                                          $tcyradm = $row['tcyradm'];
                                          $newDat = date("d-m-Y", strtotime($tcyradm));
                                          echo $newDat;
                                          ?></td>
          </tr>
          <tr>
            <td>
              <div align="center">10</div>
            </td>
            <td>&nbsp;Gender</td>
            <td colspan="6"> &nbsp;<?php echo $row['gender']; ?></td>
          </tr>
          <tr>
            <td>
              <div align="center">11</div>
            </td>
            <td>&nbsp;Course(Branch), Year Admitted </td>
            <td colspan="6"> &nbsp;B.E.(<?php echo $row['course'] . "),&nbsp;&nbsp;&nbsp;";
                                        echo date('Y', strtotime($tcyradm)); ?></td>
          </tr>
          <tr>
            <td>
              <div align="center">12</div>
            </td>
            <td>&nbsp;Date of leaving the College </td>
            <td colspan="6"> &nbsp;<?php
                                    $tcyrleav = $row['tcyrleav'];
                                    $newDa = date("d-m-Y", strtotime($tcyrleav));
                                    echo $newDa; ?></td>
          </tr>
          <tr>
            <td>
              <div align="center">13</div>
            </td>
            <td>&nbsp;Course(Branch), Year &amp; Sem at the time of leaving </td>
            <td colspan="6"> &nbsp;B.E.(<?php echo $row['course'] . ")&nbsp;&nbsp;&nbsp;IV/IV - II SEM"; ?></td>
          </tr>
          <tr>
            <td>
              <div align="center">14</div>
            </td>
            <td>&nbsp;Reason for leaving </td>
            <td colspan="6"> &nbsp;<?php

                                    echo $row['reforleav']; ?></td>
          </tr>
          <tr>
            <td>
              <div align="center">15</div>
            </td>
            <td>&nbsp;Conduct</td>
            <td colspan="6"> &nbsp;<?php echo $row['conduct']; ?></td>
          </tr>
          <tr>
            <td height="44">
              <div align="center">1<font size="-1">6</font>
              </div>
            </td>
            <td>&nbsp;Identification Marks </td>
            <td colspan="6"> &nbsp;<?php echo $row['ident1'] . "<br>&nbsp;";
                                    echo $row['ident1']; ?></td>
          </tr>
          <tr>
            <td height="124" colspan="8">
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp; &nbsp;&nbsp;&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prepared by&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I/C Academic Section&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;Principal </strong></p>
              <p>&nbsp;</p>
            </td>
          </tr>
        </table>
    <?php
      }
    }
    ?>
  </font>
</body>

</html>