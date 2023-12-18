<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="tracking_ticket">
    <!--============= Banner Section Starts Here =============-->
    <section class="banner-1 bg_img" data-background="assets/images/banner/banner-2.jpg">
        <div class="container">
            <div class="banner-content cl-white">
                <h1 class="title">Cek Status Pengaduan</h1>
            </div>
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->

    
    <!--============= How Search Section Starts Here =============-->
    <div class="how-search-section padding-bottom mt--330 mb-100">
        <div class="container">
            <form  class="search-form">
                <input type="text" placeholder="Masukkan Token Ticket yang didapatkan di Email">
                <button type="submit"><i class="flaticon-search"></i> <span class="d-none d-sm-inline-block">Cari</span></button>
            </form>
        </div>
    </div>
    <!--============= How Search Section Ends Here =============-->
</div>

<?= $this->endSection() ?>