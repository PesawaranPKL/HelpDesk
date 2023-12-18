<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<style>
    /* untuk indentasi berdasarkan level */
    .indent {
        margin-left: 20px;
    }
</style>

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
                                <h4 class="card-title">Data Chatbot</h4>
                                <a style="float: right" href="<?php base_url() ?>/dashboard/admin/chatbot/tambah" class="btn btn-sm btn-primary"  role="button"><i data-feather="plus"></i>Tambah</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="display table-responsive-lg">
                                        <thead>
                                            <tr>
                                                <th>Chat</th>
                                                <th>Aksi</th>

                                                <!-- <th>ID</th>
                                                <th>Kategori Chat</th>
                                                <th>Url Rekomendasi</th>
                                                <th>Aksi</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($hierarki as $hirar) : ?>
                                                <tr>
                                                    <td class="indent"  style="padding-left: <?= $hirar['level'] * 20; ?>px;"><?= $hirar['name_chat'] ?> <?= $hirar['id_chat'] ?></td>
                                                    <td>
                                                        <div class="dropdown ms-auto">
                                                            <div class="btn-link" data-bs-toggle="dropdown">
                                                                <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="<?php base_url()?>/dashboard/admin/chatbot/edit">Edit</a>
                                                                <a class="dropdown-item" href="<?php base_url()?>/dashboard/admin/chatbot/hapus">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                            <!-- <tr>
                                                <td>#H001</td>
                                                <td>Jaringan</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-success me-1"></i>
														Induk
													</span>
												</td>
                                                <td>
													<div class="dropdown ms-auto text-end">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="<?php base_url()?>/dashboard/admin/chatbot/edit">Edit</a>
                                                            <a class="dropdown-item" href="<?php base_url()?>/dashboard/admin/chatbot/hapus">Hapus</a>
														</div>
													</div>
												</td>												
                                            </tr> -->

                                            
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

        <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Chatbot</h4>
                            <a style="float: right" href="<?php base_url() ?>/dashboard/admin/chatbot/tambah" class="btn btn-sm btn-primary"  role="button"><i data-feather="plus"></i>Tambah</a>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">

                            <table  class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th>Chat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1;
                                foreach ($hierarki as $hirar) : ?>
                                    <tr>
                                        <td>
                                            <?= $no++ ?>
                                        </td>
                                        <td class="indent" style="padding-left: <?= $hirar['level'] * 20; ?>px;">
                                            <?= $hirar['name_chat']; ?>
                                        </td>
                                        <td>
                                            <div class="dropdown ms-auto">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="<?php base_url()?>/dashboard/admin/chatbot/edit/<?= $hirar['id_chat'] ?>">Edit</a>
                                                    <a class="dropdown-item" href="<?php base_url()?>/dashboard/admin/chatbot/hapus/<?= $hirar['id_chat'] ?>">Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>



        <!-- hirarki info induk (belum bisa)-->

        <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Chatbot</h4>
                            <a style="float: right" href="<?php base_url() ?>/dashboard/admin/chatbot/tambah" class="btn btn-sm btn-primary"  role="button"><i data-feather="plus"></i>Tambah</a>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">

                            <table  class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Chat</th>
                                        <th scope="col">Anak Dari</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($hierarki as $item) : ?>
                                    <tr>
                                        <td class="indent" style="padding-left: <?= $item['level'] * 20; ?>px;"><?= $item['name_chat']; ?></td>
                                        <td><?= isset($item['is_child']) ? ($item['is_child'] ? 'Ya' : 'Tidak') : ''; ?></td>
                                    </tr>

                                    <?php if (!empty($item['children']) && is_array($item['children'])) : ?>
                                        <?php foreach ($item['children'] as $child) : ?>
                                            <tr>
                                                <td class="indent" style="padding-left: <?= $child['level'] * 20; ?>px;"><?= $child['name_chat']; ?></td>
                                                <td><?= isset($child['is_child']) ? ($child['is_child'] ? 'Ya' : 'Tidak') : ''; ?></td>
                                            </tr>

                                            <?php if (!empty($child['children']) && is_array($child['children'])) : ?>
                                                <?php foreach ($child['children'] as $grandchild) : ?>
                                                    <!-- ... Output untuk tabel cucu ... -->
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>


                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>




<?= $this->endSection() ?>


