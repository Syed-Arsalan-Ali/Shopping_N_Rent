<?php
if( isset($_GET["id"]) ){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "shopping";

    //Create connection
    $connection = new mysqli($servername, $username, $password, $database);

   $sql = "DELETE FROM ad WHERE id=$id";
   $connection->query($sql);
    }
    header("location: add-view.php");
    exit;


?>
<?php
if( isset($_GET["id"]) ){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "shopping";

    //Create connection
    $connection = new mysqli($servername, $username, $password, $database);

   $sql = "DELETE FROM products WHERE id=$id";
   $connection->query($sql);
    }
    header("location: rent-products-view.php");
    exit;


?>
