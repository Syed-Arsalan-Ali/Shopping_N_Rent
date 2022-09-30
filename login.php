<?php

session_cache_limiter('private, must-revalidate');
session_cache_expire(60);
   session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	$con = new mysqli("localhost","root","","shopping");
	
	if($con->connect_error) {
		die("Failed to connect : " .$con->connect_error);
	} else {
		$stmt = $con->prepare("select * from registration where email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		
		if($stmt_result->num_rows > 0) {

			$data = $stmt_result->fetch_assoc();
				if($data['password'] === $password) {
					//create sessions
			       session_regenerate_id();
					$_SESSION['loggedin'] = TRUE;
		            $_SESSION['email'] = $_POST['email'];
					
		           echo  '<span style="font-size: 15px;  font-weight: bold;"> Welcome </span>' . $_SESSION['email'] . '!';
				   include "./login-successful.php";
				   
				}
				 else {
					include "./login-failed.php";
				}
		} else {
			include "./login-failed.php";
		}
	}
	

?>
