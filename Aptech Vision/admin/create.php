<?php
session_start();
include 'header.php';


?>


<div class="row">
        <div class="col-12">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="category1.php">Bill Form</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-primary" href="create.php">Record</a>
            </li>
            
            </ul>
        </div>





<div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Bill Submitted</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Droid</a></li>
                                    <li class="breadcrumb-item active">Bill Submitted</li>
                                </ol>
                                <!-- end ol -->
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="p-4">
                                            <div class="d-flex">
                                                <div class="flex-1">

                                                    <h3 class="mb-3"><span class="counter_value" data-target="519545">0</span>
                                                    </h3>
                                                </div>
                                                <div class="">
                                                    <p class="badge bg-soft-primary text-primary fw-bold font-size-12 mb-0">
                                                        Daily</p>
                                                </div>
                                            </div>
                                            <h5 class="text-muted font-size-14 mb-0">New Visitors</h5>
                                        </div>
                                        <div>
                                            <div id="visitors_charts" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                    <!-- end cardbody -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="p-4">
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <h3 class="mb-3">$<span class="counter_value" data-target="97450">0</span></h3>
                                                </div>
                                                <div class="">
                                                    <p class="badge bg-primary font-size-12 mb-0">Monthly</p>
                                                </div>
                                            </div>
                                            <h5 class="text-muted font-size-14">Revenue</h5>
                                            <div class="progress mt-2" style="height: 5px;">
                                                <div class="progress-bar bg-progress" role="progressbar" style="width: 70%"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>

                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <p class="mt-3 text-muted fw-bold font-size-14 mb-0">Since last month
                                                    </p>
                                                </div>
                                                <div class="">
                                                    <p class="text-success font-size-13 mb-0 mt-3"><i
                                                            class="mdi mdi-debug-step-out "></i>87.4
                                                        %</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end cardbody -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="p-4">
                                            <div class="d-flex">
                                                <div class="flex-1">
                                                    <h3 class="mb-3">+<span class="counter_value" data-target="213545">0</span>
                                                    </h3>
                                                </div>
                                                <div class="">
                                                    <p class="badge bg-soft-primary text-primary fw-bold font-size-12">
                                                        Yearly</p>
                                                </div>
                                            </div>
                                            <h5 class="text-muted font-size-14 mb-0"></h5>
                                        </div>
                                        <div>
                                            <div id="order_charts" class="chart-spark" dir="ltr"></div>
                                        </div>
                                    </div>
                                    <!-- end cardbody -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="card">
                            <div class="card-body">
                                <div class="float-end d-none d-md-inline-block">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-sm btn-light active " id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                                aria-selected="true">Monthly</button>
                                        </li>
                                        <!-- end li -->
                                        <li class="nav-item" role="presentation">
                                            <button class="btn btn-sm btn-light ms-2 py-1" id="pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                                aria-selected="false">Yearly</button>
                                        </li>
                                        <!-- end li -->
                                    </ul>
                                    <!-- end ul -->
                                </div>
                                <div>
                                    <h4 class="card-title mb-4">Overview</h4>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <div>
                                            <div id="spline_area_month" class="column-charts" dir="ltr">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab -->
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div>
                                            <div id="spline_area_year" class="column-charts" dir="ltr">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab -->
                                </div>
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end">
                                    <select class="form-select form-select-sm">
                                        <option selected>Apr</option>
                                        <option value="1">Mar</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Jan</option>
                                    </select>
                                </div>
                                <h4 class="card-title mb-4">Customer Trends by Month</h4>

                                <div id="line_chart" class="apex-charts"></div>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical text-muted"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Yearly Report</a>
                                        <!-- item-->
                                    </div>
                                </div>
                                <!-- end dropdown -->
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div>
                                                <div class="mb-2">
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:68px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:45px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:55px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:70px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:48px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:35px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-primary rounded" role="progressbar"
                                                            style="width: 6px; height:54px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>

                                                </div>
                                                <!-- end -->
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-sm-6">
                                            <div class="mt-5 mt-sm-0">
                                                <div class="mb-2">
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:28px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:45px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:31px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:70px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:48px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:35px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progressbar-vertical-graph">
                                                        <div class="progress-bar bg-success rounded" role="progressbar"
                                                            style="width: 6px; height:54px;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    
                                                </div>
                                                <!-- end col -->
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                <h4 class="card-title mb-4">Latest Transactions</h4>

                <div class="table-responsive">
                                    <table class="table table-center border table-nowrap mb-0"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>Customer ID</th>
                                                <th>Billing Name</th>
                                                <th>Price</th>
                                                <th>Consumer Number</th>
                                                <th>Bill Image</th>
                                            </tr>
                                            <!-- end tr -->
                                        </thead>
                                        <!-- end thead -->
                                        <tbody>
                                           
                                        <?php

include 'conn.php';

$sql = "SELECT * FROM `billrecord`";
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
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td> <img src="<?php echo $row[4]; ?>"
        width="100" height="80" /></td>
        
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
                                        <!-- end tbody -->
                                    </table>
                                    <!-- end table -->
                                </div>
                            </div>
                        </div>
                






<?php

include 'footer.php';


?>