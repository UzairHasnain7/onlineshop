<?php
session_start();
include 'admin/conn.php';

if(isset($_POST['registerbtn']))
{
    $month = $_POST ['month'];
    $days = $_POST ['days'];
    $year = $_POST ['year'];
    $gender = $_POST ['gender'];
    
    {
        if($image_size <= 1000000)
        {
            $sql = "INSERT INTO `dob` (`month`, `days`, `year`, `gender`) VALUES ('$month', '$days', 
            '$year', '$gender') LIMIT 1";
            $query = mysqli_query($conn, $sql);
            if($query)
            {
                $_SESSION['SuccessMessage'] = "Data Inserted Successfully";
                header('Location: next1.php');
            }
            else
            {
                $_SESSION['ErrorMessage'] =  "Data not Inserted";
                header('Location: next.php');
            }
        }  
    }
}

?>