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
						<li><a href="./about.php">About Us</a></li>
						<li class="active"><a href="JavaScript:Void(0);">Contact Us</a></li>      
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
			<div class="row">
				<div class="col-md-12">					
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15543.925789770135!2d80.17799626549343!3d13.100361801617945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe5b0cfd863ba19d0!2sBsquare.Online!5e0!3m2!1sen!2sin!4v1500191753279" width="100%" height="300"  frameborder="0" style="border:0" allowfullscreen></iframe>					
				</div>
			</div>
		</div>
		<div class="container">            
			<h1 class="h1">
				<small>Feel free to contact us</small>
			</h1>       
		</div>
		<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="well well-sm">
							<form class="form-group">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">
											Name</label>
										<input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
									</div>
									<div class="form-group">
										<label for="email">
											Email Address</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
											</span>
											<input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
									</div>                        
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">
											Message</label>
										<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
											placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
										Send Message</button>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<legend><span class="glyphicon glyphicon-globe"></span>Our office</legend>
						<strong><h3>BSquare Online</h3></strong><br>
						<div class="col-md-6">
							<address>	
								<strong><h4>Chennai Office</h4></strong>					
								No.36/4,1st floor,Pandurangapuram Lucas,Padi,Chennai<br>
								Phone: +919884512397<br>
								Fax: +04 (123) 456-7890<br>
								E-mail: <a href="mailto:#">mail.bSquare@gmail.com</a>
							</address>
						</div>
						<div class="col-md-6">
							<address>
								<strong><h4>Bangalore Office</h4></strong>
								No.1,Adi Parashakthi Temple,18th Main Road,4th'T'Block,Bangalore<br>
								Phone: +918122300679<br>
								Fax: +04 (113) 023-1145<br>
								E-mail: <a href="mailto:#">mail.bSquare@gmail.com</a>
								</address>
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