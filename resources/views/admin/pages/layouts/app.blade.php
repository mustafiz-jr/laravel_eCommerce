<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities." />
    <meta name="keywords"
        content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app" />
    <meta name="author" content="pixelstrap" />
    <title>Ecommerce Dashboard</title>

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap"
        rel="stylesheet" />
    <!-- Flag icon css -->
    <link rel="stylesheet" href="{{ asset('dash/css/vendors/flag-icon.css') }}" />
    <!-- iconly-icon-->
    <link rel="stylesheet" href="{{ asset('dash/css/iconly-icon.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/css/bulk-style.css') }}" />
    <!-- iconly-icon-->
    <link rel="stylesheet" href="{{ asset('dash/css/themify.css') }}" />
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/vendors/weather-icons/weather-icons.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/vendors/scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/vendors/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/vendors/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/vendors/slick-theme.css') }}" />
    <!-- App css -->
    <link id="color" rel="stylesheet" href="{{ asset('dash/css/color-1.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('dash/css/style.css') }}" />

{{-- tailwind css --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- page-wrapper Start-->
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
        <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <header class="page-header row">
            <div class="logo-wrapper d-flex align-items-center col-auto"><a href="{{ route('admin.dashboard') }}"><img
                        class="light-logo img-fluid" src="{{ asset('dash/images/logo/logo1.png') }}"
                        alt="logo" /><img class="dark-logo img-fluid"
                        src="{{ asset('dash/images/logo/logo-dark.png') }}" alt="logo" /></a>
                <a class="close-btn toggle-sidebar" href="javascript:void(0)"><i class="fa-solid fa-bars"></i></a>
            </div>
            <div class="page-main-header col">
                <div class="header-left">
                    <form class="form-inline search-full col" action="#" method="get">
                        <div class="form-group w-100">
                            <div class="Typeahead Typeahead--twitterUsers">
                                <div class="u-posRelative">
                                    <input class="demo-input Typeahead-input form-control-plaintext w-100"
                                        type="text" placeholder="Search Admiro .." name="q" title=""
                                        autofocus="autofocus" />
                                    <div class="spinner-border Typeahead-spinner" role="status"><span
                                            class="sr-only">Loading...</span></div><i
                                        class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="Typeahead-menu"></div>
                            </div>
                        </div>
                    </form>
                    <div class="form-group-header d-lg-block d-none">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative d-flex align-items-center">
                                <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100"
                                    type="text" placeholder="Type to Search..." name="q" title="" /><i
                                    class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-right">
                    <ul class="header-right">
                        <li class="custom-dropdown">
                            <div class="translate_wrapper">
                                <div class="current_lang"><a class="lang" href="javascript:void(0)"><i
                                            class="flag-icon flag-icon-us"></i>
                                        <h6 class="lang-txt f-w-700">ENG</h6>
                                    </a></div>
                                <ul class="custom-menu profile-menu language-menu py-0 more_lang">
                                    <li class="d-block"><a class="lang" href="#" data-value="English"><i
                                                class="flag-icon flag-icon-us"></i>
                                            <div class="lang-txt">English</div>
                                        </a></li>
                                    <li class="d-block"><a class="lang" href="#" data-value="fr"><i
                                                class="flag-icon flag-icon-fr"></i>
                                            <div class="lang-txt">Français</div>
                                        </a></li>
                                    <li class="d-block"><a class="lang" href="#" data-value="es"><i
                                                class="flag-icon flag-icon-es"></i>
                                            <div class="lang-txt">Español</div>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="custom-dropdown"><a href="javascript:void(0)">
                                <i class="fa-solid fa-bell"></i>
                                </svg></a><span class="badge rounded-pill badge-primary">4</span>
                            <div class="custom-menu notification-dropdown py-0 overflow-hidden">
                                <h3 class="title bg-primary-light dropdown-title">Notification <span
                                        class="font-primary">View all</span></h3>
                                <ul class="activity-timeline">
                                    <li class="d-flex align-items-start">
                                        <div class="activity-line"></div>
                                        <div class="activity-dot-primary"></div>
                                        <div class="flex-grow-1">
                                            <h6 class="f-w-600 font-primary">30-04-2024<span>Today</span><span
                                                    class="circle-dot-primary float-end">
                                                    <svg class="circle-color">
                                                        <use
                                                            href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#circle">
                                                        </use>
                                                    </svg></span></h6>
                                            <h5>Alice Goodwin</h5>
                                            <p class="mb-0">Fashion should be fun. It shouldn't be labelled
                                                intellectual.</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <div class="activity-dot-secondary"></div>
                                        <div class="flex-grow-1">
                                            <h6 class="f-w-600 font-secondary">28-06-2024<span>1 hour ago</span><span
                                                    class="float-end circle-dot-secondary">
                                                    <svg class="circle-color">
                                                        <use
                                                            href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#circle">
                                                        </use>
                                                    </svg></span></h6>
                                            <h5>Herry Venter</h5>
                                            <p>I am convinced that there can be luxury in simplicity.</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <div class="activity-dot-primary"></div>
                                        <div class="flex-grow-1">
                                            <h6 class="f-w-600 font-primary">04-08-2024<span>Today</span><span
                                                    class="float-end circle-dot-primary">
                                                    <svg class="circle-color">
                                                        <use
                                                            href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#circle">
                                                        </use>
                                                    </svg></span></h6>
                                            <h5>Loain Deo</h5>
                                            <p>I feel that things happen for open new opportunities.</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <div class="activity-dot-secondary"></div>
                                        <div class="flex-grow-1">
                                            <h6 class="f-w-600 font-secondary">12-11-2024<span>Yesterday</span><span
                                                    class="float-end circle-dot-secondary">
                                                    <svg class="circle-color">
                                                        <use
                                                            href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#circle">
                                                        </use>
                                                    </svg></span></h6>
                                            <h5>Fenter Jessy</h5>
                                            <p>Sometimes the simplest things are the most profound.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="full-screen" href="javascript:void(0)">
                                <i class="fa-solid fa-expand"></i>
                                </svg></a></li>
                        <li class="custom-dropdown"><a href="javascript:void(0)">
                                <i class="fa-solid fa-bookmark"></i></a>
                            <div class="custom-menu bookmark-dropdown py-0 overflow-hidden">
                                <h3 class="title bg-primary-light dropdown-title">Bookmark</h3>
                                <ul>
                                    <li>
                                        <form class="mb-0">
                                            <div class="input-group">
                                                <input class="form-control" type="text"
                                                    placeholder="Search Bookmark..." /><span class="input-group-text">
                                                    <svg class="svg-color">
                                                        <use
                                                            href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Search">
                                                        </use>
                                                    </svg></span>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2 btn-activity-primary"><a href="index.html">
                                                <svg class="svg-color">
                                                    <use
                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#cube">
                                                    </use>
                                                </svg></a></div>
                                        <div class="d-flex justify-content-between align-items-center w-100"><a
                                                href="index.html">Dashboard</a>
                                            <svg class="svg-color icon-star">
                                                <use
                                                    href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#star">
                                                </use>
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2 btn-activity-secondary"><a href="to-do.html">
                                                <svg class="svg-color">
                                                    <use
                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#check">
                                                    </use>
                                                </svg></a></div>
                                        <div class="d-flex justify-content-between align-items-center w-100"><a
                                                href="to-do.html">To-do</a>
                                            <svg class="svg-color icon-star">
                                                <use
                                                    href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#star">
                                                </use>
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2 btn-activity-danger"><a href="apex_chart.html">
                                                <svg class="svg-color">
                                                    <use
                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#pie">
                                                    </use>
                                                </svg></a></div>
                                        <div class="d-flex justify-content-between align-items-center w-100"><a
                                                href="apex_chart.html">Chart</a>
                                            <svg class="svg-color icon-star">
                                                <use
                                                    href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#star">
                                                </use>
                                            </svg>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="profile-nav custom-dropdown">
                            <div class="user-wrap">
                                <div class="user-img"><img src="{{ asset('dash/images/profile.png') }}"
                                        alt="user" /></div>
                                <div class="user-content">
                                    <h6>Ava Davis</h6>
                                    <p class="mb-0">Admin<i class="fa-solid fa-chevron-down"></i></p>
                                </div>
                            </div>
                            <div class="custom-menu overflow-hidden">
                                <ul class="profile-body">
                                    <li class="d-flex">
                                        <svg class="svg-color">
                                            <use
                                                href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Profile">
                                            </use>
                                        </svg><a class="ms-2" href="user-profile.html">Account</a>
                                    </li>
                                    <li class="d-flex">
                                        <svg class="svg-color">
                                            <use
                                                href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Message">
                                            </use>
                                        </svg><a class="ms-2" href="letter-box.html">Inbox</a>
                                    </li>
                                    <li class="d-flex">
                                        <svg class="svg-color">
                                            <use
                                                href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Document">
                                            </use>
                                        </svg><a class="ms-2" href="to-do.html">Task</a>
                                    </li>
                                    <li class="d-flex">
                                        <svg class="svg-color">
                                            <use
                                                href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Login">
                                            </use>
                                        </svg><a class="ms-2" href="login.html">Log Out</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page sidebar start-->
            <aside class="page-sidebar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div class="main-sidebar" id="main-sidebar">
                    <ul class="sidebar-menu" id="simple-bar">
                        <li class="pin-title sidebar-main-title">
                            <div>
                                <h5 class="sidebar-title f-w-700">Pinned</h5>
                            </div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h5 class="lan-1 f-w-700 sidebar-title">General</h5>
                            </div>
                        </li>
                        <ul class="list-group list-group-flush" id="sidebar_links">
                            <li class="list-group-item"><a class="fs-5"
                                    href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="list-group-item"><a class="fs-5"
                                    href="{{ route('admin.categories.index') }}">Categories</a></li>
                            <li class="list-group-item"><a class="fs-5" href="{{route('admin.products.index')}}">Products</a></li>
                            <li class="list-group-item"><a class="fs-5" href="">Orders</a></li>
                            <li class="list-group-item"><a class="fs-5" href="">Manage Users </a></li>
                            <li class="list-group-item"><a class="fs-5" href="">Customers </a></li>
                            <li class="list-group-item"><a class="fs-5" href="">Payments </a></li>
                            <li class="list-group-item"><a class="fs-5" href="">Contacts </a></li>
                            <li class="list-group-item"><a class="fs-5" href="{{ route('logout') }}">Logout </a>
                            </li>

                        </ul>

                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </aside>
            <!-- Page sidebar end-->


            {{--  --}}
            {{--  --}}

            @yield('content')


            {{--  --}}
            {{--  --}}







            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2024 © Ecommerce by Mustafizur Rahman.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="float-end mb-0">Hand crafted & Hand by Mustafizur
                                <svg class="svg-color footer-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#heart">
                                    </use>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- jquery-->
    <script src="{{ asset('dash/js/vendors/jquery/jquery.min.js') }}"></script>
    <!-- bootstrap js-->
    <script src="{{ asset('dash/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}" defer=""></script>
    <script src="{{ asset('dash/js/vendors/bootstrap/dist/js/popper.min.js') }}" defer=""></script>
    <!--fontawesome-->
    <script src="{{ asset('dash/js/vendors/font-awesome/fontawesome-min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('dash/js/sidebar.js') }}"></script>
    <!-- config-->
    <script src="{{ asset('dash/js/config.js') }}"></script>
    <!-- apex-->
    <script src="{{ asset('dash/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('dash/js/chart/apex-chart/stock-prices.js') }}"></script>
    <!-- scrollbar-->
    <script src="{{ asset('dash/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('dash/js/scrollbar/custom.js') }}"></script>
    <!-- slick-->
    <script src="{{ asset('dash/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('dash/js/slick/slick.js') }}"></script>
    <!-- touchspin -->
    <script src="{{ asset('dash/js/touchspin_2/custom_touchspin.js') }}"></script>
    <!-- data_table-->
    <script src="{{ asset('dash/js/js-datatables/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- page_datatable-->
    <script src="{{ asset('dash/js/js-datatables/datatables/datatable.custom.js') }}"></script>
    <!-- page_datatable1-->
    <script src="{{ asset('dash/js/js-datatables/datatables/datatable.custom1.js') }}"></script>
    <!-- page_datatable-->
    <script src="{{ asset('dash/js/datatable/datatables/datatable.custom.js') }}"></script>
    <!-- swiper-->
    <script src="{{ asset('dash/js/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <!-- theme_customizer-->
    <script src="{{ asset('dash/js/theme-customizer/customizer.js') }}"></script>
    <!-- dashboard_2-->
    <script src="{{ asset('dash/js/dashboard/dashboard_2.js') }}"></script>
    <!-- custom script -->
    <script src="{{ asset('dash/js/script.js') }}"></script>
</body>

<!-- Mirrored from admin.pixelstrap.net/admiro/template/dashboard-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Jun 2025 18:41:16 GMT -->

</html>
