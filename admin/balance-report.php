<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include 'includes/header.php'?>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'includes/topbar.php'?>
        <?php include 'includes/sidebar.php'?>

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0"><i class="mdi me-2 mdi-cash-multiple"></i> Balance Reports</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reports</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="mdi me-2 mdi-cash-multiple"></i> Balance Lists</h4>
                                <div class="table-responsive">
                                    <a class="btn btn-sm elevation-2" href="#" data-toggle="modal" data-target="#add" style="margin-top: 20px;margin-left: 10px;background-color: rgba(131,219,214);"><i class="fa fa-print"></i> print</a>
                                    <a class="btn btn-sm elevation-2" href="#" data-toggle="modal" data-target="#add" style="margin-top: 20px;margin-left: 10px;background-color: rgba(131,219,214);"><i class="fa fa-file-excel"></i> export</a>
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Client Name</th>
                                                <th class="border-top-0">Number of Invoice</th>
                                                <th class="border-top-0">Total Invoice Amount</th>
                                                <th class="border-top-0">Total Payment</th>
                                                <th class="border-top-0">Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Apple Inc.</td>
                                                <td>18</td>
                                                <td>Php 500,000.00</td>
                                                <td>Php 500,000.00</td>
                                                <td>Php 200,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>Micosoft</td>
                                                <td>23</td>
                                                <td>Php 900,000.00</td>
                                                <td>Php 900,000.00</td>
                                                <td>Php 500,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>HUawei</td>
                                                <td>13</td>
                                                <td>Php 250,000.00</td>
                                                <td>Php 250,000.00</td>
                                                <td>Php 50,000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

    <?php include 'includes/footer.php'?>
</body>

</html>