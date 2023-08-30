<?php

session_start();
if(isset($_POST['submit']))
{
    session_unset();
    session_destroy();
    session_start();

    $_SESSION['successMessage'] = 'Logout Successfully';
    header('Location: ../login.php');
}


?>

