<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cnic = $_POST['cnic'];
	$dob = $_POST['dob'];
	$category = $_POST['category'];
	$address = $_POST['address'];
	//$hash = password_hash($password, PASSWORD_DEFAULT);


	// Database connection
	$conn = new mysqli('localhost','root','','shopping');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
		
	}$select = mysqli_query($conn, "SELECT * FROM registration WHERE cnic = '".$_POST['cnic']."'");
	$select = mysqli_query($conn, "SELECT * FROM registration WHERE email = '".$_POST['email']."'");
	if(mysqli_num_rows($select)) {
		include "./userexist.php";
		
	}
	
	else {
		$stmt = $conn->prepare("insert into registration(email, password, cnic, category, dob, address) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $email, $password, $cnic, $category, $dob, $address);
		$execval = $stmt->execute();
		include "./registration-successful.php";

		$stmt->close();
		$conn->close();
	}
?>