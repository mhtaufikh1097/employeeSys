<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom p-2">
        <h3 class="pb-2 mb-0">Edit Data Peagawai</h3>
        <a href="/pegawai" class="btn btn-primary">Kembali</a>
    </div>
    <div class="pt-3">
       <form action="/pegawai/update/<?= $pegawai->id; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="mb-3 col-md-6 col-lg-4">
            <label for="" class="form-label">Nama pegawai</label>
            <input type="text" class="form-control" name="nama_pegawai" placeholder="Masukkan Nama pegawai" value="<?= $pegawai->nama_pegawai; ?>" required>
        </div>
        <div class="mb-3 col-md-6 col-lg-4">
            <label for="" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Deskripsi" value="<?= $pegawai->alamat;?>" required>
        </div>
           <div class="mb-3 col-md-6 col-lg-4">
            <label for="" class="form-label">Telepon</label>
            <input type="text" class="form-control" name="telepon" placeholder="Masukkan Deskripsi" value="<?= $pegawai->telepon;?>" required>
        </div>
         <div class="mb-3">
            <label for="" class="form-label">Jabatan:</label>
            <select name="jabatan_id" id="" class="form-control">
                <?php foreach ($jabatan as $j) { ?>
                    <option value="<?= $j->id; ?>" <?= ($j->id == $pegawai->jabatan_id) ? 'selected' : ''; ?>><?= $j->nama_jabatan; ?></option>
               <?php } ?> 
            </select>
        </div>
        <div class="mb-3"> 
            <label for="" class="form-label">Foto Pegawai:</label>
            <?php if($pegawai->foto_pegawai): ?>
                <div class="mb-2">
                    <img src="<?= site_url(); ?>uploads/<?= $pegawai->foto_pegawai; ?>" class="img-thumbnail" width="90" alt="">
                </div>
            <?php endif ?>
            <input type="file" name="file_foto"  class="form-control">
    </div>
        <button type="submit" class="btn btn-warning pb-2">Update</button>
          
    </form>
    </div>
</div>


<?= $this->endSection(''); ?>