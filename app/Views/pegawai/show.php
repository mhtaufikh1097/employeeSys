<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
        <div>
            <h3 class="mb-0">Data Pegawai</h3>
            <small class="text-muted">Detail informasi pegawai</small>
        </div>
        <a href="/pegawai" class="btn btn-primary">
            &larr; Kembali
        </a>
    </div>

    <div class="row g-4 align-items-start">
        <!-- FOTO PEGAWAI -->
      <div class="col-md-4 d-flex justify-content-center">
    <div class="card border-0 shadow-sm" style="max-width: 260px;">
        <div class="card-body p-2">
            <div class="rounded-3 overflow-hidden bg-light"
                 style="width: 100%; height: 320px;">
                <img src="<?= site_url('uploads/' . $pegawai->foto_pegawai); ?>"
                     class="w-100 h-100"
                     style="object-fit: cover;"
                     alt="Foto <?= $pegawai->nama_pegawai; ?>">
            </div>
            <div class="text-center mt-2">
                <h5 class="mb-0"><?= $pegawai->nama_pegawai; ?></h5>
                <small class="text-muted"><?= $pegawai->nama_jabatan; ?></small>
            </div>
        </div>
    </div>
</div>

        <!-- DETAIL PEGAWAI -->
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <table class="table table-borderless mb-0">
                        <tbody>
                            <tr>
                                <th class="text-muted" style="width: 160px;">Nama Pegawai</th>
                                <td style="width: 10px;">:</td>
                                <td><?= $pegawai->nama_pegawai; ?></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Jabatan</th>
                                <td>:</td>
                                <td><?= $pegawai->nama_jabatan; ?></td>
                            </tr>
                               <tr>
                                <th class="text-muted">Deskripsi Jabatan:</th>
                                <td>:</td>
                                <td><?= $pegawai->deskripsi_jabatan; ?></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Alamat</th>
                                <td>:</td>
                                <td><?= $pegawai->alamat; ?></td>
                            </tr>
                            <tr>
                                <th class="text-muted">No Telepon</th>
                                <td>:</td>
                                <td><?= $pegawai->telepon; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>
