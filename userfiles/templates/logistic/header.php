<!DOCTYPE html>
<html lang="en">

<head>
    <base href="https://anhtuanlogistics.com/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="alternate" href="https://anhtuanlogistics.com/" hreflang="vi-vn">
    <meta name="author" content="Anh Tuan Logistics">
    <meta name="copyright" content="Anh Tuan Logistics">
    <meta name="robots" content="index,follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="1800">
    <title>Anh Tuấn Logistics</title>
    <meta name="description" content="Uy tin - An toàn - Chất lượng">
    <link rel="canonical" href="https://anhtuanlogistics.com/">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php print template_url(); ?>assets/img/favicon.png" type="image/x-icon" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/bootstrap.min.css" />
    <!-- fontawesome css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/flaticon.css" />
    <!-- fontawesome css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/fontawesome/css/all.min.css" />
    <!-- owl carousel css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/owl.carousel.min.css" />
    <!-- owl carousel theme css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/owl.theme.default.min.css" />
    <!-- slicknav css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/slicknav.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/animate.min.css" />
    <!-- main css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/responsive.css" />
    

    <style>
        .glot-sub-active {
            color: #1296ba !important;
        }

        .glot-sub-hovered {
            color: #1296ba !important;
        }

        .glot-sub-clzz {
            cursor: pointer;

            line-height: 1.2;
            font-size: 28px;
            color: #ffcc00;
            background: rgba(17, 17, 17, 0.7);
        }

        .glot-sub-clzz:hover {
            color: #1296ba !important;
        }

        .ej-trans-sub {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999999;
            cursor: move;
        }

        .ej-trans-sub>span {
            color: #3cf9ed;
            font-size: 18px;
            text-align: center;
            padding: 0 16px;
            line-height: 1.5;
            background: rgba(32, 26, 25, 0.8);
            padding: 0 8px;

            line-height: 1.2;
            font-size: 16px;
            color: #0cb1c7;
            background: rgba(67, 65, 65, 0.7);
        }

        .ej-main-sub {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999999;
            cursor: move;
            padding: 0 8px;
        }

        .ej-main-sub>span {
            color: white;
            font-size: 20px;
            line-height: 1.5;
            text-align: center;
            background: rgba(32, 26, 25, 0.8);
            padding: 2px 8px;

            line-height: 1.2;
            font-size: 28px;
            color: #ffcc00;
            background: rgba(17, 17, 17, 0.7);
        }

        .ej-main-sub .glot-sub-clzz {
            background: transparent !important;
        }

        .tran-subtitle>.view-icon-edit-sub {
            cursor: pointer;
            padding-left: 10px;
            top: 2px;
            position: relative;
        }

        .tran-subtitle>.view-icon-edit-sub>svg {
            width: 16px;
            height: 16px;
            pointer-events: none;
        }
    </style>
</head>
<!--   header area start   -->
<div class="header-area home-3">
    <?php if (is_live_edit()) : ?>
        <div style="padding: 20px;">

        </div>
    <?php endif ?>
    <div class="info-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-infos edit" rel="infor" field="infor">
                        <div class="email">
                            <div class="icon-wrapper"><span class="dollar-sign"></span></div>
                            <div>Tỷ giá: 3,830</div>
                        </div>
                        <div class="phone">
                            <div class="icon-wrapper">
                                <i class="flaticon-call"></i>
                            </div>
                            <div>+ 094 319 6162</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <ul class="social-links">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="support-nav-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="logo-wrapper">
                        <div class="logo-wrapper-inner">
                            <module type="logo" id="logo" rel="global" field="logo" template="default" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-6 position-static">
                    <div class="navbar-area">
                        <div class="row">
                            <div class="col-12 position-static">
                                <module type="menu" template="header" />
                                <div id="mobileMenuHome3">

                                </div>
                                <!-- <ul class="search-area">
                                    <li class="search-icon">
                                        <a href="#"><span class="flaticon-search"></span></a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   header area end   -->
<!--   search bar popup start   -->
<div class="search-popup">
    <form class="search-form" action="#">
        <div class="form-element">
            <input type="text" placeholder="Type your search keyword" />
        </div>
    </form>
    <div class="search-popup-overlay" id="searchOverlay"></div>
    <button class="search-close-btn" id="searchCloseBtn">
        <i class="fas fa-times"></i>
    </button>
</div>
<!--   search bar popup end   -->
<!--  hero area start  -->
<div>
    <div class="home-slider owl-carousel owl-theme image-header">
        <div class="item" style="position: relative;">
            <img class="slide-bg" src="<?php print template_url(); ?>assets/img/hero_bg.jpg" style="background-color: #bfcec9;" alt="home banner">
            <div class="overlay"></div>
            <div class="container">
                <div class="row" style="position:absolute;top:50%;transform: translateY(-50%);">
                    <div>
                        <div class="hero-txt" style="color: white">
                            <span class="wow fadeInDown edit" rel="header-content-text" field="header-content-text">Anh Tuấn logistics</span>
                            <h1 class="wow fadeInUp edit" rel="header-content-text1" field="header-content-text1" style="line-height: 1.5;">
                                Hãy làm thật tốt những gì <br>
                                bạn làm đến mức họ muốn quay lại <br>
                                trong tương lai cùng với bạn của họ
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="position: relative;">
            <img class="slide-bg" src="<?php print template_url(); ?>assets/img/blog-detail-img.jpg" style="background-color: #bfcec9;" alt="home banner">
            <div class="overlay"></div>
            <div class="container">
                <div class="row" style="position:absolute;top:50%;transform: translateY(-50%);">
                    <div>
                        <div class="hero-txt " style="color: white;">
                            <span class="wow fadeInDown edit" rel="header-content2" field="header-content2">Anh Tuấn logistics</span>
                            <h1 class="wow fadeInUp edit" rel="header-content21" field="header-content21" style="line-height: 1.5;">
                                Chuyên cung cấp dịch vụ <br>
                                vận chuyển Trung-Việt
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!--  hero area end  -->