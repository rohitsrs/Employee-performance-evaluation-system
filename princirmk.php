<html>
<head><title>Princi</title>
<link rel="stylesheet" type="text/css" href="princirmk.css">

<div class="header">
	<h1 align="center" id="header1">PRINCI</h1>
</div>
</head>
<body>
<div class="frame01">
<?php
  session_start();
  $rand=$_GET['id']; 
  $ran=$_GET['user']; 
  $ra=$_GET['sub']; 
  echo "<p style= 'color:yellow; font-size:25px;'>Teacher id:$rand ::  Name:$ran  :: Subject:$ra</p>";
  
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

  <input type="submit" name="submit" value="Submit">
</form>


	

</div>
</body>
</html>