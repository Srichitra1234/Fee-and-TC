<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="lists.css">
</head>
<body>
 <div class="container">
   
   <div id="fullypaid">
      <form action="link.php" method='POST'>
         <p>Fully paid:</p>
         <select name="paidforyr" id="paidforyr" required>
          <option value="" selected disabled hidden>Select Year</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
         <option value="4">4</option>
    </select>
    <br><br>
    <select name="course" id="course" required>
          <option value="" selected disabled hidden>Select Branch</option>
          <option value="CSE">CSE</option>
          <option value="ECE">ECE</option>
          <option value="EEE">EEE</option>
         <option value="CIVIL">CIVIL</option>
    </select>
    <br><br>
    <input type="submit" value="Submit" name="submit">
      </form>
   </div>
   <div id="defaulters">
     <form action="link1.php" method="POST">
        <p>Defaulters:</p>
          <select name="paidforyr" id="paidforyr" required>
              <option value="" selected disabled hidden>Select Year</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
             <option value="4">4</option>
          </select>
          <br><br>
          <select name="course" id="course" required>
          <option value="" selected disabled hidden>Select Branch</option>
          <option value="CSE">CSE</option>
          <option value="ECE">ECE</option>
          <option value="EEE">EEE</option>
         <option value="CIVIL">CIVIL</option>
    </select>
    <br><br>
    <input type="submit" value="Submit" name="submit">
     </form>
   </div>
   
   <div id="generate">
    <form action="action.php" method='POST'>
       <p>Generate TC:</p>
        <input type="text" id="rno" name="htno" placeholder="enter rollno." required><br><br>
        <input type="submit" value="Submit" name="submit">
     </form>
   </div>
</div>
</body>
</html>