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
                                <h4 class="card-title">Detail Pengaduan - Wulan Destyaningsih</h4>
                            </div>
                            <div class="card-body detailAduan">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>Status Pengaduan</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">                           
                                        <span class="badge light badge-success">
                                            <i class="fa fa-circle text-success me-1"></i>
                                            Selesai Diproses
                                        </span>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>ID</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">#H003</li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>Nama Pengadu</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">Wulan Destyaningsih</li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>Nama Instansi</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">Dinas Kominfo</li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>Email</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">user03@gmail.com</li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>No HP</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">0857890766890</li>
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
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ullam temporibus dolorum voluptate sint impedit recusandae voluptates, pariatur repellat. Neque necessitatibus voluptatem commodi nisi ratione autem ipsa hic dolorem ut.
                                    </li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>File Pendukung</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi"><a href="<?php base_url()?>/assets/admin/file/berkas.pdf" target="_blank" style="color:#000">Lihat Berkas</a></li>
                                </ul>
                                <br><hr>
                                <h4 class="card-title mt-3 mb-3">Hasil Solusi Aduan</h4>
                                <div class="compose-content mb-3">
                                    <h5 class="mb-4"><i class="fa fa-comments" style="transform: rotate(0);"></i> Pesan Solusi</h5>
                                    <textarea class="form-control pesanSolusi pesanSelesai" rows="6" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum que laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta su Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, tempore quam aliquam quas ipsum rerum vero inventore corrupti, harum, optio animi ad natus libero? Sit fuga quod suscipit aut voluptates. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum quod cum enim delectus molestiae, praesentium deserunt officiis saepe, corporis, minima laboriosam! Itaque architecto dicta odit atque, aut nisi veritatis suscipit.</textarea><br>                     
                                    <div class="read-content-attachment">
                                        <h6><i class="fa fa-download mb-2"></i> Lampiran
                                            <span>(3)</span></h6>
                                        <div class="row attachment">
                                            <div class="col-auto">
                                                <a href="#" class="text-muted">Lampiran-Photo.png</a>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-muted">Lampiran-File1.docx</a>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="text-muted">Lampiran-File2.pdf</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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