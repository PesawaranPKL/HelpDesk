﻿<?= $this->extend('layout/user_layout') ?>

<?= $this->section('content') ?>

<!--============= Knowledge Single Section Starts Here =============-->
<section class="knowledge-single-section padding-bottom padding-top oh">
    <div class="container">
        <div class="row mb--70">
            <div class="col-xl-8 col-lg-7 mb-70">
                <div class="knowledge-single">
                    <div class="knowledge-header">
                        <h2 class="title"><?= $a['judul_artikel']; ?></h2>
                        <ul class="knowledge-meta">
                            <li>Created: <?= $a['created_at']; ?></li>
                            <!-- <li>Updated: <?= $a['updated_at']; ?></li> -->
                        </ul>
                    </div>

                    <div class="know-single-item">
                        <div class="video-wrapper">
                            <img src="assets/admin/images/artikel/thumbnails/<?= $a['thumbnail']; ?>" alt="video">
                            <!-- <a href="https://www.youtube.com/watch?v=GT6-H4BRyqQ" class="video-button popup">
                                <i class="flaticon-play"></i></a> -->
                        </div>
                        <p><?= $a['isi_artikel']; ?></p>
                    </div>
                </div>
            </div>

            <!-- End Side -->
            <div class="col-xl-4 col-lg-5 mb-70">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="knowledge-widget">
                            <div class="author">
                                <div class="author-thumb">
                                    <a href="#0"><img src="assets/images/cate/01.png" alt="cate"></a>
                                </div>
                                <div class="author-content">
                                    <span class="by">Ditulis Oleh</span>
                                    <h5 class="subtitle"><?= $a['nama']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="knowledge-widget">
                            <div class="call-to-page">
                                <h5 class="title">Belum menemukan jawaban yang sesuai dengan pertanyaan mu?</h5>
                                <p>Buka Halaman FAQ untuk menemukan kumpulan pertanyaan yang sering ditanyakan oleh pengguna situs kami.</p>
                                <a href="#faq" class="call-button">Buka FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rekomendasi Artikel -->
                <h5 class="title my-4">Rekomendasi Artikel</h5>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-lg-12 col-md-6 mb-3">
                        <a href="<?php base_url() ?>/detail_artikel" class="popular-item">
                            <div class="popular-thumb">
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="popular-content pl-3">
                                <span class="info">Jaringan</span>
                                <p>Bagaimana cara menangani masalah koneksi jaringan yang sering putus?</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-6 mb-3">
                        <a href="<?php base_url() ?>/detail_artikel" class="popular-item">
                            <div class="popular-thumb">
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="popular-content pl-3">
                                <span class="info">Jaringan</span>
                                <p>Bagaimana cara menangani masalah koneksi jaringan yang sering putus?</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Knowledge Single Section Ends Here =============-->


<?= $this->endSection() ?>