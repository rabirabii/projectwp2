<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Kelompok 1">
    <meta name="description" content="Project WP2>
    <meta name=" keywords" content="project, webpublisher, frontend, html, css, javascript, jqeury,php">
    <title>Sansando</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/style8.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/prism.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/reset.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/animation.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/media-query.css" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />



    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('') ?>assets/icons/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('') ?>assets/icons/favicon_72.png">
    <link rel="apple-touch-icon-precomposed" sizes="96x96" href="<?php echo base_url('') ?>assets/icons/favicon_72.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="<?php echo base_url('') ?>assets/icons/favicon_144.png">
    <link rel="apple-touch-icon-precomposed" sizes="192x192"
        href="<?php echo base_url('') ?>assets/icons/favicon_192.png">
</head>

<body>
    <nav id="nav">
        <div class="logo">
            <img src="<?php echo base_url('') ?>assets/img/logo.png" alt="logo">
        </div>
        <div class="nav">
            <ul>
                <li><a href="<?php echo base_url() . 'home' ?>">Home</a></li>
                <li class="login"><a href="<?php echo base_url('index.php/Autentifikasi') ?> ">Login</a></li>
            </ul>
        </div>
        <div class="mNav">
            <h2 class="ir_so">. . .</h2>
            <div class="ham">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu">
                <div class="left">
                    <ul>
                        <li><a href="<?php echo base_url('home') ?>">Home</a></li>
                        <li class="login"><a href="<?php echo base_url('index.php/Autentifikasi') ?> ">Login</a></li>
                        <li class="mob"> <a href="<?php echo base_url('') ?>"> <i class="fa fa-instagram"></i></a></li>
                        <li class="mob"> <a href="<?php echo base_url('') ?>"> <i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
                <div class="right">
                    <ul class="top">
                        <li>1234 5678 90</li>
                        <li>sasando@email.com</li>
                    </ul>
                    <ul class="bot">
                        <li><a href="<?php echo base_url('') ?>"> <i class="fa fa-instagram"></i></a></li>
                        <li><a href="<?php echo base_url('') ?>"> <i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="contents">
        <section id="section1">
            <svg width="833" height="151" viewBox="0 0 833 151" fill="#fd96b3" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 0V151C271.543 151 510.96 86.4397 739.709 24.7559C770.715 16.3951 801.524 8.08717 832.191 0H0Z"
                    fill="#fd96b3"></path>
            </svg>
            <div class="container">
                <div class="sec1">
                    <ul class="title">
                        <li class="rainbow yellow">404</li>
                        <li class="rainbow pink">404</li>
                        <li class="rainbow mint">404</li>
                        <li class="rainbow white">404</li>
                    </ul>
                    <ul class="title-mob">
                        <li class="rainbow yellow">4<br>04</li>
                        <li class="rainbow pink">4<br>04</li>
                        <li class="rainbow mint">4<br>04</li>
                        <li class="rainbow white">4<br>04</li>
                    </ul>
                    <p class="desc"> Oops We cant find it &nbsp;&nbsp;/ &nbsp;&nbsp; Please back to Home!</p>
                    <div class="object">
                        <img src="<?php echo base_url('assets/img/object-big-10.svg'); ?>" alt="" class="ob b-1">
                        <img src="<?php echo base_url(); ?>assets/img/object-big-7.svg" alt="" class="ob b-2">
                        <img src="<?php echo base_url(); ?>assets/img/object-small-9.svg" alt="" class="dot s-1">
                        <img src="<?php echo base_url(); ?>assets/img/object-small-10.svg" alt="" class="dot s-2">
                        <img src="<?php echo base_url(); ?>assets/img/object-small-11.svg" alt="" class="dot s-3">
                    </div>
                </div>
            </div>
        </section>

        <script src="<?php echo base_url('assets/js/jquery.min_1.12.4.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prims.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
</body>

</html>