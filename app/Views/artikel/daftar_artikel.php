<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-9 my-2">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Artikel</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Daftar Artikel</a></li>
                </ol>
            </div>
            <div class="col-3">
                <div class="d-grid">
                    <a href="<?php base_url() ?>/dashboard/admin/artikel/tambah" class="btn btn-primary" type="button">Tambah Artikel</a>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($artikel as $a) : ?>
                <div class="col-lg-12 col-xl-3">
                    <div class="card">
                        <div class="img-holder">
                            <img class="card-img-top img-fluid" src="/assets/admin/images/artikel/thumbnails/<?= $a['thumbnail']; ?>" alt="Thumbnail">
                            <a class="link" href="#" role="button" data-bs-toggle="dropdown"><i class="bi bi-chevron-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="<?php base_url() ?>/dashboard/admin/artikel/edit" class="dropdown-item">
                                    <i class="bi bi-pencil-square"></i>
                                    <span class="ms-2">Edit Artikel </span>
                                </a>
                                <a href="<?php base_url() ?>/dashboard/admin/artikel/hapus" class="dropdown-item">
                                    <i class="bi bi-trash"></i>
                                    <span class="ms-2">Hapus Artikel </span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="new-arrival-content position-relative">
                                        <h4><a href="<?php base_url() ?>/detail_artikel"><?= $a['judul_artikel']; ?></a></h4>
                                        <p>Kategori Artikel: <span class="item"></span> <?= $a['kategori']; ?> </p>
                                        <p>Status Artikel: <span class="item"> <?= $a['status']; ?> <i class="bi bi-check-circle-fill"></i></span></p>
                                        <p>Penulis: <span class="item"><?= $a['nama']; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<?= $this->endSection() ?>