<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Helpdesk Kabupaten Pesawaran</title>

    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/owl.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/main1.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo1.png" type="image/x-icon">
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-area">
                    <div class="logo">
                        <a href="<?= base_url() ?>">
                            <img src="<?php base_url()?>/assets/images/logo/logo_bannerw.png" alt="logo">
                        </a>
                    </div>
                    <div class="support">
                        <a href="<?= base_url() ?>">HelpDesk</a>
                    </div>
                </div>
                <ul class="menu">
                    <li>
                        <a href="#">Cek Status Tiket</a>
                    </li>
                    <li>
                        <a href="#">Artikel</a>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li class="d-md-none text-center">
                        <a href="#" class="m-0 header-button">Adukan Sekarang</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header-right">
                    <a href="#" class="header-button d-none d-md-inline-block">Adukan Sekarang</a>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    <?= $this->renderSection('content') ?>

    <!--============= Footer Section Starts Here =============-->
    <footer class="footer-section">
        <div class="dot-slider bg_img" data-background="<?= base_url() ?>/assets/css/img/footer-dots.png"></div>
        <div class="container">
            <div class="footer-bottom cl-white">
                <p>Copyright &copy; 2023 <a href="#0">Helpdesk</a> - Develop by <a href="#0">Syntax Scrumptious</a></p>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->

    <script src="<?= base_url() ?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugins.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/wow.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/waypoints.js"></script>
    <script src="<?= base_url() ?>/assets/js/nice-select.js"></script>
    <script src="<?= base_url() ?>/assets/js/owl.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/main.js"></script>
</body>

</html>