<?php include "./header-login.php"; ?>

<section class="page-login-successful">

	<div class="wrapper grid wrapper-grid">

		<h2>Enter your Bank account details</h2>

		<form action="./bankdetailsdb.php" method="POST">

			<label>
				E-mail address
				<input name="email" type="email" required placeholder="Enter your e-mail address">
			</label>

			<label>
				Account title
				<input name="accounttitle" type="text" required placeholder="Type account title">
			</label>

			<label>
				Account no
				<input name="accountno" type="number" required placeholder="Enter account no">
			</label>
            <label>
				Bank Name
				<input list="flavors" id="choice" name="bankname" required placeholder="Enter bank name"/>
			<datalist id="flavors">
			<option value="HBL Bank">
				<option value="MCB Bank">
				<option value="Al Habib">
				
				</datalist>
			</label>

			<label>
				Customer type
				<input list="flavors" id="choice" name="customer" required placeholder="Seller/Renter/Both"/>
			<datalist id="flavors">
			<option value="Buyer">
				<option value="Seller">
	
				
				</datalist>
			</label>

			<input class="btn btn-form" type="submit" value="Submit">

		</form>

	</div>

</section>

<?php include "./footer.php"; ?>