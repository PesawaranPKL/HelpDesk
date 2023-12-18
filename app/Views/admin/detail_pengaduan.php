<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="<?php base_url() ?>/dashboard/admin/daftar_pengaduan">Daftar Pengaduan</a></li>
                <li class="breadcrumb-item">Detail Pengaduan</li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- GET Nama Pengadu -->
                        <h4 class="card-title">Detail Pengaduan - <?= $pengaduan->nama_pengadu; ?></h4>
                        <div class="dropdown ms-auto text-start">
                            <div class="btn-link" data-bs-toggle="dropdown">
                                <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                        <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                    </g>
                                </svg>
                            </div>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="<?php base_url() ?>/dashboard/admin/detail_pengaduan=sedang_diproses">Proses Aduan</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body detailAduan">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <h6>Status Pengaduan</h6>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">
                                <?php if ($pengaduan->proses_pengaduan == null && $pengaduan->selesai_pengaduan == null) {  ?>
                                    <span class="badge light badge-danger">
                                        <i class="fa fa-circle text-danger me-1"></i>
                                        Belum Diproses
                                    </span>
                                <?php } elseif ($pengaduan->proses_pengaduan != null && $pengaduan->selesai_pengaduan == null) { ?>
                                    <span class="badge light badge-warning">
                                        <i class="fa fa-circle text-warning me-1"></i>
                                        Sedang Diproses
                                    </span>
                                <?php } elseif ($pengaduan->proses_pengaduan != null && $pengaduan->selesai_pengaduan != null) { ?>
                                    <span class="badge light badge-success">
                                        <i class="fa fa-circle text-success me-1"></i>
                                        Selesai Diproses
                                    </span>
                                <?php } ?>
                            </li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <h6>Nama Pengadu</h6>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><?= $pengaduan->nama_pengadu; ?></li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <h6>Nama Instansi</h6>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><?= $pengaduan->nama_instansi; ?></li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <h6>Email</h6>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><?= $pengaduan->email; ?></li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <h6>No HP</h6>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><?= $pengaduan->no_hp; ?></li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <h6>Kategori Aduan</h6>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><?= $pengaduan->kategori; ?></li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <h6>Deskripsi</h6>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi">
                                <?= $pengaduan->deskripsi; ?>
                            </li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item Ljdl">
                                <h6>File Pendukung</h6>
                            </li>
                            <li class="list-group-item Ltitik2">:</li>
                            <li class="list-group-item Lisi"><a href="<?php base_url() ?>/file_upload/dokumen/pengaduan/<?= $pengaduan->file_pendukung; ?>" target="_blank" style="color:#000">Lihat Berkas</a></li>
                        </ul>
                        <?php if ($pengaduan->proses_pengaduan != null && $pengaduan->selesai_pengaduan == null) {  ?>
                            <br>
                            <hr>
                            <h4 class="card-title mt-3 mb-3">Solusi Aduan</h4>
                            <div class="compose-content">
                                <h5 class="mb-4"><i class="fa fa-comments" style="transform: rotate(0);"></i> Pesan Solusi</h5>
                                <form action="<?= htmlentities(base_url('dashboard/admin/daftar_pengaduan/selesai/' . $pengaduan->id_pengaduan), ENT_QUOTES) ?>" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <textarea name="pesan_balasan" id="email-compose-editor" class="textarea_editor form-control bg-transparent pesanSolusi" rows="6" placeholder="Masukkan Pesan Disini..."></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mb-4"><i class="fa fa-paperclip"></i> Lampiran</h5>
                                        <input name="file_balasan" class="form-control" type="file" id="formFile">
                                    </div>
                                    <div class="text-start mt-4 mb-3">
                                        <button class="btn btn-primary btn-sl-sm me-2" type="submit"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Kirim</button>
                                        <button class="btn btn-danger light btn-sl-sm" type="button"><span class="me-2"><i class="fa fa-times"></i></span>Batal</button>
                                    </div>
                                </form>
                                <!-- <form action="" method="POST" enctype="multipart/form-data" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="">
                                    </div>
                                </form> -->
                            </div>

                        <?php } elseif ($pengaduan->proses_pengaduan != null && $pengaduan->selesai_pengaduan != null) { ?>
                            <br>
                            <hr>
                            <h4 class="card-title mt-3 mb-3">Hasil Solusi Aduan</h4>
                            <div class="compose-content mb-3">
                                <h5 class="mb-4"><i class="fa fa-comments" style="transform: rotate(0);"></i> Pesan Solusi</h5>
                                <textarea class="form-control pesanSolusi pesanSelesai" rows="6" readonly><?= $pengaduan->pesan_balasan; ?></textarea><br>
                                <div class="read-content-attachment">
                                    <h6><i class="fa fa-download mb-2"></i> Lampiran
                                        <!-- <span>(3)</span> -->
                                    </h6>
                                    <div class="row attachment">
                                        <div class="col-auto">
                                            <a href="<?= base_url('file_upload/dokumen/pengaduan/admin/') . $pengaduan->file_balasan; ?>" class="text-muted" target="_blank"><?= $pengaduan->file_balasan; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($pengaduan->proses_pengaduan == null && $pengaduan->selesai_pengaduan == null) { ?>
                            <br>
                            <hr>
                            <a href="<?php base_url() ?>/dashboard/admin/daftar_pengaduan/proses/<?= $pengaduan->id_pengaduan ?>" class="btn btn-primary">Proses</a>
                        <?php } ?>
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