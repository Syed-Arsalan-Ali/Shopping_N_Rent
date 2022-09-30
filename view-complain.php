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
$query = mysqli_query($con,"select * from contact where email='$email'");
$rowcount=mysqli_num_rows($query);
?>
<link rel="stylesheet" href="./assets/css/table.css">
<section class="wrapper wrapper-grid grid grid-shadow">
<h2>View Complain</h2>
<table>
    <tr>
        <td>Email</td>
        <td>Complain</td>
        <td>Complain date</td>
        <td>Username</td>
        <td>Complain Against</td>
</tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
    $row=mysqli_fetch_array($query);

?>
<tr>
    <td><?php  echo $row["email"]  ?></td>
    <td><?php  echo $row["complaint"]  ?></td>
    <td><?php  echo $row["date"]  ?></td>
    <td><?php  echo $row["name"]  ?></td>
    <td><?php  echo $row["against_person"]  ?></td>
</tr>
<?php
}
?>
</table>
</section>
<?php include "./footer.php"; ?>
