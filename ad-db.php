<?php

$conn=mysqli_connect("localhost","root","", "shopping");

if(isset($_POST['save'])){
	$email=stripslashes($_POST['email']);
	$name=stripslashes($_POST['name']);
	$description=stripslashes($_POST['description']);
	$price=stripslashes($_POST['price']);
	$contact=stripslashes($_POST['contact']);
	$owner=stripslashes($_POST['owner']);
	$type=stripslashes($_POST['type']);
    $date=stripslashes($_POST['date']);

	// this is the name of the image that will be saved in the database
	$image=time() . '-' . $_FILES['image']['name'];

	// upload the image to a specific folder first and this folder for example called (images)

	$target_dir="ad-image/";
	$target_file=$target_dir . basename($image);

	//now move the image to the folder (images)

	// move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

	// now let we upload the image to the database


	if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
		$sql="INSERT INTO ad SET image='$image', email='$email', name='$name', description='$description', price='$price', contact='$contact', owner='$owner', type='$type', date='$date' ";
	

	// if the data has been saved in the database , redirect the user to the main page

		if(mysqli_query($conn, $sql)){
			header('location:ad-success.php');
		}
	}
}


// let we select all the profiles from the database

$results=mysqli_query($conn, "SELECT * FROM products WHERE category = 'Bikes'");
$rent_list=mysqli_fetch_all($results, MYSQLI_ASSOC);

?>