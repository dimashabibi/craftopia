<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row-center">
        <div class=" col">
            <h1 class="mt-2">Share Your Project Here!</h1><br><br>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            <?php endif; ?>
            <div class="d-flex flex-column mb-3">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">share your work to inspire people</h5>
                        </div>
                        <div class="d-grid gap-2 mt-5 mb-4 ">
                            <a class="btn btn-primary" href="<?= site_url('create_project') ?>" role="button">Create Your Project</a>
                        </div>
                    </div>
                    <?php foreach ($project as $p) : ?>
                        <div class="col-sm-6">
                            <div class="card h-100">
                                <a href="/project/detail/<?= $p['slug']; ?>" class="nav-link">
                                    <div class="card-header bg-transparent">
                                        <div class="text-center ms-2 me-2 mt-2">
                                            <img src="/img/<?= $p['gambar']; ?>" class="card-img-top" alt="..." class="card-image-top" style="max-width: 300px;">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <label for="judul"><b>Judul :</b></label>
                                        <h4 class="card-title" id="judul"><?= $p['judul']; ?></h4>
                                        <label for="penulis" class="mt-2"><b>Penulis :</b></label>
                                        <p class="card-text" id="penulis"><?= $p['penulis']; ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col" style="margin-left: 615px;">

            <?= $pager->links('project', 'project_pagination'); ?>

        </div>
    </div>
</div>

<br><br>

<?= $this->endSection(); ?>