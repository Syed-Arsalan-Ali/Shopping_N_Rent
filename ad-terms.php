<?php include "./profile-header.php"; ?>

<section class="page-login-successful">

	<div class="wrapper grid wrapper-grid">

		<h2>Terms and Conditions</h2>

		<form action="./profiledb.php" method="POST">

			<text>
            * We will charge 100% of the total amount of your advertisement before publishing the ad.
            </text>
            <text>
            * In case if we do not publish your ad on your desired dates we will inform your earlier.
            </text>
            <text>
            * If we do not publish your ad for some reason then we will detect 5% of the total amount.
            </text>
            <text>
            * If the organization withdraw its ad then we will detect 20% of the total amount.
            </text>
            <a class="float-right" href="ad-main.php" ><b>Do not Agree</b></a>
            <a class="float-right" href="ad-upload.php" ><b>Agree</b></a>

		</form>

	</div>

</section>

<?php include "./footer.php"; ?>