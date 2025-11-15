<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<?php if (session()->get('login')): ?>
  <div class="alert alert-success shadow-sm">
    Selamat Datang, <strong><?= esc(session()->get('nama')); ?>.</strong>
  </div>
<?php endif; ?>

<!-- HERO -->
<div class="card border-0 shadow-sm mb-4">
  <div class="card-body text-center p-5 bg-light rounded-3">
    <h1 class="display-6 fw-bold mb-2">Information System HPI</h1>
    <!-- <p class="text-muted mb-3">Selamat Datang di Webnya HPI.</p> -->
    <span class="badge bg-warning text-dark fs-6 px-3 py-2 rounded-3">
      Aplikasi ini digunakan untuk mengelola data HPI.
    </span>
  </div>
</div>

<!-- CAROUSEL (gambar tidak dipotong)
<div class="card border-0 shadow-sm mb-4">
  <div class="card-body p-3">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner rounded-4 overflow-hidden hero-img">
        <div class="carousel-item active">
          <img src="" class="d-block w-100" alt="Whoosh">
        </div>
        <div class="carousel-item">
          <img src="/*base_url('img/slide2.jpg')"*/ class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="base_url('img/slide3.jpg')" class="d-block w-100" alt="Slide 3">
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div> -->

<!-- QUICK LINKS (opsional, tidak mengubah fitur) -->
<div class="row g-3 mt-4">

  <!-- JABATAN -->
  <div class="col-md-4">
    <a href="<?= base_url('jabatan') ?>" class="text-decoration-none text-light">
      <div class="stat-card stat-card-teal d-flex justify-content-between align-items-center">
        <div>
          <div class="stat-number">
             <div class="stat-label">Total Jabatan</div>
          <div class="stat-sub">Kelola daftar jabatan.</div>
            <?= number_format($totalJabatan ?? 0); ?>
          </div>
        </div>
        <div class="stat-icon">
          <i class="bi bi-briefcase-fill"></i>
        </div>
      </div>
    </a>
  </div>

  <!-- PEGAWAI -->
  <div class="col-md-4">
    <a href="<?= base_url('pegawai') ?>" class="text-decoration-none text-light">
      <div class="stat-card stat-card-green d-flex justify-content-between align-items-center">
        <div>
          <div class="stat-number">
          <div class="stat-label">PEGAWAI</div>
          <div class="stat-sub">Data pegawai & profil.</div>
            <?= number_format($totalPegawai ?? 0); ?>
          </div>
        </div>
        <div class="stat-icon">
          <i class="bi bi-people-fill"></i>
        </div>
      </div>
    </a>
  </div>

  <!-- ASSETS -->
  <div class="col-md-4">
    <a href="<?= base_url('assets') ?>" class="text-decoration-none text-light">
      <div class="stat-card stat-card-yellow d-flex justify-content-between align-items-center">
        <div>
          <div class="stat-number">
             <div class="stat-label">ASSETS</div>
          <div class="stat-sub">Inventaris & peralatan.</div>
            <?= number_format($totalAssets ?? 0); ?>
          </div>
        </div>
        <div class="stat-icon">
          <i class="bi bi-box-seam-fill"></i>
        </div>
      </div>
    </a>
  </div>

</div>


<style>
  /* Carousel: gambar menyesuaikan, tidak terpotong */
  .hero-img { background: #f5f7fb; }
  .hero-img img {
    max-height: 380px;           /* atur tinggi banner */
    object-fit: contain !important; /* tidak crop */
    background-color: #f5f7fb;     /* ruang kosong warna lembut */
  }

  /* Kartu link halus */
  .hover-card { transition: transform .15s ease, box-shadow .15s ease; }
  .hover-card:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,.08); }
</style>

<?= $this->endSection(); ?>
