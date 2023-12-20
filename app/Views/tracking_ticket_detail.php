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
            <form class="search-form" data-sb-form-api-token="API_TOKEN" action="<?php base_url() ?>/tracking_ticket_detail" method="get">
                <input type="text" placeholder="Masukkan Token Ticket yang didapatkan di Email" name="token">
                <button type="submit"><i class="flaticon-search"></i> <span class="d-none d-sm-inline-block">Cari</span></button>
            </form>
            <?php if ($hasil == true) { ?>
                <?php if ($pengadu != null) { ?>
                    <div class="how-search-wrapper">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-group list-group-horizontal" style="border: none;">
                                    <li class="list-group-item Ljdl1">
                                        <h6>
                                            <h3>Detail Ticket</h3>
                                        </h6>
                                    </li>
                                    <?php if ($pengadu->proses_pengaduan == null && $pengadu->selesai_pengaduan == null) {  ?>
                                        <li class="list-group-item Lisi1">
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle me-1"></i>
                                                Belum Diproses
                                            </span>
                                        </li>
                                    <?php } elseif ($pengadu->proses_pengaduan != null && $pengadu->selesai_pengaduan == null) { ?>
                                        <li class="list-group-item Lisi1">
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle me-1"></i>
                                                Sedang Diproses
                                            </span>
                                        </li>
                                    <?php } elseif ($pengadu->proses_pengaduan != null && $pengadu->selesai_pengaduan != null) { ?>
                                        <li class="list-group-item Lisi1">
                                            <span class="badge light badge-success">
                                                <i class="fa fa-circle me-1"></i>
                                                Selesai Diproses
                                            </span>
                                        </li>
                                    <?php } ?>

                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl">
                                        <h6>Nama Pengadu</h6>
                                    </li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi"><?= ucwords($pengadu->nama_pengadu) ?></li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl">
                                        <h6>Nama Instansi</h6>
                                    </li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi"><?= ucwords($pengadu->nama_instansi) ?></li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl">
                                        <h6>Email</h6>
                                    </li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi"><?= $pengadu->email; ?></li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl">
                                        <h6>No HP</h6>
                                    </li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi"><?= $pengadu->no_hp; ?></li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl">
                                        <h6>Kategori Aduan</h6>
                                    </li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi"><?= ucwords($pengadu->kategori) ?></li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl">
                                        <h6>Deskripsi</h6>
                                    </li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">
                                        <?= $pengadu->deskripsi; ?>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl">
                                        <h6>File Pendukung</h6>
                                    </li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi"><a href="<?php base_url() ?>/file_upload/dokumen/pengaduan/<?= $pengadu->file_pendukung; ?>" target="_blank" target="_blank" style="color:#504c89">Lihat Berkas</a></li>
                                </ul>
                                <?php if ($pengadu->proses_pengaduan != null && $pengadu->selesai_pengaduan != null) { ?>
                                    <hr>
                                    <ul class="list-group list-group-horizontal">
                                        <li class="list-group-item Ljdl">
                                            <h6>Pesan Balasan</h6>
                                        </li>
                                        <li class="list-group-item Ltitik2">:</li>
                                        <li class="list-group-item Lisi">
                                            <?= $pengadu->pesan_balasan; ?>
                                        </li>
                                    </ul>
                                    <ul class="list-group list-group-horizontal">
                                        <li class="list-group-item Ljdl">
                                            <h6>File Balasan</h6>
                                        </li>
                                        <li class="list-group-item Ltitik2">:</li>
                                        <li class="list-group-item Lisi"><a href="<?php base_url() ?>/file_upload/dokumen/pengaduan/admin/<?= $pengadu->file_balasan; ?>" target="_blank" target="_blank" style="color:#504c89">Lihat Berkas</a></li>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div class="how-search-wrapper">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-group list-group-horizontal" style="border: none;">
                                <li class="list-group-item Ljdl1" align='center'>
                                    <h6>
                                        <h3 style="color: red;">Nomor Token Tiket Tidak ditemukan!</h3>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- End Tampilan Device Besar -->

    <!-- Tampilan Device Kecil -->
    <div class="how-search-section padding-bottom mt--150 d-sm">
        <div class="container">
            <form class="search-form">
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
                            <li class="list-group-item Ljdl">
                                <p>Nama Pengadu</p>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">
                                <p>Siti Kholisah Aulia</p>
                            </li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <p>Nama Instansi</p>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">
                                <p>Dinas Kominfo</p>
                            </li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <p>Email</p>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">
                                <p>user01@gmail.com</p>
                            </li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <p>No HP</p>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">
                                <p>089521214343</p>
                            </li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <p>Kategori Aduan</p>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">
                                <p>Jaringan</p>
                            </li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <p>Deskripsi</p>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">
                                <p>
                                    Saya ingin melaporkan masalah seringnya putusnya koneksi jaringan internet yang saya alami. Dalam beberapa minggu terakhir, saya mengalami gangguan yang menyebabkan putusnya koneksi secara tiba-tiba. Masalah ini menghambat produktivitas kerja saya dan mengganggu aktivitas online saya.
                                    Saya telah mencoba mereset router dan memeriksa kabel-kabel, namun masalah ini tetap berlanjut. Mohon bantuan untuk mengatasi masalah ini dengan segera, agar saya dapat menggunakan layanan internet dengan lancar.</p>
                            </li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <p>File Pendukung</p>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><a href="<?php base_url() ?>/assets/admin/file/berkas.pdf" target="_blank" style="color:#504c89">
                                    <p>Lihat Berkas</p>
                                </a></li>
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