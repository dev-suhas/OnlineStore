<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Ecolife - Multipurpose eCommerce HTML Template</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.png" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&display=swap" rel="stylesheet" />
        <!-- All CSS Flies   -->
        <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
        <link rel="stylesheet" href="<?php echo base_url('assets/website/css/plugins/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/website/css/plugins/font-awesome.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/website/css/plugins/ionicons.min.css'); ?>" />
        <!--===== Plugins CSS (All Plugins Files) =====-->
        <link rel="stylesheet" href="<?php echo base_url('assets/website/css/plugins/jquery-ui.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/website/css/plugins/meanmenu.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/website/css/plugins/nice-select.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/website/css/plugins/owl-carousel.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/website/css/plugins/slick.css'); ?>" />
        <!--===== Main Css Files =====-->
        <link rel="stylesheet" href="<?php echo base_url('assets/website/css/style.css'); ?>" />
        <!-- ===== Responsive Css Files ===== -->
        <link rel="stylesheet" href="<?php echo base_url('assets/website/css/responsive.css'); ?>" />

        <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

        <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="stylesheet" href="assets/css/responsive.min.css"> -->
    </head>

    <body>
        <!-- main layout start from here -->
        <!--====== PRELOADER PART START ======-->

        <!-- <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div> -->

        <!--====== PRELOADER PART ENDS ======-->
        <div id="main">
            <!-- Header Start -->
            <header class="main-header">
                <!-- Header Top Start -->
                <div class="header-top-nav">
                    <div class="container-fluid">
                        <div class="row">
                            <!--Left Start-->
                            <div class="col-lg-4 col-md-4">
                                <div class="left-text">
                                    <p>Welcome you to Our store!</p>
                                </div>
                            </div>
                            <!--Left End-->
                            <!--Right Start-->
                            <div class="col-lg-8 col-md-8 text-right">
                                <div class="header-right-nav">
                                   
                                </div>
                            </div>
                            <!--Right End-->
                        </div>
                    </div>
                </div>
                <!-- Header Top End -->
                <!-- Header Buttom Start -->
                <div class="header-navigation sticky-nav">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Logo Start -->
                            <div class="col-md-2 col-sm-2">
                                <div class="logo">
                                    <a href="<?php echo base_url(); ?>"><img src="assets/images/logo/logo.jpg" alt="logo.jpg" /></a>
                                </div>
                            </div>
                            <!-- Logo End -->
                            <!-- Navigation Start -->
                            <div class="col-md-10 col-sm-10">
                                <!--Main Navigation Start -->
                                <div class="main-navigation d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url(); ?>">Home</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('welcome/shop'); ?>">Shop</a>
                                        </li>
                                        <li><a href="<?php echo base_url('welcome/about'); ?>">About</a></li>
                                        <li><a href="<?php echo base_url('welcome/contact'); ?>">Contact Us</a></li>
                                        <li><a href="<?php echo base_url('welcome/login'); ?>">Register & Login</a></li>
                                    </ul>
                                </div>
                                <!--Main Navigation End -->
                                <!--Header Bottom Account Start -->
                                <div class="header_account_area">
                                    <!--Seach Area Start -->
                                    <div class="header_account_list search_list">
                                        <a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a>
                                        <div class="dropdown_search">
                                            <form action="#">
                                                <input placeholder="Search entire store here ..." type="text" />
                                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--Seach Area End -->
                                    <!--Contact info Start -->
                                    <div class="contact-link">
                                        <div class="phone">
                                            <p>Call us:</p>
                                            <a href="tel:(+800)345678">(+800)345678</a>
                                        </div>
                                    </div>
                                    <!--Contact info End -->
                                </div>
                            </div>
                        </div>
                        <!-- mobile menu -->
                        <div class="mobile-menu-area">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li>
                                            <a href="<?php echo base_url(); ?>">Home</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('welcome/shop'); ?>">Shop</a>
                                        </li>
                                        <li><a href="<?php echo base_url('welcome/about'); ?>">About</a></li>
                                        <li><a href="<?php echo base_url('welcome/contact'); ?>">Contact Us</a></li>
                                        <li><a href="<?php echo base_url('welcome/login'); ?>">Register & Login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- mobile menu end-->
                    </div>
                </div>
                <!--Header Bottom Account End -->
            </header>
            <!-- Header End -->