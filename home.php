<?php 
include "./header-rent.php";
include "advertisement-uploaddb.php";
?>

<?php
	//session_start();
	$connect = mysqli_connect("localhost", "root", "", "shopping");
?>
	<div class="grid grid-2 grid-shadow">
	<div class="wrapper-text">
	<h3 align="center">Paid Promotion</h3>
	
	<?php
				$query = "SELECT * FROM post_ad";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
				{
			?>
			<div class="wrapper-item">
			    <img src="<?php echo 'ad-image/'. $row['image']; ?>">		
				</div>
			</div>
			<?php
				}
			}
			?>
			<p><b>This is paid promotion for advetisement click below button</b></p>
			<a href="ad-main.php"  class="btn">Want to post ad?</a>
		</div>

	</div>
	</div>

</div>

		<div class="grid grid-2 grid-shadow">
			<div class="wrapper-text">
				<h2>Our Store</h2>

				<p>Here we are providing an option where our customers buy products online and they get various products and it can save your time and reduce your efforts.</p>

				<a href="./buy.php" class="btn">Buy From Our Store</a>

			</div>

			<img src="./assets/images/home-01.jpg" alt="">
		</div>

		<div class="grid grid-2 grid-shadow">
			<img src="./assets/images/home-02.jpg" alt="">

			<div class="wrapper-text">
				<h2>Sell Your Products</h2>

				<p>Here we are providing an option where our customers can upload their products with some specific descriptions and people can earn a good amount without doing much efforts and hastle.</p>

				<a href="sell-home.php" class="btn">Sell A Product</a>

			</div>
		</div>

		<div class="grid grid-2 grid-shadow">
			<div class="wrapper-text">
				<h2>List Your Item For Rent</h2>

				<p>Here we are providing an option where our customers can upload their products with some specific descriptions while people can take products on rent for limited time.</p>
				
				<a href="./rent-agreement.php" class="btn">List An Item For Rent</a>

			</div>

			<img src="./assets/images/home-03.jpg" alt="">
		</div>

	</div>

</section>

<?php include "./footer.php"; ?>