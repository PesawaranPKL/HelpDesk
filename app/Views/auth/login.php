<?= $this->extend('layout/auth_layout') ?>

<?= $this->section('content') ?>

<!--============= Form Login Section Starts Here =============-->
<div class="login-section mb-100">
    <div class="container">
        <div class="login-wrapper shadow">
            <div class="login-content">
                <h2 class="title">HelpDesk</h2>
                <form action="<?= htmlentities(base_url('login_sistem'), ENT_QUOTES) ?>" method="POST" class="login100-form validate-form">
                    <?php csrf_field() ?>
                    <?php if (session()->has('login_err')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php if (session()->get('login_err') == 'empty') : ?>
                                Akun tidak terdaftar!
                            <?php endif; ?>
                            <?php if (session()->get('login_err') == 'wrong_passwd') : ?>
                                Kata sandi tidak cocok!
                            <?php endif; ?>
                            <?php if (session()->get('login_err') == 'verif') : ?>
                                Email belum diverifikasi!
                            <?php endif; ?>
                            <?php if (session()->get('login_err') == 'not_actived') : ?>
                                Akun tersebut di non-aktifkan!
                            <?php endif; ?>
                            <?php if (session()->get('login_err') == 'limit') : ?>
                                Anda telah melakukan 5 kali percobaan, Coba lagi nanti!
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="wrap-input100 validate-input" data-validate="Masukkan Email Valid: contoh@email.com">
                        <input class="input100 <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" type="text" name="email" id="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        <div class="invalid-feedback" style="color: red; margin-top: 5px;">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>

                    <div class="wrap-input100 validate-input pw" data-validate="Password Wajib Diisi">
                        <input class="input100 <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" type="password" name="password" id="pw" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        <div class="invalid-feedback" style="color: red; margin-top: 5px;">
                            <?= $validation->getError('password'); ?>
                        </div>
                    </div>
                    <div class="input-group-append">

                        <!-- Untuk merubah icon buka/tutup mata setiap diklik  -->
                        <span id="eyebutton" onclick="change()" class="input-group-text">

                            <!-- Icon mata bawaan bootstrap  -->
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <small><a href="<?php base_url() ?>/lupa_password" class="forgot-button">Lupa Password?</a></small><br>
                        <button type="submit" class="login100-form-btn login-button">Login</button>
                    </div>

                </form>
                <small class="d-sm">Belum memiliki akun? <br> Silahkan klik <a href="<?php base_url() ?>/registrasi" class="regis-button">Disini</a></small>
            </div>
            <small class="d-lg" style="float: right;">Belum memiliki akun? Silahkan klik <a href="<?php base_url() ?>/registrasi" class="regis-button">Disini</a></small>
        </div>
    </div>
</div>
<!--============= Form Login Section Ends Here =============-->

<?= $this->endSection() ?>