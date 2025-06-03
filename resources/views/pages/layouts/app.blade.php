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
    <title>Admiro - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('dash/images/favicon.png') }}')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('dash/images/favicon.png') }}" type="image/x-icon" />
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
    <link rel="stylesheet" href="{{ asset('dash/css/fontawesome-min.css') }}" />
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/vendors/weather-icons/weather-icons.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/vendors/scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/vendors/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/vendors/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/css/vendors/slick-theme.css') }}" />
    <!-- App css -->
    <link id="color" rel="stylesheet" href="{{ asset('dash/css/color-1.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('dash/css/style.css') }}" />
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
                        src="{{ asset('dash/images/logo/logo-dark.png') }}" alt="logo" /></a><a
                    class="close-btn toggle-sidebar" href="javascript:void(0)">
                    <svg class="svg-color">
                        <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Category"></use>
                    </svg></a></div>
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
                                            class="sr-only">Loading...</span></div><i class="close-search"
                                        data-feather="x"></i>
                                </div>
                                <div class="Typeahead-menu"></div>
                            </div>
                        </div>
                    </form>
                    <div class="form-group-header d-lg-block d-none">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative d-flex align-items-center">
                                <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100"
                                    type="text" placeholder="Type to Search..." name="q"
                                    title="" /><i class="search-bg iconly-Search icli"></i>
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
                      
                        <li> <a class="dark-mode" href="javascript:void(0)">
                                <svg>
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#moondark">
                                    </use>
                                </svg></a></li>

                                {{-- cart modal --}}
                        {{-- <li class="custom-dropdown"><a href="javascript:void(0)">
                                <svg>
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#cart-icon">
                                    </use>
                                </svg></a><span class="badge rounded-pill badge-primary">2</span>
                            <div class="custom-menu cart-dropdown py-0 overflow-hidden">
                                <h3 class="title dropdown-title">Cart</h3>
                                <ul class="pb-0">
                                    <li>
                                        <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60"
                                                src="{{ asset('dash/images/dashboard-2/1.png') }}" alt="" />
                                            <div class="flex-grow-1"><span class="f-w-600">Watch multicolor</span>
                                                <div class="qty-box">
                                                    <div class="input-group"><span class="input-group-prepend">
                                                            <button class="btn quantity-left-minus" type="button"
                                                                data-type="minus" data-field="">-</button></span>
                                                        <input class="form-control input-number" type="text"
                                                            name="quantity" value="1" /><span
                                                            class="input-group-prepend">
                                                            <button class="btn quantity-right-plus" type="button"
                                                                data-type="plus" data-field="">+</button></span>
                                                    </div>
                                                </div>
                                                <h6 class="font-primary">$500</h6>
                                            </div>
                                            <div class="close-circle"><a class="bg-danger" href="#"><i
                                                        data-feather="x"></i></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60"
                                                src="{{ asset('dash/images/dashboard-2/2.png') }}" alt="" />
                                            <div class="flex-grow-1"><span class="f-w-600">Airpods</span>
                                                <div class="qty-box">
                                                    <div class="input-group"><span class="input-group-prepend">
                                                            <button class="btn quantity-left-minus" type="button"
                                                                data-type="minus" data-field="">-</button></span>
                                                        <input class="form-control input-number" type="text"
                                                            name="quantity" value="1" /><span
                                                            class="input-group-prepend">
                                                            <button class="btn quantity-right-plus" type="button"
                                                                data-type="plus" data-field="">+</button></span>
                                                    </div>
                                                </div>
                                                <h6 class="font-primary">$500.00</h6>
                                            </div>
                                            <div class="close-circle"><a class="bg-danger" href="#"><i
                                                        data-feather="x"></i></a></div>
                                        </div>
                                    </li>
                                    <li class="total">
                                        <h6 class="mb-0">Order Total : <span class="f-w-600">$1000.00</span></h6>
                                    </li>
                                    <li class="text-center"><a class="d-block mb-3 view-cart f-w-700 text-primary"
                                            href="cart.html">Go to your cart</a><a
                                            class="btn btn-primary view-checkout text-white"
                                            href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </li> --}}
                        <li class="custom-dropdown"><a href="javascript:void(0)">
                                <svg>
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#notification">
                                    </use>
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
                                <svg>
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#scanfull">
                                    </use>
                                </svg></a></li>
                        <li class="custom-dropdown"><a href="javascript:void(0)">
                                <svg>
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#bookmark">
                                    </use>
                                </svg></a>
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
                        <li class="cloud-design"><a class="cloud-mode">
                                <svg class="climacon climacon_cloudDrizzle" id="cloudDrizzle" version="1.1"
                                    viewBox="15 15 70 70">
                                    <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzle">
                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                                            <path
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left"
                                                d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z">
                                            </path>
                                            <path
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle"
                                                d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z">
                                            </path>
                                            <path
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right"
                                                d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z">
                                            </path>
                                        </g>
                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                            <path
                                                class="climacon_component climacon_component-stroke climacon_component-stroke_cloud"
                                                d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <h3>15</h3>
                            </a></li>
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
                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Home-dashboard">
                                    </use>
                                </svg>
                                <h6>Dashboards</h6><span class="badge">3</span><i
                                    class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="index.html">Default</a></li>
                                <li><a href="dashboard-02.html">Ecommerce </a></li>
                                <li> <a href="dashboard-03.html">Education</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Pie">
                                    </use>
                                </svg>
                                <h6 class="lan-2">Widgets </h6><i class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="general-widget.html">General</a></li>
                                <li><a href="chart-widget.html">Chart</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Document">
                                    </use>
                                </svg>
                                <h6 class="lan-3">Page layout</h6><i class="iconly-Arrow-Right-2 icli"> </i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="box-layout.html">Box Layout</a></li>
                                <li><a href="layout-rtl.html">RTL</a></li>
                                <li> <a href="layout-dark.html">Dark</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h5 class="f-w-700 sidebar-title pt-3">Application</h5>
                            </div>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Info-circle">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Project</h6><i class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="project-list.html">Project list </a></li>
                                <li> <a href="projectcreate.html">Project create </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="file-manager.html">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Paper">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">File Manager </h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="kanban-board.html">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Wallet">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Kanban board</h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Bag">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Ecommerce</h6><i class="iconly-Arrow-Right-2 icli"> </i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="add-products.html">Add Products</a></li>
                                <li> <a href="product.html">Product</a></li>
                                <li> <a href="product-page.html">Product Page</a></li>
                                <li> <a href="category.html">Category page</a></li>
                                <li> <a href="list-products.html">Product list</a></li>
                                <li> <a href="payment-details.html">Payment Details</a></li>
                                <li> <a href="order-history.html">Order History</a></li>
                                <li><a class="submenu-title" href="javascript:void(0)">Invoices<i
                                            class="iconly-Arrow-Right-2 icli"> </i></a>
                                    <ul class="according-submenu">
                                        <li> <a href="invoices-1.html">Invoices 1</a></li>
                                        <li> <a href="invoices-2.html">Invoices 2</a></li>
                                        <li> <a href="invoices-3.html">Invoices 3</a></li>
                                        <li> <a href="invoices-4.html">Invoices 4</a></li>
                                        <li> <a href="invoices-5.html">Invoices 5</a></li>
                                        <li> <a href="invoices-6.html">Invoices 6</a></li>
                                    </ul>
                                </li>
                                <li> <a href="cart.html">Cart</a></li>
                                <li> <a href="list-wish.html">Wishlist</a></li>
                                <li> <a href="checkout.html">Checkout</a></li>
                                <li> <a href="pricing.html">Pricing </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="letter-box.html">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Message">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Letter Box</h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Chat">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Chat</h6><i class="iconly-Arrow-Right-2 icli"> </i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="private-chat.html">Private Chat</a></li>
                                <li> <a href="group-chat.html">Group Chat</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Profile">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Users</h6><i class="iconly-Arrow-Right-2 icli"> </i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="user-profile.html">Users Profile</a></li>
                                <li> <a href="edit-profile.html">Users Edit</a></li>
                                <li> <a href="user-cards.html">Users Cards </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="bookmark.html">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Bookmark">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Bookmarks</h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="contacts.html">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Contacts">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Contacts </h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="task.html">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Tick-square">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Tasks</h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="calendar-basic.html">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Calendar">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Calendar </h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="social-app.html">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Camera">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Social App</h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="to-do.html">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Edit">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">To-Do </h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="search.html">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Search-sidebar">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Search Result </h6>
                            </a></li>
                        <li class="sidebar-main-title">
                            <div>
                                <h5 class="f-w-700 sidebar-title pt-3">Components</h5>
                            </div>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="buttons.html">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#More-box">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">buttons </h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Folder">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Ui Kits</h6><i class="iconly-Arrow-Right-2 icli"> </i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="typography.html">Typography</a></li>
                                <li><a href="avatars.html">Avatars</a></li>
                                <li> <a href="alert.html">Alert</a></li>
                                <li> <a href="helper-classes.html">Helper classes</a></li>
                                <li> <a href="grid.html">Grid</a></li>
                                <li> <a href="accordion.html">Accordion</a></li>
                                <li> <a href="tag-pills.html">Tag pills</a></li>
                                <li> <a href="modal.html">Modal </a></li>
                                <li> <a href="popover.html">Popover </a></li>
                                <li> <a href="progress-bar.html">Progress bar</a></li>
                                <li> <a href="tab-bootstrap.html">Tab bootstrap</a></li>
                                <li> <a href="tooltip.html">Tooltip</a></li>
                                <li> <a href="dropdown.html"> Dropdown</a></li>
                                <li> <a href="list.html">List</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Ticket-star">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Bonus Ui</h6><i class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="scrollable.html">Scrollable</a></li>
                                <li> <a href="tree.html">Tree view </a></li>
                                <li><a href="toasts.html">Toasts </a></li>
                                <li> <a href="rating.html">Rating</a></li>
                                <li> <a href="dropzone.html">Dropzone</a></li>
                                <li> <a href="tour.html">Tour</a></li>
                                <li> <a href="sweetalert2.html">Sweetalert2 </a></li>
                                <li> <a href="modal-animated.html">Animated Modal</a></li>
                                <li> <a href="slider.html">Slider</a></li>
                                <li> <a href="ribbons.html">Ribbons</a></li>
                                <li><a href="pagination.html">Pagination</a></li>
                                <li> <a href="breadcrumb.html">Breadcrumb</a></li>
                                <li> <a href="range-slider.html">Range slider</a></li>
                                <li> <a href="image-cropper.html">Image cropper</a></li>
                                <li> <a href="basic-card.html">Basic Card</a></li>
                                <li> <a href="creative-card.html">Creative Card</a></li>
                                <li> <a href="dragable-card.html">Dragable Card </a></li>
                                <li> <a href="timeline.html">Timeline</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Category">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Animation </h6><i class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="AOS.html">aos</a></li>
                                <li> <a href="WOW.html">wow</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Activity">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Icon</h6><i class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="font-awesome.html">Fontawesome icon</a></li>
                                <li><a href="feather_icon.html">Feather icon</a></li>
                                <li> <a href="iconly-icon.html">Iconly icon </a></li>
                                <li> <a href="themify-icon.html">Themify Icon</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Chart">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Charts</h6><i class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="echarts.html">Echarts</a></li>
                                <li> <a href="apex_chart.html">Apex Chart</a></li>
                                <li> <a href="chart-google.html">Google Chart</a></li>
                                <li> <a href="chart-sparkline.html">Sparkline chart</a></li>
                                <li> <a href="chart-flot.html">Flot Chart</a></li>
                                <li> <a href="chart-knob.html">Knob Chart</a></li>
                                <li> <a href="chart-morris.html">Morris Chart</a></li>
                                <li> <a href="chartjs.html">Chatjs Chart</a></li>
                                <li> <a href="chartist_chart.html">Chartist Chart</a></li>
                                <li><a href="chart-peity.html">Peity Chart</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h5 class="sidebar-title pt-3 f-w-700">Tables & Forms</h5>
                            </div>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Filter">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Forms</h6><i class="iconly-Arrow-Right-2 icli"> </i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a class="submenu-title" href="javascript:void(0)">form-control<i
                                            class="iconly-Arrow-Right-2 icli"> </i></a>
                                    <ul class="according-submenu">
                                        <li> <a href="base-input.html">Base input</a></li>
                                        <li> <a href="form-validation.html">Form validation</a></li>
                                        <li> <a href="radio-checkbox-control.html">Checkbox & Radio </a></li>
                                        <li> <a href="input-group.html">Input group</a></li>
                                        <li> <a href="input-mask.html">Input mask</a></li>
                                        <li> <a href="megaoptions.html">Mega Options </a></li>
                                    </ul>
                                </li>
                                <li><a class="submenu-title" href="javascript:void(0)">Form Widgets<i
                                            class="iconly-Arrow-Right-2 icli"> </i></a>
                                    <ul class="according-submenu">
                                        <li> <a href="datepicker.html">Datepicker</a></li>
                                        <li> <a href="touchspin.html">Touchspin</a></li>
                                        <li> <a href="select2.html">Select2 </a></li>
                                        <li> <a href="switch.html">Switch </a></li>
                                        <li> <a href="typehead.html">Typehead </a></li>
                                        <li> <a href="clipboard.html">Clipboard</a></li>
                                    </ul>
                                </li>
                                <li><a class="submenu-title" href="javascript:void(0)">Form Layout<i
                                            class="iconly-Arrow-Right-2 icli"> </i></a>
                                    <ul class="according-submenu">
                                        <li> <a href="form-wizard.html">Form wizard 1</a></li>
                                        <li> <a href="form-wizard-two.html">Form wizard 2</a></li>
                                        <li> <a href="form-wizard-three.html">Two factor</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Edit-line">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Tables</h6><i class="iconly-Arrow-Right-2 icli"> </i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a class="submenu-title" href="javascript:void(0)">Bootstrap Tables<i
                                            class="iconly-Arrow-Right-2 icli"> </i></a>
                                    <ul class="according-submenu">
                                        <li> <a href="basic-table.html">Basic Tables</a></li>
                                        <li> <a href="table-components.html">Table components</a></li>
                                    </ul>
                                </li>
                                <li><a class="submenu-title" href="javascript:void(0)">Data Tables<i
                                            class="iconly-Arrow-Right-2 icli"> </i></a>
                                    <ul class="according-submenu">
                                        <li> <a href="datatable-basic-init.html">Basic Init</a></li>
                                        <li> <a href="datatable-advance.html">Advance Init</a></li>
                                        <li> <a href="datatable-API.html">API</a></li>
                                        <li><a href="datatable-data-source.html">Data Sources</a></li>
                                    </ul>
                                </li>
                                <li> <a href="datatable-ext-autofill.html">Ex. Data Tables</a></li>
                                <li> <a href="jsgrid-table.html">Js Grid Table </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h5 class="sidebar-title pt-3 f-w-700">Pages</h5>
                            </div>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="landing-page.html">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Wallet">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Landing page</h6>
                            </a></li>
                        <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="sample-page.html">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Paper-plus">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Sample page</h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="internationalization.html">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Play">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Internationalization</h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="https://admin.pixelstrap.net/admiro/starter-kit/index.html" target="_blank">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Star-kit">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Starter kit</h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Password">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Others</h6><i class="iconly-Arrow-Right-2 icli"> </i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a class="submenu-title" href="javascript:void(0)">Error Page<i
                                            class="iconly-Arrow-Right-2 icli"> </i></a>
                                    <ul class="according-submenu">
                                        <li> <a href="error-page1.html">Error page 1</a></li>
                                        <li> <a href="error-page2.html">Error page 2</a></li>
                                        <li> <a href="error-page3.html">Error page 3</a></li>
                                        <li> <a href="error-page4.html">Error page 4</a></li>
                                        <li> <a href="error-page5.html">Error page 5</a></li>
                                        <li> <a href="error-page6.html">Error page 6</a></li>
                                    </ul>
                                </li>
                                <li><a class="submenu-title" href="javascript:void(0)"> Authentication<i
                                            class="iconly-Arrow-Right-2 icli"> </i></a>
                                    <ul class="according-submenu">
                                        <li> <a href="login.html" target="_blank">Login Simple</a></li>
                                        <li> <a href="login_one.html" target="_blank">Login with bg image</a></li>
                                        <li> <a href="login_two.html" target="_blank">Login with image two</a></li>
                                        <li> <a href="login-bs-validation.html" target="_blank">Login With
                                                validation</a></li>
                                        <li> <a href="login-bs-tt-validation.html" target="_blank">Login with
                                                tooltip</a></li>
                                        <li> <a href="login-sa-validation.html" target="_blank">Login with
                                                sweetalert</a></li>
                                        <li> <a href="sign-up.html" target="_blank">Register Simple</a></li>
                                        <li> <a href="sign-up-one.html" target="_blank">Register with Bg Image</a>
                                        </li>
                                        <li> <a href="sign-up-two.html" target="_blank">Register with image two</a>
                                        </li>
                                        <li> <a href="sign-up-wizard.html" target="_blank">Register wizard</a></li>
                                        <li> <a href="unlock.html">Unlock User</a></li>
                                        <li> <a href="forget-password.html">Forget Password</a></li>
                                        <li> <a href="reset-password.html">Reset Password</a></li>
                                        <li> <a href="maintenance.html">Maintenance</a></li>
                                    </ul>
                                </li>
                                <li><a class="submenu-title" href="javascript:void(0)">Coming Soon<i
                                            class="iconly-Arrow-Right-2 icli"> </i></a>
                                    <ul class="according-submenu">
                                        <li> <a href="comingsoon.html">Coming Simple</a></li>
                                        <li> <a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                                        <li> <a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                                    </ul>
                                </li>
                                <li><a class="submenu-title" href="javascript:void(0)">Email templates<i
                                            class="iconly-Arrow-Right-2 icli"> </i></a>
                                    <ul class="according-submenu">
                                        <li> <a href="basic-template.html">Basic Email</a></li>
                                        <li> <a href="email-header.html">Basic With Header</a></li>
                                        <li> <a href="template-email.html">Ecomerce Template</a></li>
                                        <li> <a href="template-email-2.html">Email Template 2</a></li>
                                        <li> <a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                        <li> <a href="email-order-success.html">Order Success</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h5 class="sidebar-title pt-3 f-w-700">Miscellaneous</h5>
                            </div>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Gallery">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Gallery </h6><i class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="gallery.html">Gallery Grid</a></li>
                                <li> <a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                                <li> <a href="masonary.html">Masonary Gallery</a></li>
                                <li> <a href="masonary_with_disc.html">Masonary With Desc</a></li>
                                <li> <a href="gallery-hover.html">Hover Effects</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Game">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Blog </h6><i class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="blog.html">Blog Details</a></li>
                                <li> <a href="blog-single.html">Blog Single</a></li>
                                <li><a href="add_post.html">Add Post</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link" href="faq.html">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Danger">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">FAQ</h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Filter-2">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Job Search </h6><i class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="job-cards-view.html">Card view</a></li>
                                <li> <a href="job-list-view.html">List view</a></li>
                                <li><a href="job-details.html">Job details </a></li>
                                <li><a href="job-apply.html">Apply</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Work">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Learning</h6><i class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="learning_list_visit.html">Learning List</a></li>
                                <li> <a href="learning_detailed.html">Learning Detailed</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use
                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Discovery">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Maps</h6><i class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="data-map.html">Data Map</a></li>
                                <li> <a href="vector-map.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="javascript:void(0)">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Shield">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Editors</h6><i class="iconly-Arrow-Right-2 icli"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li> <a href="quilleditor.html">Quill editor</a></li>
                                <li> <a href="ace-code-editor.html">ACE Code Editor</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="knowledgebase.html">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Setting">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Knowledgebase</h6>
                            </a></li>
                        <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link"
                                href="support-ticket.html">
                                <svg class="stroke-icon">
                                    <use href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#Ticket">
                                    </use>
                                </svg>
                                <h6 class="f-w-600">Support Ticket</h6>
                            </a></li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </aside>
            <!-- Page sidebar end-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <h2>Ecommerce dashboard</h2>
                                <p class="mb-0 text-title-gray">"Welcome back! Continue your journey."</p>
                            </div>
                            <div class="col-sm-6 col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i
                                                class="iconly-Home icli svg-color"></i></a></li>
                                    <li class="breadcrumb-item">Dashboard</li>
                                    <li class="breadcrumb-item active">Ecommerce</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid dashboard-2">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-7 col-lg-12 box-col-7">
                            <div class="card analytics-card">
                                <div class="card-header card-no-border pb-0">
                                    <div class="header-top">
                                        <h3>Sales Analytics</h3>
                                        <ul class="simple-wrapper nav nav-pills" id="myTab" role="tablist">
                                            <li class="nav-item"><a class="nav-link" id="home-tab"
                                                    data-bs-toggle="tab" href="#yearly" role="tab"
                                                    aria-selected="true">Yearly</a></li>
                                            <li class="nav-item"><a class="nav-link" id="profile-tabs"
                                                    data-bs-toggle="tab" href="#monthly" role="tab"
                                                    aria-selected="false">Monthly</a></li>
                                            <li class="nav-item"><a class="nav-link active" id="contact-tab"
                                                    data-bs-toggle="tab" href="#weekly" role="tab"
                                                    aria-selected="false">Weekly</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body sale-chart-box">
                                    <ul class="d-flex">
                                        <li class="statistic-icon">
                                            <div>
                                                <div>
                                                    <div class="statistic-content"><span class="primary-dot">
                                                        </span>Pending</div>
                                                </div>
                                                <div
                                                    class="statistic-num ms-auto text-end font-danger d-flex align-items-center">
                                                    <h5>$4,875</h5>
                                                    <div><span>28%</span><i class="fa-solid fa-chevron-up ms-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="statistic-icon">
                                            <div>
                                                <div>
                                                    <div class="statistic-content"><span class="secondary-dot">
                                                        </span>Complete</div>
                                                </div>
                                                <div
                                                    class="statistic-num ms-auto text-end font-primary d-flex align-items-center">
                                                    <h5>$1,320</h5>
                                                    <div><span>36.28%</span><i
                                                            class="fa-solid fa-chevron-down ms-1"></i></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div id="chart-school-performance"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-5 col-md-7 box-col-5">
                            <div class="card">
                                <div class="card-header card-no-border pb-0">
                                    <div class="header-top">
                                        <h3>User Status</h3>
                                        <div class="dropdown icon-dropdown">
                                            <button class="btn" id="userdropdown1" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa-solid fa-ellipsis"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="userdropdown1"><a class="dropdown-item"
                                                    href="#">Weekly</a><a class="dropdown-item"
                                                    href="#">Monthly</a><a class="dropdown-item"
                                                    href="#">Yearly</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0 user-status">
                                    <div class="table-responsive theme-scrollbar">
                                        <table class="table display table-bordernone" id="user-status"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Customer</th>
                                                    <th>country</th>
                                                    <th class="text-center">Popular</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/01.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>John Deo <span>(14+ Online)</span></h6>
                                                                </a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h3>USA</h3>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-light-success">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 60%" aria-valuenow="25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/02.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Smith Lovell <span>(250+ Online)</span></h6>
                                                                </a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h3>Angola</h3>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-light-warning">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 40%" aria-valuenow="25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/03.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Jones Brooks <span>(130+ Online)</span></h6>
                                                                </a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h3>America</h3>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-light-danger">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 80%" aria-valuenow="25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/04.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Brown Acum <span>(214+ Online)</span></h6>
                                                                </a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h3>England</h3>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-success">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 60%" aria-valuenow="25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/05.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Evans Mayo <span>(250+ Online)</span></h6>
                                                                </a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h3>London</h3>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-light-warning">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 60%" aria-valuenow="25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/06.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Wilson Pipes <span>(213+ Online)</span></h6>
                                                                </a></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h3>Austealia</h3>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-light-warning">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 60%" aria-valuenow="25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-5 col-sm-6 box-col-4">
                            <div class="card sale-card overflow-hidden">
                                <div class="card-header card-no-border pb-0">
                                    <div class="header-top">
                                        <div>
                                            <h3>$1500.89K</h3><span>Sales last 5 Months</span>
                                        </div>
                                        <div class="dropdown icon-dropdown">
                                            <button class="btn" id="userdropdown2" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa-solid fa-ellipsis"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="userdropdown2"><a class="dropdown-item"
                                                    href="#">Weekly</a><a class="dropdown-item"
                                                    href="#">Monthly</a><a class="dropdown-item"
                                                    href="#">Yearly</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="current-sale-container order-container">
                                        <div class="overview-wrapper" id="orderoverview"> </div>
                                        <div class="back-bar-container">
                                            <div id="order-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-7 col-sm-6 box-col-4">
                            <div class="card selling-product">
                                <div class="card-header card-no-border pb-0">
                                    <div class="header-top">
                                        <h3>Top Selling Products</h3>
                                        <div class="dropdown icon-dropdown">
                                            <button class="btn" id="userdropdown3" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa-solid fa-ellipsis"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="userdropdown3"><a class="dropdown-item"
                                                    href="#">Weekly</a><a class="dropdown-item"
                                                    href="#">Monthly</a><a class="dropdown-item"
                                                    href="#">Yearly</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0 bg-light-primary border-light-primary">
                                                <svg class="stroke-icon stroke-primary">
                                                    <use
                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/icon-sprite.svg#headphone">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1"><a href="product-page.html">
                                                    <h6>Headphones JBL JR 310 BT</h6>
                                                </a>
                                                <p>Art.23879088</p>
                                            </div>
                                            <div class="recent-text">
                                                <h5>$260.00</h5>
                                                <p>900 Sales</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0 bg-light-warning border-light-warning">
                                                <svg class="stroke-icon stroke-warning">
                                                    <use
                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/icon-sprite.svg#samsung-mobile">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1"><a href="product-page.html">
                                                    <h6>Samsung SM-G99B5</h6>
                                                </a>
                                                <p>Art.72636892</p>
                                            </div>
                                            <div class="recent-text">
                                                <h5>$340.00</h5>
                                                <p>20 Sales</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0 bg-light-danger border-light-danger">
                                                <svg class="stroke-icon stroke-danger">
                                                    <use
                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/icon-sprite.svg#tv">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1"><a href="product-page.html">
                                                    <h6>4K UHD TV Samsung</h6>
                                                </a>
                                                <p>Art.63987987</p>
                                            </div>
                                            <div class="recent-text">
                                                <h5>$750.00</h5>
                                                <p>300 Sales</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0 bg-light-primary border-light-primary">
                                                <svg class="stroke-icon stroke-primary">
                                                    <use
                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/icon-sprite.svg#laptop">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1"><a href="product-page.html">
                                                    <h6>16.5” Gaming Laptop 29...</h6>
                                                </a>
                                                <p>Art.73497990</p>
                                            </div>
                                            <div class="recent-text">
                                                <h5>$2370.00</h5>
                                                <p>300 Sales</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0 bg-light-warning border-light-warning">
                                                <svg class="stroke-icon stroke-warning">
                                                    <use
                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/icon-sprite.svg#filmcamera">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1"><a href="product-page.html">
                                                    <h6>Fujifilm x-s10 Kit 18-55mm</h6>
                                                </a>
                                                <p>Art.37489799</p>
                                            </div>
                                            <div class="recent-text">
                                                <h5>$2370.00</h5>
                                                <p>300 Sales</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0 bg-light-danger border-light-danger">
                                                <svg class="stroke-icon stroke-danger">
                                                    <use
                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/icon-sprite.svg#smartphone">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1"><a href="product-page.html">
                                                    <h6>Apple iphone 11 PRO MAX</h6>
                                                </a>
                                                <p>Art.27389799</p>
                                            </div>
                                            <div class="recent-text">
                                                <h5>$2370.00</h5>
                                                <p>300 Sales</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0 bg-light-primary border-light-primary">
                                                <svg class="stroke-icon stroke-primary">
                                                    <use
                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/icon-sprite.svg#bulb">
                                                    </use>
                                                </svg>
                                            </div>
                                            <div class="flex-grow-1"><a href="product-page.html">
                                                    <h6>Phillip Lightbulb</h6>
                                                </a>
                                                <p>Art.74383789</p>
                                            </div>
                                            <div class="recent-text">
                                                <h5>$2370.00</h5>
                                                <p>300 Sales</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-5 box-col-4">
                            <div class="row">
                                <div class="col-sm-6 col-md-12">
                                    <div class="card value-chart">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="sales-chart" id="sales-chart"></div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="valuechart-detail">
                                                        <div class="text-center">
                                                            <div class="badge badge-primary">80%</div>
                                                            <h2>$3,76,793</h2>
                                                            <p>Our Sale Value</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="card value-chart">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="visitor-chart" id="visitor-chart"></div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="valuechart-detail">
                                                        <div class="text-center">
                                                            <div class="badge badge-secondary">60%</div>
                                                            <h2>$4,26,876 </h2>
                                                            <p>Today Stock Value </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-7 order-xl-1 order-xxl-0 box-col-12">
                            <div class="card best-sell">
                                <div class="card-header card-no-border pb-0">
                                    <h3>Best Seller</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="table-responsive theme-scrollbar">
                                        <table class="table display table-bordernone mt-0" id="best-sell"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Customer</th>
                                                    <th>Date</th>
                                                    <th>Product</th>
                                                    <th>Country</th>
                                                    <th>Total</th>
                                                    <th class="text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/07.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Evans Mayo</h6>
                                                                </a>
                                                                <p>2019</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> 05 Aug</td>
                                                    <td> Cap</td>
                                                    <td><img class="img-fluid"
                                                            src="{{ asset('dash/images/dashboard-2/flag/1.png') }}"
                                                            alt="" /></td>
                                                    <td>$5,08,653</td>
                                                    <td class="text-end">
                                                        <div
                                                            class="btn bg-light-success border-light-success text-success">
                                                            Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/08.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Smith Lovell</h6>
                                                                </a>
                                                                <p>2020</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> 21 March</td>
                                                    <td> Branded Shoes</td>
                                                    <td><img class="img-fluid"
                                                            src="{{ asset('dash/images/dashboard-2/flag/2.png') }}"
                                                            alt="" /></td>
                                                    <td>$37,2870</td>
                                                    <td class="text-end">
                                                        <div
                                                            class="btn bg-light-success border-light-success text-success">
                                                            Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/09.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Jones Brooks</h6>
                                                                </a>
                                                                <p>2021</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> 09 March</td>
                                                    <td> Headphone</td>
                                                    <td><img class="img-fluid"
                                                            src="{{ asset('dash/images/dashboard-2/flag/3.png') }}"
                                                            alt="" /></td>
                                                    <td>$3,12,233</td>
                                                    <td class="text-end">
                                                        <div
                                                            class="btn bg-light-warning border-light-warning text-warning">
                                                            Pending</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/10.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Brown Acum</h6>
                                                                </a>
                                                                <p>2021</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> 15 Aug</td>
                                                    <td> Cell Phone</td>
                                                    <td><img class="img-fluid"
                                                            src="{{ asset('dash/images/dashboard-2/flag/4.png') }}"
                                                            alt="" /></td>
                                                    <td>$7,48,123</td>
                                                    <td class="text-end">
                                                        <div
                                                            class="btn bg-light-danger border-light-danger text-danger">
                                                            Canceled</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/11.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Evans Mayo</h6>
                                                                </a>
                                                                <p>2024</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05 Feb</td>
                                                    <td>Earings</td>
                                                    <td><img class="img-fluid"
                                                            src="{{ asset('dash/images/dashboard-2/flag/5.png') }}"
                                                            alt="" /></td>
                                                    <td>$45,8,653</td>
                                                    <td class="text-end">
                                                        <div
                                                            class="btn bg-light-success border-light-success text-success">
                                                            Completed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/12.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Wilson Pipes</h6>
                                                                </a>
                                                                <p>2024</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> 12 Jan</td>
                                                    <td> Iphone 11</td>
                                                    <td><img class="img-fluid"
                                                            src="{{ asset('dash/images/dashboard-2/flag/1.png') }}"
                                                            alt="" /></td>
                                                    <td>$5,08,653</td>
                                                    <td class="text-end">
                                                        <div
                                                            class="btn bg-light-success border-light-success text-success">
                                                            Completed</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-4 col-md-12 box-col-12">
                            <div class="card radial-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 radial-chart">
                                            <div class="salesStatsRadialChart" id="salesStatsRadialChart"></div>
                                            <div class="content-label">
                                                <p class="mb-0 font-primary">As From </p>
                                                <h4>25 March</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 radial-text">
                                            <div class="radial-content">
                                                <div class="text-center">
                                                    <h4>Total Goal</h4>
                                                    <h3>$92,000.30</h3>
                                                    <hr />
                                                    <h5 class="progress-widget">Goal Archive :
                                                        <span>$81,000.000</span>
                                                    </h5>
                                                    <div class="progress sm-progress-bar progress-animate">
                                                        <div class="progress-gradient-primary" role="progressbar"
                                                            style="width: 65%" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <h5 class="progress-widget">Duration: <span>9 Month</span></h5>
                                                    <div class="progress sm-progress-bar progress-animate">
                                                        <div class="progress-gradient-primary" role="progressbar"
                                                            style="width: 65%" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div><a class="btn btn-pill btn-primary"
                                                        href="general-widget.html" download="">Download
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="items-slider">
                                        <div class="swiper mySwiper1">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="slider-box bg-light-primary">
                                                        <div class="header-top">
                                                            <div class="badge badge-primary rated-product-badge">Hot
                                                            </div><img class="img-fluid"
                                                                src="{{ asset('dash/images/dashboard-2/1.png') }}"
                                                                alt="" />
                                                            <div class="i fa-regular fa-heart"></div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-content text-center">
                                                        <h4 class="text-primary">Special Offer</h4>
                                                        <p class="mb-0">Smart Design Watch Multi Color</p>
                                                        <h6>$26.00<span>&nbsp;$30.00</span></h6>
                                                        <div class="input-group"> <span
                                                                class="input-group-text decrement-touchspin">
                                                                <svg class="svg-color">
                                                                    <use
                                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#minus">
                                                                    </use>
                                                                </svg></span>
                                                            <input
                                                                class="form-control bg-light-primary input-touchspin"
                                                                type="text" value="1" /><span
                                                                class="input-group-text increment-touchspin">
                                                                <svg class="svg-color">
                                                                    <use
                                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#plus">
                                                                    </use>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="slider-box bg-light-secondary">
                                                        <div class="header-top">
                                                            <div class="badge badge-secondary rated-product-badge">Hot
                                                            </div><img class="img-fluid"
                                                                src="{{ asset('dash/images/dashboard-2/5.png') }}"
                                                                alt="" />
                                                            <div class="i fa-regular fa-heart"></div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-content text-center">
                                                        <h4 class="text-secondary">Weekend Sale</h4>
                                                        <p class="mb-0">HeadPhone 3rd Generation</p>
                                                        <h6>$36.00<span>&nbsp;$70.00</span></h6>
                                                        <div class="input-group"> <span
                                                                class="input-group-text decrement-touchspin">
                                                                <svg class="svg-color">
                                                                    <use
                                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#minus">
                                                                    </use>
                                                                </svg></span>
                                                            <input
                                                                class="form-control bg-light-secondary input-touchspin"
                                                                type="text" value="1" /><span
                                                                class="input-group-text increment-touchspin">
                                                                <svg class="svg-color">
                                                                    <use
                                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#plus">
                                                                    </use>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="items-slider">
                                        <div class="swiper mySwiper2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="slider-box bg-light-secondary">
                                                        <div class="header-top">
                                                            <div class="badge badge-secondary rated-product-badge">Hot
                                                            </div><img class="img-fluid"
                                                                src="{{ asset('dash/images/dashboard-2/2.png') }}"
                                                                alt="" />
                                                            <div class="i fa-regular fa-heart"></div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-content text-center">
                                                        <h4 class="text-secondary">Weekend Sale</h4>
                                                        <p class="mb-0">AirPods 3rd Generation Silicone Skin</p>
                                                        <h6>$16.00<span>&nbsp;$30.00</span></h6>
                                                        <div class="input-group"> <span
                                                                class="input-group-text decrement-touchspin">
                                                                <svg class="svg-color">
                                                                    <use
                                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#minus">
                                                                    </use>
                                                                </svg></span>
                                                            <input
                                                                class="form-control bg-light-secondary input-touchspin"
                                                                type="text" value="1" /><span
                                                                class="input-group-text increment-touchspin">
                                                                <svg class="svg-color">
                                                                    <use
                                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#plus">
                                                                    </use>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="slider-box bg-light-primary">
                                                        <div class="header-top">
                                                            <div class="badge badge-primary rated-product-badge">Hot
                                                            </div><img class="img-fluid"
                                                                src="{{ asset('dash/images/dashboard-2/6.png') }}"
                                                                alt="" />
                                                            <div class="i fa-regular fa-heart"></div>
                                                        </div>
                                                    </div>
                                                    <div class="slider-content text-center">
                                                        <h4 class="text-primary">Special Offer</h4>
                                                        <p class="mb-0">Smart Design Phone Multi Color</p>
                                                        <h6>$86.00<span>&nbsp;$60.00</span></h6>
                                                        <div class="input-group"> <span
                                                                class="input-group-text decrement-touchspin">
                                                                <svg class="svg-color">
                                                                    <use
                                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#minus">
                                                                    </use>
                                                                </svg></span>
                                                            <input
                                                                class="form-control bg-light-primary input-touchspin"
                                                                type="text" value="1" /><span
                                                                class="input-group-text increment-touchspin">
                                                                <svg class="svg-color">
                                                                    <use
                                                                        href="https://admin.pixelstrap.net/admiro/dash/svg/iconly-sprite.svg#plus">
                                                                    </use>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-5 col-sm-6 box-col-6">
                            <div class="card">
                                <div class="card-header card-no-border pb-0">
                                    <div class="header-top">
                                        <h3>Activity Timeline</h3>
                                        <div class="dropdown icon-dropdown">
                                            <button class="btn" id="userdropdown5" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa-solid fa-ellipsis"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="userdropdown5"><a class="dropdown-item"
                                                    href="#">Weekly</a><a class="dropdown-item"
                                                    href="#">Monthly</a><a class="dropdown-item"
                                                    href="#">Yearly</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body timeline-card">
                                    <div class="activity-timeline">
                                        <div class="d-flex align-items-start">
                                            <div class="activity-line"></div>
                                            <div class="activity-dot-primary"></div>
                                            <div class="flex-grow-1">
                                                <p class="mt-0 todo-font"><span
                                                        class="font-primary">30-06-2024</span>&nbsp;Today</p><span
                                                    class="f-w-700">Updated Product</span>
                                                <p class="mb-0 activity-text">Quisque a consequat ante sit amet magna
                                                    at volutapt.</p>
                                            </div><i class="fa-solid fa-circle circle-dot-primary pull-right"></i>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <div class="activity-dot-secondary"></div>
                                            <div class="flex-grow-1">
                                                <p class="mt-0 todo-font"><span
                                                        class="font-secondary">30-06-2024</span>&nbsp;Today</p><span
                                                    class="f-w-700">Jihan Doe Just like your product</span>
                                                <p class="mb-0 activity-text">Vestibulum nec mi suscipit, dapibus
                                                    purus ane.</p>
                                            </div><i class="fa-solid fa-circle circle-dot-secondary pull-right"></i>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <div class="activity-dot-primary"></div>
                                            <div class="flex-grow-1">
                                                <p class="mt-0 todo-font"><span
                                                        class="font-primary">25-06-2024</span>&nbsp;Today<span
                                                        class="badge badge-primary ms-2">New</span></p><span
                                                    class="f-w-700">James just like your product</span>
                                                <p class="mb-0 activity-text">Vestibulum nec mi suscipit, dapibus
                                                    purus ane.</p>
                                                <ul class="img-wrapper">
                                                    <li><img class="img-fluid"
                                                            src="{{ asset('dash/images/dashboard-2/timeline/5.png') }}"
                                                            alt="" /></li>
                                                    <li><img class="img-fluid"
                                                            src="{{ asset('dash/images/dashboard-2/timeline/6.png') }}"
                                                            alt="" /></li>
                                                </ul>
                                            </div><i class="fa-solid fa-circle circle-dot-primary pull-right"></i>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <div class="activity-dot-secondary"></div>
                                            <div class="flex-grow-1">
                                                <p class="mt-0 todo-font"><span class="font-secondary">25-06-2024
                                                    </span>&nbsp; Tomorrow</p><span class="f-w-700">Today Total
                                                    Revenue</span>
                                                <p class="mb-0 activity-text">Quisque a consequat ante sit amet magna
                                                    at volutapt.</p>
                                            </div><i class="fa-solid fa-circle circle-dot-secondary pull-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-5 order-xl-2 order-xxl-0 col-sm-6 box-col-6">
                            <div class="card target-card overflow-hidden">
                                <div class="card-header card-no-border">
                                    <ul>
                                        <li class="bg-light-primary text-center">
                                            <h3>Our Target</h3>
                                            <p class="mb-0">Completed</p>
                                            <h6 class="font-primary">$638.930</h6>
                                        </li>
                                        <li class="bg-primary text-center">
                                            <h3>We Archieve</h3>
                                            <p class="mb-0">Completed 2 Hours</p>
                                            <h6>$638.930</h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body p-0">
                                    <div class="main-img"><img class="img-fluid img-banner"
                                            src="{{ asset('dash/images/dashboard-2/4.png') }}" alt="" />
                                        <ul class="animate-img">
                                            <li class="right-1"> <img class="img-fluid"
                                                    src="{{ asset('dash/images/dashboard-2/animate/1.png') }}"
                                                    alt="" /></li>
                                            <li class="right-2"> <img class="img-fluid"
                                                    src="{{ asset('dash/images/dashboard-2/animate/2.png') }}"
                                                    alt="" /></li>
                                            <li class="right-3"> <img class="img-fluid"
                                                    src="{{ asset('dash/images/dashboard-2/animate/3.png') }}"
                                                    alt="" /></li>
                                            <li class="right-4"> <img class="img-fluid"
                                                    src="{{ asset('dash/images/dashboard-2/animate/4.png') }}"
                                                    alt="" /></li>
                                            <li class="right-5"> <img class="img-fluid"
                                                    src="{{ asset('dash/images/dashboard-2/animate/5.png') }}"
                                                    alt="" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-7 box-col-12">
                            <div class="card">
                                <div class="card-header card-no-border pb-0">
                                    <h3>Recent Orders</h3>
                                </div>
                                <div class="card-body pt-0 recent-order">
                                    <div class="table-responsive theme-scrollbar">
                                        <table class="table display table-bordernone mt-0" id="recent-order"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Customer</th>
                                                    <th>Product</th>
                                                    <th>amount</th>
                                                    <th>vendor</th>
                                                    <th>status</th>
                                                    <th class="text-center">rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/13.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Alice Goodwin</h6>
                                                                </a>
                                                                <p>2019</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="f-w-600">Nike Tshirt</td>
                                                    <td class="font-primary f-w-600">$49.00</td>
                                                    <td class="f-w-600">Palestine</td>
                                                    <td>
                                                        <div class="status-showcase">
                                                            <p>65%</p>
                                                            <div class="progress bg-light-success">
                                                                <div class="progress-bar bg-success"
                                                                    role="progressbar" style="width: 65%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h6>3.6<span>(45 votes)</span></h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/14.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Herry Venter</h6>
                                                                </a>
                                                                <p>2019</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="f-w-600">Adidas Hat</td>
                                                    <td class="font-primary f-w-600">$30.00</td>
                                                    <td class="f-w-600">Serbia</td>
                                                    <td>
                                                        <div class="status-showcase">
                                                            <p>45%</p>
                                                            <div class="progress bg-light-warning">
                                                                <div class="progress-bar bg-warning"
                                                                    role="progressbar" style="width: 45%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h6>2.7<span>(35 votes)</span></h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/15.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Loain Deo</h6>
                                                                </a>
                                                                <p>2019</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="f-w-600">Wu Sneakers</td>
                                                    <td class="font-primary f-w-600">$54.00</td>
                                                    <td class="f-w-600">Islamic</td>
                                                    <td>
                                                        <div class="status-showcase">
                                                            <p>85%</p>
                                                            <div class="progress bg-light-danger">
                                                                <div class="progress-bar bg-danger"
                                                                    role="progressbar" style="width: 85%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h6>9.2<span>(62 votes)</span></h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/16.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Horen Hors</h6>
                                                                </a>
                                                                <p>2019</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="f-w-600">Puma Shorts</td>
                                                    <td class="font-primary f-w-600">$73.00</td>
                                                    <td class="f-w-600">Greece</td>
                                                    <td>
                                                        <div class="status-showcase">
                                                            <p>75%</p>
                                                            <div class="progress bg-light-success">
                                                                <div class="progress-bar bg-success"
                                                                    role="progressbar" style="width: 75%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h6>6.6<span>(83 votes)</span></h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/17.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Fenter Jessy</h6>
                                                                </a>
                                                                <p>2019</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="f-w-600">Nike Glove</td>
                                                    <td class="font-primary f-w-600">$98.00</td>
                                                    <td class="f-w-600">Central</td>
                                                    <td>
                                                        <div class="status-showcase">
                                                            <p>65%</p>
                                                            <div class="progress bg-light-warning">
                                                                <div class="progress-bar bg-warning"
                                                                    role="progressbar" style="width: 75%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h6>5.0 <span>(12 votes)</span></h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="flex-shrink-0 comman-round"><img
                                                                    src="{{ asset('dash/images/dashboard-2/user/18.png') }}"
                                                                    alt="" /></div>
                                                            <div class="flex-grow-1"><a href="product-page.html">
                                                                    <h6>Alice Venter</h6>
                                                                </a>
                                                                <p>2019</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="f-w-600">Nike Hat</td>
                                                    <td class="font-primary f-w-600">$26.00</td>
                                                    <td class="f-w-600">Palestine</td>
                                                    <td>
                                                        <div class="status-showcase">
                                                            <p>75%</p>
                                                            <div class="progress bg-light-warning">
                                                                <div class="progress-bar bg-warning"
                                                                    role="progressbar" style="width: 75%"
                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h6>3.0 <span>(86 votes)</span></h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2024 © Admiro theme by pixelstrap.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="float-end mb-0">Hand crafted &amp; made with
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
