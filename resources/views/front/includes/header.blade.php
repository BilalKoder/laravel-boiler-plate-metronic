<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Mubassir Ahmed">
    <!-- description -->
    <meta name="description" content="AAbove">
    <!-- keywords -->
    <meta name="keywords" content="AAbove">
    <!-- Page Title -->
    <title>AAbove</title>
    <!-- Favicon -->
    <link href="<?= asset('above/images/favicon.ico') ?>" rel="icon">
    <!-- Bundle -->
    <link href="<?= asset('above/vendorF/css/bundle.min.css') ?>" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="<?= asset('above/vendorF/css/LineIcons.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('above/vendorF/css/jquery.fancybox.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('above/vendorF/css/owl.carousel.min.css') ?>" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="<?= asset('above/css/tootik.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('above/css/line-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('above/css/jquery.pagepiling.css') ?>" rel="stylesheet">
    <link href="<?= asset('above/css/style.css') ?>" rel="stylesheet">
    @yield('styles')
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">
    <!-- START LOADER -->
    <div class="loader-bg">
        <div id="container">
            <svg viewBox="0 0 100 100">
                <defs>
                    <filter id="shadow">
                        <feDropShadow dx="0" dy="0" stdDeviation="0.5" flood-color="#dcc57c" />
                    </filter>
                </defs>
                <circle id="spinner"
                    style="fill:transparent;stroke:#dcc57c;stroke-width: 8px;stroke-linecap: round;filter:url(#shadow);"
                    cx="50" cy="50" r="45" />
            </svg>
        </div>
        <img src="<?= asset('above/images/logo.png') ?>" alt="logo">
    </div>
    <!-- END LOADER -->

    <!-- START HEADER -->
    <header>
        <!--Navigation-->
        <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
            <a href="#home" title="Logo" class="logo">
                <!--Logo Default-->
                <div class="mega-logo">
                    <img src="<?= asset('above/images/logo.png') ?>" alt="logo" class="ml-lg-3 m-0">
                </div>
            </a>
            <div class="navigation-toggle">
                <?php $sel = $_GET['ln'] ?? 'en'; ?>
                <a class="switch" href="/?ln=<?= $sel == 'en' ? 'fr' : 'en' ?>">
                    <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox"
                        <?= $sel != 'en' ? 'checked' : '' ?>>
                    <label></label>
                    <span class="on"><img src="<?= asset('above/images/en.png') ?>" alt=""></span>
                    <span class="off"><img src="<?= asset('above/images/fr.png') ?>" alt=""></span>
                </a>
            </div>
            <?php /*
                        <!--Side Menu Button-->
                        <div class="navigation-toggle">
                            <ul class="slider-social toggle-btn my-0">
                                <li>
                                    <a href="javascript:void(0);" class="sidemenu_btn" id="sidemenu_toggle">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </li>
                            </ul>
                        </div>*/
            ?>
        </nav>

        <!--Side Nav-->
        <div class="side-menu hidden">
            <span id="btn_sideNavClose">
                <i class="las la-times btn-close"></i>
            </span>
            <div class="inner-wrapper">
                <nav class="side-nav w-100">
                    <a href="#home" title="Logo" class="logo navbar-brand">
                        <img src="<?= asset('above/images/logo.png') ?>" alt="logo">
                    </a>
                    <ul class="navbar-nav text-capitalize">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#vision">Vision</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#mygoal">My Goal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#mygurentees">My Goals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#mypromisses">My Promisses</a>
                        </li>
                    </ul>
                    <div class="text-center sidebar_btn">
                        {{-- <a href="<?php //asset('above/download-resume/resume.pdf')
                        ?>" download class="btn btn-medium btn-rounded btn-yellow text-capitalize">Download Resume</a> --}}
                    </div>
                </nav>

                {{-- <div class="side-footer w-100">
                    <ul class="social-icons-simple">
                        <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                        <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                        <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a> </li>
                    </ul>
                </div> --}}
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
    </header>
    <!-- END HEADER -->
