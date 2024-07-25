<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class=container>
    <div class=row>
        <div class=col>
            <div class="card h-100">
                <div class="card-header accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                        <h1 class="mt-2">Daftar Project</h1>
                </div>
                <div class="card-body accordion-collapse collapse show" data-bs-parent="#accordionExample" id="accordionOne">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">judul</th>
                                <th scope="col">penulis</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($project as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><img src="/img/<?= $p['gambar']; ?>" alt="" class="sampul" style="max-width: 80px;"></td>
                                    <td><?= $p['judul']; ?></td>
                                    <td><?= $p['penulis']; ?></td>
                                    <td><a href="<?= base_url('admin/project_detail/' . $p['slug']); ?>" class="btn btn-outline-success">Detail</a>
                                        <a href="<?= site_url('admin/delete_project/' . $p['id']); ?> " class="btn btn-outline-danger" role="button" onclick="return confirm('apakah anda yakin?')">Delete</a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="true" aria-controls="accordionTwo">
                        <h1 class="mt-2">Daftar User</h1>
                </div>
                <div class="card-body accordion-collapse collapse show" data-bs-parent="#accordionExample" id="accordionTwo">
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
                            <?php $i = 1; ?>
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

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>