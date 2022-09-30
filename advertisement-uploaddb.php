<?php

$conn=mysqli_connect("localhost","root","", "shopping");

if(isset($_POST['save'])){

	$org_name=$_POST['org_name'];
	//$image=$_POST['image'];
	// this is the name of the image that will be saved in the database
	$image=time() . '-' . $_FILES['image']['name'];

	// upload the image to a specific folder first and this folder for example called (images)

	$target_dir="ad-image/";
	$target_file=$target_dir . basename($image);

	//now move the image to the folder (images)

	// move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

	// now let we upload the image to the database

    $sql="INSERT INTO post_ad SET image='$image', org_name='$org_name' ";
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
	
		if(mysqli_query($conn, $sql)){
            echo "Ad posted Successfully";
		}
    }
	"<script>
    alert('Send Successfully');
    document.location.href = 'advertisement-upload.php';
    </script>
    ";
}
?>