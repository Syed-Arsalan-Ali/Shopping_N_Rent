<?php
	include "./header-logged.php";
	include "functions-rent-sport.php";
?>

<link rel="stylesheet" href="./assets/css/table.css">

<section class="wrapper wrapper-grid grid grid-shadow">

	<h2>Items Available For Rent</h2>

	<table>
		<thead>
			<tr>
				<th>Product ID</th>
				<th>Product Name</th>
				<th>Product Description</th>
				<th>Price (Per Day)</th>
				<th>Owner Contact Number</th>
				<th>Owner Name</th>
				<th>Product Image</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($rent_list as $item): ?>

				<tr>
					<td><?php echo $item['id']; ?></td>
					<td><?php echo $item['name']; ?></td>
					<td><?php echo $item['description']; ?></td>
					<td><?php echo $item['price']; ?></td>
					<td><?php echo $item['contact']; ?></td>
					<td><?php echo $item['owner']; ?></td>
					<td><img src="<?php echo 'img/'. $item['image']; ?>"></td>
					<td>
            <a href="update-rent.php?id=<?php echo $item['id']; ?>" class='btn btn-primary btn-sm'>Update</a>
			</td>
			<td>
            <a href="user-rent-delete.php?id=<?php echo $item['id']; ?>"class='btn btn-danger btn-sm'>Delete</a>
			
                </td>
				</tr>

			<?php endforeach; ?>
		</tbody>

	</table>

</section>

<?php include "./footer.php"; ?>