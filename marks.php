<!DOCTYPE html>
<html>
<head><title>Stud</title>
<link rel="stylesheet" type="text/css" href="fee02.css">
</head>
<body background="manback.jpg">
<div class="frame01">
<h1 align="center" style= 'color:black; border-radius: 10px; margin-left:20%; width:38%; border:4px solid black; font-size:40px;'> ::MARKS::</h1><br>
<?php
  session_start();
  $rand=$_GET['id']; 
  $ran=$_GET['user']; 
  $ra=$_GET['sub']; 
  echo "<p style= 'color:red; font-size:25px;'>Teacher id:$rand ::  Name:$ran  :: Subject:$ra</p>";
  
  $_SESSION['id'] =$_GET['id']; 
  $_SESSION['name'] =$_GET['user']; 
?>

<form action="ma.php" method="POST">
<br><br><label style= ' margin-left:14%;'>MARKS</label>
<input type="text" name="marks">
<br><br><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>