<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Route Report</title>

        <!-- Bootstrap core CSS-->
        <link href="../CSS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="../CSS/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Page level plugin CSS-->
        <link href="../CSS/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../CSS/css/sb-admin.css" rel="stylesheet">

        
    </head>

    <body id="page-top">

        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

            <a class="navbar-brand mr-1" href="LandingMainPage.php">TransitPorts</a>

            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Navbar Search -->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Navbar -->
            <ul class="navbar-nav ml-auto ml-md-0">
                <!--        <li class="nav-item dropdown no-arrow mx-1">
                          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <span class="badge badge-danger">9+</span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <span class="badge badge-danger">7</span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>-->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                    </div>
                </li>
            </ul>

        </nav>

        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="LandingMainPage.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ScheduleMainPage.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Schedule</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="MonitorMainPage.php">
                        <i class="fas fa-fw fa-check-square"></i>
                        <span>Monitor</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="NotificationMainPage.php">
                        <i class="fas fa-fw fa-exclamation"></i>
                        <span>Notification</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ReportMainPage.php">
                        <i class="fas fa-fw fa-address-book"></i>
                        <span>Report</span>
                    </a>
                </li>

                <!--        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Pages</span>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <h6 class="dropdown-header">Login Screens:</h6>
                            <a class="dropdown-item" href="LandingMainPage.php">Login</a>
                            <a class="dropdown-item" href="register.html">Register</a>
                            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Other Pages:</h6>
                            <a class="dropdown-item" href="404.html">404 Page</a>
                            <a class="dropdown-item active" href="blank.html">Blank Page</a>
                          </div>
                        </li>-->
                <!--        <li class="nav-item">
                          <a class="nav-link" href="charts.html">
                            <i class="fas fa-fw fa-chart-area"></i>
                            <span>Charts</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="tables.html">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Tables</span></a>
                        </li>-->
            </ul>

            <div id="content-wrapper">

                <div class="container-fluid">

                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="LandingMainPage.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="ReportMainPage.php">Report</a>
                        </li>
                        <li class="breadcrumb-item active">Route Report</li>
                    </ol>

                    <!-- Page Content -->
                    <h1>Route Report</h1>
                    <hr>
                    
                    <form method="post" action="RouteReport.php">
                        <p>Please select line of the route</p>
                            <select id="busLineSelect" name="busLineSelect">
                                <option value="">Bus Line</option>
                                <option value="200">200</option>
                                <option value="201">201</option>
                                <option value="202">202</option>
                                <option value="220">220</option>
                                <option value="221">221</option>
                                <option value="222">222</option>
                                <option value="250">250</option>
                                <option value="251">251</option>
                                <option value="253">253</option>
                                <option value="254">254</option>
                                <option value="T200">T200</option>
                                <option value="T201">T201</option>
                                <option value="T202">T202</option>
                                <option value="T203">T203</option>
                                <option value="T204">T204</option>
                                <option value="T221">T221</option>
                                <option value="T222">T222</option>
                                <option value="T223">T223</option>
                                <option value="T224">T224</option>
                                <option value="T250">T250</option>
                                <option value="T251">T251</option>
                            </select>
                        <p>Please select month and year of the report</p>
                        <select id="monthRouteSelect" name="monthRouteSelect">
                            <option value="">Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        <select id="yearRouteSelect" name="yearRouteSelect">
                            <option value="">Year</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            
                        </select>
                        <button type="submit" name="search">Search</button>
                    </form>
                    <!--table of result-->
                    
                </div>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright © TransitPorts 2018</span>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="LoginAdmin.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../CSS/vendor/jquery/jquery.min.js"></script>
        <script src="../CSS/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../CSS/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../CSS/js/sb-admin.min.js"></script>

    </body>

</html>
