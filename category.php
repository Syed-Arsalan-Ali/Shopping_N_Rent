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
			<h2>Our Categories</h2>
			<p>If you want other category upload relevant details about the product.</p>
		</div>

		<div class="grid-col3">
			<?php
				$query = "SELECT * FROM category WHERE id BETWEEN '7' and '13'";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
				{
			?>
			<div class="wrapper-item">
				<img src="images/<?php echo $row["image"]; ?>">

				<p>Category name</p>
				<h3><?php echo $row["category"]; ?></h4>

				<div class="wrapper-btns-col2">
					<a href="data.php" class="btn">Add New Item</a>
					<a href="#" class="btn">View Listing</a>
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