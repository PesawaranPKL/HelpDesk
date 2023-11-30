<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->

                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Daftar Pengaduan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display table-responsive-lg">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Pengadu</th>
                                                <th>Nama Instansi</th>
                                                <th>Kategori Aduan</th>
                                                <th>Deskripsi</th>
                                                <th>File Pendukung</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#H001</td>
                                                <td>Siti Kholisah Aulia</td>
                                                <td>Dinas Kominfo</td>
                                                <td>Jaringan</td>
                                                <td>
                                                    <button class="btn btn-primary btn-xxs shadow p-2 mt-2 mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCol1" aria-expanded="false" aria-controls="collapseExample">
                                                    Lihat Detail
                                                    </button>                                                    
                                                </td>
                                                <td>
                                                    <a href="<?php base_url()?>/assets/admin/file/berkas.pdf" target="_blank" style="color:#000">Lihat Berkas</a>
                                                </td>
												<td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger me-1"></i>
														Belum Diproses
													</span>
												</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="<?php base_url()?>/dashboard/admin/detail_pengaduan=sedang_diproses">Proses Aduan</a>
															<a class="dropdown-item" href="<?php base_url()?>/dashboard/admin/detail_pengaduan=belum_diproses">Lihat Detail Aduan</a>
														</div>
													</div>
												</td>												
                                            </tr>
                                            <!-- Start Menampilkan Detail Deskripsi menggunakan ID pada kolom yang di merge -->
                                            <tr>
                                                <td colspan="8">
                                                    <div class="collapse" id="collapseCol1">
                                                        <div class="card card-body mb-0">
                                                            Saya ingin melaporkan masalah seringnya putusnya koneksi jaringan internet yang saya alami. Dalam beberapa minggu terakhir, saya mengalami gangguan yang menyebabkan putusnya koneksi secara tiba-tiba. Masalah ini menghambat produktivitas kerja saya dan mengganggu aktivitas online saya.
                                                            Saya telah mencoba mereset router dan memeriksa kabel-kabel, namun masalah ini tetap berlanjut. Mohon bantuan untuk mengatasi masalah ini dengan segera, agar saya dapat menggunakan layanan internet dengan lancar.
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- End Menampilkan Detail Deskripsi menggunakan ID pada kolom yang di merge -->
                                            <tr>
                                                <td>#H002</td>
                                                <td>Fadila Eka Noperta</td>
												<td>Dinas Kominfo</td>
                                                <td>Jaringan</td>
                                                <td>
                                                    <button class="btn btn-primary btn-xxs shadow p-2 mt-2 mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCol2" aria-expanded="false" aria-controls="collapseExample">
                                                    Lihat Detail
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="<?php base_url()?>/assets/admin/file/berkas.pdf" target="_blank" style="color:#000">Lihat Berkas</a>
                                                </td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning me-1"></i>
														Sedang Diproses
													</span>
												</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="<?php base_url()?>/dashboard/admin/detail_pengaduan=sedang_diproses">Solusi Aduan</a>
															<a class="dropdown-item" href="<?php base_url()?>/dashboard/admin/detail_pengaduan=sedang_diproses">Lihat Detail Aduan</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <!-- Start Menampilkan Detail Deskripsi menggunakan ID pada kolom yang di merge -->
                                            <tr>
                                                <td colspan="8">
                                                    <div class="collapse" id="collapseCol2">
                                                        <div class="card card-body mb-0">
                                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur consequuntur eius fugiat molestias id quasi iste eligendi cupiditate perferendis quae eos exercitationem odio totam, eveniet consequatur praesentium alias. Labore, beatae.
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- End Menampilkan Detail Deskripsi menggunakan ID pada kolom yang di merge -->
                                            <tr>
                                                <td>#H003</td>
                                                <td>Wulan Destyaningsih</td>
												<td>Dinas Kominfo</td>
                                                <td>Jaringan</td>
                                                <td>
                                                    <button class="btn btn-primary btn-xxs shadow p-2 mt-2 mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCol3" aria-expanded="false" aria-controls="collapseExample">
                                                    Lihat Detail
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="<?php base_url()?>/assets/admin/file/berkas.pdf" target="_blank" style="color:#000">Lihat Berkas</a>
                                                </td>
                                                <td>
													<span class="badge light badge-success">
														<i class="fa fa-circle text-success me-1"></i>
														Selesai Diproses
													</span>
												</td>
												<td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="<?php base_url()?>/dashboard/admin/detail_pengaduan=sudah_diproses">Lihat Detail Aduan</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <!-- Start Menampilkan Detail Deskripsi menggunakan ID pada kolom yang di merge -->
                                            <tr>
                                                <td colspan="8">
                                                    <div class="collapse" id="collapseCol3">
                                                        <div class="card card-body mb-0">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ullam temporibus dolorum voluptate sint impedit recusandae voluptates, pariatur repellat. Neque necessitatibus voluptatem commodi nisi ratione autem ipsa hic dolorem ut.
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- End Menampilkan Detail Deskripsi menggunakan ID pada kolom yang di merge -->
                                        </tbody>
                                    </table>
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

<!-- <?= session()->get('role'); ?> -->

<?= $this->endSection() ?>