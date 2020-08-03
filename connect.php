<?php
$servername = "localhost";
$database = "36918";
$username = "root";
$password = "";

$sid = $_POST['sid'];
$sname = $_POST['sname'];
$sbranch = $_POST['sbranch'];
$spass = $_POST['spass'];


// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) 
{

    die("Connection failed: " . mysqli_connect_error());

}
else
{
	$stmt=$conn->prepare("insert into Student(sid, sname, sbranch, spass) values(?, ?, ?, ?)");
	$stmt->bind_param("isss",$sid, $sname, $sbranch, $spass);
	$stmt->execute();
	
	echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Succesfully Registered')
		window.location.href='../wd/studlog.html';
		</SCRIPT>");
	
	mysqli_close($conn);
}
?>