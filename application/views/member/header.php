<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sasando &mdash; Web Programming 2 Project </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="<?php echo base_url('fonts/icomoon/style.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets//css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>">


    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/stylee.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vip.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/coba.css'); ?>">

</head>

<body>

    <div class="site-wrap">
        <header class="site-navbar" role="banner">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                            <?= $judul; ?>
                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="<?php echo base_url('index.php/member'); ?>"
                                    class="btn btn-js-logo-clone">Sasando</a>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <div class="site-top-icons">
                                <ul>
                                    <li>
                                        <a href=" <?php echo base_url('index.php/member/myprofil'); ?>"><span> <img
                                                    width="50" class="img-profile rounded-circle"
                                                    src="<?= base_url('assets/img/profile/') . $user['image']; ?>"><?= $user['nama']; ?></span></a>

                                    </li>
                                    <li><a href="<?php echo base_url('index.php/member/logout'); ?>"><span
                                                class="icon icon-times-circle">Log Out</span></a></li>
                                    <li class="d-inline-block d-md-none ml-md-0"><a href="#"
                                            class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <nav class="site-navigation text-right text-md-center" role="navigation">
                <div class="container">
                    <ul class="site-menu js-clone-nav d-none d-md-block">
                        <li class="has-children active">
                            <a href="<?php echo base_url('index.php/member'); ?>">Home</a>
                        </li>
                        <li class="has-children">
                            <a href="<?php echo base_url('index.php/member/VIP'); ?>">VIP</a>
                        </li>
                        <li><a href="<?php echo base_url('index.php/member/album'); ?>">album</a></li>
                    </ul>
                </div>
            </nav>
        </header>