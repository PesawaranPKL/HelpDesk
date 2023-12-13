<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Pengaduan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display table-responsive-lg">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Pengadu</th>
                                        <th>Nama Instansi</th>
                                        <th>Kategori Aduan</th>
                                        <th>Deskripsi</th>
                                        <th>File Pendukung</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pengaduan as $pgd) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $pgd['nama_pengadu']; ?></td>
                                            <td><?= $pgd['nama_instansi']; ?></td>
                                            <td><?= $pgd['kategori']; ?></td>
                                            <td>
                                                <button class="btn btn-primary btn-xxs shadow p-2 mt-2 mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCol<?= $no; ?>" aria-expanded="false" aria-controls="collapseExample">
                                                    Lihat Detail
                                                </button>
                                            </td>
                                            <td>
                                                <a href="<?php base_url() ?>/file_upload/dokumen/pengaduan/<?= $pgd['file_pendukung']; ?>" target="_blank" style="color:#000">Lihat Berkas</a>
                                            </td>
                                            <td>
                                                <?php if ($pgd['proses_pengaduan'] == null && $pgd['selesai_pengaduan'] == null) {  ?>
                                                    <span class="badge light badge-danger">
                                                        <i class="fa fa-circle text-danger me-1"></i>
                                                        Belum Diproses
                                                    </span>
                                                <?php  } elseif ($pgd['proses_pengaduan'] != null && $pgd['selesai_pengaduan'] == null) { ?>
                                                    <span class="badge light badge-warning">
                                                        <i class="fa fa-circle text-warning me-1"></i>
                                                        Sedang Diproses
                                                    </span>
                                                <?php } elseif ($pgd['proses_pengaduan'] != null && $pgd['selesai_pengaduan'] != null) { ?>
                                                    <span class="badge light badge-success">
                                                        <i class="fa fa-circle text-success me-1"></i>
                                                        Selesai Diproses
                                                    </span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <div class="dropdown ms-auto text-end">
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
                                                        <!-- <a class="dropdown-item" href="<?php base_url() ?>/dashboard/admin/detail_pengaduan=sedang_diproses">Proses Aduan</a> -->
                                                        <a class="dropdown-item" href="<?php base_url() ?>/dashboard/admin/detail_pengaduan/<?= $pgd['id_pengaduan']; ?>">Lihat Detail Aduan</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Start Menampilkan Detail Deskripsi menggunakan ID pada kolom yang di merge -->
                                        <tr>
                                            <td colspan="8">
                                                <div class="collapse" id="collapseCol1">
                                                    <div class="card card-body mb-0">
                                                        <?= $pgd['deskripsi']; ?>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>

                                    <!-- End Menampilkan Detail Deskripsi menggunakan ID pada kolom yang di merge -->

                                    <!-- End Menampilkan Detail Deskripsi menggunakan ID pada kolom yang di merge -->
                                </tbody>
                            </table>
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