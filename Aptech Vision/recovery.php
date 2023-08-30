
<?php

session_start();
include 'header.php';


?>



<?php

if(isset($_SESSION['errorMessage'])){
?>

<div class="row justify-content-center mt-5">
    <div class="col-6">
        <div class="alert alert-danger alert-dismissible fade show"
        role="alert">
        <?php echo $_SESSION['errorMessage'];
        unset($_SESSION['errorMessage']);
        ?>
        <button type="button" class="btn-close"
        data-bs-dismiss="alert" aria-label="Close"></button>

        
        </div>
    </div>
</div>

<?php

}
?>




<div class="customer_login mt-60">
        <div class="container">
            <div class="row justify-content-center">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2 class="text-center text-primary">Register</h2>
                        <form action="agree.php" method="POST">
                            <div class="my-3">
                                <h3 class="text-center">Review your account info</h3>
                                <p class="text-center mt-3">You can use this info when you need to sign in</p>
                                
                            </div>
                            <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        
                        <div class="shipping_content">
                            <h4>Email</h4>
                            <p>verify</p>
                        </div>     
                    </div>
                    <div class="shipping_content">
                        <p>Recovery mobile number</p>
                            <h4>verify</h4>
                        </div>
                </div>

                            <div class="register_submit text-center mt-5">
                                <button type="submit" name="registerbtn" class="w-75">Next</button>
                            </div>    
                        </form>
                    </div>
                </div>

  
