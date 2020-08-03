<html>
<head><title>DETAILS</title>
<link rel="stylesheet" type="text/css" href="remo.css">
<a href="home.html">
		<button class="btn02" type="button">HOME</button>
</a>
<a href="admin.html">
		<button class="btn03" type="button">PREV</button>
</a>
<div class="header">
	<h1 align="center" id="header1">TEACHER DETAILS</h1>
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

	
	$result=mysqli_query($conn,"select * from teachinfo")
		or die("failed to query database".mysqli_error($conn));
	
	echo "<table border='1'>
		<tr>
		<th style='color:red; font-size:25px;'> ID </th>
		<th style='color:red; font-size:25px;'> NAME </th>
		<th style='color:red; font-size:25px;'> CONF ATTEND DATE </th>
		<th style='color:red; font-size:25px;'> CONF ATTEND PLACE</th>
		<th style='color:red; font-size:25px;'> CONF CON DATE </th>
		<th style='color:red; font-size:25px;'> CONF CON PLACE </th>
		<th style='color:red; font-size:25px;'> DATE OF PAP_PUB</th>
		<th style='color:red; font-size:25px;'> NAME OF JOURNAL</th>
		</tr>";

			while($ro = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>" . $ro['tid'] . "</td>";
				echo "<td>" . $ro['name'] . "</td>";
				echo "<td>" . $ro['cad'] . "</td>";
				echo "<td>" . $ro['cap'] . "</td>";
				echo "<td>" . $ro['ccd'] . "</td>";
				echo "<td>" . $ro['ccp'] . "</td>";
				echo "<td>" . $ro['dop'] . "</td>";
				echo "<td>" . $ro['noj'] . "</td>";
				echo "</tr>";
			
			}
		
		
		
	 

}
?>
</div>
</body>
</html>	