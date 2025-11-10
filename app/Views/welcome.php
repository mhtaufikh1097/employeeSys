<?= $this->extend('layouts/main');?>
<?= $this->section('content'); ?>
<?php if(session()->get('login')): ?>
<div class="alert alert-success">
    Selamat Datang, <strong><?= session()->get('nama');?>.</strong>
</div>
<?php endif; ?>
    
    <div class="p5 text-center bg-white rounded-3">
        <h1 class="text-body-emphasis">Information System HPI</h1>
        <p class="lead">
            <span>Selamat Datang di Webnya HPI.</span>
            <h3 class="bg-warning d-inline-block px-3">Aplikasi ini digunakan untuk mengelola data HPI.</h3> 
        </p>
    </div>

    <div class="p5 text-center bg-white rounded-3">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('img/whoosh.jpeg') ?>" class="d-block w-100" style="height: 250px; object-fit: cover; border-radius: 10px;"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
</div>
    </div>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
<?= $this->endSection(''); ?>