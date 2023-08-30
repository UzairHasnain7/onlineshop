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




<div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <div class="container">
        <div class="row justify-content-center">
            <div class="col my-5">
                <a href=""><h1 class="text-uppercase text-success">To use pAy bIll Scan</h1></a>
                <p class="text-uppercase text-success">1. Open pAy bIll on your phone
                    <br>
                   2. Tap Menu or Setting
                   <br>
                   3. Point your phone to this screen to capture the code
            <br>
            <br>
            <a class="text-primary" href="# ">       
            Need help to Get
            </a>
                </p>
            </div>
   
            <div class="col-lg-6 col-md-6">
                <div class="single_banner mb-30">
                            <div class="banner_thumb">
                            <a href="shop.php"><img src="assets/img/bg/banner13.png" alt=""></a>
                        </div>
                                     
                    </div>
                </div>
        </div>
    </div>





<section class="slider_section mb-70">
        <div class="slider_area owl-carousel">
           
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider14.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                               
                            <a class="button" href="shop.html">Pay Bill 2023</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 card shadow">
                <form action="createCategory.php">
                    <div class="my-3 text-center">
                        <h1 class="text-success text-uppercase">Online Bill</h1>
                        <p>A Bill to make provision for and in connection with the regulation by OFCOM of certain internet services; for and in connection with communications offences; and for connected purposes</p>
                    </div>
                    <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                            <img src="assets/img/blog/blog101.png" alt="">         
                    </div>
                </div>
            </div>
                  
                    <div class="my-3 text-center">
                        <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>



<?php

include 'footer.php';


?>