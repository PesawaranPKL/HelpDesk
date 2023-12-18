<?php $this->extend("layout/admin_layout"); ?>

<?php $this->section("content"); ?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">FAQ List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // koneksi db $db
                                    $query = $db->query("SELECT * FROM faqs");
                                    $faqs = $query->getResult();

                                    foreach ($faqs as $faq) {
                                        echo "<tr>";
                                        echo "<td>{$faq->id}</td>";
                                        echo "<td>{$faq->question}</td>";
                                        echo "<td>{$faq->answer}</td>";
                                        echo "<td><a href='edit_faq.php?id={$faq->id}'>Edit</a> | <a href='delete_faq.php?id={$faq->id}'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>