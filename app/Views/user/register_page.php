    <!DOCTYPE html>
    <html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('bootstrap/assets/'); ?>" data-template="vertical-menu-template-free">
    <!-- Mendefinisikan tipe dokumen dan elemen root <html> dengan atribut untuk pengaturan tema dan jalur aset -->

    <head>
        <meta charset="utf-8" />
        <!-- Menetapkan karakter set dokumen ke UTF-8 -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <!-- Mengatur viewport untuk responsivitas pada perangkat seluler -->

        <title><?= $title; ?></title>
        <!-- Mengatur judul halaman dinamis berdasarkan variabel PHP $title -->

        <meta name="description" content="" />
        <!-- Deskripsi halaman kosong, bisa diisi untuk SEO -->

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="/img/logo_x.png" />
        <!-- Menyertakan favicon untuk tab browser -->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
        <!-- Mengimpor font dari Google Fonts -->

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="<?= base_url('bootstrap/assets/vendor/fonts/boxicons.css'); ?>" />
        <!-- Menyertakan file CSS untuk ikon Boxicons -->

        <!-- Core CSS -->
        <link rel="stylesheet" href="<?= base_url('bootstrap/assets/vendor/css/core.css'); ?>" class="template-customizer-core-css" />
        <link rel="stylesheet" href="<?= base_url('bootstrap/assets/vendor/css/theme-default.css'); ?>" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="<?= base_url('bootstrap/assets/css/demo.css'); ?>" />
        <!-- Menyertakan file CSS inti, tema default, dan demo -->

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="<?= base_url('bootstrap/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css'); ?>" />
        <!-- Menyertakan file CSS untuk Perfect Scrollbar -->

        <!-- Page CSS -->
        <!-- Page -->
        <link rel="stylesheet" href="<?= base_url('bootstrap/assets/vendor/css/pages/page-auth.css'); ?>" />
        <!-- Menyertakan file CSS khusus untuk halaman autentikasi -->

        <!-- Helpers -->
        <script src="<?= base_url('bootstrap/assets/vendor/js/helpers.js'); ?>"></script>
        <!-- Menyertakan file JavaScript helper -->

        <!-- Template customizer & Theme config files -->
        <script src="<?= base_url('bootstrap/assets/js/config.js'); ?>"></script>
        <!-- Menyertakan file JavaScript untuk konfigurasi template dan tema -->
    </head>

    <body>
        <!-- Konten Utama -->
        <div class="container-xxl">
            <div class="authentication-wrapper authentication-basic container-p-y">
                <div class="authentication-inner">
                    <!-- Register -->
                    <div class="card">
                        <div class="card-body">
                            <!-- Logo -->
                            <div class="app-brand justify-content-center">
                                <a href="<?= site_url('home'); ?>">
                                    <img src="<?= base_url('img/logo.png'); ?>" alt="">
                                    <!-- Tautan ke halaman utama dengan logo -->
                                </a>
                            </div>
                            <!-- /Logo -->
                            <h4 class="mb-2">Adventure starts here 🚀</h4>
                            <!-- Judul dan deskripsi singkat -->
                            <p class="mb-4">Make your app management easy and fun!</p>
                            <!-- Pesan error jika ada -->
                            <?php if (session()->getFlashdata('error')) : ?>
                                <div style="color: red;">
                                    <?= session()->getFlashdata('error') ?>
                                </div>
                            <?php endif; ?>

                            <!-- Formulir registrasi -->
                            <form action="<?= site_url('proses_register_user') ?>" method="post">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputNama" type="text" placeholder="Nama Lengkap" name="nama" />
                                    <label for="inputNama">Nama Lengkap</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputUsername" type="text" placeholder="username" name="username" />
                                    <label for="inputUsername">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" />
                                    <label for="inputPassword">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" type="text" placeholder="Email" name="email" />
                                    <label for="inputEmail">Email</label>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-grid w-100" type="submit">Confirm Register</button>
                                    <!-- Tombol submit formulir -->
                                </div>
                            </form>

                            <!-- Tautan kembali ke halaman login -->
                            <p class="text-center">
                                <span>Return to login?</span>
                                <a href="<?= site_url('login') ?>">
                                    <span>login</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- /Register -->
                </div>
            </div>
        </div>
        <!-- / Konten Utama -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="<?= base_url('bootstrap/assets/vendor/libs/jquery/jquery.js'); ?>"></script>
        <script src="<?= base_url('bootstrap/assets/vendor/libs/popper/popper.js'); ?>"></script>
        <script src="<?= base_url('bootstrap/assets/vendor/js/bootstrap.js'); ?>"></script>
        <script src="<?= base_url('bootstrap/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
        <!-- Menyertakan file JavaScript inti dan plugin tambahan -->

        <script src="<?= base_url('bootstrap/assets/vendor/js/menu.js'); ?>"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->

        <!-- Main JS -->
        <script src="<?= base_url('bootstrap/assets/js/main.js'); ?>"></script>
        <!-- Menyertakan file JavaScript utama -->

        <!-- Page JS -->

        <!-- GitHub buttons script -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
    </html>