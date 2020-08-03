<html>
<head><title>Stud</title>
<link rel="stylesheet" type="text/css" href=".css">
</head>
<body>
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
		$sql="insert into teachinfo (name,cad,cap,ccd,ccp,dop,noj) values ('$tname','$user','$use','$us','$u','$user1','$use1')";
		$query=mysqli_query($conn,$sql);
		
		
    }
	$result=mysqli_query($conn,"select * from teachinfo where tid='$tid' and tname='$tname'")
		or die("failed to query database".mysqli_error($conn));
	$row=mysqli_fetch_array($result);
	
	
   
    for($i=1;$i<=$coun;$i++)
    {
		
		$pr=($pr+1);
        $user = $_POST['dat'.$i];
		$use = $_POST['plac'.$i];
		$sqlite = "UPDATE teachinfo SET ccd=$user WHERE tid='$tid' and name='$tname'";
		$sqlit = "UPDATE teachinfo SET ccp=$use WHERE tid='$tid' and name='$tname'";
		$pr=($pr+1);
		mysqli_query($conn, $sqlite);
		mysqli_query($conn, $sqlit);
		
		
    }
	
	$cou = $_POST['pp'];
   
    for($i=1;$i<=$cou;$i++)
    {
		
	
        $user = $_POST['da'.$i];
		$use = $_POST['pla'.$i];
		$sqlite = "UPDATE teachinfo SET dop=$user WHERE id='$pr' and name='$tname'";
		$sqlit = "UPDATE teachinfo SET noj=$use WHERE id='$pr' and name='$tname'";
		mysqli_query($conn, $sqlite);
		mysqli_query($conn, $sqlit);
		
		
    }
	
	
	$result=mysqli_query($conn,"select * from teacher where tid='$tid' and tname='$tname'")
		or die("failed to query database".mysqli_error($conn));
	$row=mysqli_fetch_array($result);
	
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

	
				
}
mysqli_close($conn); 
?>
</body>
</html>