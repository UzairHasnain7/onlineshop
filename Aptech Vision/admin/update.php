
<?php

include 'header.php';


include 'conn.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `imagecrud` WHERE `id` = '$id'";
$run = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($run);


?>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 card shadow">
                <form action="updateData.php" method="POST" enctype="multipart/form-data">
                    <div class="my-3 text-center">
                        <h1 class="text-primary text-uppercase">Update Category</h1>
                    </div>
                    <div class="my-3">
                        <input type="hidden" name="cat_id" value="<?php echo $row[0]; ?>" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Enter Category Name</label>
                        <input type="text" name="cat_name" value="<?php echo $row[1]; ?>" class="form-control">
                    </div>
                    <img src="<?php echo $row[2];  ?>" width="120" height="80" alt="">
                    <input type="hidden" name="old_image" value="<?php echo $row[2]; ?>">
                    <div class="mb-3">
                        <label for="">Enter Category Image</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="my-3 text-center">
                        <input type="submit" name="updatebtn" value="Update" class="btn btn-primary w-75">
                    </div>
                </form>
            </div>
        </div>
    </div>





<?php

include 'footer.php';


?>