
<?php include "./header-registration-successful.php"; ?>

<link rel="stylesheet" href="./assets/pop-up/css/index.css">

<section class="wrapper">

	<div class="wrapper-grid">
		<div class="grid grid-shadow">
			<div class="wrapper-generic">
				<h1>Login Successful!</h1>
				<p>Welcome back!</p>
			</div>

			<html">
   
</html>
			<div class="wrapper-generic grid-2">
				<a href="./../home.php" class="btn">Go To Home</a>
				<div class="btn pop-up-btn">Help us in survey</div>
				<a href="./../terms.php" class="btn">Are you a renter or seller?</a>
			</div>

		</div>
	</div>

	

</section>
<div class="pop-up-modal-wrapper">
	<div class="pop-up-modal">

		<div class="pop-up-title-bar">
			<h2>Survey</h2>
			<p>We are conducting survey please help us by providing correct information.</p>
			<img class="pop-up-icon-close" src="./assets/pop-up/icons/close-icon.svg">
		</div>

		<div class="pop-up-wrapper">

			<form action="./survey.php" method="POST" class="pop-up-form">

			<label for="choice">Gender</label>
			<input list="flavors" id="choice" name="gender" />
			<datalist id="flavors">
			<option value="Male">
			<option value="Female">	
			</datalist>	

				<label>
					Age
					<input name="age" type="text" required placeholder="Type in your age">

				</label>

				<label>
					Annual Income
					<input name="income" type="text" required placeholder="Type in your income in K">

				</label>

				<input class="btn btn-form" type="submit" value="Submit">

			</form>

		</div>

	</div>
</div>


<script defer src="./assets/pop-up/js/index.js"></script>

<?php include "./footer-registration-successful.php"; ?>