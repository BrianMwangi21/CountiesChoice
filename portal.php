<?php

	session_start();
	if( $_SESSION["username"] != "" ) {
		header("location:portalhome.php");
	}

	
?>

<!DOCTYPE html>

<html>
<head>
	<title>Portal | CC</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/social.css" >
	<link rel="stylesheet" href="assets/css/awesome.css" >
	<link rel="stylesheet" href="srcs/styles.css" >
	<link rel="stylesheet" href="assets/css/awesome.css" >
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


	<script src="ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
	<script src="bootstrap/js/bootstrap.min.js" ></script>
	<script src="assets/js/scroll.js" ></script>
	<script src="assets/js/easing.js" ></script>
</head>
<body>

	<!-- NAVBAR starts -->
	<nav class="nav navbar-inverse navbar-fixed-top" id="top-nav" >
		<div class="container-fluid" >
			<div class="navbar-header" >
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			    </button>
				<a href="index.php" class="navbar-brand" > Counties Choice </a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right" >
					<li><a href="counties.php" class="page-scroll" > Counties </a></li>
					<li><a href="forum.php" class="page-scroll" > Forums </a></li>
					<li><a href="portal.php" class="page-scroll" > Portal </a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- NAVBAR ends -->

	<!-- Welcome starts -->
	<div class="container-fluid jumbotron" id="welcome_div" >
		<div class="text-center" >
			<span id="CC_header" >
				PORTAL
			</span>

			<br><br>

			<div id="slogan_div" >
				<span class="cc_slogan" id="slogan_01" style="display:none;" >
					get first-hand information about your county
				</span>
				<span class="cc_slogan" id="slogan_02" style="display:none;" >
					hold your leaders accountable
				</span>
				<span class="cc_slogan" id="slogan_03" style="display:none;" >
					discuss openly and submit feedback
				</span>
			</div>

			<!-- Slogan scripts -->
			<script>
				var counter = 1;
				
				$("#welcome_div").mouseenter(function(){
					var slogan_id = "#slogan_0" + counter;

					$(slogan_id).show().delay("slow").fadeIn().delay("slow").fadeOut().hide();

					++counter;

					if( counter === 4 ) {
						counter = 1;
					}
				});
			</script>
			<!-- Slogan scripts ends -->
		</div>
	</div>
	<!-- Welcome ends -->

	<div class="container-fluid" id="main_content_body" >

		<div class="row" >
			<!-- Log in -->
			<div class="col-sm-6" />
					<div class="page-header" style="padding-top:0px;" id="getinfo" >
						<h1 class="text-center" >
							Log in
						</h1>
					</div>

					<div id="content" >
						
						<form method="POST" enctype="multipart/form-data" >

						<div class="form-group" >
							<div class="col-sm-12" >
								<input class="form-control" type="email" name="login_email" placeholder="Enter your email address" required>
							</div>
						</div>
						<br><br>
						<div class="form-group" >
							<div class="col-sm-12" >
								<input class="form-control" type="password" name="login_password" placeholder="Enter your password" required>
							</div>
						</div>
						<br><br>
						<div class="text-center" >
							<button class="btn btn-default btn-lg" type="submit" name="portal_login" >
								Log In
							</button>
						</div>

						</form>

					</div>

			</div>

			<!-- Log in -->
			<div class="col-sm-6" />
					<div class="page-header" style="padding-top:0px;" id="getinfo" >
						<h1 class="text-center" >
							Sign in for free
						</h1>
					</div>

					<div id="content" >
						
						<form method="POST" enctype="multipart/form-data" >

						<div class="form-group" >
							<div class="col-sm-12" >
								<input class="form-control" type="text" name="signin_name" placeholder="Enter your full names eg Bruce Wayne" required>
							</div>
						</div>
						<br><br>
						<div class="form-group" >
							<div class="col-sm-12" >
								<input class="form-control" type="email" name="signin_email" placeholder="Enter your email address" required>
							</div>
						</div>
						<br><br>
						<div class="form-group" >
							<div class="col-sm-6" >
								<input class="form-control" type="password" name="signin_password_one" placeholder="Enter your password" required>
							</div>
							<div class="col-sm-6" >
								<input class="form-control" type="password" name="signin_password_two" placeholder="Confirm password" required>
							</div>
						</div>
						<br><br>
						<div class="text-center" >
							<button class="btn btn-default btn-lg" type="submit" name="portal_signin" >
								Sign in
							</button>
						</div>

						</form>

					</div>

			</div>
		<div>

		<?php
			
			include 'portal_phpfile.php';
				
		?>
	</div>
	<!-- Contact Us -->
	<div class="container-fluid" id="contactus" >

		<div class="row" >
			<div class="col-sm-12" >
				<div class="page-header" >
					<h1 class="text-center" >
						Get In Touch
					</h1>
				</div>
			</div>
		</div>

		<div class="row" >

			<div class="col-sm-6" >
				<table class="table" >
					<tr>
						<td>
							Phone
						</td>
						<td>
							+254 716 750290
						</td>
					</tr>
					<tr>
						<td>
							&nbsp
						</td>
						<td>
							+254 700 819704
						</td>
					</tr>
					<tr>
						<td>
							Email
						</td>
						<td>
							mwangibrian8@gmail.com
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
						<td>
							alexmuthui35@gmail.com
						</td>
					</tr>
				</table>
			</div>

			<div class="col-sm-6" >
				<a class="btn btn-block btn-social btn-facebook" href="https://www.facebook.com/groups/100709036644044/?ref=br_rs" target="_blank" > 
					Like us on Facebook
					<i  class="fa fa-facebook" > </i>
				</a>
				<a class="btn btn-block btn-social btn-twitter" href="#" target="_blank" > 
					Follow us on Twitter 
					<i  class="fa fa-twitter" > </i>
				</a>
			</div>
		</div>

		<div class="row" style="padding-bottom:50px;">
			<div class="col-sm-12" >
				<div class="text-center" >
					<a href="#welcome_div" class="page-scroll" >
                        <span class="glyphicon glyphicon-chevron-up"></span>
                        Back to top
                    </a>
					<br><br>

					Made by Alex Muthui & Brian Mwangi
					<br>
					Disclaimer: This website is for educational purposes only
					<br>
					&copy <?php echo date("Y"); ?>
				</div>
			</div>
		</div>

	</div>
	<!-- Contact Us ends -->

</body>
</html>