<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title')</title>
<!-- plugins:css -->

{!! Html::style('melody/vendors/iconfonts/font-awesome/css/all.min.css') !!}
{!! Html::style('melody/vendors/css/vendor.bundle.base.css') !!}
{!! Html::style('melody/vendors/css/vendor.bundle.addons.css') !!}

<!-- endinject -->
<!-- plugin css for this page -->
<!-- End plugin css for this page -->
<!-- inject:css -->
{!! Html::style('melody/css/style.css') !!}
@yield('styles')
<!-- endinject -->
<link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>

<body class="sidebar-fixed">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="#"><img src="{{asset('melody/images/KonectaCol.png')}}" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="{{asset('melody/images/logo-min-k.png')}}" alt="logo" /></a>
            {{-- <a class="navbar-brand brand-logo" href="#">SistemaX</a>
            <a class="navbar-brand brand-logo-mini" href="index-2.html">SmaX</a> --}}
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="fas fa-bars"></span>
            </button>
            {{-- <ul class="navbar-nav">
            <li class="nav-item nav-search d-none d-md-flex">
                <div class="nav-link">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-search"></i>
                    </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                </div>
                </div>
            </li>
            </ul> --}}
            <ul class="navbar-nav navbar-nav-right">
                @yield('create')
    
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="{{asset('melody/images/faces/Lunaion.png')}}" alt="profile" />
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                    <i class="fas fa-cog text-primary"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item">
                    <i class="fas fa-power-off text-primary"></i>
                    Logout
                </a>
                </div>
            </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="fas fa-bars"></span>
            </button>
        </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        @yield('preference')
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('layouts._nav')
        <!-- partial -->
        <div class="main-panel">
            @yield('content')
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">by - Lunaion </span>
            </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    {!! Html::script('melody/vendors/js/vendor.bundle.base.js') !!}
    {!! Html::script('melody/vendors/js/vendor.bundle.addons.js') !!}
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    {!! Html::script('melody/js/off-canvas.js') !!}
    {!! Html::script('melody/js/hoverable-collapse.js') !!}
    {!! Html::script('melody/js/misc.js') !!}
    {!! Html::script('melody/js/settings.js') !!}
    {!! Html::script('melody/js/todolist.js') !!}

    {{-- @include('sweetalert::alert') --}}
    <!-- endinject -->
    <!-- Custom js for this page-->
    {!! Html::script('melody/js/dashboard.js') !!} 
    <!-- End custom js for this page-->
    @yield('scripts')
</body>


</html>
