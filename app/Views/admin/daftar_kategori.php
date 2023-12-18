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
                        <h4 class="card-title">Daftar Kategori Pengaduan</h4>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#modaltambah">Tambah</button>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display table-responsive-lg">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kategori Pengaduan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kategori as $ktg) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $ktg['kategori']; ?></td>
                                            <td>
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
                                                        <a class="dropdown-item" href="<?php base_url() ?>/dashboard/admin/list_pengaduan/<?= $ktg['id_kategori']; ?>">Lihat Daftar Aduan</a>
                                                        <a class="dropdown-item" href="<?php base_url() ?>/dashboard/admin/edit_kategori/<?= $ktg['id_kategori']; ?>">Edit Kategori Aduan</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <!-- Start Menampilkan Detail Deskripsi menggunakan ID pada kolom yang di merge -->
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