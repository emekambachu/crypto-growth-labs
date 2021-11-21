<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Crypto Growth Labs</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('binary_traders_forum_favicon.png') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/responsive.css') }}">

    <!-- custom css-->
    <link rel="stylesheet" href="{{ asset('custom/style.css') }}">

    @yield('top-assets')
</head>

<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center"></div>
</div>
<!-- loader END -->

<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->
    <div class="iq-sidebar">
        <div class="iq-navbar-logo d-flex justify-content-between">
            <a href="" class="header-logo">
                <img src="{{ asset('bullsmarket_logo.png') }}" class="img-fluid rounded" alt="">
            </a>
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-menu-line"></i></div>
                    <div class="hover-circle"><i class="ri-close-fill"></i></div>
                </div>
            </div>
        </div>
        <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li><a href="{{ route('admin-dashboard') }}" class="iq-waves-effect">
                        <i class="las la-dashboard iq-arrow-left"></i><span>Dashboard</span></a></li>
                    <li><a href="{{ route('manage-users') }}" class="iq-waves-effect">
                        <i class="las la-user iq-arrow-left"></i><span>Manage Users</span></a></li>
                    <li><a href="{{ route('manage-investments') }}" class="iq-waves-effect">
                            <i class="las la-money iq-arrow-left"></i><span>Manage Investments</span></a></li>
                    <li><a href="{{ route('withdrawal-requests') }}" class="iq-waves-effect">
                            <i class="las la-money iq-arrow-left"></i><span>Withdrawal Requests</span></a></li>
                    <li><a href="{{ route('investments-packages.index') }}" class="iq-waves-effect">
                        <i class="las la-gear iq-arrow-left"></i><span>Investment Packages</span></a></li>
                    <li><a href="{{ route('admin.account-settings') }}" class="iq-waves-effect">
                            <i class="las la-sign-out iq-arrow-left"></i><span>Account Settings</span></a></li>
                    <li><a href="{{ route('admin-logout') }}" class="iq-waves-effect">
                        <i class="las la-sign-out iq-arrow-left"></i><span>Logout</span></a></li>
                </ul>
            </nav>
            <div class="p-3"></div>
        </div>
    </div>

    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-menu-bt d-flex align-items-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                        <div class="hover-circle"><i class="ri-close-fill"></i></div>
                    </div>
                    <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                        <a href="" class="header-logo">
                            <img src="{{ asset('bullsmarket_logo.png') }}" class="img-fluid rounded" alt="">
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list">

                        <li><a style="font-size: 12px; margin-top: 20px;" href="{{ route('admin-dashboard') }}"><span>Dashboard</span></a></li>
                        <li><a style="font-size: 12px; margin-top: 20px;" href="{{ route('manage-users') }}"><span>Manage Users</span></a></li>
                        <li><a style="font-size: 12px; margin-top: 20px;" href="{{ route('manage-investments') }}"><span>Manage Investments</span></a></li>
                        <li><a style="font-size: 12px; margin-top: 20px;" href="{{ route('withdrawal-requests') }}"><span>Withdrawal Requests</span></a></li>
                        <li><a style="font-size: 12px; margin-top: 20px;" href="{{ route('investments-packages.index') }}"><span>Investment Packages</span></a></li>
                        <li><a style="font-size: 12px; margin-top: 20px;" href="{{ route('admin.account-settings') }}"><span>Account Settings</span></a></li>
                        <li><a style="font-size: 12px; margin-top: 20px;" href="{{ route('admin-logout') }}"><span>Logout</span></a></li>

                        <li id="google_translate_element" class="nav-item"></li>

                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="search-toggle iq-waves-effect bg-primary rounded">
                                <i class="ri-mail-line"></i>
                                <span class="bg-danger count-mail"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">

                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{ asset('auth/images/users/01.jpg') }}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Barry Emma Watson</h6>
                                                    <small class="float-left font-size-12">13 Jun</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#" class="iq-sub-card">
                                            <div class="media align-items-center">
                                                <div class="">
                                                    <img class="avatar-40 rounded" src="{{ asset('auth/images/users/03.jpg') }}" alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Why do we use it?</h6>
                                                    <small class="float-left font-size-12">30 Jun</small>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-list">
                    <li class="line-height">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                            <img src="/photos/{{'noimage.png'}}" class="img-fluid rounded mr-3" alt="user">
                            <div class="caption">
                                <h6 class="mb-0 line-height">{{ Auth::user()->name }}</h6>
                                <p class="mb-0">Online</p>
                            </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white line-height">{{ Auth::user()->name }}</h5>
                                        <span class="text-white font-size-12">Online</span>
                                    </div>

                                    <a href="" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-account-box-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Account settings</h6>
                                                <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="d-inline-block w-100 text-center p-3">
                                        <a class="bg-primary iq-sign-btn" href="{{ route('admin-logout') }}" role="button">
                                            Log out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- TOP Nav Bar END -->

    <!-- Page Content  -->
@yield('contents')
<!-- Wrapper END -->

    <!-- Footer -->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright {{ date('Y') }} <a href="">Crypto Growth Labs</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('auth/js/jquery.min.js') }}"></script>
    <script src="{{ asset('auth/js/popper.min.js') }}"></script>
    <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
    <!-- Appear JavaScript -->
    <script src="{{ asset('auth/js/jquery.appear.js') }}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ asset('auth/js/countdown.min.js') }}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ asset('auth/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('auth/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow JavaScript -->
    <script src="{{ asset('auth/js/wow.min.js') }}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{ asset('auth/js/apexcharts.js') }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ asset('auth/js/slick.min.js') }}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{ asset('auth/js/select2.min.js') }}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ asset('auth/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{ asset('auth/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ asset('auth/js/smooth-scrollbar.js') }}"></script>
    <!-- lottie JavaScript -->
    <script src="{{ asset('auth/js/lottie.js') }}"></script>
    <!-- am core JavaScript -->
    <script src="{{ asset('auth/js/core.js') }}"></script>
    <!-- am charts JavaScript -->
    <script src="{{ asset('auth/js/charts.js') }}"></script>
    <!-- am animated JavaScript -->
    <script src="{{ asset('auth/js/animated.js') }}"></script>
    <!-- highcharts JavaScript -->
    <script src="{{ asset('auth/js/highcharts.js') }}"></script>
    <!-- highcharts-3d JavaScript -->
    <script src="{{ asset('auth/js/highcharts-3d.js') }}"></script>
    <!-- highcharts-more JavaScript -->
    <script src="{{ asset('auth/js/highcharts-more.js') }}"></script>
    <!-- am kelly JavaScript -->
    <script src="{{ asset('auth/js/kelly.js') }}"></script>
    <!-- am maps JavaScript -->
    <script src="{{ asset('auth/js/maps.js') }}"></script>
    <!-- am worldLow JavaScript -->
    <script src="{{ asset('auth/js/worldLow.js') }}"></script>
    <!-- Style Customizer -->
    <script src="{{ asset('auth/js/style-customizer.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('auth/js/chart-custom.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('auth/js/custom.js') }}"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>

    <script type="text/javascript"
            src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

</body>

</html>
