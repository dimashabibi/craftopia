<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<div class=container>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar User</h4>
    <div class=row>
        <div class=col>
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
            <div class="card">
                <div class="card-header">
                    <h1 class="mt-2">Daftar User</h1>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (4 * ($currentpage - 1)); ?>
                            <?php foreach ($user as $u => $post) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $post['nama']; ?></td>
                                    <td><?= $post['username']; ?></td>
                                    <td style="max-width: 150px;"><?= $post['password']; ?></td>
                                    <td><?= $post['email']; ?></td>
                                    <td><?= $post['status']; ?></td>
                                    <td><a href="<?= site_url('admin/edit_user/' . $post['id']); ?>" class="btn btn-outline-success">Edit</a>
                                        <a href="<?= site_url('admin/delete_user/' . $post['id']); ?>" class="btn btn-outline-danger" role="button" onclick="return confirm('apakah anda yakin?')">Delete</a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col" style="margin-left: 615px;">

                            <?= $pager->links('user', 'user_pagination'); ?>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<?= $this->endSection(); ?>