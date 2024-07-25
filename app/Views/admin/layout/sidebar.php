<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="<?= site_url('admin/'); ?>" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="<?= base_url('img/logo.png'); ?>" alt="" style="max-width: 100px;">
      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-1">Admin</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item ">
      <a href="<?= site_url('admin/'); ?>" class="menu-link ">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Pages</span>
    </li>
    <li class="menu-item ">
      <a href="<?= site_url('admin/project'); ?>" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-palette"></i>
        <div data-i18n="Analytics">Daftar Project</div>
      </a>
    </li>
    <li class="menu-item ">
      <a href="<?= site_url('admin/user'); ?>" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-user-rectangle"></i>
        <div data-i18n="Analytics">Daftar User</div>
      </a>
    </li>

    <!-- Layouts -->
    <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">Pages</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item">
          <a href="<?= site_url('admin/komik'); ?>" class="menu-link">
            <div data-i18n="Without menu">Komik</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?= site_url('admin/project'); ?>" class="menu-link">
            <div data-i18n="Without navbar">Project</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-container.html" class="menu-link">
            <div data-i18n="Container">User</div>
          </a>
        </li>
      </ul>
    </li> -->


</aside>
<!-- / Menu -->