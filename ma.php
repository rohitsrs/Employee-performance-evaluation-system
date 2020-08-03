<?php
$servername = "localhost";
$database = "36918";
$username = "root";
$password = "";

$marks= $_POST['marks'];



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
	if($row['avg_res']==0)
	{
		$sql = "UPDATE teacher SET avg_res=$marks WHERE tid='$id' and tname='$name'";
		mysqli_query($conn, $sql);
		
	}
	else
	{
		$q=($row['avg_res']+$marks)/2;
		$q=$q+1;
		$sql = "UPDATE teacher SET avg_res=$q Where tid='$id' and tname='$name'";
		mysqli_query($conn, $sql);
	}
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Marks entered succesfully')
		window.location.href='../wd/stu.php';
		</SCRIPT>");
	
	mysqli_close($conn); 			
} 
?>
