<div class="container-fluid">
    <div class = "alert alert-success" role="alert">
        <i class="fas fa-id-card-alt"></i>  Input Mahasiswa
    </div>
    <?php echo form_open_multipart('administrator/mahasiswa/tambah_mahasiswa_aksi')?>
        <div class="form-group">
            <label for="">NIM</label>
            <input type="text" name="nim" placeholder="Masukkan NIM" class="form-control">

            <?php echo form_error('nim','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" class="form-control">
            
            <?php echo form_error('nama_lengkap','<div class="text-danger small" ml-3>')?>
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
            <label for="">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" class="form-control">
            
            <?php echo form_error('tempat_lahir','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" class="form-control">
            
            <?php echo form_error('tanggal_lahir','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
            
            <?php echo form_error('alamat','<div class="text-danger small" ml-3>')?>
        </div>

        
        <div class="form-group">
            <label for="">Telepon</label>
            <input type="text" name="telepon" placeholder="Masukkan Telepon" class="form-control">
            
            <?php echo form_error('telepon','<div class="text-danger small" ml-3>')?>
        </div>

        
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Masukkan Email" class="form-control">
            <?php echo form_error('email','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label>Program Studi</label>
                <select name="nama_prodi"  class="form-control">
                    <option>--Pilih Prodi--</option>
                    <?php foreach($prodi as $prd ) : ?>
                    <option value="<?php echo $prd->nama_prodi ?>"><?php echo $prd->nama_prodi; ?></option>
                <?php endforeach;?>
                </select>
                <?php echo form_error('nama_prodi','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label>Photo</label>
            <input type="file" name="photo">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo anchor('administrator/mahasiswa','<div class="btn btn-primary">Kembali</div>')?>

    <?php form_close();?>
</div>