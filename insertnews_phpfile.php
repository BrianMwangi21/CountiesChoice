<?php
	
	// Database variables
	$servername = "localhost";
	$serverusername = "root";
	$serverpassword = "";
	$serverdbname = "countieschoice";

	// ACCESS DATABASE
	$conn = mysqli_connect($servername, $serverusername, $serverpassword, $serverdbname);

	if( isset( $_POST["news_submit"] ) ) {
		// extract
		extract( $_POST );

		// Get info
		$county = $countyselector;
		$title = test_input( $news_title );
		$post = test_input( $news_content );
		date_default_timezone_set("Africa/Nairobi");
		$date = date("d/m/y H:m:i a");

		// Insert post
		$insert_query = "INSERT INTO `countynews`(`county`, `cNewsTitle`, `cNews`, `cNewsDate`) VALUES ('$county','$title','$post','$date')";
		$result_for_query = mysqli_query( $conn, $insert_query );

		if( $result_for_query ) {
			echo '
					<div class="alert alert-success">
					 	<strong>Success!</strong> News submitted
					</div>
			';
		}else {
			echo '
					<div class="alert alert-danger">
					 	<strong>Failed!</strong> Post failed to be submitted. Please try again
					</div>
			';
		}
	}

	function test_input( $data ) {
		$data = trim( $data );
		$data = stripslashes( $data );
		$data = htmlspecialchars( $data );
		$data = str_replace("'","\'",$data);
		return $data;
	}

?>