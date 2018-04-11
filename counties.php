<?php
	
	session_start();

?>

<html>
<head>
	<title>Counties | CC</title>

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

	<div class="container" style="background:#fff;padding-top:20px;">
		
		<div class="row" >
			<div class="col-sm-12" >
				<div class="page-header" >
					Latest News 
				</div>
			</div>


			<div class="col-sm-12" >

				<?php
					// Get all the comments in the forum
					// Database variables
					$servername = "localhost";
					$serverusername = "root";
					$serverpassword = "";
					$serverdbname = "countieschoice";

					// ACCESS DATABASE
					$conn = mysqli_connect($servername, $serverusername, $serverpassword, $serverdbname);

					// Query the database
					$select_query = "SELECT * FROM `countynews`";
					$result_for_query = mysqli_query( $conn, $select_query );

					if( $result_for_query ) {
						while($row = mysqli_fetch_array($result_for_query)){
							echo '
								<div class="row" style="margin:5px;" >
									<div class="col-sm-12" >

									<span style="font-size:21px;" > In '.$row[1].' county, under '.$row[2].' :</span> <br>
									<span style="font-family:\'Oswald\', sans-serif;font-size:35px;" >'.$row[3].'</span> <br>
									<span style="font-size:12px;color:#c9c9c9;" >'.$row[4].'</span>

									</div>
								</div>
								<br>
							';
						}
					}else {
						echo '
								<div class="alert alert-danger">
								 	No posts currently
								</div>
						';
					}

				?>

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