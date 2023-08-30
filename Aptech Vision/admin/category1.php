<?php

include 'header.php';


?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="category1.php">Billing Form</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-primary" href="create.php">Record</a>
            </li>
            
            </ul>
        </div>
    </div>
</div>



<?php
    if (isset($_SESSION['SuccessMessage'])) {
    ?>
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['SuccessMessage'];
                        unset($_SESSION['SuccessMessage']);
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>


    <?php
    if (isset($_SESSION['ErrorMessage'])) {
    ?>
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-6">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['ErrorMessage'];
                        unset($_SESSION['ErrorMessage']);
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>





<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 card shadow">
                <form action="record.php" method="POST" enctype="multipart/form-data">
                    <div class="my-3 text-center">
                        <h1 class="text-success text-uppercase">Bill Form</h1>
                    </div>
                    <div class="my-3">
                        <label for="">Customer Id</label>
                        <input type="text" name="customer_id" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Billing Name</label>
                        <input type="text" name="billing_name" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Consumer Number</label>
                        <input type="number" name="consumer_number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Bill Image</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="my-3 text-center">
                        <input type="submit" name="submit" value="Submit" class="btn btn-success text-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>



                   
            
        


        


<?php

include 'footer.php';


?>