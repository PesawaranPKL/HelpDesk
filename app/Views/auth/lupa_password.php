<?= $this->extend('layout/auth_layout') ?>

<?= $this->section('content') ?>

    <!--============= Form Login Section Starts Here =============-->
    <div class="login-section mb-100">
        <div class="container">
            <div class="login-wrapper shadow">
                <div class="login-content">
                    <!-- <a href="<?php base_url()?>/login_sistem" title="Kembali ke Halaman Login" class="iback"><iconify-icon icon="maki:arrow" flip="horizontal"></iconify-icon></a> -->
                    <h2 class="title">HelpDesk</h2>
                    <p align="center">Lupa Password</p><br>
                    <form action="<?php base_url() ?>/lupa_password" method="post" class="login100-form validate-form">
                    <?= csrf_field(); ?>
                        <p align="center">Silahkan masukkan email terdaftar untuk melakukan reset password</p>
                        <div class="wrap-input100 validate-input" data-validate = "Masukkan Email Valid: contoh@email.com">
                            <input class="input100" type="text" name="email" id="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                            <?php if (session('validation')): ?>
                                <div class="alert alert-danger">
                                    <?= session('validation')->listErrors() ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="container-login100-form-btn pt-3">
                            <center><button type="submit" class="login100-form-btn reset-button">Lanjutkan</button></center>
                        </div>    

				    </form>
                    <small class="d-sm">Kembali kehalaman login? <br> Silahkan klik <a href="<?php base_url()?>/login_sistem" class="regis-button">Disini</a></small>
                </div>
                <small class="d-lg" style="float: right;">Kembali kehalaman login? Silahkan klik <a href="<?php base_url()?>/login_sistem" class="regis-button">Disini</a></small>
            </div>
        </div>
    </div>
    <!--============= Form Login Section Ends Here =============-->

<?= $this->endSection() ?>

<form action="<?php base_url() ?>/lupa_password" method="POST">
    <input  type="text" name="email" value="">
    <?php if (session('validation')): ?>
        <div class="alert alert-danger">
            <?= session('validation')->listErrors() ?>
        </div>
    <?php endif; ?>

    <button  type="submit">Kirim</button>
</form>