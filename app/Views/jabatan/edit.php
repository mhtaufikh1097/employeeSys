<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom p-2">
        <h3 class="pb-2 mb-0">Edit Data Jabatan</h3>
        <a href="/jabatan" class="btn btn-primary">Kembali</a>
    </div>
    <div class="pt-3">
       <form action="/jabatan/update/<?= $jabatan->id; ?>" method="post">
        <?= csrf_field(); ?>
        <div class="mb-3 col-md-6 col-lg-4">
            <label for="" class="form-label">Nama Jabatan</label>
            <input type="text" class="form-control" name="nama_jabatan" placeholder="Masukkan Nama Jabatan" value="<?= $jabatan->nama_jabatan; ?>" required>
        </div>
        <div class="mb-3 col-md-6 col-lg-4">
            <label for="" class="form-label">Deskripsi Jabatan</label>
            <input type="text" class="form-control" name="deskripsi_jabatan" placeholder="Masukkan Deskripsi" value="<?= $jabatan->deskripsi_jabatan;?>" required>
        </div>
        <div class="mb-2">
        <button type="submit" class="btn btn-warning pb-2">Update</button>
        </div>  
    </form>
    </div>
</div>


<?= $this->endSection(''); ?>