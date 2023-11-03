<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Register - HelpDesk Kabupaten Pesawaran</title>
    <!-- File Framework -->
    <link rel="stylesheet" href="<?php base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php base_url() ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php base_url() ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php base_url() ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php base_url() ?>/assets/css/owl.min.css">
    <link rel="stylesheet" href="<?php base_url() ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php base_url() ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php base_url() ?>/assets/css/main.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php base_url() ?>/assets/images/logo/LogoHelp.png" type="image/x-icon">
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

    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section about-style bg_img bottom_center" data-background="assets/images/banner/page-header-2.jpg">
        <div class="bottom-shape d-none d-md-block">
            <img src="assets/images/banner/banner-shape.png" alt="banner">
        </div>
    </div>
    <!--============= Hero Section Ends Here =============-->

    <!--============= Form Register Section Starts Here =============-->
    <div class="login-section mb-100">
        <div class="container">
            <div class="login-wrapper shadow">
                <div class="login-content">
                    <h2 class="title">HelpDesk Center</h2>
                    <p align="center">Register</p>
                    <form action="#" class="login100-form validate-form">

                        <div class="wrap-input100 validate-input" data-validate = "Nama Lengkap Wajib Diisi">
                            <input class="input100" type="text" name="username" id="username" placeholder="Nama Lengkap">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "No HP Wajib Diisi">
                            <!-- max input no hp = 13 angka-->
                            <input class="input100" type="text" name="no_hp" id="no_hp" placeholder="Nomor Handphone" 
                            maxlength="13" onkeypress="return hanyaAngka(event)">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Masukkan Email Valid: contoh@email.com">
                            <input class="input100" type="text" name="email" id="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password Wajib Diisi">
                            <input class="input100" type="password" name="pw" id="pw" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn login-button">Kirim</button>
                        </div>    

				    </form>
                    <small class="d-sm">Sudah memiliki akun? <br> Silahkan <a href="<?php base_url()?>/login_sistem" class="regis-button">Login</a></small>
                </div>
                <small class="d-lg" style="float: right;">Sudah memiliki akun? Silahkan <a href="<?php base_url()?>/login_sistem" class="regis-button">Login</a></small>
            </div>
        </div>
    </div>
    <!--============= Form Register Section Ends Here =============-->

    <!-- JS -->
    <script src="<?php base_url() ?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/plugins.js"></script>
    <script src="<?php base_url() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/wow.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/waypoints.js"></script>
    <script src="<?php base_url() ?>/assets/js/nice-select.js"></script>
    <script src="<?php base_url() ?>/assets/js/owl.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/magnific-popup.min.js"></script>
    <script src="<?php base_url() ?>/assets/js/main.js"></script>
    <!-- Script -->
    <script>
        // Mengambil inputan keyboard yang hanya angka tanpa huruf & karakter
        function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
    </script>
</body>

</html>