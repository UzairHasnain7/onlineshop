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
        <strong>Hey!</strong> <?php echo $_SESSION['errorMessage'];
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




<div class="customer_login mt-50">
        <div class="container">
            <div class="row justify-content-center">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2 class="text-center text-primary">login</h2>
                        <form action="loginCode.php" method="POST">
                            <p>
                                <label>Email</label>
                                <input type="text" name="email" required>
                            </p>
                            <p>
                                <label>Password</label>
                                <input type="password" name="password" required>
                            </p>
                            <div class="login_submit text-center">
                                <button type="submit" name="loginbtn" class="w-75">login</button>
                            </div>

                        </form>
                    </div>
                </div>





<?php

include 'footer.php';

?>