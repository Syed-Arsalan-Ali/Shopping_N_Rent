<?php include "./profile-header.php"; ?>

<section class="page-login-successful">

	<div class="wrapper grid wrapper-grid">

		<h2>Create your profile</h2>

		<form action="./profiledb.php" method="POST">


			<label>
				Username
				<input name="username" type="username" required placeholder="Type username">
			</label>

			<label>
				Phone
				<input name="phone" type="number" required placeholder="Enter phone no" minlength=11 maxlength=11>
			</label>
            <label>
				City
				<input name="city" type="name" required placeholder="Enter City">
			</label>

			<input class="btn btn-form" type="submit" value="Submit">
			<a href="view-profile.php" class="btn">View</a>

		</form>

	</div>

</section>

<?php include "./footer.php"; ?>