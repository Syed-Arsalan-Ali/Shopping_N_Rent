<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cnic = $_POST['cnic'];

	// Database connection
	$conn = new mysqli('localhost','root','','shopping');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
		
	}
	
	else {
		$stmt = $conn->prepare("UPDATE registration SET password='$_POST[password]' WHERE email='$_POST[email]'");
		$stmt = $conn->prepare("UPDATE registration SET password='$_POST[password]' WHERE cnic='$_POST[cnic]'");
		//$stmt->bind_param("s", $password);
		$execval = $stmt->execute();
		include "./passupdate.php";
		$stmt->close();
		$conn->close();
	}
	
?>