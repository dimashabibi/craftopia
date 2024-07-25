<!-- mendefinisikan bahwa halaman ini merupakan bagian dari template.php pada folder layout -->
<?= $this->extend('layout/template'); ?>

<!-- memulai sebuah section berupa content dan akan dimasukkan ke bagian 'content' dalam file template -->
<?= $this->section('content'); ?>
<div class=container>
    <div class=row>
        <div class=col-4>
            <!-- side bar -->
            <h1>Account</h1>
            <!-- tautan menuju ke halaman your project -->
            <a class="nav-link" href="<?= site_url('/your_project'); ?>">
                <hr class="my-1 mt-4" width="190px" />
                <div class="mt-4">
                    <b>Your Project</b>
                </div>
            </a>
            <!-- tautan untuk melogout akun -->
            <hr class="my-1 mt-4" width="190px" />
            <a class="nav-link" href="<?= site_url('logout'); ?>" onclick="return confirm('Apakah Anda benar ingin logout?')">
                <div class="mt-4">
                    <b>Logout</b>
                </div>
            </a>
        </div>

        <!-- Login & Security -->
        <div class=col-6>
            <!-- menampilkan pesan error jika ada -->
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            <?php endif; ?>
            <!-- menampilkan pesan sukses jika ada -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            <?php endif; ?>
            <h1>
                Change Your Details
            </h1>
            <!-- formulir untuk mengedit username dan email -->
            <form action="<?= site_url('update_personal/' . $user['id']); ?>" method="post">
                <div class="mt-4 fs-6">
                    <b>Name</b>
                </div>
                <div class="username_profil">
                    <input type="text" class="form-control" id="username" aria-describedby="username" name="username" placeholder="Masukkan username" value="<?= (old('username')) ? old('username') : $user['username']; ?>" autofocus>
                </div>
                <div class="mt-4 fs-6">
                    <b>Email</b>
                </div>
                <div class="email">
                    <div class="mt-2">
                        <input type="text" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Masukkan email" value="<?= (old('email')) ? old('email') : $user['email']; ?>">
                    </div>
                </div>
                <div style="margin-top: 50px;">
                    <!-- tombol submit formulir -->
                    <button class="btn btn-dark" type="submit" role="button">Save Changes</button>
                    <!-- tombol cancel untuk membatalkan edit -->
                    <a href="/profil" class="btn btn-outline-dark" role="button">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br><br>
<!-- mengakhiri bagian section content -->
<?= $this->endSection(); ?>