 <?php
 	require_once("includes/config.php");
	
	$email=$_POST["email"];
	$password=$_POST["password"];
	
	$sql="select * from userdetails";
	$check=0;
	
	$result=$con->query($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			if($row["email"]==$email&&$row["password"]==$password)
			{
				$check=1;
				session_start();
				$_SESSION["username"]=$row["username"];
				$_SESSION["email"]=$row["email"];				
				break;
			}
		}
	}
	$con->close();
	if($check==1)
		header("location: ./index.php");
	else
		header("location: ./register.php?code=201");
 
 ?>