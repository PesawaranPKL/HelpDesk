<?= $this->extend('layout/auth_layout') ?>

<?= $this->section('content') ?>

    <!--============= Form Login Section Starts Here =============-->
    <div class="login-section mb-100">
        <div class="container">
            <div class="login-wrapper shadow lp_pw">
                <div class="login-content">
                    <h2 class="title pt-3 pb-4">HelpDesk</h2>
                        
                        <h4 align="center" class="pb-2">Reset Kata Sandi Berhasil</h4>
                        <p align="center">Kami telah mengirimkan email berisi tautan untuk mengatur ulang kata sandi anda. Periksa surel anda dan ikuti petunjuk didalamnya</p><br>

                        <p align="center" class="pt-3">Tidak menerima email?</p>
                        <div class="container-login100-form-btn">
                            <center><a href="<?php base_url()?>/lupa_password"><button type="submit" class="login100-form-btn lp-button">Kirim Ulang Email</button></a></center>
                        </div>    
                </div>
            </div>
        </div>
    </div>
    <!--============= Form Login Section Ends Here =============-->

<?= $this->endSection() ?>