<?php include "./profile-header.php"; ?>
<?php
session_start();
$con = mysqli_connect("localhost","root","","shopping");
//mysqli_select_db("shopping");
if($_SESSION["email"]==true)
{
    echo "welcome". " ".$_SESSION["email"];
}else{

}
?>
<?php

$email=$_SESSION["email"];
$query = mysqli_query($con,"select * from profile where email='$email'");
$rowcount=mysqli_num_rows($query);
?>
<link rel="stylesheet" href="./assets/css/table.css">
<section class="wrapper wrapper-grid grid grid-shadow">
<h2>View Profile</h2>
<table>
    <tr>
        <td><b>Email</b></td>
        <td><b>Phone</b></td>
        <td><b>City</b></td>
        <td><b>Username</b></td>
</tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
    $row=mysqli_fetch_array($query);

?>
<tr>
    <td><?php  echo $row["email"]  ?></td>
    <td><?php  echo $row["phone"]  ?></td>
    <td><?php  echo $row["city"]  ?></td>
    <td><?php  echo $row["username"]  ?></td>
</tr>
<?php
}
?>
</table>
</section>
<?php include "./footer.php"; ?>
