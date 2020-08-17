<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color:#e5e5e5">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Enju</title>

    <!-- Scripts -->
   
    <script src="{{ asset('components/js/main.js') }}"></script>
    <!-- Fonts -->
   <link href="{{ asset('components/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('components/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('components/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('components/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('components/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('components/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('components/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('components/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('components/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('components/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('components/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('components/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('components/css/theme.css') }}" rel="stylesheet" media="all">
    <!-- Main JS-->
    

</head>
<body>
    <div class="page-wrapper">
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{URL::asset('components/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Art</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('arts.index') }}">All Art</a>
                                </li>
                                <li>
                                    <a href="{{ route('arts.create') }}">Create Art</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30" style="left:unset;">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{URL::asset('components/images/icon/avatar-01.png')}}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{URL::asset('components/images/icon/avatar-01.png')}}" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="#" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>{{ __('Logout') }}</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->


        

        <main class="py-4" style="margin-top:80px;">
            @yield('content')
        </main>

            <!-- Jquery JS-->
    <script src="{{ asset('components/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('components/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('components/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('components/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('components/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('components/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('components/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('components/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('components/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('components/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('components/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('components/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('components/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('components/js/main.js') }}"></script>

    </div>
</body>
</html>
