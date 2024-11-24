<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include 'includes/header.php'?>
<link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css">
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
                        <h3 class="page-title mb-0 p-0"><i class="mdi me-2 mdi-cash-usd"></i> Add Payments</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Payments</li>
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
                                <h4 class="card-title"><i class="mdi me-2 mdi-cash-usd"></i> Payment Information</h4>
                                    <div class="col-lg-8 col-xlg-9 col-md-7 offset-lg-2">
                                    <form class="form-horizontal form-material mx-2">
                                        
                                    <div class="form-group">
                                            <label class="col-sm-12">Invoice<span>*</span></label>
                                            <div class="col-sm-12 border-bottom">
                                                <select class="form-select shadow-none ps-0 border-0 form-control-line">
                                                    <option>Choose an invoice</option>
                                                    <option>Invoice 1</option>
                                                    <option>Invoice 2</option>
                                                    <option>Invoice 3</option>
                                                    <option>Invoice 4</option>
                                                    <option>Invoice 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Received on</label>
                                            <div class="col-md-12">
                                                <input type="date" class="form-control ps-0 form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Payment Method<span>*</span></label>
                                            <div class="col-sm-12 border-bottom">
                                                <select class="form-select shadow-none ps-0 border-0 form-control-line">
                                                    <option>Choose an payment method</option>
                                                    <option>Cash</option>
                                                    <option>Card</option>
                                                    <option>Gcash</option>
                                                    <option>Bank</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Amount<span>*</span></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control ps-0 form-control-line" placeholder="Amount">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Notes<span>*</span></label>
                                            <div class="col-md-12">
                                            <textarea class="textarea" placeholder="Place some text here"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                            </div>
                                        </div>
                                        <a href="payment.php" class="btn btn-danger d-none d-md-inline-block btn-md text-white">Cancel</a>
                                        <a href="#" class="btn btn-success d-none d-md-inline-block btn-md text-white">Save</a>
                                    </form>
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