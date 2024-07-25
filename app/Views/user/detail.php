<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class=container>
    <div class=row>
        <div class=col-9>

            <div class="col-md-7 col-lg-10">
                <div class="mt-1 row g-3">
                    <div class="col-sm-7">
                        <!-- Kembali -->
                        <a href="/your_project" class="nav-link">
                            <h6>
                                <b>Kembali</b>
                            </h6>
                        </a>
                        <!-- judul -->
                        <h2 class="mt-3 mb-3"><?= $project['judul']; ?></h2>
                        <!-- gambar -->
                        <img src="/img/<?= $project['gambar']; ?>" class="img-fluid rounded-start" alt="..."><br><br>
                        <!-- Button Edit $ Delete -->
                        <div style="margin-top: 50px;">
                            <a href="/project/edit/<?= $project['slug']; ?>" class="btn btn-dark" style="width: 100px;"> Edit </a>
                            <a href="<?= site_url('delete_project/' . $project['id']); ?>" class="btn btn-outline-danger" role="button" onclick="return confirm('apakah anda yakin?')">Delete</a>
                        </div>

                    </div>

                    <div class="col-sm-5">
                        <div class="ms-4">
                            <h5 style="margin-top: 90px;"><b>Dibuat Oleh :</b> <?= $project['penulis']; ?></h5>
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
                            <?php if (session()->getFlashdata('pesan')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('pesan'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>