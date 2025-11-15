<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI HPI</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
      
</style>

</head>
<body class="bg-body-tertiary">
    <?= $this->include('layouts/navbar'); ?>

    <div class="container py-5">
        <?= $this->renderSection('content'); ?>
    </div>

     <footer class="footer mt-auto py-4 bg-dark text-light shadow-lg">
  <div class="container text-center d-flex flex-column flex-md-row justify-content-between align-items-center">
    <div class="mb-2 mb-md-0">
      <img src="<?= base_url('img/whs.png'); ?>" alt="logo" height="36" class="me-2 opacity-75">
      <span class="fw-semibold">Information System HPI</span>
    </div>
    <div class="small text-secondary">
      &copy; <span id="year"></span> PT KCIC — All Rights Reserved 2025
    </div>
  </div>
</footer>

<script src="/public/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>