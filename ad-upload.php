<?php
	include "./header-login.php";
?>

<link rel="stylesheet" href="assets/css/main.css">

<section class="wrapper wrapper-grid grid grid-shadow">

	<form action="ad-db.php" method="post" enctype="multipart/form-data">

		<div class="form-group text-center" style="position: relative;">
			<label style="justify-content: center; margin-bottom: 20px;">
				Ad Image 
                
				<input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required accept='image/*'>
			</label>

                <p><br><b>Please upload image size of 300 x 200</b></br></p>
                <p><br><b>Only upload JPG file of image</b></br></p>

			<span class="img-div">
				<div class="text-center img-placeholder"  onClick="triggerClick()">
				</div>
				<img src="./assets/images/img-placeholder.jpg" onClick="triggerClick()" id="profileDisplay">
			</span>
		</div>

			<label>
				Your e-mail address
				<input name="email" class="form-control" required>
			</label>

			<label>
				Organization Name
				<input name="name" class="form-control" required>
			</label>

            <label>
				Organization Type
				<input name="type" class="form-control" required>
			</label>

			<label>
				Ad Description
				<input name="description" class="form-control" required>
			</label>

			<label>
				Applicant name
				<input name="owner" class="form-control" required>
			</label>

			<label>
				Your contact number
				<input name="contact"  class="form-control" required>
			</label>

            <label for="choice">Rate list:</label>
			<input list="flavors" id="choice" name="price" />
			<datalist id="flavors">
			<option value="6 hours 1500 Pkr">
				<option value="10 hours 2000 Pkr">
				<option value="15 hours 2500 Pkr">
				<option value="20 hours 3000 Pkr">
				<option value="24 hours 3500 Pkr">
					
				</datalist>

                <label>
				Choose your date
				<input name="date" type="date" required placeholder="DD-MM-YYYY" title="Please type date of birth." maxlength="15">
			</label>

			<button type="submit" name="save" class="btn btn-form">Submit</button>
	</form>

</section>

<script>
function triggerClick(e) {
  document.querySelector('#profileImage').click();
}

function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>

<?php include "./footer.php"; ?>