<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>Shopping N Rent</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="./assets/css/index.css">
	<link rel="stylesheet" href="./assets/css/popup.css">
	<script defer src="./assets/scripts/popup.js"></script>
</head>

<body>

	<header>
		<div class="wrapper header">
			<a class="site-title" href="./home.php">Shopping N Rent</a>

			<nav class="flex gap-2">
				<a class="nav-link" href="./buy.php">Buy</a>
				<a class="nav-link" href="./sell-home.php">Sell</a>
				<a class="nav-link" href="./rent.php">Rent</a>
			</nav>

			<div class="flex gap-2">

				<a class="nav-link" href="./">Logout</a>
				<div class="nav-link popup">Rentout</div>
				<div class="popup-menu">

					<form action="./rentout-db.php" method="POST">

						<label>
							Product ID
							<input name="product_id" type="text" required placeholder="Enter Product ID">
						</label>

						<label>
							Residential Address
							<input name="address" type="text" required placeholder="Enter your address">
						</label>

						<label>
							Date of product took
				            <input name="date" type="date" required placeholder="DD-MM-YYYY" title="Please type date of birth." maxlength="15">
						</label>

						<label>
							Date of return product
				            <input name="till" type="date" required placeholder="DD-MM-YYYY" title="Please type date of birth." maxlength="15">
						</label>

			            <p><b>Note: We donot provide any payment channel for transfer of amount.</b></p>

						<input class="btn btn-form" type="submit" value="Submit">

						<a class="float-right" href="courier.php" align="right">Courier Services</a>
						<a class="float-right" href="payment-method.php" align="right">Payment Methods</a>

					</form>

				</div>
			</div>
		</div>
	</header>

	<main>