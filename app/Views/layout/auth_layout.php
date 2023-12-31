<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>HelpDesk Kabupaten Pesawaran</title>
    <!-- File Framework -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/owl.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/main.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo1.png" type="image/x-icon">

</head>

<body onload="sweet()">
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->

    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section about-style bg_img bottom_center" data-background="<?php base_url() ?>/assets/images/banner/page-header-2.jpg">
        <div class="bottom-shape d-none d-md-block">
            <img src="<?php base_url() ?>/assets/images/banner/banner-shape.png" alt="banner">
        </div>
    </div>
    <!--============= Hero Section Ends Here =============-->

    <?= $this->renderSection('content') ?>

    <!-- JS -->

    <script src="<?= base_url() ?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugins.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/wow.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/waypoints.js"></script>
    <script src="<?= base_url() ?>/assets/js/nice-select.js"></script>
    <script src="<?= base_url() ?>/assets/js/owl.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/magnific-popup.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>





</body>

</html>