
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
                        <form action="nextCode.php" method="POST">
                        <div class="my-3">
                            <h3 class="text-center">Email</h3>
                            <p class="text-center mt-3">The address where Google can contact you if there’s unusual activity in your account or if you get locked out.</p>
                            <br>
                                <input type="email" name="email" class="form-control"
                                placeholder="email">
                            </div>
                            <div class="my-3">
                                <br>
                                <h3 class="text-center">Password</h3>
                                <p class="text-center mt-3">Create a strong password with a mix of letters, numbers and symbols</p>
                                <input type="password" name="password" class="form-control"
                                placeholder="password">
                            </div>
                            

                            <div class="register_submit text-center">
                                <button type="submit" name="registerbtn" class="w-75">Next</button>
                            </div>    
                        </form>
                    </div>
                </div>


