<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class=container>
    <div class=row-center>
        <div class=col-8>
            <a class="nav-link mb-4" href="<?= site_url('project'); ?>"><b>Kembali</b></a>
            <h1 class="my-3">Add Project !</h1>
            <br>
            <form action="<?= site_url('save'); ?>" method="post" class="my-3" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="col-8">
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"><b>Nama</b></label>
                        <input type="text" class="form-control" <?= ($validation->hasError('judul')) ? 'is_invalid' : ''; ?> id="inputAddress" placeholder="Input Your Name" name="penulis" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <label for="inputAddress" class="form-label"><b>Judul Project</b></label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Input Project Name" name="judul">
                    </div>
                    <div class="col-12 mt-3">
                        <label for="inputAddress" class="form-label"><b>Deskripsi</b></label>
                        <textarea type="text" class="form-control" id="inputAddress" placeholder="Input Deskripsi" name="deskripsi"></textarea>
                    </div>


                    <!-- Base Material -->
                    <div class="col-8">
                        <div class="mt-1 row gy-5">
                            <p><b>Bahan Dasar</b></p>
                            <div class="col-6 card">
                                <div class="list-group">
                                    <div class="my-2 form-check">
                                        <input type="checkbox" class="form-check-input" id="kain" name="material[]" value="Kain">
                                        <label class="form-check-label" for="kain">Kain</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 card">
                                <div class="list-group">
                                    <div class="my-2 form-check">
                                        <input type="checkbox" class="form-check-input" id="kertas" name="material[]" value="Kertas">
                                        <label class="form-check-label" for="kertas">Kertas</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 card">
                                <div class="list-group">
                                    <div class="my-2 form-check">
                                        <input type="checkbox" class="form-check-input" id="benang" name="material[]" value="Benang">
                                        <label class="form-check-label" for="benang">Benang</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 card">
                                <div class="list-group">
                                    <div class="my-2 form-check">
                                        <input type="checkbox" class="form-check-input" id="kanvas" name="material[]" value="Kanvas">
                                        <label class="form-check-label" for="kanvas">Kanvas</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Skill Level -->
                    <div class="col-8">
                        <div class="mt-1 row gy-5">
                            <p><b>Tingkat Kesulitsn</b></p>
                            <div class="col-6 card">
                                <div class="list-group">
                                    <div class="my-2 form-check">
                                        <input type="checkbox" class="form-check-input" id="mudah" name="level[]" value="Mudah">
                                        <label class="form-check-label" for="mudah">Mudah</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 card">
                                <div class="list-group">
                                    <div class="my-2 form-check">
                                        <input type="checkbox" class="form-check-input" id="sedang" name="level[]" value="Sedang">
                                        <label class="form-check-label" for="sedang">Sedang</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 card">
                                <div class="list-group">
                                    <div class="my-2 form-check">
                                        <input type="checkbox" class="form-check-input" id="sulit" name="level[]" value="Sulit">
                                        <label class="form-check-label" for="sulit">Sulit</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Status -->
                    <div class="col-8">
                        <div class="mt-1 row gy-5">
                            <p><b>Progress</b></p>
                            <div class="col-6 card">
                                <div class="list-group">
                                    <div class="my-2 form-check">
                                        <input type="checkbox" class="form-check-input" id="Inprogress" name="status[]" value="In progress">
                                        <label class="form-check-label" for="Inprogress">In Progress</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 card">
                                <div class="list-group">
                                    <div class="my-2 form-check">
                                        <input type="checkbox" class="form-check-input" id="complete" name="status[]" value="Complete">
                                        <label class="form-check-label" for="complete">Complete</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sosial Media -->
                <div class="col-8">
                    <div class="mt-1 row gy-5">
                        <p><b>Link Sosial media</b></p>
                        <div class="col-6 card">
                            <div class="list-group">
                                <div class="my-2">
                                    <div class="container text-center">
                                        <div class="row row-cols-auto">
                                            <div class="col-auto"><img src="/img/instagram.png" alt="" width="20"></div>
                                            <div class="col-auto"><input type="text" placeholder="www.instagram.com/" name="instagram"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 card">
                            <div class="list-group">
                                <div class="my-2">
                                    <div class="container text-center">
                                        <div class="row row-cols-auto">
                                            <div class="col-auto"><img src="/img/facebook.png" alt="" width="20"></div>
                                            <div class="col-auto"><input type="text" placeholder="www.facebook.com/" name="facebook"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 card">
                            <div class="list-group">
                                <div class="my-2">
                                    <div class="container text-center">
                                        <div class="row row-cols-auto">
                                            <div class="col-auto"><img src="/img/pinterest.png" alt="" width="20"></div>
                                            <div class="col-auto"><input type="text" placeholder="www.pinterest.com/" name="pinterest"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 card">
                            <div class="list-group">
                                <div class="my-2">
                                    <div class="container text-center">
                                        <div class="row row-cols-auto">
                                            <div class="col-auto"><img src="/img/twitter.png" alt="" width="20"></div>
                                            <div class="col-auto"><input type="text" placeholder="www.twitter.com/" name="twitter"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="mt-1 row gy-5">
                        <p><b>Gambar</b></p>
                        <div class="card col-lg-12">
                            <div class="col-12">
                                <div class="mb-3">
                                    <div class="card-header bg-transparent">
                                        <div class="col-md-4">
                                            <img src="/img/default.jpeg" class="img-thumbnail img-preview">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <label for="gambar" class="form-label form-file-label">Pilih Gambar</label>
                                        <input class="form-control form-file-input" <?= ($validation->hasError('gambar')) ? 'is_invalid' : ''; ?> type="file" id="gambar" name="gambar" onchange="previewImg()">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('gambar'); ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">save</button>
                <a href="<?= site_url('project'); ?>" class="btn btn-secondary" role="button">Cancel</a>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>