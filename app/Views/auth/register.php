<?= $this->extend('layout/auth_layout') ?>

<?= $this->section('content') ?>

    <!--============= Form Register Section Starts Here =============-->
    <div class="login-section mb-100">
        <div class="container">
            <div class="login-wrapper shadow">
                <div class="login-content">
                    <h2 class="title">HelpDesk</h2>
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

<?= $this->endSection() ?>