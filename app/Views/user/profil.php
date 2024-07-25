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
                <!-- judul dan deskripsi singkat -->
                personal detail
            </h1>
            <div class="edit-your-name">
                <b>
                    Edit your Name, Email, and Password
                </b>
            </div>
            <hr class="my-1 mt-4" width="600px" />
            <div class="fs-5 mt-4">
                <b>
                    Personal Details
                </b>
                <!-- tombol mengedit personal details -->
                <a href="/edit_personal/<?= $user['id']; ?>" class="btn btn-dark mx-5 float-end">Change</a>
            </div>
            <div class="mt-4 fs-6">
                <!-- menampilkan nama user yang telah melakukan login -->
                <b>Name</b>
            </div>
            <div class="username_profil">
                <?= $user['username']; ?>
            </div>
            <div class="mt-4 fs-6">
                <!-- menampilkan email user yang telah melakukan login -->
                <b>Email</b>
            </div>
            <div class="email">
                <div class="mt-2">
                    <?= $user['email']; ?>
                </div>
            </div>
            <hr class="my-1 mt-4" width="600px" />
            <div class="mt-4 fs-5">
                <b>Password</b>
                <!-- tombol untuk mengedit password -->
                <a href="<?= site_url('admin/ganti_password'); ?>" class="btn btn-dark mx-5 float-end">Change</a>
            </div>
            <div class="password_profil">
                <?php
                // Ambil panjang password
                $password_length = strlen($user['password']);
                // Gantikan password dengan tanda bintang sebanyak panjang password
                $hidden_password = str_repeat('*', $password_length);
                echo $hidden_password;
                ?>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<!-- mengakhiri bagian section content -->
<?= $this->endSection(); ?>