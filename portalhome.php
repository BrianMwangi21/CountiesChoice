<?php
	
	session_start();

	if( $_SESSION["username"] == "" ) {
		header("location:portal.php");
	}

?>

<html>
<head>
	<title>Portal Home | CC</title>

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
				<?php
					echo "Welcome " . $_SESSION["username"];
				?>
			</span>
			<br>
			<form method="POST" enctype="multipart/form-data" >
				<button class="btn btn-default btn-lg" type="submit" name="logout_btn" >
					Log out
				</button>
			</form>	
		</div>
	</div>
	<!-- Welcome ends -->

	<div class="container-fluid" id="main_content_body" >

		<div class="row" >
			<!-- Log in -->
			<div class="col-sm-12" />
					<div class="page-header" style="padding-top:0px;" id="getinfo" >
						<h1 class="text-center" >
							REPORT PORTAL
						</h1>
					</div>
			</div>

		</div>

		<div class="row" >
			<!-- Log in -->
			<div class="col-sm-12" />
					<form method="POST" enctype="multipart/form-data" >

						<?php

							include 'portalhome_phpfile.php';

						?>

						<div class="form-group" >
							<div class="col-sm-12" >
								<input class="form-control" type="text" name="post_title" placeholder="Title" required>
							</div>
						</div>
						<br><br>

						<div class="form-group" >
							<div class="col-sm-12" >
								<textarea class="form-control" name="post_content" placeholder="Enter post here" rows="20" required ></textarea>
							</div>
						</div>
						<br><br>

						<br><br>
						<div class="text-center" >
							<button class="btn btn-default btn-lg" type="submit" name="post_submit" >
								Submit
							</button>
						</div>

					</form>

					
			</div>

		</div>
			
	</div>

	<!-- Contact Us -->
	<div class="container-fluid" style="background:white;" id="contactus" >

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