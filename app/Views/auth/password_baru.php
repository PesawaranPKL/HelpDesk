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
                            <input class="input100" type="password" name="kpw_baru" id="kpw_baru" placeholder="Konfirmasi Password Baru">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="icheck">
                            <!-- Untuk merubah icon checklist setiap diklik  -->
                            <span id="checkbutton" onclick="changeBaru()">

                                <!-- Icon checklist bawaan bootstrap  -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018Zm.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="currentColor" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Zm0 2h14v14H5V5Zm11.95 4.795a1 1 0 1 0-1.414-1.414l-4.95 4.95l-2.121-2.121a1 1 0 0 0-1.415 1.414l2.758 2.758a1.1 1.1 0 0 0 1.556 0l5.586-5.587Z"/></g></svg>
                            </span>
                            <label for="checkbutton">Tampilkan Password</label>
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