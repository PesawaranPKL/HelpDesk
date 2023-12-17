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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">FAQ</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Daftar FAQ</a></li>
                </ol>
            </div>
            <div class="col-3">
                <div class="d-grid">
                    <a href="<?php base_url() ?>/dashboard/admin/artikel/tambah" class="btn btn-primary" type="button">Tambah FAQ</a>
                </div>
            </div>
        </div>

        <div class="row">

        </div>

    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<?= $this->endSection() ?>