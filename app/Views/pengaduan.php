<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<!--============= Banner Section Starts Here =============-->
<div class="hero-section bg_img style-three" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="section-header cl-white">
                <h2 class="title">Formulir Pengaduan</h2>
                <p>Silahkan lengkapi formulir dibawah ini</p>
            </div>
        </div>
    </div>
    <!--============= Banner Section Ends Here =============-->


    <!--============= Pengaduan Section Starts Here =============-->
    <section class="pengaduan-section padding-bottom mt--230 pos-rel">
        <div class="container">
            <div class="pengaduan-wrapper">
                <div class="pengaduan-item">
                    <form class="g-3 validasi_pengaduan" novalidate>
                        <div class="position-relative mb-3">
                            <label for="nama_pengadu" class="form-label mb-0">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_pengadu" required>
                            <div class="invalid-tooltip"> Silahkan masukkan nama anda</div>
                        </div>
                        <div class="position-relative mb-3">
                            <label for="nama_instansi" class="form-label mb-0">Nama Instansi</label>
                            <input type="text" class="form-control" id="nama_instansi" required>
                            <div class="invalid-tooltip"> Silahkan masukkan instansi anda</div>
                        </div>
                        <div class="position-relative mb-3">
                            <label for="email" class="form-label mb-0">Email</label>
                            <input type="email" class="form-control" id="email" required placeholder="ex: nama_email.email.com">
                            <div class="invalid-tooltip"> Silahkan masukkan alamat email anda</div>
                        </div>
                        <div class="position-relative mb-3">
                            <label for="no_hp" class="form-label mb-0">Nomor HP</label>
                            <input type="text" class="form-control" id="no_hp" maxlength="13" onkeypress="return hanyaAngka(event)" required>
                            <div class="invalid-tooltip"> Silahkan masukkan nomor hp anda</div>
                        </div>
                        <div class="position-relative mb-3">
                            <label for="kategori" class="form-label mb-0">Kategori Aduan</label>
                            <select class="form-select" id="kategori" required>
                                <option selected disabled value="">Pilih kategori...</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-tooltip">
                                Silahkan pilih kategori pengaduan anda
                            </div>
                        </div>
                        <div class="position-relative mb-3">
                            <label for="deskripsi" class="form-label mb-0">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" rows="3" required></textarea>
                            <div class="invalid-tooltip"> Silahkan masukkan penjelasan deskripsi anda</div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">File Pendukung</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <button class="btn custom-button" type="submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--============= Pengaduan Section Ends Here =============-->
    

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.validasi_pengaduan')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>
<?= $this->endSection() ?>