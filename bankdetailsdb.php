<?php
	$email = $_POST['email'];
	$accounttitle = $_POST['accounttitle'];
	$accountno = $_POST['accountno'];
    $bankname = $_POST['bankname'];
	$customer = $_POST['customer'];


	// Database connection
	$conn = new mysqli('localhost','root','','shopping');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into bankdetails(email, accounttitle, accountno, bankname, customer) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $email, $accounttitle, $accountno, $bankname, $customer);
		$execval = $stmt->execute();
		include "./bankdetails-successful.php";
		$stmt->close();
		$conn->close();
	}
?>