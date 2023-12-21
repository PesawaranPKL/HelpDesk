<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="<?php base_url()?>/dashboard/admin/chatbot">ChatBot</a></li>
						<li class="breadcrumb-item">Tambah</li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Tambah ChatBot</h4>
                            </div>
                            <div class="card-body">
                                <div class="compose-content">
                                    <form action="<?= htmlentities(base_url('dashboard/admin/chatbot/tambah/'), ENT_QUOTES) ?>" method="post">
                                    <?php csrf_field() ?>
                                    <div class="mb-3 row">
                                        <div class="col-sm-6 mt-3">
                                            <input type="text" class="form-control" placeholder="Kategori Chatbot" name="nama_chat_bot" id="judul_artikel" required />
                                            <?php if (session('validation') && session('validation')->hasError('nama_chat_bot')) : ?>
                                                <span class="text-danger">
                                                <?= session('validation')->getError('nama_chat_bot') ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <?php if($chatbot){?>
                                        <div class="col-sm-6 mt-3">
                                            <select id="id_tipe" class="default-select form-control wide" name="id_tipe">
                                                <option value="" disabled selected>Pilih Tipe Chat</option>
                                                <option value="1" >Induk</option>
                                                <option value="2" >Anak</option>
                                            </select>
                                            <?php if (session('validation') && session('validation')->hasError('id_tipe')) : ?>
                                                <span class="text-danger">
                                                <?= session('validation')->getError('id_tipe') ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <?php } ?>
                                        <div class="col-sm-6 mt-3" id="id_induk">
                                            <select class="default-select form-control wide" name="id_induk" hidden>
                                                <optgroup label="Induk 1">
                                                    <option value="1" selected>Pilih Induk Chat</option>
                                                    <option value="2">Anak Chat</option>
                                                </optgroup>
                                            </select>
                                            <?php if (session('validation') && session('validation')->hasError('id_induk')) : ?>
                                                <span class="text-danger">
                                                <?= session('validation')->getError('id_induk') ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                        <div class="text-start mt-4 mb-3">
                                            <button class="btn btn-primary btn-sm me-2" type="button"><span class="me-2"><i class="fa fa-save"></i></span>Simpan</button>
                                        </div>
                                    </form>
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

<?= $this->section('script') ?>

<script src="<?php base_url(); ?>/assets/admin/js/select2.min.js" crossorigin="anonymous"></script>
<script>
    $(".theSelect").select2();
</script>
<!-- hidden Select-->
<script>
    $(function() {
        $('#id_induk').hide();
        $('#id_tipe').change(function() {
            if ($('#id_tipe').val() == '2') {
                $('#id_induk').show();
                createByJson();
            } else {
                $('#id_induk').hide();
            }
        });
    });
</script>

<?= $this->endSection() ?>