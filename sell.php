<?php include "./profile-header.php"; ?>

<section class="page-login-successful">

	<div class="wrapper grid wrapper-grid">

		<h2>Sell your product</h2>

		<form action="./profiledb.php" method="POST">
        <label>Choose Product Image</label>
	 					<input type="file" name="image" class="form-control">

			<label>
				E-mail address
				<input name="email" type="email" required placeholder="Enter your e-mail address">
			</label>

			<label>
				Product name
				<input name="product" type="product" required placeholder="Type product name">
			</label>

			<label>
				Phone
				<input name="price" type="text" required placeholder="Enter price">
			</label>
            <label>
				Details
				<input name="details" type="text" required placeholder="Enter Details">
			</label>

			<input class="btn btn-form" type="submit" value="Submit">

		</form>

	</div>

</section>

<?php include "./footer.php"; ?>