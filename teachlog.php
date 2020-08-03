
<?php
$servername = "localhost";
$database = "36918";
$username = "root";
$password = "";

$tid = $_POST['tid'];
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
	$result=mysqli_query($conn,"select * from Teacher where tid='$tid' and tpass='$tpass'")
		or die("failed to query database".mysqli_error($conn));
	$row=mysqli_fetch_array($result);
	if ($row['tid']==$tid && $row['tpass']==$tpass)
	{   session_start();
  
		$_SESSION['tid'] =$row['tid']; 
		$_SESSION['tname'] =$row['tname']; 
		header("Location: tfeedform.html"); 
	}
	else
	{
		echo "failed";
	}
        mysqli_close($conn);

}
?>
