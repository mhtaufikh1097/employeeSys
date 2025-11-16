<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="<?= base_url('img/kckc.png'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="/assets/css/style.css">
  <style>
    /* latar lembut */
    body{
      min-height:100vh;
      background:
        radial-gradient(1200px 600px at 10% -10%, #eef5ff 0%, transparent 60%),
        radial-gradient(900px 500px at 110% 10%, #f9f0ff 0%, transparent 60%),
        #f6f7fb;
    }
  </style>
</head>
<body>
  <div class="container d-flex align-items-center justify-content-center" style="min-height:100vh;">
    <div class="login-card bg-white p-4 p-md-5" style="max-width: 400px; width:100%; position:relative;">
      
      <!-- Logo -->
      <div class="brand-badge">
        <img src="<?= base_url('img/logo.png') ?>" alt="Logo">
      </div>

      <!-- Heading -->
      <div class="text-center mb-3">
        <h3 class="mb-1">KCIC</h3>
        <div class="muted">Silahkan Login...</div>
      </div>

      <!-- Flash error -->
      <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger small" role="alert">
          <?= session()->getFlashdata('error') ?>
        </div>
      <?php endif; ?>

      <!-- Form (fungsi sama persis) -->
      <form action="/login" method="post" novalidate>
        <?= csrf_field(); ?>

        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text"
                 class="form-control"
                 id="username"
                 name="username"
                 placeholder="Masukkan username"
                 autocomplete="username" required>
        </div>

        <div class="mb-2">
          <label for="password" class="form-label">Password</label>
          <input type="password"
                 class="form-control"
                 id="password"
                 name="password"
                 placeholder="Masukkan password"
                 autocomplete="current-password">
        </div>

        <div class="d-grid mt-4">
          <button type="submit" class="btn btn-primary py-2">Login</button>
        </div>
      </form>

      <!-- Footer kecil -->
      <div class="text-center mt-3 muted">
        © <?= date('Y') ?> HPIT
      </div>
    </div>
  </div>
</body>
</html>
