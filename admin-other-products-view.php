<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            
                
                    <div class="card-head">
                        <h1>Rent Products (Category)</h1>
                    </div>
                    <?php
                       $conn = mysqli_connect("localhost","root","","shopping");
                       $query = "SELECT * from category";
                       $query_run = mysqli_query($conn, $query);
                    ?>
                    <table class="table">
                     <thead>
                        <tr>
                           <th>Product ID</th>
                           <th>Email</th>
                           <th>Reason</th>
                           <th>Contact</th>
                           <th>Owner</th>
                           <th>Posted Date</th>
                           <th>Category</th>
                           <th>Image</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                        <tbody>
                            <?php
                            if(mysqli_num_rows($query_run) > 0) //record is there or not
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                   <td><?php echo $row['id']; ?></td>
                                   <td><?php echo $row['email']; ?></td>
                                   <td><?php echo $row['reason']; ?></td>
                                   <td><?php echo $row['contact']; ?></td>
                                   <td><?php echo $row['owner']; ?></td>
                                   <td><?php echo $row['date']; ?></td>
                                   <td><?php echo $row['category']; ?></td>
                                   <td><img src="<?php echo 'images/'. $row['image']; ?>" width="100px"></td>
                                   <td>
            
                                   <a href="admin-other-products-delete.php?id=<?php echo $row['id']; ?>" class='btn btn-danger btn-sm'>Delete</a>
                                   </td>
                                </tr>
                                <?php

                                }
                            }
                            else
                            {
                                ?>
                                <tr>
                                    <td> No Records Available</td>
                            </tr>
                               <?php
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
   </div>
</body>
</html>
