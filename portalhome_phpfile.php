<?php

	// Database variables
	$servername = "localhost";
	$serverusername = "root";
	$serverpassword = "";
	$serverdbname = "countieschoice";

	// ACCESS DATABASE
	$conn = mysqli_connect($servername, $serverusername, $serverpassword, $serverdbname);

	if( isset( $_POST["post_submit"] ) ) {
		// extract
		extract( $_POST );

		// Get info
		$username = $_SESSION["username"];
		$title = test_input( $post_title );
		$post = test_input( $post_content );
		date_default_timezone_set("Africa/Nairobi");
		$date = date("d/m/y H:m:i a");

		// Insert post
		$insert_query = "INSERT INTO `portalreports`(`posttitle`, `post`, `postuser`, `posttime`) VALUES ( '$title','$post','$username','$date' )";
		$result_for_query = mysqli_query( $conn, $insert_query );

		if( $result_for_query ) {
			echo '
					<div class="alert alert-success">
					 	<strong>Success!</strong> Post submitted
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

	if( isset( $_POST["logout_btn"] ) ) {
		session_destroy();
		echo("<script>location.href = 'portal.php';</script>");
	}

	function test_input( $data ) {
		$data = trim( $data );
		$data = stripslashes( $data );
		$data = htmlspecialchars( $data );
		$data = str_replace("'","\'",$data);
		return $data;
	}
?>