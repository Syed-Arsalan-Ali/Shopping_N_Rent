<?php include "./header-login.php"; ?>

<section class="page-login">

	<div class="wrapper grid wrapper-grid">

		<h2>Forgot Password</h2>

		<form action="./forgotdb.php" method="POST">

			<label>
				E-mail address
				<input name="email" type="email" required placeholder="Enter your e-mail address">
			</label>
			<label>
				CNIC
				<input name="cnic" type="text" required placeholder="Enter your cnic" maxlength=13 minlength=13>
			</label>

			<label>
				New Password
				<input name="password" type="password" required placeholder="Type your new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
			</label>

			<input class="btn btn-form" type="submit" value="Update">
			<p>Password must contain the following:</p>
			<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
			<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
			<p id="number" class="invalid">A <b>number</b></p>
			<p id="length" class="invalid">Minimum <b>8 characters</b></p>

		</form>

	</div>

</section>

<?php include "./footer.php"; ?>