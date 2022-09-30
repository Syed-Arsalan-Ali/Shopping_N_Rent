<?php include "./profile-header.php"; ?>


<section class="wrapper">

<div class="wrapper-grid">

    <div class="grid grid-2 grid-shadow">
        <div class="wrapper-text">
            <h2 align = "center">Contact us</h2>
            <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <p>For any complaint regarding our company services and others.Inform us via email or fill the below complaint form.We will try to resolve your issue as soon as possible</p>
            <form action="complaintdb.php" method="POST">

			<label>
				Your Name
				<input name="name" type="text" required placeholder="Enter your name">
			</label>

            <label>
				Name of person complaint is regarding
				<input name="against_person" type="text" required placeholder="Enter person name complaint is regarding">
			</label>

            <label>
				Event occured on
				<input name="date" type="date" required placeholder="Enter event date occured">
			</label>

			<label>
				Complaint
				<textarea name="complaint" type="text" required placeholder="Enter your complain" rows="5" cols="40"></textarea>
            </label>
            <input class="btn btn-form" type="submit" value="Submit">
            <a href="view-complain.php" class="btn">View</a>

            <p>You can also contact us through below mention platforms</p>

            <i style="font-size:20px" class="fa">&#xf232; +92 123456789</i>
            <i style="font-size:20px" class="fa">&#xf095; 021-3456789</i>
            <i style="font-size:20px" class="fa">&#xf0e0; ShoppingNRent@gmail.com</i>

        	</form>
        </div>

        <img src="./assets/images/contact.jpg" alt="">
    </div>

</section>

<?php include "./footer.php"; ?>