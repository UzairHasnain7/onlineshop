<?php
session_start();
include 'admin/conn.php';

if(isset($_POST['loginbtn']))
{
    $email = $_POST ['email'];
    $password = $_POST ['password'];

    $sql = "INSERT INTO `employee` (`email`, `password`) VALUES ('$email', 
    '$password') LIMIT 1";

    $query = mysqli_query($conn,$sql);

    // if(mysqli_num_rows($query) > 0)
    {
        // $row = mysqli_fetch_array($query);
        // $_SESSION['userName'] = $row[1];
        header('Location: admin/index.php');
        
    }
    // else
    // {
    //     $_SESSION['errorMessage'] = "Email or Password does not matched";
    //     header('Location: login.php');
        
    // }
    
}

?>