<!DOCTYPE html>

<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('BE/css/bootstrap.min.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('BE/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('BE/css/style-responsive.css')}}" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('BE/css/font.css')}}" type="text/css" />
    <link href="{{asset('BE/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{('BE/css/morris.css')}}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{('BE/css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{('BE/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{('BE/js/raphael-min.js')}}"></script>
    <script src="{{('BE/js/morris.js')}}"></script>
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="{{URL::to('/dashboard')}}" class="logo">
                    Admin
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->

            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{asset('BE/images/2.png')}}">
                            <span class="username">
                                <?php

                                use Illuminate\Support\Facades\Session;

                                $name = Session::get('admin_name');
                                if ($name) {
                                    echo $name;
                                }
                                ?>
                            </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="{{URL::to('/dashboard')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Product</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/add-product')}}">Add Product</a></li>
                                <li><a href="{{URL::to('/all-product')}}">Product List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="fontawesome.html">
                                <i class="fa fa-bullhorn"></i>
                                <span>Font awesome </span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-th"></i>
                                <span>Data Tables</span>
                            </a>
                            <ul class="sub">
                                <li><a href="basic_table.html">Basic Table</a></li>
                                <li><a href="responsive_table.html">Responsive Table</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Form Components</span>
                            </a>
                            <ul class="sub">
                                <li><a href="form_component.html">Form Elements</a></li>
                                <li><a href="form_validation.html">Form Validation</a></li>
                                <li><a href="dropzone.html">Dropzone</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span>Mail </span>
                            </a>
                            <ul class="sub">
                                <li><a href="mail.html">Inbox</a></li>
                                <li><a href="mail_compose.html">Compose Mail</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class=" fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                            </a>
                            <ul class="sub">
                                <li><a href="chartjs.html">Chart js</a></li>
                                <li><a href="flot_chart.html">Flot Charts</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class=" fa fa-bar-chart-o"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="sub">
                                <li><a href="google_map.html">Google Map</a></li>
                                <li><a href="vector_map.html">Vector Map</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-glass"></i>
                                <span>Extra</span>
                            </a>
                            <ul class="sub">
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="404.html">404 Error</a></li>
                                <li><a href="registration.html">Registration</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="fa fa-user"></i>
                                <span>Login Page</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                @yield('admincontent')
            </section>
            <script src="{{asset('BE/js/bootstrap.js')}}"></script>
            <script src="{{asset('BE/js/jquery.dcjqaccordion.2.7.js')}}"></script>
            <script src="{{asset('BE/js/scripts.js')}}"></script>
            <script src="{{asset('BE/js/jquery.slimscroll.js')}}"></script>
            <script src="{{asset('BE/js/jquery.nicescroll.js')}}"></script>
            <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
            <script src="{{asset('BE/js/jquery.scrollTo.js')}}"></script>
            <!-- morris JavaScript -->
            <script>
                $(document).ready(function() {
                    //BOX BUTTON SHOW AND CLOSE
                    jQuery('.small-graph-box').hover(function() {
                        jQuery(this).find('.box-button').fadeIn('fast');
                    }, function() {
                        jQuery(this).find('.box-button').fadeOut('fast');
                    });
                    jQuery('.small-graph-box .box-close').click(function() {
                        jQuery(this).closest('.small-graph-box').fadeOut(200);
                        return false;
                    });

                    //CHARTS
                    function gd(year, day, month) {
                        return new Date(year, month - 1, day).getTime();
                    }

                    graphArea2 = Morris.Area({
                        element: 'hero-area',
                        padding: 10,
                        behaveLikeLine: true,
                        gridEnabled: false,
                        gridLineColor: '#dddddd',
                        axes: true,
                        resize: true,
                        smooth: true,
                        pointSize: 0,
                        lineWidth: 0,
                        fillOpacity: 0.85,
                        data: [{
                                period: '2021 Q1',
                                asus: 2668,
                                acer: null,
                                msi: 2649
                            },
                            {
                                period: '2021 Q2',
                                asus: 15780,
                                acer: 13799,
                                msi: 12051
                            },
                            {
                                period: '2021 Q3',
                                asus: 12920,
                                acer: 10975,
                                msi: 9910
                            },
                            {
                                period: '2021 Q4',
                                asus: 8770,
                                acer: 6600,
                                msi: 6695
                            },
                            {
                                period: '2022 Q1',
                                asus: 10820,
                                acer: 10924,
                                msi: 12300
                            },
                            {
                                period: '2022 Q2',
                                asus: 9680,
                                acer: 9010,
                                msi: 7891
                            },
                            {
                                period: '2022 Q3',
                                asus: 4830,
                                acer: 3805,
                                msi: 1598
                            },
                            {
                                period: '2022 Q4',
                                asus: 15083,
                                acer: 8977,
                                msi: 5185
                            },
                            {
                                period: '2023 Q1',
                                asus: 10697,
                                acer: 4470,
                                msi: 2038
                            },

                        ],
                        lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
                        xkey: 'period',
                        redraw: true,
                        ykeys: ['asus', 'acer', 'msi'],
                        labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                        pointSize: 2,
                        hideHover: 'auto',
                        resize: true
                    });


                });
            </script>
</body>

</html>