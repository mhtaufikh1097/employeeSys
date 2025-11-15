<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
  <div class="container py-1">
    <!-- Brand -->
    <a class="navbar-brand fw-bold d-flex align-items-center" href="<?= base_url('/') ?>">
      <img src="<?= base_url('img/logo.png') ?>" alt="Logo" width="35" height="35" class="me-2 rounded-circle border border-light">
      <span>SI HPI</span>
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link <?= uri_string() == '' ? 'active fw-semibold' : '' ?>" href="<?= base_url('/') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= uri_string() == 'jabatan' ? 'active fw-semibold' : '' ?>" href="<?= base_url('jabatan') ?>">Jabatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= uri_string() == 'pegawai' ? 'active fw-semibold' : '' ?>" href="<?= base_url('pegawai') ?>">Pegawai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= uri_string() == 'assets' ? 'active fw-semibold' : '' ?>" href="<?= base_url('assets') ?>">Assets</a>
        </li>

        <?php if(session()->get('login')): ?>
          <li class="nav-item">
            <a class="btn btn-outline-light btn-sm ms-lg-3 px-3" href="<?= base_url('logout') ?>">
              <i class="bi bi-box-arrow-right me-1"></i> Logout
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
