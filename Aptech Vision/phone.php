
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
                        <form action="phoneCode.php" method="POST">
                        <h3 class="text-center">Add phone number</h3>
                            <div class="my-3">
                                <br>
                                <label for="">Mobile Number</label>
                                <input type="mobile number" name="mobile number" class="form-control"
                                placeholder="mobile number">
                                <p>Google will use this number only for account security. Your number won’t be visible to others. You can choose later whether to use it for other purposes.</p>
                            </div>

                            <div class="register_submit text-center">
                                <button type="submit" name="registerbtn" class="w-75">Next</button>
                            </div>    
                        </form>
                    </div>
                </div>


