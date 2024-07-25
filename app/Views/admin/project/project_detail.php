<?= $this->extend('admin/layout/template'); ?>


<?= $this->section('content'); ?>

<div class=container>
    <h4 class="fw-bold py-3 mb-4"><a href="<?= site_url('admin/project'); ?>"><span class="text-muted fw-light">Daftar Project</span></a> / Detail Project</h4>
    <div class=row>
        <div class="col-md">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="rounded card-img card-img-left" src="/img/<?= $project['gambar']; ?>" alt="Card image" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-header">

                            <h2 class="mt-3 mb-3"></span>Judul : <?= $project['judul']; ?></h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <h5><b>Dibuat Oleh :</b> <?= $project['penulis']; ?></h5>
                            </h5>
                            <p class="card-text">
                            <h5 class="mt-4"><b>Tentang :</h5>
                            <p></b><?= $project['deskripsi']; ?></p>
                            <ul class="list-inline" style="margin-top: 40px;">
                                <li class="list-inline-item"><b>Bahan Dasar </b></li>
                                <li class="list-inline-item float-end me-4"> <?= $project['material']; ?></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item"><b>Tingkat Kesulitan </b></li>
                                <li class="list-inline-item float-end me-4"> <?= $project['skill']; ?></li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item"><b>Status </b></li>
                                <li class="list-inline-item float-end me-4"> <?= $project['status']; ?></li>
                            </ul>
                            <ul class="list-inline text-center" style="margin-top: 70px;">
                                <?php if (!empty($project['instagram'])) : ?>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/<?= $project['instagram']; ?>"><img src="/img/instagram.png" alt="" width="30"></a>
                                    </li>
                                <?php endif; ?>

                                <?php if (!empty($project['pinterest'])) : ?>
                                    <li class="list-inline-item">
                                        <a href="https://www.pinterest.com/<?= $project['pinterest']; ?>"><img src="/img/pinterest.png" alt="" width="30"></a>
                                    </li>
                                <?php endif; ?>

                                <?php if (!empty($project['facebook'])) : ?>
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/<?= $project['facebook']; ?>"><img src="/img/facebook.png" alt="" width="30"></a>
                                    </li>
                                <?php endif; ?>

                                <?php if (!empty($project['tiktok'])) : ?>
                                    <li class="list-inline-item">
                                        <a href="https://www.tiktok.com/<?= $project['tiktok']; ?>"><img src="/img/tiktok.png" alt="" width="30"></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>