<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>BSquare.online</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
		<link href="themes/css/common.css" rel="stylesheet"/>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
	</head>
	<body>
	
		<?php
			//Start session
			session_start();
		?>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="./index.php">BSquare Online</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="./index.php">Home</a></li>
						<li class="active"><a href="JavaScript:Void(0);">About Us</a></li>
						<li><a href="./contact.php">Contact Us</a></li>      
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="./registernew.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<?php
							if(isset($_SESSION['email'])) 	
							{
								echo "<li><a href='./includes/logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
							}
							else
							{
								echo "<li><a href='./register.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
							}
						?>						
					</ul>
				</div>
			</div>
		</nav>		
		<div class="container">
			<img class="img-responsive" src="themes/images/Custom-Tshirt.jpg" alt="New products" width="100%" /> 
		</div>
		
		<div class="container">										
				<div class="col-md-12">
					<legend>About Us</legend>
					<address>	
						>>B2 -- BE/BTECH import & Export is one of the exports in Chennai.<br>
						>>Established in 2017 Jan, the company has been consistently servicing high quality garments.<br>
						>>A professional approach to reliable delivery, quality control, product development and commitment to the compliance of global standards has ensured that our list of satisfied customers keeps growing.<br>
					</address>
				</div>
				<div class="col-md-12">
					<legend>Mission</legend>
					<address>	
						>> We aim to create maximum value for our customer, so that we become their choicest partner.<br>
						>> Keep a sharp eye on product quality and put in all efforts to raise the bar constantly. To inspire and connect with our clients to put their best selves forward every day. To inspire people to feel good and live better feel first..! Deliver on-time, anywhere in the world.
					</address>
				</div>	
		</div>	
		
		<div class="container">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">						
				<!-- Wrapper for slides -->
				<div class="carousel-inner">			
					<div class="item active">					
						<blockquote>
							<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
							<small>Someone famous</small>
						</blockquote>
					</div>			
					<div class="item">					
						<blockquote>
							<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
							<small>Someone famous</small>
						</blockquote>
					</div>				
					<div class="item">					
						<blockquote>
							<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
							<small>Someone famous</small>
						</blockquote>
					</div>			
				</div>					
			</div>
		</div>

		
		<div class="footer-color">
			<div class="container">
				<p class="pull-left footer-content">Copyright @ 2017 BSquare.online  All right reserved.</p>
				<footer>
					<a href="https://www.facebook.com/BSquareOnline-1853841188192312/"><i class="fa fa-facebook"></i></a>
					<a href="whatsapp://send?text=BSquare.online" data-action="http://business.google.com/website/bsquare/">
						<i class="fa fa-whatsapp"></i>
					</a>
					<a href="http://business.google.com/website/bsquare/"><i class="fa fa-google-plus"></i></a>
				</footer>				
			</div>
		</div>
	</body>
</html>