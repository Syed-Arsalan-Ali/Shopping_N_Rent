<?php
session_start();
$conn = mysqli_connect("localhost","root","","shopping");
//mysqli_select_db("shopping");
if($_SESSION["email"]==true)
{
    echo "welcome". " ".$_SESSION["email"];
}else{

}
?>
<?php

	//$email = $_POST['email'];
	$username = $_POST['username'];
	$phone = $_POST['phone'];
    $city = $_POST['city'];

	// Database connection
	$conn = new mysqli('localhost','root','','shopping');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}//$select = mysqli_query($conn, "SELECT * FROM registration WHERE cnic = '".$_POST['cnic']."'");
	
		else {
		$email=$_SESSION["email"];
		$query = mysqli_query($conn,"select * from registration where email='$email'");
        $row=mysqli_fetch_array($query);
        //$id=$row["id"];
		$stmt = $conn->prepare("insert into profile(email, username, phone, city) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $email, $username, $phone, $city);
		$execval = $stmt->execute();

		include "./profile-successful.php";
		$stmt->close();
		$conn->close();
	}


?>