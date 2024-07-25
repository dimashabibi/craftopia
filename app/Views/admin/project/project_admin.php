<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<div class=container>
    <div class=row>
        <div class=col>
            <?php if (session()->getFlashdata('pesan_delete')) : ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <?= session()->getFlashdata('pesan_delete'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Daftar Project</h4>
            <div class="card">
                <div class="card-header">
                    <h1 class="mt-2">Daftar Project</h1>
                </div>
                <div class="card-body">
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
                            <?php $i = 1  + (3 * ($currentpage - 1)); ?>
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
                <div class="card-footer">
                    <div class="row">
                        <div class="col" style="margin-left: 615px;">

                            <?= $pager->links('project', 'project_pagination'); ?>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<?= $this->endSection(); ?>