<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<h1 align="center">Upload Advertisement Image Here</h1>
<link rel="stylesheet" href="assets/css/main.css">

<section class="">

	<form action="advertisement-uploaddb.php" method="post" enctype="multipart/form-data" style="margin: auto; width: 220px;">

		<div class="form-group text-center" style="position: relative;">
			
      <label>
        Organization Name
         <input type="text" name="org_name"  class="form-control" placeholder="Enter Organization name"><br>
       </label>

       <label>Upload Image
       <input type="file" name="image"  class="form-control" placeholder="Upload ad image"><br>
			</label>

		</div>

			
    <button type="submit" name="save" class='btn btn-primary btn-sm' align="center">Submit</button>

    <a class='btn btn-danger btn-sm' align="center" href="delete_ad.php">Delete Ad</a>
	</form>
  

</section>


