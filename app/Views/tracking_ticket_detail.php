<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="tracking_ticket_detail">
    <!--============= Banner Section Starts Here =============-->
    <section class="banner-1 bg_img" data-background="assets/images/banner/banner-2.jpg">
        <div class="container">
            <div class="banner-content cl-white">
                <h1 class="title">Cek Status Pengaduan</h1>
            </div>
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->

    
    <!--============= How Search Section Starts Here =============-->
    <!-- Tampilan Device Besar -->
    <div class="how-search-section padding-bottom mt--230 d-lg">
        <div class="container">
            <form  class="search-form">
                <input type="text" placeholder="Masukkan Token Ticket yang didapatkan di Email">
                <button type="submit"><i class="flaticon-search"></i> <span class="d-none d-sm-inline-block">Cari</span></button>
            </form>
            <div class="how-search-wrapper">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group list-group-horizontal" style="border: none;">
                            <li class="list-group-item Ljdl1"><h6><h3>Detail Ticket #H001</h3></h6></li>
                            <li class="list-group-item Lisi1">
                                <span class="badge light badge-danger">
                                    <i class="fa fa-circle me-1"></i>
                                    Belum Diproses
                                </span>
                            </li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><h6>Nama Pengadu</h6></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">Siti Kholisah Aulia</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><h6>Nama Instansi</h6></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">Dinas Kominfo</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><h6>Email</h6></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">user01@gmail.com</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><h6>No HP</h6></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">089521214343</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><h6>Kategori Aduan</h6></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">Jaringan</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><h6>Deskripsi</h6></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">
                                Saya ingin melaporkan masalah seringnya putusnya koneksi jaringan internet yang saya alami. Dalam beberapa minggu terakhir, saya mengalami gangguan yang menyebabkan putusnya koneksi secara tiba-tiba. Masalah ini menghambat produktivitas kerja saya dan mengganggu aktivitas online saya.
                                Saya telah mencoba mereset router dan memeriksa kabel-kabel, namun masalah ini tetap berlanjut. Mohon bantuan untuk mengatasi masalah ini dengan segera, agar saya dapat menggunakan layanan internet dengan lancar.
                            </li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><h6>File Pendukung</h6></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><a href="<?php base_url()?>/assets/admin/file/berkas.pdf" target="_blank" style="color:#504c89">Lihat Berkas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Tampilan Device Besar -->
            
    <!-- Tampilan Device Kecil -->
    <div class="how-search-section padding-bottom mt--150 d-sm">
        <div class="container">
            <form  class="search-form">
                <input type="text" placeholder="Masukkan Token Ticket yang didapatkan di Email">
                <button type="submit"><i class="flaticon-search"></i> <span class="d-none d-sm-inline-block">Cari</span></button>
            </form>
            <div class="how-search-wrapper">
                <div class="card">
                    <div class="card-body">
                        <h4>Detail Ticket #H001</h4>
                        <span class="badge light badge-danger mb-3">
                            <i class="fa fa-circle me-1"></i>
                            Belum Diproses
                        </span>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><p>Nama Pengadu</p></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><p>Siti Kholisah Aulia</p></li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><p>Nama Instansi</p></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><p>Dinas Kominfo</p></li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><p>Email</p></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><p>user01@gmail.com</p></li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><p>No HP</p></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><p>089521214343</p></li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><p>Kategori Aduan</p></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><p>Jaringan</p></li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><p>Deskripsi</p></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><p>
                                Saya ingin melaporkan masalah seringnya putusnya koneksi jaringan internet yang saya alami. Dalam beberapa minggu terakhir, saya mengalami gangguan yang menyebabkan putusnya koneksi secara tiba-tiba. Masalah ini menghambat produktivitas kerja saya dan mengganggu aktivitas online saya.
                                Saya telah mencoba mereset router dan memeriksa kabel-kabel, namun masalah ini tetap berlanjut. Mohon bantuan untuk mengatasi masalah ini dengan segera, agar saya dapat menggunakan layanan internet dengan lancar.</p>
                            </li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl"><p>File Pendukung</p></li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><a href="<?php base_url()?>/assets/admin/file/berkas.pdf" target="_blank" style="color:#504c89"><p>Lihat Berkas</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    <!-- End Tampilan Device Kecil -->
    <!--============= How Search Section Ends Here =============-->
</div>

<?= $this->endSection() ?>