<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Xadmino - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="{{asset('Admin_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Admin_assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- bootstrap css -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
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
                    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong> {{session('error')}}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> -->
                    <div class="error" style="color:red;">
                        {{session('error')}}
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</body>

</html>