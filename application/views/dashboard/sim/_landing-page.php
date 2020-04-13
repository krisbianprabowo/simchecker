<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edumark</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link href="<?php echo asset_url()?>/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo asset_url()?>/demo/default/base/slicknav.css">
    <link rel="stylesheet" href="<?php echo asset_url()?>/demo/default/base/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body style="background: #ffffff;">
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-sm-2 col-sm-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img style="max-width: 55px; max-height: 55px" src="<?php echo asset_url()?>/media/logos/logouadmin.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-7 col-sm-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="<?php echo site_url('SimCheck')?>"  style="color:#384AD7">Home</a></li>
                                        <li><a href="#"  style="color:#384AD7">Similarity Check<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo site_url('SimCheck/simcheck_title')?>"  style="color:#384AD7">&#8226; 
                                                Undergraduate Thesis</a></li>
                                                <li><a href="<?php echo site_url('SimCheck/simcheck_theory')?>"  style="color:#384AD7">&#8226; Theory (Chapter 2)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" style="color:#384AD7">Research <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo site_url('SimCheck/list_penelitian')?>" style="color:#384AD7">&#8226; Research List</a></li>
                                                <li><a href="<?php echo site_url('SimCheck/trend')?>" style="color:#384AD7">&#8226; Trend</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo site_url('SimCheck/tawaran_penelitian')?>" style="color:#384AD7">Research Offer</a></li>
                                        <li>
                                            <div class="log_chat_area d-flex">
                                                <div class="live_chat_btn livechats">
                                                    <a class="boxed_btn_orange" href="<?php echo site_url('SimCheck/login')?>">
                                                        <i class="fa fa-phone"></i>
                                                        <span style="font-family: Poppins, sans-serif;">LOGIN</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex">
                                <div class="live_chat_btn">
                                    <a class="boxed_btn_orange" href="<?php echo site_url('SimCheck/login')?>">
                                        <i class="fa fa-phone"></i>
                                        <span style="font-family: Poppins, sans-serif;">LOGIN</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container ">
                <div class="row align-items-center justify-content-center ">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3 class="text-focus" style="color:#384AD7; font-family: Comfortaa, sans-serif !important; padding-top:2em;">English Literature <br>
                                Undergraduate<br>
                                Program ~</h3>
                            <a href="<?php echo site_url('SimCheck/login')?>" style="font-family: Poppins, sans-serif;" class="boxed_btn">GET STARTED</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="<?php echo asset_url()?>/media/logos/education.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <!-- form itself end -->
    <script src="<?php echo asset_url()?>/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
    <script src="<?php echo asset_url()?>/vendors/general/jquery/dist/jquery.slicknav.min.js" type="text/javascript"></script>
    <script src="<?php echo asset_url()?>/vendors/general/jquery/dist/main.js" type="text/javascript"></script>
</body>

</html>