<?php
session_start();
include 'conn.php';
$id = $_GET['id'];

$query = "SELECT * FROM `imagecrud` WHERE `id` = '$id'";
$run_query = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($run_query))
{
    $img = $row[2];
    unlink($img);
}

$sql = "DELETE FROM `imagecrud` WHERE `id` = '$id'";
$run = mysqli_query($conn, $sql);

if($run)
{
    $_SESSION['SuccessMessage'] = "Data Deleted Successfully";
    header('Location: display.php');
}
else
{
    $_SESSION['ErrorMessage'] =  "Data not Deleted";
    header('Location: display.php');
}

?>