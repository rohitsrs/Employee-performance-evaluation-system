<html>
<head><title>Stud</title>
<link rel="stylesheet" type="text/css" href="prinlog.css">
<a href="home.html">
		<button class="btn02" type="button">HOME</button>
</a>
<a href="princi.html">
		<button class="btn03" type="button">PREV</button>
</a>
<div class="header">
	<h1 align="center" id="header1">DETAILS</h1>
</div>
</head>
<body>
<div class="frame01">
<?php
$servername = "localhost";
$database = "36918";
$username = "root";
$password = "";



// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) 
{

    die("Connection failed: " . mysqli_connect_error());

}
else
{
	$result=mysqli_query($conn,"select * from teacher")
		or die("failed to query database".mysqli_error($conn));
	

	
		echo "<table border='1'>
		<tr>
		<th style='color:red; font-size:40px;'> REMARK </th>
		<th style='color:red; font-size:40px;'> TEACHER ID </th>
		<th style='color:red; font-size:40px;'> NAME </th>
		<th style='color:red; font-size:40px;'> BRANCH </th>
		<th style='color:red; font-size:40px;'> SUBJECT </th>
		</tr>";

			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td><a href=\"remark.php?id={$row['tid']}&user={$row['tname']}&sub={$row['tsub']}\">FORM</a></td>";
				echo "<td>" . $row['tid'] . "</td>";
				echo "<td>" . $row['tname'] . "</td>";
				echo "<td>" . $row['tbranch'] . "</td>";
				echo "<td>" . $row['tsub'] . "</td>";
				echo "</tr>";
			
			}
		
		
		
	
}

?>
</div>
</body>
</html>	