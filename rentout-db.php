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
	$product_id = $_POST['product_id'];
	$date = $_POST['date'];
    $till = $_POST['till'];
    $address = $_POST['address'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','shopping');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 

	else {
		$email=$_SESSION["email"];
		$query = mysqli_query($conn,"select * from registration where email='$email'");
        $row=mysqli_fetch_array($query);
       // $id=$row["id"];
		$stmt = $conn->prepare("insert into rent_order(email, product_id, date, till, address) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $email, $product_id, $date, $till, $address);
		$execval = $stmt->execute();
        include "./logout.php";
		
		$stmt->close();
		$conn->close();
	}
?>