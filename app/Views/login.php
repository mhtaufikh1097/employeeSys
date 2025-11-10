<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center vh-100"> 
        <div class="card p-4 shadow" style="max-width: 400px; width:100%;">
            <div class="text-center mb-4 border-bottom">
                <h3>Login</h3>
            </div>
            <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <form action="/login" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <div class="label form-label">Username:</div>
                    <input type="text" name="username" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <div class="label form-label">Password:</div>
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>