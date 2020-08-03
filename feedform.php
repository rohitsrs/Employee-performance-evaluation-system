<!DOCTYPE html>
<html>
<head><title>Stud</title>
<link rel="stylesheet" type="text/css" href="f.css">
<div class="h1">
<h1 style= 'color:white; border-radius: 10px; width:35%; border:4px solid white; font-size:40px;'> ::FEEDBACK FORM::</h1>
</div>
</head>
<body background="manback.jpg">
<div class="form01">
<?php
  session_start();
  $rand=$_GET['id']; 
  $ran=$_GET['user']; 
  $ra=$_GET['sub']; 
  echo "<p style= 'color:black; font-size:25px;'>Teacher id:$rand ::  Name:$ran  :: Subject:$ra</p>";
  
  $_SESSION['id'] =$_GET['id']; 
  $_SESSION['name'] =$_GET['user']; 
?>

<form action="feed.php" method="POST">
<p style='font-size:20px;'>1.Subject coverage,syllabus completion?</p>
  <input type="radio" name="sub" value="1">Poor 
  <input type="radio" name="sub" value="2"> Average
  <input type="radio" name="sub" value="3"> Good
  <input type="radio" name="sub" value="4"> Very good
  <input type="radio" name="sub" value="5"> Excellent

<p style='font-size:20px;'>2.Knowledge of the subject displayed in class?</p>
  <input type="radio" name="know" value="1">Poor 
  <input type="radio" name="know" value="2"> Average
  <input type="radio" name="know" value="3"> Good
  <input type="radio" name="know" value="4"> Very good
  <input type="radio" name="know" value="5"> Excellent
  
<p style='font-size:20px;'>3.Ability to explain,clarity of concepts?</p>
  <input type="radio" name="exp" value="1">Poor 
  <input type="radio" name="exp" value="2"> Average
  <input type="radio" name="exp" value="3"> Good
  <input type="radio" name="exp" value="4"> Very good
  <input type="radio" name="exp" value="5"> Excellent
  
<p style='font-size:20px;'>4.Style of presentation and communication skills,innovative teaching methods?</p>
  <input type="radio" name="skill" value="1">Poor 
  <input type="radio" name="skill" value="2"> Average
  <input type="radio" name="skill" value="3"> Good
  <input type="radio" name="skill" value="4"> Very good
  <input type="radio" name="skill" value="5"> Excellent
  
<p style='font-size:20px;'>5.Ability to hold students attention and command of class?</p>
  <input type="radio" name="att" value="1">Poor 
  <input type="radio" name="att" value="2"> Average
  <input type="radio" name="att" value="3"> Good
  <input type="radio" name="att" value="4"> Very good
  <input type="radio" name="att" value="5"> Excellent<br><br>
</div>
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>