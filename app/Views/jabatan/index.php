<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="card border-0 shadow-sm">
  <div class="card-header bg-white d-flex justify-content-between align-items-center">
    <div>
      <h3 class="card-title mb-0">Data jabatan</h3>
      <small class="text-muted">Daftar jabatan aktif pada sistem</small>
    </div>
    <a href="/jabatan/create" class="btn btn-primary">
      <i class="bi bi-plus-lg me-1"></i> Tambah Data
    </a>
  </div>

  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0">
        <thead class="table-light position-sticky top-0">
          <tr class="text-muted">
            <th style="width:70px;">No.</th>
            <th style="width:260px;">Nama Jabatan</th>
            <th>Deskripsi</th>
            <th class="text-end" style="width:160px;">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($jabatan)): ?>
            <?php foreach ($jabatan as $key => $row): ?>
              <tr>
                <td>
                  <span class="badge rounded-pill text-bg-secondary"><?= $key + 1; ?></span>
                </td>
                <td class="fw-semibold"><?= esc($row->nama_jabatan); ?></td>

                <!-- Deskripsi dipotong elegan kalau kepanjangan -->
                <td class="text-body">
                  <div class="text-truncate" style="max-width: 780px;">
                    <?= esc($row->deskripsi_jabatan); ?>
                  </div>
                </td>

                <td class="text-end">
                  <a href="/jabatan/edit/<?= $row->id; ?>" class="btn btn-warning btn-sm me-1">
                    <i class="bi bi-pencil-square me-1"></i>Edit
                  </a>
                  <form action="/jabatan/delete/<?= $row->id ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <button type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Hapus jabatan: <?= esc($row->nama_jabatan); ?> ?')">
                      <i class="bi bi-trash3 me-1"></i>Hapus
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="4" class="text-center py-5">
                <i class="bi bi-inboxes me-2"></i>Belum ada data jabatan.
                <a href="/jabatan/create" class="ms-2">Tambah sekarang</a>
              </td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Sedikit styling halus -->
<style>
  .card-title { letter-spacing:.2px }
  .table td, .table th { vertical-align: middle; }
  .table tbody tr:hover { background: #fbfbfd; }
</style>
<?= $this->endSection(); ?>
