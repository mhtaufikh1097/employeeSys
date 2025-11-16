<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">

    <title><?= lang('Maintenance') ?></title>

     <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: "Segoe UI", Arial;
            background: #fafafa;
            margin: 0;
            padding: 0;
        }
        .maint-img {
            width: 100%;
            max-width: 380px;
            display: block;
            margin: 0 auto 24px auto;
        }
        .maint-title {
            font-size: 13px;
            letter-spacing: 4px;
            color: #999;
            text-align: center;
            margin-bottom: 10px;
        }
        .maint-section {
            text-align: center;
            padding: 50px 20px;
        }
        .btn-home {
            padding: 10px 22px;
            border-radius: 50px;
            border: 1px solid #d60037;
            color: #d60037;
            text-decoration: none;
            font-size: 14px;
            display: inline-block;
            margin-top: 20px;
        }
        .btn-home:hover {
            background: #d60037;
            color: #fff;
        }
    </style>
</head>

</body>
<div class="maint-section">
    <div class="maint-title">Loading..</div>

    <img src="<?= base_url('img/maintenance1.png'); ?>" 
         alt="Maintenance" class="maint-img">

    <h2>Oops, sistem sedang bermasalah</h2>
    <p>Maaf, saat ini terjadi gangguan pada server kami.<br>Silakan coba beberapa saat lagi.</p>

    <a href="<?= base_url('/') ?>" class="btn-home">
        Kembali ke Beranda
    </a>

</html>
