<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="hero-section bg_img" data-background="<?= base_url() ?>/assets/images/banner/page-header.jpg">
    <div class="container">
        <div class="banner-content cl-white">
            <ul class="breadcrumb">
                <li><a href="#0">Beranda</a></li>
                <li><a href="#0">Dokumentasi</a></li>
                <li>Artikel</li>
            </ul>
        </div>
    </div>
</div>
<!--============= Form Section Starts Here =============-->
<div class="form-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <!-- <div class="search-wrapper mt--55--70">
                    <form class="search-form round no-border mw-925">
                        <input type="text" placeholder="Cari judul artikel...">
                        <button type="submit"><i class="flaticon-search"></i> <span class="d-none d-sm-inline-block">Cari</span></button>
                    </form>
                </div> -->

                <div class="search-wrapper mt--55--70">
                    <form class="search-form round no-border mw-925" action="<?= base_url('artikel'); ?>" method="get">
                        <input type="text" name="keyword" placeholder="Cari judul artikel..." value="<?= service('request')->getGet('keyword'); ?>">
                        <button type="submit"><i class="flaticon-search"></i> <span class="d-none d-sm-inline-block">Cari</span></button>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
<!--============= Form Section Ends Here =============-->


<!--============= Articles Section Starts Here =============-->
<section class="faq-section padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-between">
            <?php foreach ($artikel as $a) : ?>
                <div class="col-lg-12 col-xl-3">
                    <div class="card">
                        <img src="<?= base_url() ?>file_upload/artikel/tumbnails/<?= $a['thumbnail']; ?>" alt="Thumbnail">
                        <div class="card-body">
                            <a href="<?php base_url() ?>/artikel/detail/<?= $a['id_artikel']; ?>" target="_blank" class="popular-item px-2 position-relative">
                                <div class="popular-content pl-2">
                                    <p><?= $a['judul_artikel']; ?></p>
                                    <span class="info"><?= $a['kategori']; ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination Links -->
        <div class="row justify-content-center">
            <div class="col-md-12">
                
            </div>
        </div>

    </div>
</section>
<!--============= Articles Section Ends Here =============-->


<?= $this->endSection() ?>