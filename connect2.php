<?php
$servername = "localhost";
$database = "36918";
$username = "root";
$password = "";

$tid = $_POST['tid'];
$tname = $_POST['tname'];
$tbranch = $_POST['tbranch'];
$tsub = $_POST['tsub'];
$tpass = $_POST['tpass'];


// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) 
{

    die("Connection failed: " . mysqli_connect_error());

}
else
{	
	$stmt=$conn->prepare("insert into Teacher(tid, tname, tbranch, tsub, tpass) values(?, ?, ?, ?, ?)");
	$stmt->bind_param("issss",$tid, $tname, $tbranch, $tsub, $tpass);
	$stmt->execute();
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='../wd/admin.html';
    </SCRIPT>");
		


	mysqli_close($conn);
}
?>