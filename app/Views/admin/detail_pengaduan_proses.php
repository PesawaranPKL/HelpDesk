<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="<?php base_url()?>/dashboard/admin/daftar_pengaduan">Daftar Pengaduan</a></li>
						<li class="breadcrumb-item">Detail Pengaduan</li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- GET Nama Pengadu -->
                                <h4 class="card-title">Detail Pengaduan - Siti Kholisah Aulia</h4>
                                <div class="dropdown ms-auto text-start">
                                    <div class="btn-link" data-bs-toggle="dropdown">
                                        <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Proses Aduan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body detailAduan">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>Status Pengaduan</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">
                                        <span class="badge light badge-danger">
                                            <i class="fa fa-circle text-danger me-1"></i>
                                            Belum Diproses
                                        </span>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>ID</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">#H001</li>
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
                                    <li class="list-group-item Lisi"><a href="<?php base_url()?>/assets/admin/file/berkas.pdf" target="_blank" style="color:#000">Lihat Berkas</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

<!-- <?= session()->get('role'); ?> -->

<?= $this->endSection() ?>