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
                                <h4 class="card-title">Detail Pengaduan - Fadila Eka Noperta</h4>
                            </div>
                            <div class="card-body detailAduan">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>Status Pengaduan</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">
                                        <span class="badge light badge-warning">
                                            <i class="fa fa-circle text-warning me-1"></i>
                                            Sedang Diproses
                                        </span>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>ID</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">#H002</li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>Nama Pengadu</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">Fadila Eka Noperta</li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>Nama Instansi</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">Dinas Kominfo</li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>Email</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">user02@gmail.com</li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>No HP</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi">085764534587</li>
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
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur consequuntur eius fugiat molestias id quasi iste eligendi cupiditate perferendis quae eos exercitationem odio totam, eveniet consequatur praesentium alias. Labore, beatae.
                                    </li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item Ljdl"><h6>File Pendukung</h6></li>
                                    <li class="list-group-item Ltitik2">:</li>
                                    <li class="list-group-item Lisi"><a href="<?php base_url()?>/assets/admin/file/berkas.pdf" target="_blank" style="color:#000">Lihat Berkas</a></li>
                                </ul>
                                <br><hr>
                                <h4 class="card-title mt-3 mb-3">Solusi Aduan</h4>
                                <div class="compose-content">
                                    <h5 class="mb-4"><i class="fa fa-comments" style="transform: rotate(0);"></i> Pesan Solusi</h5>
                                    <form action="#">
                                        <div class="mb-3">
                                            <textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent pesanSolusi" rows="6" placeholder="Masukkan Pesan Disini..."></textarea>
                                        </div>
                                    </form>
                                    <h5 class="mb-4"><i class="fa fa-paperclip"></i> Lampiran</h5>
                                    <form action="#" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple="">
                                        </div>
                                    </form>
                                </div>
                                <div class="text-start mt-4 mb-3">
                                    <button class="btn btn-primary btn-sl-sm me-2" type="button"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Kirim</button>
                                    <button class="btn btn-danger light btn-sl-sm" type="button"><span class="me-2"><i class="fa fa-times"></i></span>Batal</button>
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