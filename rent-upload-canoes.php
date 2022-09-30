<?php
	include "./header-rent.php";
?>

<link rel="stylesheet" href="assets/css/main.css">

<section class="wrapper wrapper-grid grid grid-shadow">

	<form action="functions-rent-canoes.php" method="post" enctype="multipart/form-data">

		<div class="form-group text-center" style="position: relative;">
			<label style="justify-content: center; margin-bottom: 20px;">
				Category Image
				<input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required accept='image/*'>
			</label>			

			<span class="img-div">
				<div class="text-center img-placeholder"  onClick="triggerClick()">
				</div>
				<img src="./assets/images/img-placeholder.jpg" onClick="triggerClick()" id="profileDisplay">
			</span>
		</div>

		<label>
				Your Email
				<input name="email" class="form-control" required>
			</label>

			<label>
				Your name
				<input name="owner" class="form-control" required>
			</label>

			<label>
				Your contact number
				<input name="contact"  class="form-control" required minlength=11 maxlength=11>
			</label>

			<label>
				Why we add this category?
				<textarea name="reason"  class="form-control" required rows="5" cols="40" required placeholder="Type strong reason why we add this category in our website"></textarea>
			</label>
			 

			<label for="choice">Choose a category:</label>
			<input list="flavors" id="choice" name="category" />
			<datalist id="flavors">
			<option value="Suits and Wedding Dresses">
				<option value="Event decor and equipment">
				<option value="Office Equipment Rental">
				<option value="Game Rental">
				<option value="Fishing Rental">
				<option value="Camera equipment">	
				<option value="Gym equipment">
				<option value="Jet skis">
				<option value="Scuba gear">
				<option value="canoes and kayaks">
				<option value="Others please specify">
					
				</datalist>


			<button type="submit" name="save" class="btn btn-form">Submit</button>
			
	</form>

	<p><b>Note: This category will approve from the admin's permission and visible when in the list when admin approved</b></p>

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