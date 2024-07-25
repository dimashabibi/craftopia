<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-sm">
    <div class="row-center">
        <div class="col-12">
            <div class="text-center">
                <h1 class="mt-2">About Us</h1>
                <br>
                <p class="fs-5">
                    Craftopia adalah sebuah kata gabungan yang terdiri dari “Craft” dan “Utopia” craft yang berarti kerajinan tangan dan utopia yang merujuk pada suatu tempat yang sempurna. Secara keseluruhan,
                    “craftopia” menggambarkan sebuah tempat atau dunia dimana kerajinan tangan dan kreativitas dihargai.
                </p>
                <br><br>
                <img src="<?= base_url('img/mading.png'); ?>" class="rounded mx-auto d-block" width="850px" alt="">
                <br><br>
                <p class="fs-5">
                    kerajinan tangan bukan hanya sekedar membuat. Kerajinan tangan buat kami merupakan kegiatan yang menyatukan antara Pikiran dan hati. Perasaan yang gembira karena hasil dari tangan kita sendiri adalah kebahagiaan yang murni.
                </p>
            </div>
        </div>
    </div>
</div>
<br><br>

<?= $this->endSection(); ?>