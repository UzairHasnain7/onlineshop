<?php
session_start();
include 'admin/conn.php';

if(isset($_POST['registerbtn']))
{
    $first_name = $_POST ['first_name'];
    $last_name = $_POST ['last_name'];
    
    {
        if($image_size <= 1000000)
        {
            $sql = "INSERT INTO `register` (`first_name`, `last_name`) VALUES ('$first_name', 
            '$last_name') LIMIT 1";
            $query = mysqli_query($conn, $sql);
            if($query)
            {
                $_SESSION['SuccessMessage'] = "Data Inserted Successfully";
                header('Location: next.php');
            }
            else
            {
                $_SESSION['ErrorMessage'] =  "Data not Inserted";
                header('Location: register.php');
            }
        }  
    }
}

?>