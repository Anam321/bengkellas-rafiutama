<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $judul ?></title>

    <link rel="icon" href="<?= base_url(); ?>assets/frontend/img/upload/logo/<?= $logo ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/font-awesome-ie7.css">


    <style>
        .cs-page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .cs-page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .cs-page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .cs-page-loading.active>.cs-page-loading-inner {
            opacity: 1;
        }

        .cs-page-loading-inner>span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #787a80;
        }

        .cs-page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            background-color: #cfcfd1;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
    </style>

    <!-- Demo switcher off-canvas toggle styles -->
    <style>
        .cs-demo-switcher {
            position: fixed;
            display: block;
            top: 50%;
            right: 1rem;
            z-index: 100;
        }

        .cs-demo-switcher-inner {
            width: 3rem;
            height: 3rem;
            border: 1px solid #e5e8ed;
            border-radius: 50%;
            background-color: #fff;
            color: #1e212c;
            font-size: 1.25rem;
            line-height: 3rem;
            text-align: center;
            text-decoration: none;
            box-shadow: 0px 10px 15px 0px rgba(30, 33, 44, 0.10);
        }
    </style>

</head>

<body>

    <a href="https://api.whatsapp.com/send?phone=<?= $telpon2 ?>&text=Halo%20rafiutama.com%20Mohon%20informasi%20produk%20produk%20dan%20pemesanan" target="_blank" class="cs-demo-switcher">
        <div class="cs-demo-switcher-inner bg-success" data-toggle="tooltip" data-placement="left" title="Hubungi ahh..">
            <img src="<?= base_url('assets/frontend/fonts/Whatsapp_icon-icons.com_66931.png'); ?>" alt="">
        </div>
    </a>

    <!--::header part start::-->
    <header class="main_menu home_menu" style="border-bottom: 2px solid #ee390f;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="."> <img style="width: 190px; height: 60px;" src="<?= base_url(); ?>assets/frontend/img/upload/logo/<?= $logo ?>" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('home'); ?>">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('about'); ?>">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('produk'); ?>">PRODUCT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('blog'); ?>">BLOG</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('contact'); ?>">CONTACT</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="https://api.whatsapp.com/send?phone=<?= $telpon2 ?>&text=Halo%20rafiutama.com%20Mohon%20informasi%20produk%20produk%20dan%20pemesanan">Hubungi Kami</a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </header>