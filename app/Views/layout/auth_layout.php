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
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo/LogoHelp.png" type="image/x-icon">
</head>
<script>
    function sweet() {
        Swal.fire(
            'Gagal!',
            'Akun tidak terdaftar!',
            'error'
        )
    }
</script>
<?php if (session()->getFlashdata('login_err') == 'empty') { ?>
    <script>
        function sweet() {
            Swal.fire(
                'Gagal!',
                'Akun tidak terdaftar!',
                'error'
            )
        }
    </script>
<?php } ?>

<?php if (session()->getFlashdata('login_err') == 'wrong_passwd') { ?>
    <script>
        function sweet() {
            Swal.fire(
                'Gagal!',
                'Kata sandi tidak cocok!',
                'error'
            )
        }
    </script>
<?php } ?>

<?php if (session()->getFlashdata('login_err') == 'verif') { ?>
    <script>
        function sweet() {
            Swal.fire(
                'Gagal!',
                'Email belum diverifikasi!',
                'error'
            )
        }
    </script>
<?php } ?>

<?php if (session()->getFlashdata('login_err') == 'not_actived') { ?>
    <script>
        function sweet() {
            Swal.fire(
                'Gagal!',
                'Akun tersebut di non-aktifkan!',
                'error'
            )
        }
    </script>
<?php } ?>

<?php if (session()->getFlashdata('login_err') == 'limit') { ?>
    <script>
        function sweet() {
            Swal.fire(
                'Gagal!',
                'Anda telah melakukan 5 kali percobaan, Coba lagi nanti!',
                'error'
            )
        }
    </script>
<?php } ?>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="sweet" onload="sweet()"></div>
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->

    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section about-style bg_img bottom_center" data-background="assets/images/banner/page-header-2.jpg">
        <div class="bottom-shape d-none d-md-block">
            <img src="assets/images/banner/banner-shape.png" alt="banner">
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</body>

</html>