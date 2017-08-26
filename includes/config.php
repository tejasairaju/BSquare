<?php
	$servername="localhost";
	$adminusername="root";
	$adminpassword="";
	$database="bsquare";
	
	$con=new mysqli($servername,$adminusername,$adminpassword,$database);
	
	if($con->connect_error)
	{
		die("Connection failed : ".$con->connect_error);
	}
?>