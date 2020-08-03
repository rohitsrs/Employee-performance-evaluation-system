<html>
<head><title>Stud</title>
<link rel="stylesheet" type="text/css" href="stu.css">
<a href="home.html">
		<button class="btn02" type="button">HOME</button>
</a>
<a href="studlog.html">
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


session_start();
$sid=$_SESSION['pid'];
$spass=$_SESSION['pname'];


// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) 
{

    die("Connection failed: " . mysqli_connect_error());

}
else
{
	$result=mysqli_query($conn,"select * from Student where sid='$sid' and spass='$spass'")
		or die("failed to query database".mysqli_error($conn));
	$row=mysqli_fetch_array($result);

	if ($row['sid']==$sid && $row['spass']==$spass)
	{
		echo "<table border='1'>
		<tr>
		<th style='color:red; font-size:40px;'> FEEDBACK </th>
		<th style='color:red; font-size:40px;'> TEACHER ID </th>
		<th style='color:red; font-size:40px;'> NAME </th>
		<th style='color:red; font-size:40px;'> BRANCH </th>
		<th style='color:red; font-size:40px;'> SUBJECT </th>
		</tr>";
		if ($row['sbranch']=='comps')
		{
			$resul=mysqli_query($conn,"select * from Teacher where tbranch='comps'")
				or die("failed to query database".mysqli_error($conn));
			while($ro = mysqli_fetch_array($resul))
			{
				echo "<tr>";
				echo "<td><a href=\"feedform.php?id={$ro['tid']}&user={$ro['tname']}&sub={$ro['tsub']}\">FORM</a> /
				<a href=\"marks.php?id={$ro['tid']}&user={$ro['tname']}&sub={$ro['tsub']}\">MARKS</a></td>";
				echo "<td>" . $ro['tid'] . "</td>";
				echo "<td>" . $ro['tname'] . "</td>";
				echo "<td>" . $ro['tbranch'] . "</td>";
				echo "<td>" . $ro['tsub'] . "</td>";
				echo "</tr>";
			
			}
		
		}
		
		elseif ($row['sbranch']=='inst')
		{
			$resul=mysqli_query($conn,"select * from Teacher where tbranch='inst'")
				or die("failed to query database".mysqli_error($conn));
			while($ro = mysqli_fetch_array($resul))
			{
				echo "<tr>";
				echo "<td><a href=\"feedform.php?id={$ro['tid']}&user={$ro['tname']}&sub={$ro['tsub']}\">FORM</a>/
				<a href=\"marks.php?id={$ro['tid']}&user={$ro['tname']}&sub={$ro['tsub']}\">MARKS</a></td>";
				echo "<td>" . $ro['tid'] . "</td>";
				echo "<td>" . $ro['tname'] . "</td>";
				echo "<td>" . $ro['tbranch'] . "</td>";
				echo "<td>" . $ro['tsub'] . "</td>";
				echo "</tr>";
			
			}
			
		}
		
		elseif ($row['sbranch']=='mech')
		{
			$resul=mysqli_query($conn,"select * from Teacher where tbranch='mech'")
				or die("failed to query database".mysqli_error($conn));
			while($ro = mysqli_fetch_array($resul))
			{
				echo "<tr>";
				echo "<td><a href=\"feedform.php?id={$ro['tid']}&user={$ro['tname']}&sub={$ro['tsub']}\">FORM</a>/
				<a href=\"marks.php?id={$ro['tid']}&user={$ro['tname']}&sub={$ro['tsub']}\">MARKS</a></td>";
				echo "<td>" . $ro['tid'] . "</td>";
				echo "<td>" . $ro['tname'] . "</td>";
				echo "<td>" . $ro['tbranch'] . "</td>";
				echo "<td>" . $ro['tsub'] . "</td>";
				echo "</tr>";
			
			}
			
		}
		
		elseif ($row['sbranch']=='it')
		{
			$resul=mysqli_query($conn,"select * from Teacher where tbranch='it'")
				or die("failed to query database".mysqli_error($conn));
			while($ro = mysqli_fetch_array($resul))
			{
				echo "<tr>";
				echo "<td><a href=\"feedform.php?id={$ro['tid']}&user={$ro['tname']}&sub={$ro['tsub']}\">FORM</a>/
				<a href=\"marks.php?id={$ro['tid']}&user={$ro['tname']}&sub={$ro['tsub']}\">MARKS</a></td>";
				echo "<td>" . $ro['tid'] . "</td>";
				echo "<td>" . $ro['tname'] . "</td>";
				echo "<td>" . $ro['tbranch'] . "</td>";
				echo "<td>" . $ro['tsub'] . "</td>";
				echo "</tr>";
			
			}
		
		}
		
		elseif ($row['sbranch']=='extc')
		{
			$resul=mysqli_query($conn,"select * from Teacher where tbranch='extc'")
				or die("failed to query database".mysqli_error($conn));
			while($ro = mysqli_fetch_array($resul))
			{
				echo "<tr>";
				echo "<td><a href=\"feedform.php?id={$ro['tid']}&user={$ro['tname']}&sub={$ro['tsub']}\">FORM</a>/
				<a href=\"marks.php?id={$ro['tid']}&user={$ro['tname']}&sub={$ro['tsub']}\">MARKS</a></td>";
				echo "<td>" . $ro['tid'] . "</td>";
				echo "<td>" . $ro['tname'] . "</td>";
				echo "<td>" . $ro['tbranch'] . "</td>";
				echo "<td>" . $ro['tsub'] . "</td>";
				echo "</tr>";
			
			}
			
		}
		
		elseif ($row['sbranch']=='civil')
		{
			$resul=mysqli_query($conn,"select * from Teacher where tbranch='civil'")
				or die("failed to query database".mysqli_error($conn));
			while($ro = mysqli_fetch_array($resul))
			{
				echo "<tr>";
				echo "<td><a href=\"feedform.php?id={$ro['tid']}&user={$ro['tname']}&sub={$ro['tsub']}\">FORM</a>/
				<a href=\"marks.php?id={$ro['tid']}&user={$ro['tname']}&sub={$ro['tsub']}\">MARKS</a></td>";
				echo "<td>" . $ro['tid'] . "</td>";
				echo "<td>" . $ro['tname'] . "</td>";
				echo "<td>" . $ro['tbranch'] . "</td>";
				echo "<td>" . $ro['tsub'] . "</td>";
				echo "</tr>";
			
			}
			
		}
	}
	else
	{
		echo "failed";
	}
        mysqli_close($conn);

}
?>
</body>
</html>	