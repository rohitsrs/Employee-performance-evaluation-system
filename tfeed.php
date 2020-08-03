<?php
$servername = "localhost";
$database = "36918";
$username = "root";
$password = "";

$ca = $_POST['ca'];
$cc = $_POST['cc'];
$pp = $_POST['pp'];
$dlc = $_POST['dlc'];
$clc = $_POST['clc'];
$ict = $_POST['ict'];

session_start();
$tid=$_SESSION['tid'];

$tname=$_SESSION['tname'];


	
	
	


 
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) 
{

    die("Connection failed: " . mysqli_connect_error());

}
else
{	
	
	$count = $_POST['ca'];
	$coun = $_POST['cc'];
	$cou = $_POST['pp'];
	$c = max($_POST['ca'],$coun = $_POST['cc'], $cou = $_POST['pp']);
   
    for($i=1;$i<=$c;$i++)
    {
        $user = $_POST['date'.$i];
		$use = $_POST['place'.$i];
		$us = $_POST['dat'.$i];
		$u = $_POST['plac'.$i];
		$user1 = $_POST['da'.$i];
		$use1 = $_POST['pla'.$i];
		$sql="insert into teachinfo (tid,name,cad,cap,ccd,ccp,dop,noj) values ('$tid','$tname','$user','$use','$us','$u','$user1','$use1')";
		$query=mysqli_query($conn,$sql);
		error_reporting(E_ALL & ~E_NOTICE);
		
    }
		$sqlite = "UPDATE teacher SET ict=$ict WHERE tid='$tid' and tname='$tname'";
		$sqlit = "UPDATE teacher SET dlc=$dlc WHERE tid='$tid' and tname='$tname'";
		$sqli = "UPDATE teacher SET pap_pub=$pp WHERE tid='$tid' and tname='$tname'";
		$sql = "UPDATE teacher SET clc=$clc WHERE tid='$tid' and tname='$tname'";
		$sq = "UPDATE teacher SET conf_att=$ca WHERE tid='$tid' and tname='$tname'";
		$s = "UPDATE teacher SET conf_con=$cc WHERE tid='$tid' and tname='$tname'";
		
		mysqli_query($conn, $sqlite);
		mysqli_query($conn, $sqlit);
		mysqli_query($conn, $sqli);
		mysqli_query($conn, $sql);
		mysqli_query($conn, $sq);
		mysqli_query($conn, $s);
	
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Succesfull')
		window.location.href='../wd/teachlog.html';
		</SCRIPT>");
		
	
				
}
mysqli_close($conn); 

?>
