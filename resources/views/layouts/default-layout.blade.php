<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="UTF-8" />
        <title>Imgwhoop</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!--[if IE]>
           <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
           <![endif]-->
        <!-- GLOBAL STYLES -->
        <link rel="stylesheet" href="theme_assets/plugins/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="theme_assets/css/main.css" />
        <link rel="stylesheet" href="theme_assets/css/theme.css" />
        <link rel="stylesheet" href="theme_assets/css/MoneAdmin.css" />
        <link rel="stylesheet" href="theme_assets/plugins/Font-Awesome/css/font-awesome.css" />
        <!--END GLOBAL STYLES -->
        <!-- PAGE LEVEL STYLES -->
        <link href="theme_assets/css/layout2.css" rel="stylesheet" />
        <link href="theme_assets/plugins/flot/examples/examples.css" rel="stylesheet" />
        <link rel="stylesheet" href="theme_assets/plugins/timeline/timeline.css" />
        <link rel="stylesheet" href="theme_assets/css/bootstrap-fileupload.min.css" />
        <!-- END PAGE LEVEL  STYLES -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="padTop53 " >
        <!-- MAIN WRAPPER -->
        <div id="wrap" >
            <!-- HEADER SECTION -->
            <div id="top">
                <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                    <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                        <i class="icon-align-justify"></i>
                    </a>
                    <!-- LOGO SECTION -->
                    <header class="navbar-header">
                        <a href="{{url('/')}}" class="navbar-brand">
                            <h4>ImgWhoop</h4>
                        </a>
                    </header>
                    <ul class="nav navbar-top-links navbar-right">
                                                <!-- END ALERTS SECTION -->
                        <!--ADMIN SETTINGS SECTIONS -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#"><i class="icon-user"></i> User Profile </a>
                                </li>
                                <li><a href="#"><i class="icon-gear"></i> Settings </a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="{{ url('/auth/logout') }}"><i class="icon-signout"></i> Logout </a>
                                </li>
                            </ul>
                        </li>
                        <!--END ADMIN SETTINGS -->
                    </ul>
                </nav>
            </div>
            <!-- END HEADER SECTION -->
            <!-- MENU SECTION -->
            <div id="left" >
                <div class="media user-media well-small">
                    <a class="user-link" href="#">
                        <img class="media-object img-thumbnail user-img" alt="User Picture" src="theme_assets/img/user.gif" />
                    </a>
                    <br />
                    <div class="media-body">
                        <h5 class="media-heading">{{Auth::user()->name}}</h5>
                        <ul class="list-unstyled user-info">
                            <li>
                                <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                            </li>
                        </ul>
                    </div>
                    <br />
                </div>
                <ul id="menu" class="collapse">
                    <li class="panel active">
                        <a href="{{url('/')}}" >
                            <i class="icon-table"></i> Dashboard
                        </a>                   
                    </li>
                    <li>
                        <a href="{{URL::route('get-upload-image')}}">
                            <i class="icon-film"></i> Image Gallery 
                        </a>
                    </li>
                </ul>
            </div>
            <!--END MENU SECTION -->
            <!--PAGE CONTENT -->
            <div id="content">

                @yield('content')
            </div>
            <!--END PAGE CONTENT -->
            <!-- RIGHT STRIP  SECTION -->
            <div id="right">
                <div class="well well-small">
                    <ul class="list-unstyled">
                        <li>Visitor &nbsp; : <span>23,000</span></li>
                        <li>Users &nbsp; : <span>53,000</span></li>
                        <li>Registrations &nbsp; : <span>3,000</span></li>
                    </ul>
                </div>
                <div class="well well-small">
                    <button class="btn btn-block"> Help </button>
                    <button class="btn btn-primary btn-block"> Tickets</button>
                    <button class="btn btn-info btn-block"> New </button>
                    <button class="btn btn-success btn-block"> Users </button>
                    <button class="btn btn-danger btn-block"> Profit </button>
                    <button class="btn btn-warning btn-block"> Sales </button>
                    <button class="btn btn-inverse btn-block"> Stock </button>
                </div>
                <div class="well well-small">
                    <span>Profit</span><span class="pull-right"><small>20%</small></span>
                    <div class="progress mini">
                        <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                    </div>
                    <span>Sales</span><span class="pull-right"><small>40%</small></span>

                    <div class="progress mini">
                        <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                    </div>
                    <span>Pending</span><span class="pull-right"><small>60%</small></span>
                    <div class="progress mini">
                        <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                    </div>
                    <span>Summary</span><span class="pull-right"><small>80%</small></span>
                    <div class="progress mini">
                        <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                    </div>
                </div>
            </div>
            <!-- END RIGHT STRIP  SECTION -->
        </div>
        <!--END MAIN WRAPPER -->
        <!-- FOOTER -->
        <div id="footer">
            <p>&copy;  ImgWhoop &nbsp;2014 &nbsp;</p>
        </div>
        <!--END FOOTER -->
        <!-- GLOBAL SCRIPTS -->
        <script src="theme_assets/plugins/jquery-2.0.3.min.js"></script>
        <script src="theme_assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="theme_assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="theme_assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
    </body>
    <!-- END BODY -->
</html>
