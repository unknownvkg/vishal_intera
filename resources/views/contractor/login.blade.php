<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Intera</title>
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
<body>

    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="panel panel-color panel-primary panel-pages">
            <div class="panel-body">
                <h3 class="text-center m-t-0 m-b-30">
                    <span class="">
                        <!-- <img src="{{asset('Admin_assets/images/logo_dark.png')}}" alt="logo" height="32"> -->
                        INTERA
                    </span>
                </h3>
                <h4 class="text-muted text-center m-t-0"><b>Sign In</b></h4>
                <form class="form-horizontal m-t-20" action="{{route('admin.auth')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="email" required="" placeholder="Email address"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required=""
                                placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                     {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong> {{session('error')}}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>  --}}
                    <div class="error" style="color:red;">
                        {{session('error')}}
                    </div>

                    <div class="col-12">
                        <p>Don't have account &nbsp;&nbsp;&nbsp;<a type="button" href="{{ url('dependent-dropdown') }}">Click Here</a></p>                        
                    </div>
                   
                </form>
            </div>
        </div>
    </div>


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