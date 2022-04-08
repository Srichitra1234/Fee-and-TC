<?php
        
          if (isset($_POST['submit'])) {
            $paidforyr = $_POST['paidforyr'];
            $course=$_POST['course'];
         }
        //$fdem=0;
        //$secdem=0;
        //$tdem=0;
        //$amount=0;
        //$balances=0;
        include_once 'dbconfig1.php';
        if ($paidforyr=='1')
        {
           $sql="SELECT `feedem` as `fdem` from feepaid WHERE `course` ='$course'";
           $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            //if (!empty($this->resource) && $this->resource instanceof mysqli_result)  
           {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $fdem = $row['fdem'];
            echo $fdem;
           } 
           $sql2="SELECT `paidamount` as `amount` from feepaid WHERE `course` ='$course'";
           $result2 = mysqli_query($conn, $sql2);
           if (mysqli_num_rows($result2) > 0) 
           {
            // output data of each row
            $row2 = mysqli_fetch_assoc($result2);
            $amount = $row2['amount'];
            echo $amount;
           }
           //$balances=$fdem-$amount;
           if ($fdem==$amount)
           {
            header("Location: http://localhost/FeeTc/action_page1.php?paidforyr=$paidforyr&&course=$course");
            //header("Location: http://localhost/FeeTc/action_page1.php.php?course=$course"); 
            exit();
        }
      }

      if ($paidforyr=='2')
        {
           $sql="SELECT `feedem` as `fdem` from feepaid WHERE `course` ='$course'";
           $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            //if (!empty($this->resource) && $this->resource instanceof mysqli_result)  
           {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $fdem = $row['fdem'];
            echo $fdem;
           } 
           $sql2="SELECT `paidamount` as `amount` from feepaid WHERE `course` ='$course'";
           $result2 = mysqli_query($conn, $sql2);
           if (mysqli_num_rows($result2) > 0) 
           {
            // output data of each row
            $row2 = mysqli_fetch_assoc($result2);
            $amount = $row2['amount'];
            echo $amount;
           }
           $balances=$fdem-$amount;
           if ($balances==0)
           {
            header("Location: http://localhost/FeeTc/action_page1.php?paidforyr=$paidforyr&&course=$course");
            //header("Location: http://localhost/FeeTc/action_page1.php.php?course=$course"); 
            exit();
        }
      }

      if ($paidforyr=='3')
        {
           $sql="SELECT `feedem` as `fdem` from feepaid WHERE `course` ='$course'";
           $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            //if (!empty($this->resource) && $this->resource instanceof mysqli_result)  
           {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $fdem = $row['fdem'];
            echo $fdem;
           } 
           $sql2="SELECT `paidamount` as `amount` from feepaid WHERE `course` ='$course'";
           $result2 = mysqli_query($conn, $sql2);
           if (mysqli_num_rows($result2) > 0) 
           {
            // output data of each row
            $row2 = mysqli_fetch_assoc($result2);
            $amount = $row2['amount'];
            echo $amount;
           }
           //$balances=$fdem-$amount;
           if ($fdem==$amount)
           {
            header("Location: http://localhost/FeeTc/action_page1.php?paidforyr=$paidforyr&&course=$course");
            //header("Location: http://localhost/FeeTc/action_page1.php.php?course=$course"); 
            exit();
        }
         
      }

      if ($paidforyr=='4')
      {
         $sql="SELECT `feedem` as `fdem` from feepaid WHERE `course` ='$course'";
         $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0)
          //if (!empty($this->resource) && $this->resource instanceof mysqli_result)  
         {
          // output data of each row
          $row = mysqli_fetch_assoc($result);
          $fdem = $row['fdem'];
          echo $fdem;
         } 
         $sql2="SELECT `paidamount` as `amount` from feepaid WHERE `course` ='$course'";
         $result2 = mysqli_query($conn, $sql2);
         if (mysqli_num_rows($result2) > 0) 
         {
          // output data of each row
          $row2 = mysqli_fetch_assoc($result2);
          $amount = $row2['amount'];
          echo $amount;
         }
         $balances=$fdem-$amount;
         if ($balances==0)
         {
          header("Location: http://localhost/FeeTc/action_page1.php?paidforyr=$paidforyr&&course=$course");
          //header("Location: http://localhost/FeeTc/action_page1.php.php?course=$course"); 
          exit();
      }
    }
        else
        {
            echo "no records";
        }
        



//else
//{
  //  echo "records not found";
//}
 

mysqli_close($conn);
?>
        
</table>
</body>
</html>