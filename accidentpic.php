
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>KYBI Accident Server</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/kayaba.png">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>


<body data-sidebar="dark">


    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="dashboard.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/kayaba.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/kayaba.png" alt="" height="20">
                            </span>
                        </a>

                        <a href="dashboard.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/kayaba-white.png" alt="" height="15" style="margin-left: -10px;">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/kayaba-white.png" alt="" height="60">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="d-none d-sm-block ms-2">
                        <h4 class="page-title font-size-18">Dashboard Accident Server</h4>
                    </div>

                </div>

                <!-- Search input -->


                <div class="d-flex">





                    <div class="dropdown d-none d-lg-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>



                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/kyb.png" alt="Header Avatar">
                        </button>
                       
                    </div>


                </div>
            </div>
        </header>

        <?php include "sidebar.php" ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">


                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <?php 
									echo " <h3 class='card-title'>Server Data Centre</h3>";
									 ?>


                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NPK</th>
                                                <th>No HP</th>
                                                <th>IP Address</th>
                                                <th>Timestamp</th>
                                                <th>Status</th>
                                                <th>Time Respons</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            include 'koneksi.php';
                                            $nomor = 1;
                                            $sk1 =  mysqli_query($conn, "SELECT * FROM tbl_accident_server_1 order by timestamp desc");
                                            while ($row = mysqli_fetch_array($sk1)) {
                                                echo "<tr>
                                                <td>" . $nomor++ . "</td>
                                                <td>" . $row['npk'] . "</td>
                                                <td>" . $row['nohp'] . "</td>
                                                <td>" . $row['ip_address'] . "</td>
                                                <td>" . $row['timestamp'] . "</td>
                                                <td>" . $row['status'] . "</td>
                                                <td>" . $row['time_2'] . "</td>
                                                </tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>


                       
                        <!-- end col -->
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <?php 
									echo " <h3 class='card-title'>Server PDC</h3>";
									 ?>


                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NPK</th>
                                                <th>No HP</th>
                                                <th>IP Address</th>
                                                <th>Timestamp</th>
                                                <th>Status</th>
                                                <th>Time Respons</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            include 'koneksi.php';
                                            $nomor = 1;
                                            $sk2 =  mysqli_query($conn, "SELECT * FROM tbl_accident_server_2 order by timestamp desc");
                                            while ($row2 = mysqli_fetch_array($sk2)) {
                                                echo "<tr>
                                                <td>" . $nomor++ . "</td>
                                                <td>" . $row2['npk'] . "</td>
                                                <td>" . $row2['nohp'] . "</td>
                                                <td>" . $row2['ip_address'] . "</td>
                                                <td>" . $row2['timestamp'] . "</td>
                                                <td>" . $row2['status'] . "</td>
                                                <td>" . $row2['time_2'] . "</td>
                                                </tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                                        </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            Copyright ©
                            2022 PT. Kayaba Indonesia. All rights reserved.
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

  


    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>