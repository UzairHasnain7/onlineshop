<?php
session_start();
include 'admin/conn.php';

if(isset($_POST['registerbtn']))
{
    $mobile_number = $_POST ['mobile_number'];
    
    {
        if($image_size <= 1000000)
        {
            $sql = "INSERT INTO `mobile number` (`mobile_number`) VALUES ('$mobile_number') LIMIT 1";
            $query = mysqli_query($conn, $sql);
            if($query)
            {
                $_SESSION['SuccessMessage'] = "Data Inserted Successfully";
                header('Location: recovery.php');
            }
            else
            {
                $_SESSION['ErrorMessage'] =  "Data not Inserted";
                header('Location: phone.php');
            }
        }  
    }
}

?>