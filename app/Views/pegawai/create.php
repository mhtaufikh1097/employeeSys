<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom p-2">
        <h3 class="pb-2 mb-0">Tambah Data Pegawai</h3>
        <a href="/pegawai" class="btn btn-primary">Kembali</a>
    </div>
    <div class="pt-3">
       <form action="/pegawai/store" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="mb-3 col-md-6 col-lg-4">
            <label for="" class="form-label">Nama pegawai</label>
            <input type="text" class="form-control" name="nama_pegawai" placeholder="Masukkan Nama pegawai" required>
        </div>
        <div class="mb-3 col-md-6 col-lg-4">
            <label for="" class="form-label">alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Deskripsi" required>
        </div>
         <div class="mb-3 col-md-6 col-lg-4">
            <label for="" class="form-label">No Telepon</label>
            <input type="text" class="form-control" name="telepon" placeholder="Masukkan Deskripsi" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jabatan:</label>
            <select name="jabatan_id" id="" class="form-control">
                <?php foreach ($jabatan as $j) { ?>
                    <option value="<?= $j->id; ?>"> <?= $j->nama_jabatan; ?></option>
               <?php } ?> 
            </select>
        </div>
        <div class="mb-3"> 
            <label for="" class="form-label">Foto Pegawai:</label>
            <input type="file" name="file_foto"  class="form-control">
        </div> 
        <button type="submit" class="btn btn-warning pb-2">Simpan</button>
         
    </form>
    </div>
</div>


<?= $this->endSection(''); ?>