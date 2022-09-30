<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body style="margin: 50px;">
    <h1>Customers Complain</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Complian</th>
                <th>Date</th>
                <th>Person Name</th>
                <th>Complain Against</th>
                <th>Action</th>
</tr>
</thead>

<tbody>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "shopping";

    //Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    //Check connection
    if ($connection->connect_error){
        die("Connection failed: " . $connection->connect_error);
    }

    // read all row from database table
    $sql = "SELECT * FROM contact";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query: " . $connection->error);
    }

    //read data of each row
    while($row = $result->fetch_assoc()){
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["email"] . "</td>
        <td>" . $row["complaint"] . "</td>
        <td>" . $row["date"] . "</td>
        <td>" . $row["name"] . "</td>
        <td>" . $row["against_person"] . "</td>
        <td>
            <a class='btn btn-danger btn-sm' href='complain-delete.php?id=$row[id]'>Delete</a>

        </td>
</tr>";
    }
?>
</tbody>

    </table>
</body>
</html>
