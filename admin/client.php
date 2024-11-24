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
                        <h3 class="page-title mb-0 p-0"><i class="mdi me-2 mdi-account-multiple"></i> Clients</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Clients</li>
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
                                <h4 class="card-title"><i class="mdi me-2 mdi-account-multiple"></i> Client Lists</h4>
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Company Name</th>
                                                <th class="border-top-0">Address</th>
                                                <th class="border-top-0">Contact</th>
                                                <th class="border-top-0">Contact Person</th>
                                                <th class="border-top-0">Website</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Apple</td>
                                                <td>123 Calofornia, USA</td>
                                                <td>02973654635</td>
                                                <td>Steve Jobs</td>
                                                <td>https://www.apple.com</td>
                                                <td>apple@gmail.com</td>
                                                <td>
                                                <a href="#" class="btn btn-success d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-pencil"></i> edit</a>
                                                <a href="#" class="btn btn-danger d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-eraser"></i> delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Microsoft</td>
                                                <td>123 New York, USA</td>
                                                <td>02973654635</td>
                                                <td>Bill Gates</td>
                                                <td>https://www.apple.com</td>
                                                <td>microsoft@gmail.com</td>
                                                <td>
                                                <a href="#" class="btn btn-success d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-pencil"></i> edit</a>
                                                <a href="#" class="btn btn-danger d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-eraser"></i> delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Xiaomi</td>
                                                <td>123 Xin Jiang, China</td>
                                                <td>02973654635</td>
                                                <td>Michael Tan</td>
                                                <td>https://www.apple.com</td>
                                                <td>xiaomi@gmail.com</td>
                                                <td>
                                                <a href="#" class="btn btn-success d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-pencil"></i> edit</a>
                                                <a href="#" class="btn btn-danger d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-eraser"></i> delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Huawei</td>
                                                <td>345 Shenzen, China</td>
                                                <td>02973654635</td>
                                                <td>Steve Yu</td>
                                                <td>https://www.apple.com</td>
                                                <td>huawei@gmail.com</td>
                                                <td>
                                                <a href="#" class="btn btn-success d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-pencil"></i> edit</a>
                                                <a href="#" class="btn btn-danger d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-eraser"></i> delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Motorola</td>
                                                <td>345 Calofornia, USA</td>
                                                <td>02973654635</td>
                                                <td>James Smith</td>
                                                <td>https://www.apple.com</td>
                                                <td>motorola@gmail.com</td>
                                                <td>
                                                <a href="#" class="btn btn-success d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-pencil"></i> edit</a>
                                                <a href="#" class="btn btn-danger d-none d-md-inline-block btn-sm text-white"><i class="mdi mdi-eraser"></i> delete</a>
                                                </td>
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