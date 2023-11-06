<?= $this->extend('layout/auth_layout') ?>

<?= $this->section('content') ?>

    <!--============= Form Login Section Starts Here =============-->
    <div class="login-section mb-100">
        <div class="container">
            <div class="login-wrapper shadow">
                <div class="login-content">
                    <h2 class="title">HelpDesk</h2>
                    <p align="center">Reset Password</p><br>
                    <form action="#" class="login100-form validate-form">

                        <div class="wrap-input100 validate-input" data-validate = "Password Baru Wajib Diisi">
                            <input class="input100" type="password" name="pw_baru" id="pw_baru" placeholder="Password Baru">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Konfirmasi Password Baru Wajib Diisi">
                            <input class="input100" type="password" name="knfr_pw_baru" id="knfr_pw_baru" placeholder="Konfirmasi Password Baru">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn login-button">Kirim</button>
                        </div>    

				    </form>
                    <small class="d-sm">Masuk ke Akun? <br> Silahkan klik <a href="<?php base_url()?>/login_sistem" class="regis-button">Disini</a></small>
                </div>
                <small class="d-lg" style="float: right;">Masuk ke Akun? Silahkan klik <a href="<?php base_url()?>/login_sistem" class="regis-button">Disini</a></small>
            </div>
        </div>
    </div>
    <!--============= Form Login Section Ends Here =============-->

<?= $this->endSection() ?>