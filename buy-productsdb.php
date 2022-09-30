
<?php
session_start();
$conn = mysqli_connect("localhost","root","","shopping");
//mysqli_select_db("shopping");
if($_SESSION["email"]==true)
//$_GET['product_id'];
?>
 
<?php
    $product_id = $_POST['product_id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
    $phone = $_POST['phone'];
	//$_GET['product_id'];
	
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
		$stmt = $conn->prepare("insert into buy_order(email, name, address, phone, product_id) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $email, $name, $address, $phone, $product_id);
		$execval = $stmt->execute();

		include "./logout.php";
		$stmt->close();
		$conn->close();
	}
?>

