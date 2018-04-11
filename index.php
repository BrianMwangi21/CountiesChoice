<!DOCTYPE html>

<html>
<head>
	<title>Home | CC</title>

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
				COUNTIES CHOICE
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

	<!-- MAIN CONTENT -->
	<div class="container-fluid" id="main_content_body" >

		<!-- Get info -->
		<div class="row" >
			<div class="col-sm-12" />

					<div class="text-center" style="padding-top:10px;" > 
						<img src="img/infoicon.png" height="100px" width="100px" alt="Get info">
					</div>

					<div class="page-header" style="padding-top:0px;" id="getinfo" >
						<h1 class="text-center" >
							Get Info
						</h1>
					</div>

					<div id="content" class="text-center">
						Devolution is not a new term in Kenya. <br>
						History of our nation affirms this fact.<br>
						As Kenyan citizens, do we understand the Kenyan Devolution as compared to other nations? <br>
						Can we explain devolution's roles and functions? <br>
						Can we relate with its historical development to date? <br>
						As a kenyan citizen are you aware of the developments in your county ? <br>
						This websites plans to bridge that gap between county news and the people of that county<br><br>
					</div>

			</div>
		<div>
		<!-- Get info ends -->

		<!-- Accountability -->
		<div>

			<div class="row" >
				<div class="col-sm-12" />
						
					<div class="text-center" style="padding-top:10px;" > 
						<img src="img/accountabilityicon.png" height="100px" width="100px" alt="Get info">
					</div>

					<div class="page-header" style="padding-top:0px;" id="accountability" >
						<h1 class="text-center" >
							Accountability
						</h1>
					</div>

					<div id="content" class="text-center">
						Devolution is not a new term in Kenya. <br>
						History of our nation affirms this fact.<br>
						As Kenyan citizens, do we understand the Kenyan Devolution as compared to other nations? <br>
						Can we explain devolution's roles and functions? <br>
						Can we relate with its historical development to date? <br>
						As a kenyan citizen are you aware of the developments in your county ? <br>
						This websites plans to bridge that gap between county news and the people of that county<br><br>
					</div>

				</div>
			</div>

		<div>
		<!-- Accountability ends -->

		<!-- Discuss -->
		<div>

			<div class="row" >
				<div class="col-sm-12" />
					
					<div class="text-center" style="padding-top:10px;" > 
						<img src="img/discussion.png" height="100px" width="100px" alt="Get info">
					</div>

					<div class="page-header" style="padding-top:0px;" id="discussion" >
						<h1 class="text-center" >
							Discussion
						</h1>
					</div>

					<div id="content" class="text-center">
						Devolution is not a new term in Kenya. <br>
						History of our nation affirms this fact.<br>
						As Kenyan citizens, do we understand the Kenyan Devolution as compared to other nations? <br>
						Can we explain devolution's roles and functions? <br>
						Can we relate with its historical development to date? <br>
						As a kenyan citizen are you aware of the developments in your county ? <br>
						This websites plans to bridge that gap between county news and the people of that county<br><br>
					</div>

				</div>
			</div>
		<div>
		<!-- Discuss ends -->

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