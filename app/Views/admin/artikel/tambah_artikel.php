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
            <?php if ($case == "tambah") {
              echo "Form Tambah Artikel";
            } elseif ($case == "edit") {
              echo "Form Edit Artikel";
            } ?>
          </a></li>
      </ol>
    </div>
    <?php if ($case == "tambah") { ?>
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
                      <input type="text" class="form-control" placeholder="Judul Artikel" name="judul_artikel" id="judul_artikel" required />
                      <?php if (session('validation') && session('validation')->hasError('judul_artikel')) : ?>
                        <span class="text-danger">
                          <?= session('validation')->getError('judul_artikel') ?>
                        </span>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label"><strong>Kategori Artikel</strong></label>
                    <div class="col-sm-9">
                      <select id="kategori" class="default-select form-control wide" placeholder="Kategori Artikel" name="id_kategori" required>
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
                          <input class="form-check-input" type="radio" name="status" value="Tayang" checked="" required />
                          <label class="form-check-label"> Tayang </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" value="Tidak Tayang" required />
                          <label class="form-check-label"> Tidak Tayang </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label"><strong>Artikel Thumbnail</strong></label>
                    <div class="col-sm-9">
                      <input class="form-control" type="file" id="thumbnail" name="thumbnail" required>
                      <div class="d-flex justify-content-center my-2" id="thumbnailContainer" style="visibility: hidden;">
                        <img src="" id="perview_thumbnail" alt="Thumbnail" width="70%" height="50%">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label"><strong>Isi Artikel</strong></label>
                    <div class="col-sm-9">
                      <textarea name="isi_artikel" id="ckeditor"></textarea>
                    </div>
                  </div>
                  <div class="row col-xl-12 col-xxl-6 float-end">
                    <div class="col-md-6 mb-2">
                      <button class="btn btn-primary btn-block" type="submit">Simpan Artikel</button>
                    </div>
                    <div class="col-md-6">
                      <a href="#!" data-bs-toggle="modal" data-bs-target="#tinjauArtikel" onclick="myFunction()">
                        <button class="btn btn-dark btn-block" type="button">Tinjau Artikel</button></a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


    <?php } elseif ($case == "edit") { ?>
      <!-- Row Edit artikel -->
      <div class="row">
        <div class="col-xl-12 col-xxl-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"><strong>Edit Artikel</strong></h4>
            </div>

            <div class="card-body custom-ekeditor">
              <div class="basic-form">
                <form action="<?= htmlentities(base_url('dashboard/admin/artikel/edit/' . $artikel->id_artikel), ENT_QUOTES) ?>" method="post" enctype="multipart/form-data">
                  <?php csrf_field() ?>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label"><strong>Judul Artikel</strong></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Judul Artikel" id="judul_artikel" name="judul_artikel" value="<?= $artikel->judul_artikel ?>" />
                      <?php if (session('validation') && session('validation')->hasError('judul_artikel')) : ?>
                        <span class="text-danger">
                          <?= session('validation')->getError('judul_artikel') ?>
                        </span>
                      <?php endif; ?>
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
                      <?php if ($artikel->status == "tayang") { ?>
                        <div class="col-sm-9">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Tayang" checked />
                            <label class="form-check-label"> Tayang </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Tidak Tayang" />
                            <label class="form-check-label"> Tidak Tayang </label>
                          </div>
                        </div>
                      <?php } elseif ($artikel->status == "tidak tayang") { ?>
                        <div class="col-sm-9">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Tayang" />
                            <label class="form-check-label"> Tayang </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Tidak Tayang" checked />
                            <label class="form-check-label"> Tidak Tayang </label>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                  </fieldset>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label"><strong>Artikel Thumbnail</strong></label>
                    <div class="col-sm-9">
                      <input class="form-control" type="file" accept=".png, .jpg, .jpeg" id="thumbnail" name="thumbnail">
                      <div class="d-flex justify-content-center my-2" id="thumbnailContainer" style="visibility: hidden;">
                        <img src="" id="perview_thumbnail" alt="Thumbnail" width="70%" height="50%">
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label"><strong>Isi Artikel</strong></label>
                    <div class="col-sm-9">
                      <textarea name="isi_artikel" id="ckeditor"><?= $artikel->isi_artikel ?></textarea>
                    </div>
                  </div>
                  <div class="row col-xl-12 col-xxl-6 float-end">
                    <div class="col-md-6 mb-2">
                      <button class="btn btn-primary btn-block" type="submit">Simpan Artikel</button>
                    </div>
                    <div class="col-md-6">
                      <a href="#!" data-bs-toggle="modal" data-bs-target="#tinjauArtikel" onclick="myFunction()">
                        <button class="btn btn-dark btn-block" type="button">Tinjau Artikel</button></a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

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
        <div class="d-flex justify-content-center mb-3">
          <img src="" id="modal_thumbnail" alt="Thumbnail" width="70%" height="50%">
        </div>
        <div class="d-flex justify-content-center">
          <h1 class="title" style="text-transform: capitalize; font-weight: bold;" id="modal_judul_artikel"></h1>
        </div>
        <p id="modal_isi_artikel"></p>

        <script>
          CKEDITOR.replace('isi_artikel', {
            toolbar: [{
                name: 'clipboard',
                groups: ['clipboard', 'undo'],
                items: ['Cut', 'Copy', 'Paste', '-', 'Undo', 'Redo']
              },
              {
                name: 'editing',
                groups: ['find', 'selection', 'spellchecker'],
                items: ['Find', 'Replace']
              },
              {
                name: 'basicstyles',
                groups: ['basicstyles', 'cleanup'],
                items: ['Bold', 'Italic', 'Underline', '-', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']
              },
              {
                name: 'paragraph',
                groups: ['list', 'indent', 'blocks', 'align', 'bidi'],
                items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-']
              },
              {
                name: 'links',
                items: ['Link', 'Unlink']
              },
              {
                name: 'insert',
                items: ['Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar']
              },
              {
                name: 'styles',
                items: ['Styles', 'Format', 'Font', 'FontSize']
              },
              {
                name: 'colors',
                items: ['TextColor', 'BGColor']
              },
              {
                name: 'others',
                items: ['-']
              },
            ],
            on: {
              instanceReady: function(event) {
                if (event.editor.name === 'isi_artikel') {
                  myFunction();
                }
              }
            }
          });

          function myFunction() {
            //Perview Thumbnail
            var fileInput = document.getElementById("thumbnail");

            if (fileInput.files.length > 0) {
              var file = fileInput.files[0];
              var reader = new FileReader();

              reader.onload = function(e) {
                var imageData = e.target.result;
                var modalThumbnail = document.getElementById("modal_thumbnail");
                modalThumbnail.src = imageData;
              };

              //Baca data file jadi URL
              reader.readAsDataURL(file);
            } else {
              alert("Please select a thumbnail image.");
            }

            //Perview Judul Artikel
            var y = document.getElementById("judul_artikel").value;
            document.getElementById("modal_judul_artikel").innerHTML = y;

            //Perview Isi Artikel
            var z = CKEDITOR.instances['isi_artikel'].getData();
            document.getElementById("modal_isi_artikel").innerHTML = z;
          }
        </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script>
  function previewThumbnail() {
    const thumbnailInput = document.getElementById("thumbnail");
    const thumbnailContainer = document.getElementById("thumbnailContainer");
    const perviewThumbnail = document.getElementById("perview_thumbnail");

    const fileThumbnail = new FileReader();

    fileThumbnail.readAsDataURL(thumbnailInput.files[0]);

    fileThumbnail.onload = function(e) {
      const imageSrc = e.target.result;

      if (imageSrc) {
        perviewThumbnail.src = imageSrc;
        thumbnailContainer.style.visibility = "visible"; // menampilkaan container div image
      } else {
        perviewThumbnail.src = "";
        thumbnailContainer.style.visibility = "hidden"; // menyembunyikan container div image
      }
    };
  }

  document.getElementById("thumbnail").addEventListener("change", previewThumbnail);
</script>

<!--**********************************
            Content body end
        ***********************************-->
<?= $this->endSection() ?>