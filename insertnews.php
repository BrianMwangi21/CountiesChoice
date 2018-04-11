<html>
<head>
	<title>INSERT NEWS POST | CC</title>

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
		</div>
	</nav>
	<!-- NAVBAR ends -->

	<div class="container-fluid" id="main_content_body" >

		<div class="row" >
			<!-- Log in -->
			<div class="col-sm-12" />
					<div class="page-header" style="padding-top:10px;" id="getinfo" >
						<h1 class="text-center" >
							INSERT NEWS POSTS
						</h1>
					</div>
			</div>

		</div>

		<div class="row" >
			<!-- Log in -->
			<div class="col-sm-12" />
					<form method="POST" enctype="multipart/form-data" >

						<?php

							include 'insertnews_phpfile.php';

						?>

						<div class="form-group">
							<div class="col-sm-4" >
							  	<label for="sel1">Select county</label>
							  		<select class="form-control" name="countyselector" required>
							    		<option value="Nairobi">Nairobi</option>
									    <option value="Nakuru">Nakuru</option>
									    <option value="Mombasa">Mombasa</option>
									    <option value="Kisumu">Kisumu</option>
							  		</select>
						  	</div>
						</div>

						<div class="form-group" >
							<div class="col-sm-12" >
								<input class="form-control" type="text" name="news_title" placeholder="News Title" required>
							</div>
						</div>
						<br><br>

						<div class="form-group" >
							<div class="col-sm-12" >
								<textarea class="form-control" name="news_content" placeholder="Enter news here" rows="20" required ></textarea>
							</div>
						</div>
						<br><br>

						<br><br>
						<div class="text-center" >
							<button class="btn btn-default btn-lg" type="submit" name="news_submit" >
								Submit
							</button>
						</div>

					</form>

					
			</div>

		</div>
			
	</div>

</body>
</html>