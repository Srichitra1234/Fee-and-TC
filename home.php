<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="list.css">


<body>
 <div class="container">
  <div class="row">
    <div class="col">
     <form action="/action_page.php">
        <input type="text" id="rno" name="rno" placeholder="enter rollno." ><br><br>
        <input type="submit" value="Submit">
     </form>
    </div>
  
    <div class="col">
      <form>
      <label for="date">From:</label> <br>
       <input type="date" id="paid date" name="paid date"> <br>
       <label for="date">To:</label><br>
       <input type="date" id="paid date" name="paid date"> <br>
        <input type="submit" value="submit">
   </form>
    </div> 
</div>
<div class="row">
  <div class="col">
    <form>
    <label for="branch">Select Branch:</label>
     <select name="branch" id="branch">
    <option value="branch">CSE</option>
    <option value="ECE">ECE</option>
    <option value="EEE">EEE</option>
    <option value="CIVIL">CIVIL</option>
    <option value="MECH">MECH</option><br><br>
    <input type="submit" value="submit">
    </form>
 </div>
</div>
 </div>
</body>
</head>
</html>