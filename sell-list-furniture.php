<?php include "./profile-header.php"; ?>

<?php
	//session_start();
	$connect = mysqli_connect("localhost", "root", "", "shopping");
?>
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<section class="wrapper">

	<div class="wrapper-box">

		<div class="wrapper-heading">
			<h2>Sell Product</h2>
			<p>Update and delete your product</p>
		</div>

		<div class="grid-col3">
			<?php
				$query = "SELECT * FROM sell WHERE c_id = '4'";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
				{
			?>
			<div class="wrapper-item">
			<img src="<?php echo 'img/'. $row['image']; ?>">

			<p><b>Product ID</b> <?php echo $row["id"]; ?></p>
				<p><b>Product Name</b> <?php echo $row["name"]; ?></p>
				<p><b>Details</b> <?php echo $row["description"]; ?></p>
				<p><b>Product Price</b> <?php echo $row["price"]; ?></p>
				<p><b>Owner contact no</b> <?php echo $row["contact"]; ?></p>
				<p><b>Owner name</b> <?php echo $row["owner"]; ?></p>
			
				<div class="wrapper-btns-col2">
				<a href="sell-update.php?id=<?php echo $row['id']; ?>" class='btn btn-primary btn-sm'>Update</a>
				<a href="user-sell-delete.php?id=<?php echo $row['id']; ?>" class='btn btn-primary btn-sm'>Delete</a>
				</div>
			</div>
		<?php
			}
		}
		?>
		</div>

	</div>

</section>

<?php include "./footer.php"; ?>