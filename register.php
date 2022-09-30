<?php include "./header-login.php"; ?>

<section class="page-login">

	<div class="wrapper grid wrapper-grid">

		<h2>Register For An Account</h2>

		<form action="./connect.php" method="POST">

			<label>
				E-mail
				<input name="email" type="email" required placeholder="Enter your e-mail">
			</label>

			<label>
				Password
				<input name="password" type="password" required placeholder="Type in your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

			</label>

			<label>
				CNIC
				<input name="cnic" type="text" required placeholder="Enter 13 digit CNIC number" minlength=13 maxlength=13>
			</label>

			<label>
				Date of Birth
				<input name="dob" type="date" required placeholder="DD-MM-YYYY" title="Please type date of birth." maxlength="15">
			</label>

			<label>
				Date of Birth
				<input name="address" type="text" required placeholder="House#123 Karachi" title="Please type Address">
			</label>

			<label for="choice">Choose a category:</label>
			<input list="flavors" id="choice" name="category" />
			<datalist id="flavors">
			<option value="Buyer">
				<option value="Seller">
				<option value="Renter">
				
				</datalist>
			<p>Password must contain the following:</p>
			<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
			<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
			<p id="number" class="invalid">A <b>number</b></p>
			<p id="length" class="invalid">Minimum <b>8 characters</b></p>

			<input class="btn btn-form" type="submit" value="Register">

		</form>

	</div>

</section>

<?php include "./footer.php"; ?>