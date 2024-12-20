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
                        <h3 class="page-title mb-0 p-0"><i class="mdi me-2 mdi-chart-bar"></i> Collection Reports</h3>
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
                            <div class="row">
                  <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                           <table class="table table-bordered mytable">
                               <thead>
                                 <tr>
                                    <th>Month</th>
                                    <th>Amount</th>
                                 </tr>
                                </thead>
                              <tbody>
                                 <tr>
                                    <td>January</td>
                                    <td>15000</td>
                                 </tr>
                                 <tr>
                                    <td>February</td>
                                    <td>23000</td>
                                 </tr>
                                 <tr>
                                    <td>March</td>
                                    <td>5500</td>
                                 </tr>
                                 <tr>
                                    <td>April</td>
                                    <td>17000</td>
                                 </tr>
                                 <tr>
                                    <td>May</td>
                                    <td>25000</td>
                                 </tr>
                                 <tr>
                                    <td>June</td>
                                    <td>30000</td>
                                 </tr>
                                 <tr>
                                    <td>July</td>
                                    <td>2000</td>
                                 </tr>
                                 <tr>
                                    <td>August</td>
                                    <td>15000</td>
                                 </tr>
                                 <tr>
                                    <td>September</td>
                                    <td>22000</td>
                                 </tr>
                                 <tr>
                                    <td>October</td>
                                    <td>34000</td>
                                 </tr>
                                 <tr>
                                    <td>November</td>
                                    <td>35000</td>
                                 </tr>
                                 <tr>
                                    <td>December</td>
                                    <td>55000</td>
                                 </tr>
                              </tbody>
                           </table>
                  </div>
                  <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                           <canvas id="bargraph" height="250"></canvas>
                  </div>
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
    <script src="js/chart.js"></script>
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         // Bar Chart
         var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "Novermber", "December"],
            datasets: [{
               label: 'Income',
               backgroundColor: 'rgb(79,129,189)',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: [15000, 2300, 5500, 17000, 25000, 30000, 2000, 15000, 22000, 34000, 35000, 55000]
            }]
         };

         var ctx = document.getElementById('bargraph').getContext('2d');
         window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
               responsive: true,
               legend: {
                  display: false,
               }
            }
         });

      });
   </script>
</body>

</html>