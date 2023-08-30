<?php
session_start();
include 'header.php';


?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="form.php">Category Form</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-primary" href="display.php">Category Data</a>
            </li>
            
            </ul>
        </div>
    </div>
</div>




    <div class="col-12">
        <div class="card">
            <div class="card-body">

            <table id="datatable" class="table text-center align-middle table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Cat Id</th>
                                                <th>Cat Name</th>
                                                <th>Cat Image</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
<?php

include 'conn.php';

$sql = "SELECT * FROM `imagecrud`";
$run = mysqli_query($conn, $sql);

$totalRows = mysqli_num_rows($run);

if($totalRows != 0)
{
    while($row = mysqli_fetch_array($run))
    {
        ?>

        <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td> <img src="<?php echo $row[2]; ?>"
        width="100" height="80" /></td>
        <td><a href="update.php?id=<?php echo $row
        [0]; ?>"><i class="fa-solid text-info fa-pen-to-square"></i>
        </a> <a href="delete.php?id=<?php echo $row
        [0]; ?>"><i class="fa-solid text-danger fa-trash"></i></a></td>
        </tr>

        <?php
    }
}
else
{
    ?>

    <tr><td colspan="4" class="text-center"><?php echo "No Record Found"; ?></td>
    </tr>
    <?php
}
?>  
        </tbody>
    </table>
            </div>
        </div>
    </div>






<?php

include 'footer.php';


?>