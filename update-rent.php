<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "shopping";

    // Create DB Connection
    $conn = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 

    if(isset($_POST['update_buttton']))
       
    {    
        $student_id = $_POST['student_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $email = $_POST['email'];
        $price = $_POST['price'];
        $contact = $_POST['contact'];
        $image = $_FILES['image_profile']['name'];

        $path = "img/"; /** Path for Uploading your Image **/
        
        $image_extension = pathinfo($image, PATHINFO_EXTENSION); /** Image Extension **/
        $filename = time().'.'.$image_extension; /** Renaming the Image **/

        $stmt = $conn->prepare("select * from products where email = ? AND id='$student_id'");
        
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		
		if($stmt_result->num_rows > 0) {

			$data = $stmt_result->fetch_assoc();
				if($data['email'] === $email) {

        $query = " UPDATE products SET name='$name', description='$description', email='$email', price='$price', contact='$contact', image='$filename' WHERE id='$student_id' ";
        $result = mysqli_query($conn, $query); 
        if($result)
        {
            move_uploaded_file($_FILES['image_profile']['tmp_name'], $path."/".$filename);
            //header('location:rent.php');
            $message = "Data Updated Successfully!";
        } 
        else
        {
            $message = "Data Not Updated!.";
            //header('location:rent.php');
        }
    }
}
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Rent details</title>
    
</head>
<body>
<?php include "./profile-header.php"; ?>
<div class="form-group text-center" style="position: relative;" >
<link rel="stylesheet" href="assets/css/main.css">
<section class="wrapper wrapper-grid grid grid-shadow">

    <div class="container mt-5">
        
        <?php if(isset($message)) { echo "$message"; } ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                    <h4>Enter your email address to update the details</h4>
                        <h4>Update Rent Details</h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = $_GET['id'];
                            $query = " SELECT * FROM products WHERE id='$student_id' LIMIT 1";
                            $result = mysqli_query($conn, $query);

                            if(mysqli_num_rows($result) > 0)
                            {
                                $row = mysqli_fetch_array($result);
                                ?>

                                <form action="" method="POST" enctype="multipart/form-data">

                                    <input type="hidden" name="student_id" value="<?=$row['id'];?>" >
                                    <div class="mb-3">
                                        <label>Product Name</label>
                                        <input type="text" name="name" value="<?=$row['name'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Product Description</label>
                                        <input type="text" name="description" value="<?=$row['description'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Contact</label>
                                        <input type="text" name="contact" value="<?=$row['contact'];?>" class="form-control" required minlength=11 maxlength=11>
                                    </div>
                                    <div class="mb-3">
                                        <label>Price</label>
                                        <input type="text" name="price" value="<?=$row['price'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                         <label>Upload Image</label>
                                         <input type="file" name="image_profile" required class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <hr/>
                                        <button type="submit" name="update_buttton" class="btn btn-primary">Update Data</button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Record Found</h4>";
                            }
                        }
                        else
                        {
                            echo "<h4>No ID Found</h4>";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php include "./footer.php"; ?>