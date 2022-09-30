<?php
session_start();
$con = mysqli_connect("localhost","root","","shopping");

if(isset($_POST['stud_delete_multiple_btn']))
{
    $all_id = $_POST['stud_delete_id'];
    $extract_id = implode(',' , $all_id);
    // echo $extract_id;

    $query = "DELETE FROM post_ad WHERE id IN($extract_id) ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Deleted Successfully";
        header("Location: delete_ad.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Deleted";
        
    }
}
?>