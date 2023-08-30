<?php

include 'header.php';



?>




    <div class="row">
        <div class="col-12">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="form.php">Category Form</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-primary" href="display.php">Category Data</a>
            </li>
            
            </ul>
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
                <form action="createCategory.php" method="POST" enctype="multipart/form-data">
                    <div class="my-3 text-center">
                        <h1 class="text-success text-uppercase">Add Category</h1>
                    </div>
                    <div class="my-3">
                        <label for="">Enter Category Name</label>
                        <input type="text" name="cat_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Enter Category Image</label>
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