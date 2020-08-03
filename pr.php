<?php

$aid = $_POST['aid'];
$apass = $_POST['apass'];

	if ($aid=='prin' && $apass=='1234')
	{
		header("Location: princi.html"); 
	}
	else
	{
		echo "failed";
	}
       


?>