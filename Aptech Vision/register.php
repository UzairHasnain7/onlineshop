
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
                        <form action="registerCode.php" method="POST">
                        <div class="my-3">
                            <label for="">First Name</label>
                                <input type="text" name="first name" class="form-control"
                                placeholder="Enter first name">
                            </div>
                            <div class="my-3">
                                <label for="">Last Name</label>
                                <input type="text" name="last name" class="form-control"
                                placeholder="Enter last name">
                            </div>
                                       
                            <div class="register_submit text-center">
                                <button type="submit" name="registerbtn" class="w-75">Next</button>
                            </div>
                        
                        </form>
                    </div>
                </div>

