<?php include "./header-login.php"; ?>

<section class="page-login">

	<div class="wrapper grid wrapper-grid">

		<h2>Admin Panel</h2>

		<form action="./admin-success.php" method="POST">

			<label>
				Admin ID
				<input name="email" type="text" required placeholder="Enter your ID">
			</label>

			<label>
				Password
				<input name="password" type="password" required placeholder="Type in your password">
			</label>

			<input class="btn btn-form" type="submit" value="Login">


		</form>

	</div>

</section>

<?php include "./footer.php"; ?>