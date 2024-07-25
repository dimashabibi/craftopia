<div>
    <nav class="navbar navbar-expand-lg ms-3">

        <a class="navbar-brand" href="/">
            <img src="<?= base_url('img/logo.png') ?>" alt="logo">
        </a>
        <form class="d-flex me-auto" role="search" action="" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
            <button class="btn btn-dark" type="submit" name="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <a class="nav-link me-4 mt-3" id="groupContainer" href="<?= site_url('/login'); ?>">
            <div class="frame-container ms-auto me-5" style="margin-right: 30">
                <img class="frame-child" loading="lazy" alt="" src="<?= base_url('img/user.png'); ?>" style="margin-left: 12px;" />
            </div>
            <div>
                <b>Account</b>
            </div>
        </a>
</div>
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </button> -->

<!-- Modal -->

</nav>




<nav class="navbar navbar-expand-lg ms-3">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" href="<?= base_url('/'); ?>"><b>Home</b></a>
            <a class="nav-link" href="<?= base_url('/about'); ?>"><b>About Us</b></a>
            <a class="nav-link" href="<?= base_url('/ideas'); ?>"><b>How To & Ideas</b></a>
            <!-- <a class="nav-link" href="<?= base_url('/contact'); ?>">Contact</a> -->
            <!-- <a class="nav-link" href="<?= base_url('/komik'); ?>">Komik</a> -->
        </div>
    </div>
</nav>