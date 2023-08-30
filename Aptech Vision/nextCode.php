<?php
session_start();
include 'admin/conn.php';

if(isset($_POST['registerbtn']))
{
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    
    
    {
        if($image_size <= 1000000)
        {
            $sql = "INSERT INTO `registeremployee` (`email`, `password`) VALUES ('$email', 
            '$password') LIMIT 1";
            $query = mysqli_query($conn, $sql);
            if($query)
            {
                $_SESSION['SuccessMessage'] = "Data Inserted Successfully";
                header('Location: phone.php');
            }
            else
            {
                $_SESSION['ErrorMessage'] =  "email or password does not match";
                header('Location: next1.php');
            }
        }  
    }
}

?>