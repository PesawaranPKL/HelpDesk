<?= $this->extend('layout/auth_layout') ?>

<?= $this->section('content') ?>

    <!--============= Form Login Section Starts Here =============-->
    <div class="login-section mb-100">
        <div class="container">
            <div class="login-wrapper shadow">
                <div class="login-content">
                    <h2 class="title">HelpDesk Center</h2>
                    <form action="#" class="login100-form validate-form">

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
                            <small><a href="#!" class="forgot-button">Lupa Password?</a></small><br>
                            <button type="submit" class="login100-form-btn login-button">Login</button>
                        </div>    

				    </form>
                    <small class="d-sm">Belum memiliki akun? <br> Silahkan klik <a href="<?php base_url()?>/registrasi" class="regis-button">Disini</a></small>
                </div>
                <small class="d-lg" style="float: right;">Belum memiliki akun? Silahkan klik <a href="<?php base_url()?>/registrasi" class="regis-button">Disini</a></small>
            </div>
        </div>
    </div>
    <!--============= Form Login Section Ends Here =============-->

<?= $this->endSection() ?>