<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class=container>
    <div class=row>
        <div class=col-4>
            <!-- dashboard -->
            <h1>Account</h1>
            <a class="nav-link" href="<?= site_url('/your_project'); ?>">
                <hr class="my-1 mt-4" width="190px" />
                <div class="mt-4">
                    <b>Your Project</b>
                </div>
            </a>
            <hr class="my-1 mt-4" width="190px" />
            <a class="nav-link" href="<?= site_url('logout'); ?>" onclick="return confirm('Apakah Anda benar ingin logout?')">
                <div class="mt-4">
                    <b>Logout</b>
                </div>
            </a>
        </div>

        <!-- Login & Security -->
        <div class=col-6>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            <?php endif; ?>
            <h1>
                Change Your Password
            </h1>
            <div class="mt-4">
                <form action="<?= site_url('admin/proses_ganti_password') ?>" method="post">
                    <input type="hidden" name="username" value="<?= esc($user['username']) ?>">
                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="current_password" type="password" placeholder="Current Password" name="current_password" autofocus />
                            <label for="current_password">Current Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="new_password" type="password" placeholder="New Password" name="new_password" />
                            <label for="new_password">New Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="confirm_password" type="password" placeholder="Confirm Your Password" name="confirm_password" />
                            <label for="confirm_password">Confirm Password</label>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-dark" name="submit">Confirm Password</button>
                            <a href="/profil" class="btn btn-outline-dark" role="button">Cancel</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br><br>

<?= $this->endSection(); ?>