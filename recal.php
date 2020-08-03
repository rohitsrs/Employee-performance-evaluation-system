
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
$total=5;

$avg=($sub+$know+$exp+$skill+$att);
session_start();
$id=$_SESSION['lid'];

$name=$_SESSION['lname'];
 
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
		$sql = "UPDATE teacher SET rop=$avg Where tid='$id' and tname='$name'";
		mysqli_query($conn, $sql);
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('successfull')
    window.location.href='../wd/prinlog.php';
    </SCRIPT>");
				
}
mysqli_close($conn); 
?>
