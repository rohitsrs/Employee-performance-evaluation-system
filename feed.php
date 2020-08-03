<?php
$servername = "localhost";
$database = "36918";
$username = "root";
$password = "";

$sub = $_POST['sub'];
$know = $_POST['know'];
$exp = $_POST['exp'];
$skill = $_POST['skill'];
$att = $_POST['att'];


$avg=($sub+$know+$exp+$skill+$att);
session_start();
$id=$_SESSION['id'];

$name=$_SESSION['name'];
 
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) 
{

    die("Connection failed: " . mysqli_connect_error());

}
else
{
	$result=mysqli_query($conn,"select * from teacher where tid='$id' and tname='$name'")
		or die("failed to query database".mysqli_error($conn));
	$row=mysqli_fetch_array($result);
	if($row['stu_feed']==0)
	{
		$sql = "UPDATE teacher SET stu_feed=$avg WHERE tid='$id' and tname='$name'";
		mysqli_query($conn, $sql);
	}
	else
	{
		$q=($row['stu_feed']+$avg)/2;
		$q=$q+1;
		$sql = "UPDATE teacher SET stu_feed=$q Where tid='$id' and tname='$name'";
		mysqli_query($conn, $sql);
	}
	
echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Successfull')
		window.location.href='../wd/stu.php';
		</SCRIPT>");				

mysqli_close($conn); 
}
?>
