<?php
session_start();
include 'conn.php';
if(isset($_POST['submit']))
{
    $customer_id = $_POST['customer_id'];
    $billing_name = $_POST['billing_name'];
    $price = $_POST['price'];
    $consumer_number = $_POST['consumer_number'];
    $image_name = $_FILES['image']['name'];
    $image_temp_name = $_FILES['image']['tmp_name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $folder = "Images/";
    
    if(strtolower($image_type) == "image/jpg" || strtolower($image_type) == "image/png" || strtolower($image_type) == "image/jpeg")
    {
        if($image_size <= 1000000)
        {
            $folder = $folder . $image_name;
            $sql = "INSERT INTO `billrecord` (`customer_id`, `billing_name`, `price`, `consumer_number`, `bill_image`) VALUES ('$customer_id', '$billing_name', '$price', '$consumer_number', '$folder')";
            $query = mysqli_query($conn, $sql);
            if($query)
            {
                move_uploaded_file($image_temp_name, $folder);
                $_SESSION['SuccessMessage'] = "Data Inserted Successfully";
                header('Location: category1.php');
            }
            else
            {
                $_SESSION['ErrorMessage'] =  "Data not Inserted";
                header('Location: category1.php');
            }
        }
        else
        {
            $_SESSION['ErrorMessage'] = "Image Size Should be less than 1MB";
            header('Location: category1.php');
        }
    }
    else
    {
        $_SESSION['ErrorMessage'] = "Image formate Not Supported";
        header('Location: category1.php');
    }


}


?>