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
	$complaint = $_POST['complaint'];
	$date = $_POST['date'];
	$name = $_POST['name'];
	$against_person = $_POST['against_person'];

	// Database connection
	$conn = new mysqli('localhost','root','','shopping');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$email=$_SESSION["email"];
		$query = mysqli_query($conn,"select * from registration where email='$email'");
        $row=mysqli_fetch_array($query);
       // $id=$row["id"];
		$stmt = $conn->prepare("insert into contact(email, complaint, date, name, against_person) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $email, $complaint, $date, $name, $against_person);
		$execval = $stmt->execute();

		include "./complainsuccess.php";
		$stmt->close();
		$conn->close();
	}
?>