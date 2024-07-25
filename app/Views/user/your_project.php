<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row-center">
        <div class=" col">
            <a class="nav-link" href="<?= site_url('/profil') ?>"><b>Kembali</b></a>
            <h1 class="my-4">Your Project</h1><br><br>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('pesan_delete')) : ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <?= session()->getFlashdata('pesan_delete'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <div class="d-flex flex-column mb-3">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <?php foreach ($project as $p) : ?>
                        <div class="col-sm-6">
                            <div class="card h-100">
                                <a href="/your_project/detail/<?= $p['slug']; ?>" class="nav-link">
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