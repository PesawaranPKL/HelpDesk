<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <div class="container-fluid">
    <div class="row page-titles">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Artikel</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">
          <?php if($case == "tambah"){
            echo "Form Tambah Artikel";
          }elseif($case == "edit"){
            echo "Form Edit Artikel";
          } ?>
        </a></li>
      </ol>
    </div>
    <?php if($case == "tambah"){ ?>
    <!-- Row Tambah artikel -->
    <div class="row">
      <div class="col-xl-12 col-xxl-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><strong>Tambah Artikel</strong></h4>
          </div>

          <div class="card-body custom-ekeditor">
            <div class="basic-form">
              <form action="<?= htmlentities(base_url('dashboard/admin/artikel/tambah/'), ENT_QUOTES) ?>" method="post" enctype="multipart/form-data">
              <?php csrf_field() ?>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label"><strong>Judul Artikel</strong></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Judul Artikel" name="judul_artikel" />
                    <?php if (session('validation') && session('validation')->hasError('judul_artikel')): ?>
                        <span class="text-danger">
                            <?= session('validation')->getError('judul_artikel') ?>
                    </span>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label"><strong>Kategori Artikel</strong></label>
                  <div class="col-sm-9">
                    <select id="inputState" class="default-select form-control wide" placeholder="Kategori Artikel" name="id_kategori">
                      <?php foreach ($kategori as $k) : ?>
                        <option value="<?= $k['id_kategori']; ?>"><?= $k['kategori']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <fieldset class="mb-3">
                  <div class="row">
                    <label class="col-form-label col-sm-3 pt-0"><strong>Status Tayang</strong></label>
                    <div class="col-sm-9">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="Tayang" checked="" />
                        <label class="form-check-label"> Tayang </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="Tidak Tayang" />
                        <label class="form-check-label"> Tidak Tayang </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label"><strong>File Pendukung</strong></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="file" id="formFile" name="thumbnail">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label"><strong>Isi Artikel</strong></label>
                  <div class="col-sm-9">
                    <textarea name="isi_artikel" id="ckeditor"></textarea>
                  </div>
                </div>
                <div class="col-xl-12 col-xxl-6">
                  <div class="col-md-6 mb-2">
                    <button class="btn btn-primary btn-block" type="submit">Simpan Artikel</button>
                  </div>
                </div>
              </form>

              <div class="col-xl-12 col-xxl-6">
                <div class="col-xl-6">
                  <button class="btn btn-dark btn-block" data-bs-toggle="modal" data-bs-target="#tinjauArtikel">Tinjau Artikel</button>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="tinjauArtikel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Modal Tinjau Artikel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Preview Artikel</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="col-xl-8 col-lg-7 mb-70">
                        <div class="knowledge-single">
                          <div class="knowledge-header">
                            <h2 class="title">judul Artikel</h2>
                          </div>

                          <div class="know-single-item">
                            <div class="video-wrapper mb-3">
                              <img src="" alt="Thumbnail">
                            </div>
                            <p>Isi Artikel</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif($case == "edit"){ ?>
      <!-- Row Edit artikel -->
      <div class="row">
        <div class="col-xl-12 col-xxl-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"><strong>Edit Artikel</strong></h4>
            </div>

            <div class="card-body custom-ekeditor">
              <div class="basic-form">
                <form action="<?= base_url('dashboard/admin/artikel/edit/'.$artikel->id_artikel) ?>" method="post" enctype="multipart/form-data">
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label"><strong>Judul Artikel</strong></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Judul Artikel" name="judul_artikel" value="<?= $artikel->judul_artikel ?>"/>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label"><strong>Kategori Artikel</strong></label>
                    <div class="col-sm-9">
                      <select id="inputState" class="default-select form-control wide" name="id_kategori">
                        <option value="<?= $artikel->id_kategori ?>" disabled selected>Kategori Artikel</option>
                        <?php foreach ($kategori as $k) : ?>
                          <option value="<?= $k['id_kategori']; ?>"><?= $k['kategori']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <fieldset class="mb-3">
                    <div class="row">
                      <label class="col-form-label col-sm-3 pt-0"><strong>Status Tayang</strong></label>
                      <?php if($artikel->status == "tayang"){ ?>
                      <div class="col-sm-9">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" value="Tayang" checked/>
                          <label class="form-check-label"> Tayang </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" value="Tidak Tayang" />
                          <label class="form-check-label"> Tidak Tayang </label>
                        </div>
                      </div>
                      <?php }elseif($artikel->status == "tidak tayang"){ ?>
                      <div class="col-sm-9">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" value="Tayang"/>
                          <label class="form-check-label"> Tayang </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" value="Tidak Tayang" checked/>
                          <label class="form-check-label"> Tidak Tayang </label>
                        </div>
                      </div>
                      <?php } ?>

                    </div>
                  </fieldset>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label"><strong>File Pendukung</strong></label>
                    <div class="col-sm-9">
                      <input class="form-control" type="file" accept=".png, .jpg, .jpeg" id="formFile" name="thumbnail">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label"><strong>Isi Artikel</strong></label>
                    <div class="col-sm-9">
                      <textarea name="isi_artikel" id="ckeditor"><?= $artikel->isi_artikel ?></textarea>
                    </div>
                  </div>
                  <div class="col-xl-12 col-xxl-6">
                    <div class="col-md-6 mb-2">
                      <button class="btn btn-primary btn-block" type="submit">Simpan Artikel</button>
                    </div>
                  </div>
                </form>

                <div class="col-xl-12 col-xxl-6">
                  <div class="col-xl-6">
                    <button class="btn btn-dark btn-block" data-bs-toggle="modal" data-bs-target="#tinjauArtikel">Tinjau Artikel</button>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="tinjauArtikel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Modal Tinjau Artikel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Preview Artikel</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="col-xl-8 col-lg-7 mb-70">
                          <div class="knowledge-single">
                            <div class="knowledge-header">
                              <h2 class="title">judul Artikel</h2>
                            </div>

                            <div class="know-single-item">
                              <div class="video-wrapper mb-3">
                                <img src="" alt="Thumbnail">
                              </div>
                              <p>Isi Artikel</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>


  </div>
</div>

<!--**********************************
            Content body end
        ***********************************-->
<?= $this->endSection() ?>