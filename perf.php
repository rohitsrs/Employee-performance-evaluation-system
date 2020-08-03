<html>
<head><title>Perf</title>
<link rel="stylesheet" type="text/css" href="per.css">
<a href="home.html">
		<button class="btn02" type="button">HOME</button>
</a>
<a href="admin.html">
		<button class="btn03" type="button">PREV</button>
</a>
<div class="header">
	<h1 align="center" id="header1">PERFORMANCE EVALUATION</h1>
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
	$result=mysqli_query($conn,"select * from Teacher")
		or die("failed to query database".mysqli_error($conn));
	
     while($row=mysqli_fetch_array($result))
	 {
		$av=$row['avg_res'];
		$st=$row['stu_feed'];
		$ic=$row['ict'];
		$ca=$row['conf_att'];
		$cc=$row['conf_con'];
		$pp=$row['pap_pub'];
		$dl=$row['dlc'];
		$cl=$row['clc'];
		$rp=$row['rop'];
		$td=$row['tid'];
		$total=($av+($st*4)+($ic*10)+$ca+$cc+$pp+($dl*10)+($cl*10)+($rp*4));
		$total=($total/360)*100;
		$sql = "UPDATE teacher SET perf=$total Where tid=$td";
		mysqli_query($conn, $sql) or die("failed to query database".mysqli_error($conn));
	}
	
	$result=mysqli_query($conn,"select * from Teacher")
		or die("failed to query database".mysqli_error($conn));
	
	echo "<table border='1'>
		<tr>
		<th style='color:red; font-size:40px;'> NAME </th>
		<th style='color:red; font-size:40px;'> BRANCH </th>
		<th style='color:red; font-size:40px;'> SUBJECT </th>
		<th style='color:red; font-size:40px;'> RESULT </th>
		<th style='color:red; font-size:40px;'> FEEDBACK </th>
		<th style='color:red; font-size:40px;'> REMARK </th>
		<th style='color:red; font-size:40px;'> PERFORM</th>
		</tr>";

			while($ro = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>" . $ro['tname'] . "</td>";
				echo "<td>" . $ro['tbranch'] . "</td>";
				echo "<td>" . $ro['tsub'] . "</td>";
				echo "<td>" . $ro['avg_res'] . "</td>";
				echo "<td>" . $ro['stu_feed'] . "</td>";
				echo "<td>" . $ro['rop'] . "</td>";
				echo "<td>" . $ro['perf'] ."%". "</td>";
				echo "</tr>";
			
			}
		
		
		
	 

}
?>
</div>
</body>
</html>	