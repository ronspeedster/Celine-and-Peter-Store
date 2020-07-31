<?php
include('sidebar.php');
include('dbh.php');

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$getURI = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$_SESSION['getURI'] = $getURI;

?>
<title>Dashboard - Celine & Peter Store</title>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <?php
        include('topbar.php');
        ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Total Transactions -->
                <div class="col-xl-4 col-md6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-primary text-uppercase mb-1">Total Transactions:
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                    <!-- End Progress -->
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file-invoice fa-5x text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Total Transactions -->

                <!-- Total Sales -->
                <div class="col-xl-4 col-md6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-primary text-uppercase mb-1">Total Sales Today:
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                    <!-- End Progress -->
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-money-bill-wave fa-5x text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Total Sales -->

                <!-- Items in Stock -->
                <div class="col-xl-4 col-md6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-primary text-uppercase mb-1">Items in Stock:
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                    <!-- End Progress -->
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-shopping-cart fa-5x text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Items in Stock -->

            </div>

            <!-- End Student Record -->

            <!-- Student Employees -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List of Customers</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                    </div>
                </div>
            </div>
            <!-- End Student Employees -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <!-- JS here -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#employeeTable').DataTable( {
                "pageLength": 25
            } );
        } );
        $(document).ready(function() {
            $('#studentTab').DataTable( {
                "pageLength": 25
            } );
        } );        
    </script>
    <?php
    include('footer.php');
    ?>

