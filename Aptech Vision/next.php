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
                        <form action="codeNext.php" method="POST">
                        <label><h4>Date OF Birth</h4></label><br> 
                        <div class="my-3">                
                                <label for="">Month</label>
                                <input type="text" name="month" class="form-control"
                                placeholder="month">
                        </div>
                        <div class="my-3">                
                                <label for="">Days</label>
                                <input type="days" name="days" class="form-control"
                                placeholder="days">
                        </div>        
                        <div class="my-3">                
                                <label for="">Year</label>
                                <input type="year" name="year" class="form-control"
                                placeholder="year">
                        </div>        
                            <div class="my-3 input_field">
                                <label>Gender</label>
                                <input type="gender" name="gender" class="form-control"
                                placeholder="gender">
                            </div>
                            <div class="register_submit text-center">
                                <button type="submit" name="registerbtn" class="w-75">Next</button>
                            </div>
                        </form>
                    </div>
                </div>







