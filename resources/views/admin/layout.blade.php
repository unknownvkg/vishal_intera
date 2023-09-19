<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Xadmino - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="{{asset('Admin_assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('Admin_assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet')}}" type="text/css" />


    <link href="{{asset('Admin_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Admin_assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Admin_assets/css/style.css')}}" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo"><img src="{{asset('Admin_assets/images/logo_white_2.png')}}" height="28"></a>
                    <a href="index.html" class="logo-sm"><img src="{{asset('Admin_assets/images/logo_sm.png')}}" height="36"></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button type="button" class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="ion-navicon"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>
                        <form class="navbar-form pull-left" role="search">
                            
                        </form>

                        <ul class="nav navbar-nav navbar-right pull-right">
                           
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle profile waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="true"><img
                                        src="{{asset('Admin_assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"> Profile</a></li>
                                    
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0)"> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div class="user-details">
                    <div class="text-center">
                        <img src="{{asset('Admin_assets/images/users/avatar-1.jpg')}}" alt="" class="img-circle">
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Kenny
                                Rigdon</a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"> Profile</a></li>
                                <li><a href="javascript:void(0)"> Settings</a></li>
                                <li><a href="javascript:void(0)"> Lock screen</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:void(0)"> Logout</a></li>
                            </ul>
                        </div>

                        <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
                    </div>
                </div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="dashboard" class="waves-effect"><i class="ti-home"></i><span> Dashboard
                                </span></a>
                        </li> 
                        <li>
                            <a href="category" class="waves-effect"><i class="ti-home"></i><span> Category
                                </span></a>
                        </li>                                            
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->                 

                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Total Subscription</h4>
                                </div>
                                <div class="panel-body">
                                    <h3 class=""><b>2568</b></h3>
                                    <p class="text-muted"><b>48%</b> From Last 24 Hours</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Order Status</h4>
                                </div>
                                <div class="panel-body">
                                    <h3 class=""><b>3685</b></h3>
                                    <p class="text-muted"><b>15%</b> Orders in Last 10 months</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Unique Visitors</h4>
                                </div>
                                <div class="panel-body">
                                    <h3 class=""><b>25487</b></h3>
                                    <p class="text-muted"><b>65%</b> From Last 24 Hours</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Monthly Earnings</h4>
                                </div>
                                <div class="panel-body">
                                    <h3 class=""><b>$2779.7</b></h3>
                                    <p class="text-muted"><b>31%</b> From Last 1 month</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h4 class="m-t-0">Revenue</h4>
                                    <ul class="list-inline m-t-30 widget-chart text-center">
                                        <li>
                                            <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                            <h4 class=""><b>5248</b></h4>
                                            <h5 class="text-muted m-b-0">Marketplace</h5>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-arrow-down-bold-circle text-danger"></i>
                                            <h4 class=""><b>321</b></h4>
                                            <h5 class="text-muted m-b-0">Last week</h5>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                            <h4 class=""><b>964</b></h4>
                                            <h5 class="text-muted m-b-0">Last Month</h5>
                                        </li>
                                    </ul>
                                    <div id="sparkline1" style="margin: 0 -21px -22px -22px;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h4 class="m-t-0">Email Sent</h4>
                                    <ul class="list-inline m-t-30 widget-chart text-center">
                                        <li>
                                            <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                            <h4 class=""><b>3654</b></h4>
                                            <h5 class="text-muted m-b-0">Marketplace</h5>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-arrow-down-bold-circle text-danger"></i>
                                            <h4 class=""><b>954</b></h4>
                                            <h5 class="text-muted m-b-0">Last week</h5>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                            <h4 class=""><b>8462</b></h4>
                                            <h5 class="text-muted m-b-0">Last Month</h5>
                                        </li>
                                    </ul>
                                    <div id="sparkline2" style="margin: 0 -21px -22px -22px;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h4 class="m-t-0">Monthly Subscriptions</h4>
                                    <ul class="list-inline m-t-30 widget-chart text-center">
                                        <li>
                                            <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                            <h4 class=""><b>3256</b></h4>
                                            <h5 class="text-muted m-b-0">Marketplace</h5>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-arrow-down-bold-circle text-danger"></i>
                                            <h4 class=""><b>785</b></h4>
                                            <h5 class="text-muted m-b-0">Last week</h5>
                                        </li>
                                        <li>
                                            <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                            <h4 class=""><b>1546</b></h4>
                                            <h5 class="text-muted m-b-0">Last Month</h5>
                                        </li>
                                    </ul>
                                    <div id="sparkline3" style="margin: 0 -21px -22px -22px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- End Row -->


                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer">
                2016 - 2020 © Xadmino.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->



    <!-- jQuery  -->
    <script src="{{asset('Admin_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('Admin_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Admin_assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('Admin_assets/js/detect.js')}}"></script>
    <script src="{{asset('Admin_assets/js/fastclick.js')}}"></script>
    <script src="{{asset('Admin_assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('Admin_assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('Admin_assets/js/waves.js')}}"></script>
    <script src="{{asset('Admin_assets/js/wow.min.js')}}"></script>
    <script src="{{asset('Admin_assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('Admin_assets/js/jquery.scrollTo.min.js')}}"></script>

    <script src="{{asset('Admin_assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Datatables-->
    <script src="{{asset('Admin_assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('Admin_assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('Admin_assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('Admin_assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>

    <script src="{{asset('Admin_assets/pages/dashborad.js')}}"></script>

    <script src="{{asset('Admin_assets/js/app.js')}}"></script>
</body>


</html>