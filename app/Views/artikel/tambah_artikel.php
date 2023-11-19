<?= $this->extend('layout/artikel/artikel_admin_layout') ?>

<?= $this->section('content') ?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <div class="container-fluid">
    <div class="row page-titles">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Artikel</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Form Tambah Artikel</a></li>
      </ol>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-xl-12 col-xxl-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><strong>Tambah Artikel</strong></h4>
          </div>

          <div class="card-body custom-ekeditor">
            <div class="basic-form">
              <form>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label"><strong>Judul Artikel</strong></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Judul Artikel" />
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label"><strong>Author</strong></label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Author" />
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label"><strong>Kategori Artikel</strong></label>
                  <div class="col-sm-9">
                    <select id="inputState" class="default-select form-control wide" placeholder="Kategori Artikel">
                      <option>API</option>
                      <option>Email</option>
                      <option>Domain</option>
                      <option>Data</option>
                      <option>Kemitraan</option>
                      <option>Hosting</option>
                      <option>Serangan Cyber</option>
                      <option>Jaringan</option>
                      <option>Informasi</option>
                    </select>
                  </div>
                </div>
                <fieldset class="mb-3">
                  <div class="row">
                    <label class="col-form-label col-sm-3 pt-0"><strong>Status Tayang</strong></label>
                    <div class="col-sm-9">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked="" />
                        <label class="form-check-label"> Tayang </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" value="option2" />
                        <label class="form-check-label"> Tidak Tayang </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label"><strong>File Pendukung</strong></label>
                  <div class="col-sm-9">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label"><strong>Isi Artikel</strong></label>
                  <div class="col-sm-9">
                    <div id="ckeditor"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-md-6 mb-2">
                <button class="btn btn-primary btn-block">Simpan Artikel</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-dark btn-block" data-bs-toggle="modal" data-bs-target="#tinjauArtikel">Tinjau Artikel</button>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="tinjauArtikel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Modal Tinjau Artikel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
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