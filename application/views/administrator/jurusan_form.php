<div class="container-fluid">
<div class = "alert alert-warning" role="alert">
        <i class="fas fa-university"></i>  Input Jurusan
    </div>
    <form action="<?php echo base_url('administrator/jurusan/input_aksi')?>" method="post">
        <div class="form-group">
            <label for="">Kode Jurusan</label>
            <input type="text" name="kode_jurusan" placeholder="Masukkan Kode Jurusan" class="form-control">

            <?php echo form_error('kode_jurusan','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label for="">Nama Jurusan</label>
            <input type="text" name="nama_jurusan" placeholder="Masukkan Nama Jurusan" class="form-control">
            
            <?php echo form_error('nama_jurusan','<div class="text-danger small" ml-3>')?>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo anchor('administrator/jurusan','<div class="btn btn-primary">Kembali</div>')?>
    </form>
</div>