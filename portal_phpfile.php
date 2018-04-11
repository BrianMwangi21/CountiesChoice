<?php

	// Database variables
	$servername = "localhost";
	$serverusername = "root";
	$serverpassword = "";
	$serverdbname = "countieschoice";

	// ACCESS DATABASE
	$conn = mysqli_connect($servername, $serverusername, $serverpassword, $serverdbname);

	if( isset( $_POST["portal_signin"] ) ) {
		extract( $_POST );

		// Get info
		$email = test_input( $signin_email );
		$username = test_input( $signin_name );
		$passwordone = test_input( $signin_password_one );
		$passwordtwo = test_input( $signin_password_two );

		// If they match
		if( $passwordone == $passwordtwo ) {
			// Encrypt new password
			$encrypedpassword = crypt( $passwordone, 'st' );

			// Create new account
			$insert_query = "INSERT INTO `users`(`username`, `useremail`, `userpassword`) VALUES ('$username','$email','$encrypedpassword')";
			$result_for_insert = mysqli_query( $conn, $insert_query );

			if( $result_for_insert ) {
				$_SESSION["username"] = $username;
				echo("<script>location.href = 'portalhome.php';</script>");
			}else {
				echo '
					<div class="alert alert-danger">
					 	<strong>Failed!</strong> Something went wrong. Try again
					</div>
				';
			}
		}else {
			echo '
				<div class="alert alert-danger">
				 	<strong>Failed!</strong> Your passwords do not match
				</div>
			';
		}
	}

	if( isset( $_POST["portal_login"] ) ) {
		extract( $_POST );

		// Get info
		$email = test_input( $login_email );
		$password = test_input( $login_password );
		$encrypedpassword = crypt( $password, 'st' );

		// Search for similar user
		$search_query = "SELECT * FROM `users` WHERE `useremail` = '$email' AND `userpassword` = '$encrypedpassword'";
		$result_for_search = mysqli_query( $conn, $search_query );

		if( $result_for_search ) {
			$rows = mysqli_fetch_array($result_for_search);
			$_SESSION["username"] = $rows[1];
			echo("<script>location.href = 'portalhome.php';</script>");
		}else {
			echo '
				<div class="alert alert-danger">
				 	<strong>Failed!</strong> Please try again
				</div>
			';
		}
	}

	function test_input( $data ) {
		$data = trim( $data );
		$data = stripslashes( $data );
		$data = htmlspecialchars( $data );
		return $data;
	}

?>