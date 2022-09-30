<?php
	include "./header-rent.php";
?>

<link rel="stylesheet" href="assets/css/main.css">

<section class="wrapper wrapper-grid grid grid-shadow">

	<form action="functions-sell-hardware.php" method="post" enctype="multipart/form-data">

		<div class="form-group text-center" style="position: relative;">
			<label style="justify-content: center; margin-bottom: 20px;">
				Product Image
				<input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required accept='image/*'>
			</label>

			<span class="img-div">
				<div class="text-center img-placeholder"  onClick="triggerClick()">
				</div>
				<img src="./assets/images/img-placeholder.jpg" onClick="triggerClick()" id="profileDisplay">
			</span>
		</div>

			<label>
				Product Name
				<input name="name" class="form-control" required>
			</label>

			<label>
				Product Description
				<input name="description" class="form-control" required>
			</label>

			<label>
				Price
				<input name="price" class="form-control" required>
			</label>

			<label>
				Your name
				<input name="owner" class="form-control" required>
			</label>

			<label>
				Your contact number
				<input name="contact"  class="form-control" required minlength=11 maxlength=11>
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