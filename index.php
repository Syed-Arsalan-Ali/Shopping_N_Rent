

<?php include "./header-login.php"; ?>

<section class="page-login">

	<div class="wrapper grid wrapper-grid">

		<h2>Login To Your Account</h2>

		<form action="./login.php" method="POST">

			<label>
				E-mail address
				<input name="email" type="email" required placeholder="Enter your e-mail address">
			</label>

			<label>
				Password
				<input name="password" type="password" required placeholder="Type in your password">
			</label>

			<input class="btn btn-form" type="submit" value="Login">

			<a class="float-right" href="forgotpassword.php" align="right">Forgot Password?</a>
			<a class="float-right" href="admin-login.php" align="right">Admin</a>


		</form>

	</div>

</section>

<?php include "./footer.php"; ?>