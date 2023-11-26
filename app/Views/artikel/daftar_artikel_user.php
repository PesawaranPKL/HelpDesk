<?= $this->extend('layout/user_layout') ?>

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
            <?php foreach ($artikel as $a) : ?>
                <div class="col-lg-12 col-xl-3">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="/assets/admin/images/artikel/thumbnails/<?= $a['thumbnail']; ?>" alt="Thumbnail">
                        <div class="card-body">
                            <a href="/dashboard/admin/artikel/details/<?= $a['id_artikel']; ?>" class="popular-item px-2 position-relative">
                                <div class="popular-content pl-2">
                                    <span class="info"><?= $a['kategori']; ?></span>
                                    <p><?= $a['judul_artikel']; ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--============= Faqs Section Ends Here =============-->


<?= $this->endSection() ?>