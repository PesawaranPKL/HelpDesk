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

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/main.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo1.png" type="image/x-icon">

</head>

<body data-spy="scroll" data-target="#faq-menu" data-offset="150">
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
                        <a href="index.html">
                            <img src="<?php base_url() ?>/assets/images/logo/logo-B4.png" alt="Logo Helpdesk">
                        </a>
                    </div>
                </div>
                <ul class="menu">
                    <li>
                        <a href="#">Beranda</a>
                    </li>
                    <li>
                        <a href="#">Profil</a>
                    </li>
                    <li>
                        <a href="#">Pengaduan</a>
                    </li>
                    <li>
                        <a href="#0">Dokumentasi</a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php base_url() ?>/artikel_user">Artikel</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="d-md-none text-center">
                        <a href="#0" class="m-0 header-button">Login</a>
                    </li>
                </ul>
                <div class="header-right">
                    <a href="#0" class="header-button d-none d-md-inline-block">Login</a>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->


    <!--============= Banner Section Starts Here =============-->
    <div class="hero-section bg_img" data-background="<?= base_url() ?>/assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="banner-content cl-white">
                <ul class="breadcrumb">
                    <li><a href="#0">Beranda</a></li>
                    <li><a href="#0">Dokumentasi</a></li>
                    <li>Artikel</li>
                </ul>
            </div>
        </div>
    </div>
    <!--============= Banner Section Ends Here =============-->


    <?= $this->renderSection('content') ?>


    <!--============= Have Questions Section Starts Here =============-->
    <div class="have-questions-section mb--70--145">
        <div class="container">
            <div class="have-question-wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="have-question-content">
                            <h2 class="title">Masih Punya Pertanyaan?</h2>
                            <p>Buat pengaduan spesifik tentang masalah yang kamu hadapi disini!</p>
                            <a href="#pengaduan" class="custom-button">Buat Pengaduan</a>
                        </div>
                    </div>
                    <div class="right-thumb d-none d-lg-block">
                        <img src="<?= base_url() ?>/assets/images/faq/have-questions.png" alt="faq">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= Have Questions Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="footer-section pt-70-145">
        <div class="dot-slider bg_img" data-background="assets/css/img/footer-dots.png"></div>
        <div class="container">
            <div class="footer-top cl-white padding-bottom padding-top">
                <div class="row mb--50 justify-content-between">
                    <div class="col-sm-8 col-lg-6">
                        <div class="footer-widget widget-about">
                            <div class="logo-area">
                                <div class="logo">
                                    <a href="#"><img src="<?= base_url() ?>/assets/images/logo/logo-B3.png" alt="logo"></a>
                                </div>
                            </div>
                            <p>Komplek Perkantoran Pemerintah Kabupaten Pesawaran Jl. Raya Kedondong, Way Layap Kec. Gedong Tataan Kabupaten Pesawaran, Provinsi Lampung Indonesia Kode Pos 35371 Tel – (0721) 8032018 Fax – (0721) 8032018</p>
                            <ul class="social-icons">
                                <li>
                                    <a href="https://www.instagram.com/diskominfotiksan_pesawaran/"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://kominfo.pesawarankab.go.id/view/home"><i class="bi bi-globe"></i></i></a>
                                </li>
                                <li>
                                    <a href="mailto:helpdeskpesawarankab@gmail.com"><i class="bi bi-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="https://maps.app.goo.gl/h3u9vKJqhgcELYr8A" class=""><i class="bi bi-geo-alt-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-8 col-md-4 col-lg-3 offset-lg-1">
                        <div class="footer-widget widget-link">
                            <h5 class="title">Menu</h5>
                            <ul>
                                <li>
                                    <a href="#0">Pengaduan</a>
                                </li>
                                <li>
                                    <a href="<?php base_url() ?>/artikel_user">Artikel</a>
                                </li>
                                <li>
                                    <a href="#0">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom cl-white">
                <p>Copyright &copy; <a href="https://kominfo.pesawarankab.go.id/view/home">KOMINFO Kabupaten Pesawaran</a> 2023</p>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->



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

</body>

</html>