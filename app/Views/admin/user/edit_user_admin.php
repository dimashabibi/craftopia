<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class=container>
    <h4 class="fw-bold py-3 mb-4"><a href="<?= site_url('admin/user'); ?>"><span class="text-muted fw-light">Daftar User</span></a> / Edit Project</h4>
    <div class=row>
        <div class=col>
            <div class="card">
                <div class="card-header">
                    <h1 class="">Edit User</h1>
                </div>
                <div class="card-body mt-2">
                    <form action="<?= site_url('admin/update_user/' . $user['id']); ?>" method="post">
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="EditNama" class="form-label">
                                    <h4>Nama</h4>
                                </label>
                                <input type="text" class="form-control" id="EditNama" name="nama" value="<?= $user['nama']; ?>" disabled>
                            </div>
                            <label for="EditUsername" class="form-label">
                                <h4>Username</h4>
                            </label>
                            <input type="text" class="form-control" id="EditUsername" name="username" value="<?= $user['username']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="EditPassword" class="form-label">
                                <h4>Password</h4>
                            </label>
                            <input type="text" class="form-control" id="Edit" name="password" value="<?= $user['password']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="EditStatus" class="form-label">
                                <h4>Status</h4>
                            </label>
                            <select class="form-select" aria-label="status" name="status">
                                <option selected><?= $user['status']; ?></option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg float-end">Submit</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

<?= $this->endSection(); ?>