<?= $this->extend('layout/artikel_layout') ?>

<?= $this->section('content') ?>
        <!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
            <div class="container-fluid">
               <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Layout</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Blank</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-5 col-xxl-12">
                                        <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                            <div class="new-arrivals-img-contnent">
                                                <img class="img-fluid" src="images/thumbnails/1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xxl-12">
                                        <div class="new-arrival-content position-relative">
                                            <h4><a href="ecom-product-detail.html">Bagaimana cara menangani masalah koneksi jaringan yang sering putus?</a></h4>
											<p>Kategori Artikel: <span class="item"></span> Jaringan </p>
											<p>Status Artikel: <span class="item"> Tayang <i class="fa fa-check-circle text-success"></i></span></p>
                                            <p>Penulis: <span class="item">Aulia Maharani</span></p>
                                        </div>
                                    </div>
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
<?= $this->endSection() ?>