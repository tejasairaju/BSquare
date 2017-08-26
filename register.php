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
			//Check whether the session variable email is present or not
			if(isset($_SESSION['email'])) 	
			{
				header("location: ./index.php");
				exit();
			}	
			if(isset($_GET['code']) )
			{
				echo "<script>";
				
				if($_GET['code']=='201')
				{			
					echo  "	alert('Invalid Username or Password');" ;
				}
				else if($_GET['code']=='200')
				{
					echo  "	alert('!!!!Successfully Register!!!');" ;
				}
				echo "</script>";
			}
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
						<li><a href="./contact.php">Contact Us</a></li>      
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="./registernew.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li class="active"><a href="JavaScript:Void(0);"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
			<h1 class="h1">
				<small>Sign in to your account</small>
			</h1>       
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="well well-sm">
						<form class="form-group" method="POST" action="_register.php">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="email">
											Email Address</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
											</span>
											<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required" /></div>
									</div> 
									<div class="form-group">
										<label for="password">
											Password</label>
										<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required />
									</div>									
								</div>
								<div class="col-md-12">
									<!-- <p class="pull-left">										
									Forgot Your 
									<a href="JavaScript:Void(0);" data-toggle="modal" data-target="#myModal"> Password?</a>		
									<!-- Modal 
									<div class="modal fade" id="myModal" role="dialog">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Forgot Password</h4>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<label for="email">Resigtered Email Address</label>
														<div class="input-group">
															<span class="input-group-addon">
																<span class="glyphicon glyphicon-envelope"></span>
															</span>
															<input type="email" class="form-control" id="email" placeholder="Enter email" required/>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Send Password</button>
												</div>
											</div>
										</div>
									</div>
																		
									</p>-->
									<button type="submit" class="btn btn-primary pull-right" >
										Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container">										
			<div class="col-md-12">
				<legend>Navigation</legend>
				<address>	
					>>B2 -- BE/BTECH import & Export is one of the exports in Chennai.<br>
					>>Established in 2017 Jan, the company has been consistently servicing high quality garments.<br>
					>>A professional approach to reliable delivery, quality control, product development and commitment to the compliance of global standards has ensured that our list of satisfied customers keeps growing.<br>
				</address>
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