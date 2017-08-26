 <?php
 
	//require_once("includes/auth.php");
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$email=$_POST["email"];
	$address=$_POST["address"];
	$phone=$_POST["phone"];
	
	require_once("includes/config.php");

	$sql1="INSERT INTO `userdetails`(`email`, `username`, `password`, `phone`, `address`) VALUES ('$email','$username','$password','$phone','$address')";

	$res1=$con->query($sql1);
	
	if($res1 === true)
	{		
		header("location: ./register.php?code=200");
	}
	else
	{
		header("location: ./registernew.php?code=201");
	}
	$con->close();
 
 ?>