<?= $this->extend('layout/artikel/artikel_user_layout') ?>

<?= $this->section('content') ?>

<!--============= Form Section Starts Here =============-->
<div class="form-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="search-wrapper mt--55--70">
                    <form class="search-form round no-border mw-925">
                        <input type="text" placeholder="Cari judul artikel...">
                        <button type="submit"><i class="flaticon-search"></i> <span class="d-none d-sm-inline-block">Cari</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============= Form Section Ends Here =============-->


<!--============= Faqs Section Starts Here =============-->
<section class="faq-section padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <aside class="sticky-menu">
                    <div class="faq-menu bg_img mb-30" data-background="assets/images/faq/faq-menu.png">
                        <ul id="faq-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#api">API</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#email">Email</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#domain">Domain</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#data">Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kemitraan">Kemitraan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#hosting">Hosting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#seranganCyber">Serangan Cyber</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#jaringan">Jaringan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#informasi">Informasi</a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="faq-video">
                            <a href="https://www.youtube.com/watch?v=GT6-H4BRyqQ" class="video-area popup">
                                <img src="assets/images/faq/video.png" alt="faq">
                                <div class="video-button-2">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <i class="flaticon-play-button"></i>
                                </div>
                            </a>
                            <h5 class="title">Watch Video Tour</h5>
                        </div> -->
                </aside>
            </div>

            <div class="col-lg-8 col-xl-7">
                <article class="mt-70 mt-lg-0">
                    <div class="faq--wrapper" id="api">
                        <h3 class="main-title">API (Application Programming Interface)</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">Lihat Semua Artikel <span class="jumlah text-muted">(12 Artikel)</span></h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <div class="faq--item">
                                        <div class="faq-title">
                                            <h6 class="title"><a href="<?php base_url() ?>/detail_artikel">Bagaimana cara menangani masalah koneksi jaringan yang sering putus?</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="email">
                        <h3 class="main-title">Email</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">Lihat Semua Artikel <span class="jumlah text-muted">(12 Artikel)</span></h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <div class="faq--item">
                                        <div class="faq-title">
                                            <h6 class="title"><a href="<?php base_url() ?>/detail_artikel">How can I get my money back?</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="domain">
                        <h3 class="main-title">Domain</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">Lihat Semua Artikel <span class="jumlah text-muted">(12 Artikel)</span></h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <div class="faq--item">
                                        <div class="faq-title">
                                            <h6 class="title"><a href="<?php base_url() ?>/detail_artikel">How can I get my money back?</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="data">
                        <h3 class="main-title">Data</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">Lihat Semua Artikel <span class="jumlah text-muted">(12 Artikel)</span></h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <div class="faq--item">
                                        <div class="faq-title">
                                            <h6 class="title"><a href="<?php base_url() ?>/detail_artikel">How can I get my money back?</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="kemitraan">
                        <h3 class="main-title">Kemitraan</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">Lihat Semua Artikel <span class="jumlah text-muted">(12 Artikel)</span></h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <div class="faq--item">
                                        <div class="faq-title">
                                            <h6 class="title"><a href="<?php base_url() ?>/detail_artikel">How can I get my money back?</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="hosting">
                        <h3 class="main-title">Hosting</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">Lihat Semua Artikel <span class="jumlah text-muted">(12 Artikel)</span></h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <div class="faq--item">
                                        <div class="faq-title">
                                            <h6 class="title"><a href="<?php base_url() ?>/detail_artikel">How can I get my money back?</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="seranganCyber">
                        <h3 class="main-title">Serangan Cyber</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">Lihat Semua Artikel <span class="jumlah text-muted">(12 Artikel)</span></h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <div class="faq--item">
                                        <div class="faq-title">
                                            <h6 class="title"><a href="<?php base_url() ?>/detail_artikel">How can I get my money back?</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="jaringan">
                        <h3 class="main-title">Jaringan</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">Lihat Semua Artikel <span class="jumlah text-muted">(12 Artikel)</span></h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <div class="faq--item">
                                        <div class="faq-title">
                                            <h6 class="title"><a href="<?php base_url() ?>/detail_artikel">How can I get my money back?</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="informasi">
                        <h3 class="main-title">Informasi</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">Lihat Semua Artikel <span class="jumlah text-muted">(12 Artikel)</span></h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <div class="faq--item">
                                        <div class="faq-title">
                                            <h6 class="title"><a href="<?php base_url() ?>/detail_artikel">How can I get my money back?</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!--============= Faqs Section Ends Here =============-->


<?= $this->endSection() ?>