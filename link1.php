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
           $sql="SELECT `paidamount` as `paid` from notpaid WHERE `course` ='$course'";
           $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            //if (!empty($this->resource) && $this->resource instanceof mysqli_result)  
           {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $paid = $row['paid'];
            echo $paid;
           } 
          // 
           //$balances=$fdem-$amount;
           if ($paid<30000)
           {
            header("Location: http://localhost/FeeTc/table.php?paidforyr=$paidforyr&&course=$course");
            //header("Location: http://localhost/FeeTc/action_page1.php.php?course=$course"); 
            exit();
        }
        
      }

      if ($paidforyr=='2')
        {
           $sql="SELECT `paidamount` as `paid` from notpaid WHERE `course` ='$course'";
           $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            //if (!empty($this->resource) && $this->resource instanceof mysqli_result)  
           {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $paid = $row['paid'];
            echo $paid;
           } 
          // 
           //$balances=$fdem-$amount;
           if ($paid<30000)
           {
            header("Location: http://localhost/FeeTc/table.php?paidforyr=$paidforyr&&course=$course");
            //header("Location: http://localhost/FeeTc/action_page1.php.php?course=$course"); 
            exit();
        }
        
      }

      if ($paidforyr=='3')
        {
           $sql="SELECT `paidamount` as `paid` from notpaid WHERE `course` ='$course'";
           $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            //if (!empty($this->resource) && $this->resource instanceof mysqli_result)  
           {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $paid = $row['paid'];
            echo $paid;
           } 
          // 
           //$balances=$fdem-$amount;
           if ($paid<30000)
           {
            header("Location: http://localhost/FeeTc/table.php?paidforyr=$paidforyr&&course=$course");
            //header("Location: http://localhost/FeeTc/action_page1.php.php?course=$course"); 
            exit();
        }
        
      }

      if ($paidforyr=='4')
        {
           $sql="SELECT `paidamount` as `paid` from notpaid WHERE `course` ='$course'";
           $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            //if (!empty($this->resource) && $this->resource instanceof mysqli_result)  
           {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $paid = $row['paid'];
            echo $paid;
           } 
          // 
          // $balances=$fdem-$amount;
           if ($paid<30000)
           {
            header("Location: http://localhost/FeeTc/table.php?paidforyr=$paidforyr&&course=$course");
            //header("Location: http://localhost/FeeTc/action_page1.php.php?course=$course"); 
            exit();
        }
        
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