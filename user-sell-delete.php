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
        $email = $_POST['email'];

        $path = "img/"; /** Path for Uploading your Image **/

        $stmt = $conn->prepare("select * from sell where email = ? AND id='$student_id'");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
        //$email=$_SESSION["email"];
		
		if($stmt_result->num_rows > 0) {

			$data = $stmt_result->fetch_assoc();
				if($data['email'] === $email) {

        $query = " DELETE FROM sell WHERE id='$student_id' ";
        $result = mysqli_query($conn, $query); 
        if($result)
        {
            //move_uploaded_file($_FILES['image_profile']['tmp_name'], $path."/".$filename);
            //header('location:rent.php');
            $message = "Data Deleted Successfully!";
        } 
        else
        {
            //$message = "Data Not Updated!. Error: " . $sql . "" . mysqli_error($conn);
        }
    }
}
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Sell Product</title>
</head>
<body>
<?php include "./profile-header.php"; ?>
<div class="form-group text-center" style="position: relative;" >
<link rel="stylesheet" href="assets/css/main.css">
<section class="wrapper wrapper-grid grid grid-shadow">

        
        <?php if(isset($message)) { echo "$message"; } ?>
                
                    <div class="card-header">
                    <h4>Enter your email address to delete the details</h4>
                        <h4>Delete Sell Product</h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = $_GET['id'];
                            $query = " SELECT * FROM sell WHERE id='$student_id' LIMIT 1";
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
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <hr/>
                                        <button type="submit" name="update_buttton" class="btn btn-primary">Delete Product</button>
                                    </div>

                                </form>
                            </section>
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
</body>
</html>
<?php include "./footer.php"; ?>