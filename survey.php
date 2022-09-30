<?php
	$gender = $_POST['gender'];
	$income = $_POST['income'];
    $age = $_POST['age'];

	// Database connection
	$conn = new mysqli('localhost','root','','shopping');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into survey(gender, age, income) values(?, ?, ?)");
		$stmt->bind_param("sss", $gender, $age, $income);
		$execval = $stmt->execute();
		include "./bankdetails-successful.php";
		$stmt->close();
		$conn->close();
	}
?>