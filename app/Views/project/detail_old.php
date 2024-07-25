<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class=container>
    <div class=row>
        <div class=col>
            <a href="/project" class="nav-link my-2"><b>Kembali</b></a>
            <h2 class="mt-2 mb-3"><?= $project['judul']; ?></h2>
            <div class="card" style="max-width: 800px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="ms-4 mt-4">
                            <img src="/img/<?= $project['gambar']; ?>" class="img-fluid rounded-start" alt="..."><br><br>
                        </div>
                        <div class="my-4 text-center">
                            <a href="/project/edit/<?= $project['slug']; ?>" class="btn btn-outline-warning">Edit</a>
                            <a href="<?= site_url('delete_project/' . $project['id']); ?>" class="btn btn-outline-danger" role="button" onclick="return confirm('apakah anda yakin?')">Delete</a>
                        </div>
                    </div>
                    <div class="col-md-4 me-auto">
                        <div class="card-body ms-4 mt-4">
                            <p class="card-title"><b>Penulis : </b> <?= $project['penulis']; ?></p>
                            <p class="card-text"><small class="text-body-secondary"><b>Tentang : </b><?= $project['deskripsi']; ?></small></p>
                            <p class="card-text"><small class="text-body-secondary"><b>Material Dasar : </b><?= $project['material']; ?></small></p>
                            <p class="card-text"><small class="text-body-secondary"><b>Level : </b><?= $project['skill']; ?></small></p>
                            <p class="card-text"><small class="text-body-secondary"><b>Status : </b><?= $project['status']; ?></small></p>

                            <div class="col-lg-12 d-inline">
                                <p class="card-text"><small><img src="/img/pinterest.png" alt="" width="20" <?= $project['pinterest']; ?>></small></p>
                                <p class="card-text"><small><img src="/img/instagram.png" alt="" width="20" <?= $project['instagram']; ?>></small></p>
                                <p class="card-text"><small><img src="/img/facebook.png" alt="" width="20" <?= $project['facebook']; ?>></small></p>
                                <p class="card-text"><small><img src="/img/twitter.png" alt="" width="20" <?= $project['twitter']; ?>></small></p>
                            </div>


                            <br><br>

                        </div>
                    </div>
                </div>
            </div>
            <?= $this->endSection(); ?>