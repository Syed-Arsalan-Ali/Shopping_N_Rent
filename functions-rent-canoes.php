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

$conn=mysqli_connect("localhost","root","", "shopping");

if(isset($_POST['save'])){
	$email=stripslashes($_POST['email']);
	//$name=stripslashes($_POST['name']);
	//$description=stripslashes($_POST['description']);
	//$price=stripslashes($_POST['price']);
	$contact=stripslashes($_POST['contact']);
	$owner=stripslashes($_POST['owner']);
	$category=stripslashes($_POST['category']);
	$reason=stripslashes($_POST['reason']);


	// this is the name of the image that will be saved in the database
	$image=time() . '-' . $_FILES['image']['name'];

	// upload the image to a specific folder first and this folder for example called (images)

	$target_dir="images/";
	$target_file=$target_dir . basename($image);

	//now move the image to the folder (images)

	// move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

	// now let we upload the image to the database


	if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
		$sql="INSERT INTO category SET image='$image', email='$email', contact='$contact', owner='$owner', category='$category', reason='$reason' ";
		

	// if the data has been saved in the database , redirect the user to the main page

		if(mysqli_query($conn, $sql)){
			//header('location:rent.php');
			header('location:rent.php');
		}
	}
}


// let we select all the profiles from the database

$results=mysqli_query($conn, "SELECT * FROM category WHERE id BETWEEN '32' and '33'");
$rent_list=mysqli_fetch_all($results, MYSQLI_ASSOC);

?>