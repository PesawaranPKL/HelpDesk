<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HelpDesk Kabupaten Pesawaran</title>

    <link href="/assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />

    <link rel="shortcut icon" href="<?= base_url() ?>/assets/admin/images/logo/LogoHelp.png" type="image/x-icon">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/admin/css/style.css">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="<?php base_url() ?>/dashboard" class="brand-logo">
                <img class="logo-abbr" width="66.5px" height="66.5px" src="/assets/admin/images/logo/LogoHelp.png" alt="logo">
                <img class="brand-title" width="101.5px" height="29.5px" src="/assets/admin/images/logo/LogoHelpText.png" alt="logo">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Artikel
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item">
                                <div class="input-group search-area d-lg-inline-flex d-none">
                                    <input type="text" class="form-control" placeholder="Cari Artikel">
                                    <div class="input-group-append">
                                        <button class="input-group-text"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="/assets/admin/images/avatar/1.jpg" width="20" alt="">
                                    <div class="header-info">
                                        <span class="text-black">Oda Dink</span>
                                        <p class="fs-12 mb-0">Admin</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <i class="bi bi-person"></i>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="<?php base_url() ?>/dashboard" class="has-arrow ai-icon" aria-expanded="false">
                            <i class="bi bi-bar-chart-line"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="<?php base_url() ?>/dashboard/admin/artikel" class="ai-icon" aria-expanded="false">
                            <i class="bi bi-layout-text-sidebar-reverse"></i>
                            <span class="nav-text">Artikel</span>
                        </a>
                    </li>
                </ul>

                <div class="copyright">
                    <p><strong>Helpdesk Pesawaran Kab.</strong> © 2023 All Rights Reserved</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <?= $this->renderSection('content') ?>


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © KOMINFO Kabupaten Pesawaran 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/assets/admin/vendor/global/global.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/assets/admin/vendor/highlightjs/highlight.pack.min.js"></script>
    <script src="/assets/admin/vendor/ckeditor/ckeditor.js"></script>
    <!-- Circle progress -->
    <script src="<?= base_url() ?>/assets/admin/js/custom.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/js/deznav-init.js"></script>
    <script src="<?= base_url() ?>/assets/admin/js/styleSwitcher.js"></script>

</body>

</html>