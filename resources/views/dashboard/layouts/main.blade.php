<?php
/**
 * Created by PhpStorm.
 * User: kasun
 * Date: 10/02/2019
 * Time: 12:40 AM
 */
?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title','Agency - Responsive Flat Admin Dashboard')</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{asset('dash-board/images/faviicon.png')}}">

    @yield('js',view('dashboard.components.css'))
</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
        @yield('js',view('dashboard.components.sidebar'))
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        @yield('js',view('dashboard.components.navbar.message'))
                        @yield('js',view('dashboard.components.navbar.notification'))
                        @yield('js',view('dashboard.components.navbar.auth'))


                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="ion-navicon"></i>
                            </button>
                        </li>
                        <li class="hide-phone list-inline-item app-search">
                            <h3 class="page-title">Alertify</h3>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                </nav>

            </div>
            <!-- Top Bar End -->

            <div class="page-content-wrapper ">

                @yield('content')


            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->


        @yield('js',view('dashboard.components.footer'))
    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->


@yield('js',view('dashboard.components.js'))

</body>
</html>
