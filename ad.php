<?php

$aid = $_POST['aid'];
$apass = $_POST['apass'];

	if ($aid=='admin' && $apass=='1234')
	{
		header("Location: admin.html"); 
	}
	else
	{
		echo "failed";
	}
       


?>