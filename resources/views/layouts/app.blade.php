<!DOCTYPE html>
<html lang="az">


<!-- Mirrored from wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin-material/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2017 22:45:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="gunesh/images/favicon.png">
    <title>Günəş Təhsil Mərkəzi</title>
    <!-- Bootstrap Core CSS -->
    <link href="/gunesh/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/gunesh/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="/gunesh/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="/gunesh/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="/gunesh/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="/gunesh/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="/gunesh/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- animation CSS -->
    <link href="/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/gunesh/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/gunesh/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index-2.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><!--This is light logo icon--><img src="/gunesh/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">Günəş Təhsİl MƏRKƏZİ
                        <!--This is dark logo text-->
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->

                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Axtarış" class="form-control"> <a href="#"><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> 
                        @if(Auth::user()->img==null )
                        <img src="/uploads/default.png" alt="user-img" width="36" class="img-circle">
                        @else
                        <img src="/uploads/{{ Auth::user()->img }}" alt="user-img" width="36" class="img-circle">
                        @endif
                        <b class="hidden-xs">{{ Auth::user()->name }}</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img">
                        @if(Auth::user()->img==null )

                                    <img src="/uploads/default.png" alt="user" />
                                    @else
                                    <img src="/uploads/{{ Auth::user()->img }}" alt="user" />
                                    @endif
                                    </div>
                                    <div class="u-text">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <p class="text-muted">İD:{{ Auth::user()->id_kart }}</p><a href="/profile" class="btn btn-rounded btn-danger btn-sm">Profil</a></div>
                                </div>
                            </li>

                            <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                              <i class="fa fa-power-off"></i>   Çıxış
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>

                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Menyu</span></h3> </div>
                <ul class="nav" id="side-menu">
                      <li class="user-pro">
                          <a href="#" class="waves-effect">
                           @if(Auth::user()->img==null )
                        <img src="/uploads/default.png" alt="user-img" width="36" class="img-circle">
                        @else
                        <img src="/uploads/{{ Auth::user()->img }}" alt="user-img" width="36" class="img-circle">
                        @endif
                           <span class="hide-menu">{{ Auth::user()->name }}<span class="fa arrow"></span></span>
                          </a>
                          <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                              <li><a href="javascript:void(0)"><i class="ti-user"></i> <span class="hide-menu">My Profile</span></a></li>
                              <li><a href="javascript:void(0)"><i class="ti-wallet"></i> <span class="hide-menu">My Balance</span></a></li>
                              <li><a href="javascript:void(0)"><i class="ti-email"></i> <span class="hide-menu">Inbox</span></a></li>
                              <li><a href="javascript:void(0)"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a></li>
                              <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
                          </ul>
                      </li>




                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">

                    </div>
                </div>

                <!--row -->
                <!-- /.row -->


                <!-- ============================================================== -->
                <!-- wallet, & manage users widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                     <!-- col-md-9 -->
                        <div class="col-md-8 col-lg-9">
                            <div class="manage-users">
                                <div class="sttabs tabs-style-iconbox">


                                    <!-- /content -->
                                </div>
                                <!-- /tabs -->
                            </div>
                        </div>
                        <!-- /col-md-9 -->
                    <!-- col-md-3 -->
                    <div class="col-md-4 col-lg-3" style="display:none;">
                        <div class="panel wallet-widgets">
                            <div class="panel-body">

                            </div>
                            <div  id="morris-area-chart2" style="height:208px"></div>

                        </div>
                    </div>
                    <!-- /col-md-3 -->
                </div>

            </div>
            <!-- /.container-fluid -->
                @yield('content')

            <footer class="footer text-center"> 2017 &copy; </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/gunesh/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/gunesh/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="/gunesh/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/gunesh/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/gunesh/js/waves.js"></script>
    <!--Counter js -->
    <script src="/gunesh/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="/gunesh/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="/gunesh/bower_components/raphael/raphael-min.js"></script>
    <script src="/gunesh/bower_components/morrisjs/morris.js"></script>
    <!-- chartist chart -->
    <script src="/gunesh/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="/gunesh/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Calendar JavaScript -->
    <script src="/gunesh/bower_components/moment/moment.js"></script>
    <script src='/gunesh/bower_components/calendar/dist/fullcalendar.min.js'></script>
    <script src="/gunesh/bower_components/calendar/dist/cal-init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/gunesh/js/custom.min.js"></script>
    <script src="/gunesh/js/dashboard1.js"></script>
    <!-- Custom tab JavaScript -->
    <script src="/gunesh/js/cbpFWTabs.js"></script>
    <script type="text/javascript">
        (function () {
                [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                new CBPFWTabs(el);
            });
        })();
    </script>
    <script src="/gunesh/bower_components/toast-master/js/jquery.toast.js"></script>
    <!--Style Switcher -->
    <script src="/gunesh/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>


<!-- Mirrored from wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin-material/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2017 22:46:33 GMT -->
</html>
