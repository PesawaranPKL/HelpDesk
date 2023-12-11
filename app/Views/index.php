<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

    <!--============= Banner Section Starts Here =============-->
    <section class="banner-1 bg_img" data-background="assets/images/banner/banner-1.jpg">
        <div class="container">
            <div class="banner-content cl-white">
                <h1 class="title">Halaman Beranda</h1>
                <p>Coming Soon</p>
            </div>
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->

    
    <!--============= How Search Section Starts Here =============-->
    <div class="how-search-section padding-bottom mt--83">
        <div class="container">
            <form  class="search-form">
                <input type="text" placeholder="Start typing your search…">
                <button type="submit"><i class="flaticon-search"></i> <span class="d-none d-sm-inline-block">Search</span></button>
            </form>
            <div class="how-search-wrapper">
                
            </div>
        </div>
    </div>
    <!--============= How Search Section Ends Here =============-->

<?= $this->endSection() ?>