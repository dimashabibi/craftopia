<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class=container>
    <div class=row-center>
        <div class=col-8>
            <!-- Judul -->
            <h1 class="my-3">Add Project !</h1>
            <br>
            <!-- Form Input Data -->
            <form action="<?= site_url('save'); ?>" method="post" class="my-3" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="col-10">
                    <div class="col-12">
                        <label for="judul" class="form-label"><b>Judul Project</b></label>
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" aria-describedby="judul" name="judul" placeholder="Masukkan Judul" value="<?= old('judul'); ?>" autofocus>
                        <div id=" judul" class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <label for="penulis" class="form-label"><b>Nama</b></label>
                        <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" aria-describedby="penulis" name="penulis" placeholder="Masukkan Nama" value="<?= old('penulis'); ?>">
                        <div id="penulis" class="invalid-feedback">
                            <?= $validation->getError('penulis'); ?>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
                        <textarea type="text" class="form-control" id="deskripsi" placeholder="Input Deskripsi" name="deskripsi"><?= old('deskripsi'); ?></textarea>
                    </div>

                    <!-- CheckBox -->
                    <!-- Base Material -->
                    <div class="col-md-7 col-lg-10">
                        <div class="mt-1 row g-3">
                            <p><b>Bahan Dasar</b></p>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" id="kain" name="material[]" type="checkbox" value="Kain" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="text" id="kain" value="Kain" class="form-control" aria-label="Text input with checkbox" readonly>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" id="kertas" name="material[]" type="checkbox" value="Kertas" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="text" class="form-control" id="kertas" value="Kertas" aria-label="Text input with checkbox" readonly>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" id="benang" name="material[]" type="checkbox" value="Benang" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="text" class="form-control" id="benang" value="Benang" aria-label="Text input with checkbox" readonly>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" id="kanvas" name="material[]" type="checkbox" value="Kanvas" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="text" class="form-control" id="kanvas" value="Kanvas" aria-label="Text input with checkbox" readonly>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="lainnya" placeholder="Lainnya" aria-label="Text input with checkbox" name="material[]">
                                </div>
                            </div>



                            <!-- Skill Level -->
                            <p><b>Level</b></p>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" id="mudah" name="skill[]" type="checkbox" value="Mudah" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="text" id="mudah" value="Mudah" class="form-control" aria-label="Text input with checkbox" readonly>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" id="sedang" name="skill[]" type="checkbox" value="Sedang" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="text" class="form-control" id="sedang" value="Sedang" aria-label="Text input with checkbox" readonly>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" id="sulit" name="skill[]" type="checkbox" value="Sulit" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="text" class="form-control" id="sulit" value="Sulit" aria-label="Text input with checkbox" readonly>
                                </div>
                            </div>

                            <!-- Status -->
                            <p><b>Status Project</b></p>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" id="inProgress" name="status[]" type="checkbox" value="In Progress" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="text" class="form-control" id="inProgress" value="In Progress" aria-label="Text input with checkbox" readonly>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" id="complete" name="status[]" type="checkbox" value="Complete" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="text" class="form-control" id="complete" value="Complete" aria-label="Text input with checkbox" readonly>
                                </div>
                            </div>

                            <!-- Sosial Media -->
                            <p><b>Masukkan Username Sosial Media</b></p>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <img src="/img/pinterest.png" alt="" width="20">
                                    </div>
                                    <input type="text" class="form-control" name="pinterest" placeholder="craftopia_" aria-label="Text input with checkbox" value="<?= old('pinterest'); ?>">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <img src="/img/instagram.png" alt="" width="20">
                                    </div>
                                    <input type="text" class="form-control" name="instagram" placeholder="craftopia_" aria-label="Text input with checkbox" value="<?= old('instagram'); ?>">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <img src="/img/facebook.png" alt="" width="20">
                                    </div>
                                    <input type="text" class="form-control" name="facebook" placeholder="craftopia_" aria-label="Text input with checkbox" value="<?= old('facebook'); ?>">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <img src="/img/tiktok.png" alt="" width="20">
                                    </div>
                                    <input type="text" class="form-control" name="tiktok" placeholder="craftopia_" aria-label="Text input with checkbox" value="<?= old('tiktok'); ?>">
                                </div>
                            </div>

                            <!-- tanggal -->
                            <div class="col-sm-6">
                                <label for="tanggalMulai">Mulai Project</label>
                                <input class="form-control" type="date" id="tanggalMulai" name="tanggalmulai">
                            </div>
                            <div class="col-sm-6">
                                <label for="tanggalSelesai">Selesai Project</label>
                                <input class="form-control" type="date" id="tanggalSelesai" name="tanggalselesai">
                            </div>

                            <div class="col-sm-3">
                                <p><b>Preview</b></p>
                                <img src="/img/default.jpeg" class="img-thumbnail img-preview">
                            </div>

                            <div class="col-sm-9">
                                <label for="gambar" class="form-label ms-2"><b>Pilih Gambar</b></label>
                                <div class="col-10">
                                    <input class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" style="margin-top: 80px;" type="file" id="gambar" name="gambar" value="<?= old('gambar'); ?>" onchange="previewImg()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div style="margin-top: 30px;">

                    <button type="submit" class="btn btn-primary">save</button>
                    <a href="<?= site_url('project'); ?>" class="btn btn-secondary" role="button">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>