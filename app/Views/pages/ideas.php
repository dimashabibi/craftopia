<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card text-bg-dark">
                <img src="<?= base_url('img/bunga.jpg'); ?>" class="card-img" alt="rajut">
                <div class="card-img-overlay">
                    <div class="card text-bg-light mb-3 float-end">
                        <div class="card-body">
                            <h5 class="card-title">Article</h5>
                            <p class="card-text">Make memories with stitchies !</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="text-center mt-4">
                <p class="fs-5">Welcome to craftopia, your home to find inspiration on how to make handicrafts for yourself or for your loved ones around you.</p>
            </div>
            <br><br>

        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Gift Box-->
            <div class="card mb-3 shadow p-3 mb-5" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('img/gift-box.jpeg'); ?>" class="img-fluid rounded-start" alt="gift box">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Tutorial</h5>
                            <p class="card-text">How to make a gift box</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-3 shadow p-3 mb-5" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('img/popup-card.jpeg'); ?>" class="img-fluid rounded-start" alt="gift box">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Tutorial</h5>
                            <p class="card-text">How to make a pop up card</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>