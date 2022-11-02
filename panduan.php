
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

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

<style>
    .card-header {
  
    background-color: #ffffff;

}
</style>
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
                    <!-- Collapse -->
                    <div class="row">


                        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                            <h4 class="card-title mb-4">Panduan Penggunaan</h4>
                                

                                <div id="accordion" class="accordion">
                                    <div class="card shadow-none border mb-2">
                                        <div class="card-header p-3" id="headingOne">
                                            <h6 class="m-0">
                                                <a href="#collapseOne" class="text-dark" data-bs-toggle="collapse"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                   1. Pendahuluan
                                                </a>
                                            </h6>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-bs-parent="#accordion">
                                            <div class="card-body">
                                           Sistem ini dibuat untuk memberikan notifikasi dan panggilan kepada PIC yang bersangkutan apabila ada server atau ip address yang 
                                           terdeteksi adanya gangguan. 
                                            </div>
                                        </div>
                                    </div>
                                   

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

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>