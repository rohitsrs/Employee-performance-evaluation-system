<html>
<head><title>Stud</title>
<link rel="stylesheet" type="text/css" href="fe.css">
<div class="h1">
<h1 style= 'color:black; border-radius: 10px; width:35%; border:4px solid white; font-size:40px;'> ::REMARK::</h1>
</div>
</head>
<body background="princiback.jpg">
<div class="form01">
<?php
  session_start();
  $rand=$_GET['id']; 
  $ran=$_GET['user']; 
  $ra=$_GET['sub']; 
  echo "<p style= 'color:black; font-size:25px;'>Teacher id:$rand ::  Name:$ran  :: Subject:$ra</p>";
  
  $_SESSION['lid'] =$_GET['id']; 
  $_SESSION['lname'] =$_GET['user']; 
?>

<form action="recal.php" method="POST">
<p style='font-size:20px;'>1.Inspires pupils to advance at their optimum rate?</p>
  <input type="radio" name="sub" value="1">Poor 
  <input type="radio" name="sub" value="2"> Average
  <input type="radio" name="sub" value="3"> Good
  <input type="radio" name="sub" value="4"> Very good
  <input type="radio" name="sub" value="5"> Excellent

<p style='font-size:20px;'>2.Is willing to experiment with new educational techniques?</p>
  <input type="radio" name="know" value="1">Poor 
  <input type="radio" name="know" value="2"> Average
  <input type="radio" name="know" value="3"> Good
  <input type="radio" name="know" value="4"> Very good
  <input type="radio" name="know" value="5"> Excellent
  
<p style='font-size:20px;'>3.Allows students to help plan objectives,select activities,and evaluate learning?</p>
  <input type="radio" name="exp" value="1">Poor 
  <input type="radio" name="exp" value="2"> Average
  <input type="radio" name="exp" value="3"> Good
  <input type="radio" name="exp" value="4"> Very good
  <input type="radio" name="exp" value="5"> Excellent
  
<p style='font-size:20px;'>4.Communicates clearly and correctly in speech and writing?</p>
  <input type="radio" name="skill" value="1">Poor 
  <input type="radio" name="skill" value="2"> Average
  <input type="radio" name="skill" value="3"> Good
  <input type="radio" name="skill" value="4"> Very good
  <input type="radio" name="skill" value="5"> Excellent
  
<p style='font-size:20px;'>5.Uses well-organized classroom plans?</p>
  <input type="radio" name="att" value="1">Poor 
  <input type="radio" name="att" value="2"> Average
  <input type="radio" name="att" value="3"> Good
  <input type="radio" name="att" value="4"> Very good
  <input type="radio" name="att" value="5"> Excellent<br><br>

  <input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>