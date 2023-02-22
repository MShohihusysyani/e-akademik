<div class="container-fluid">
    <div class = "alert alert-success" role="alert">
        <i class="fas fa-id-card-alt"></i>  Input Dosen
    </div>
    <?php echo form_open_multipart('administrator/dosen/tambah_dosen_aksi')?>
        <div class="form-group">
            <label for="">NIDN</label>
            <input type="text" name="nidn" placeholder="Masukkan NIDN" class="form-control">

            <?php echo form_error('nidn','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label for="">Nama Dosen</label>
            <input type="text" name="nama_dosen" placeholder="Masukkan Nama Dosen" class="form-control">
            
            <?php echo form_error('nama_dosen','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                <option value="">--Pilih Jenis Kelamin--</option>
                    <option>Laki Laki</option>
                    <option>Perempuan</option>
                    <?php echo form_error('jenis_kelamin','<div class="text-danger small" ml-3>')?>
                </select> 
        </div>


        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
            
            <?php echo form_error('alamat','<div class="text-danger small" ml-3>')?>
        </div>

        
        <div class="form-group">
            <label for="">Telepon</label>
            <input type="text" name="telp" placeholder="Masukkan Telepon" class="form-control">
            
            <?php echo form_error('telp','<div class="text-danger small" ml-3>')?>
        </div>

        
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Masukkan Email" class="form-control">
            <?php echo form_error('email','<div class="text-danger small" ml-3>')?>
        </div>


        <div class="form-group">
            <label>Photo</label>
            <input type="file" name="photo">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo anchor('administrator/dosen','<div class="btn btn-primary">Kembali</div>')?>

    <?php form_close();?>
</div>