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
						<li class="active"><a href="JavaScript:Void(0);">Home</a></li>
						<li><a href="./about.php">About Us</a></li>
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
			<div id="myImages" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myImages" data-slide-to="0" class="active"></li>
					<li data-target="#myImages" data-slide-to="1"></li>
					<li data-target="#myImages" data-slide-to="2"></li>
				</ol>			
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="themes/images/Custom-Tshirt.jpg" alt="Mid season sale">
						<div class="carousel-caption">
							<h3>Mid season sale</h3>
							<p><span>Up to 10% Off</span></p>
							<p><span>nice way to connect with retail buyers</span></p>
						</div>
					</div>
					
					<div class="item">
						<img src="themes/images/Custom-Tshirt.jpg" alt="Wholesale">
						<div class="carousel-caption">
							<h3>If you are  wholesale  buyers</h3>
							<p><span>Up to 50% Off</span></p>					
						</div>
					</div>
					<div class="item">
						<img src="themes/images/Custom-Tshirt.jpg" alt="Wholesale">
						<div class="carousel-caption">
							<h3>If you are  wholesale  buyers</h3>
							<p><span>Up to 70% Off</span></p>					
						</div>
					</div>
				</div>			
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myImages" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myImages" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="container">            
			<h1 class="h1" style="text-align: center">
				<small>Our Achievements in Business are due to freshly picked ideas and creativeness of our Team</small>
			</h1>       
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-3">
						<img src="themes/images/bulk-shirt-dtg-printer.jpg" alt="bulk-shirt-dtg-printer" class="img-responsive">
						<div class="overlay">
							<div class="text">
								<a href="#">Click Here to Get Details Combo T-shirt</a>
								<p class="price">RS500</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<img src="themes/images/Picking-the-Perfect-Blank-T-Shirt-672x309.jpg" alt="bulk-shirt-dtg-printer" class="img-responsive">
						<div class="overlay">
							<div class="text">
								<a href="#">Click Here to Get Details Combo T-shirt</a>
								<p class="price">RS500</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<img src="themes/images/wholesale-t-shirt-plain-t-shirt-bulk (1).jpg" alt="bulk-shirt-dtg-printer" class="img-responsive">
						<div class="overlay">
							<div class="text">
								<a href="#">Click Here to Get Details Combo T-shirt</a>
								<p class="price">RS500</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<img src="themes/images/s-l300.jpg" alt="bulk-shirt-dtg-printer" class="img-responsive">
						<div class="overlay">
							<div class="text">
								<a href="#">Click Here to Get Details Combo T-shirt</a>
								<p class="price">RS500</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>	
		
		<div class="container">            
			<h1 class="h1" style="text-align: center">
				<strong>About us</strong>
			</h1>       
		</div> 		
		<div class="container">										
			<div class="col-md-12 h1">
				<small>
					<ul>	
						<li>Keep a sharp eye on product quality and put in all efforts to raise the bar constantly</li>
						<li>To inspire and connect with our clients to put their best selves forward every day</li>
						<li>To inspire people to feel good and live better feel first..!</li>
						<li>Deliver on-time, anywhere in the world</li>
					</ul>
				</small>
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