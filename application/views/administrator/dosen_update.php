<div class="container-fluid">
    <div class = "alert alert-success" role="alert">
        <i class="fas fa-id-card-alt"></i>  Update Dosen
    </div>
    <?php foreach($dosen as $dsn) :?>

    <?php echo form_open_multipart('administrator/dosen/update_dosen_aksi')?>
        <div class="form-group">
            <label for="">NIDN</label>
            <input type="hidden" name="id_dosen" class="form-control" value="<?php echo $dsn->id_dosen?>">
            <input type="text" name="nidn" placeholder="Masukkan NIDN" class="form-control"  value="<?php echo $dsn->nidn?>">

            <?php echo form_error('nidn','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label for="">Nama Dosen</label>
            <input type="text" name="nama_dosen" placeholder="Masukkan Nama Dosen" class="form-control"  value="<?php echo $dsn->nama_dosen?>">
            
            <?php echo form_error('nama_dosen','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control"  value="<?php echo $dsn->jenis_kelamin?>">
                <!--<option value="">--Pilih Jenis Kelamin--</option>-->
                    <option>Laki Laki</option>
                    <option>Perempuan</option>
                    <?php echo form_error('jenis_kelamin','<div class="text-danger small" ml-3>')?>
                </select> 
        </div>


        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control"  value="<?php echo $dsn->alamat?>">
            
            <?php echo form_error('alamat','<div class="text-danger small" ml-3>')?>
        </div>

        
        <div class="form-group">
            <label for="">Telepon</label>
            <input type="text" name="telp" placeholder="Masukkan Telepon" class="form-control"  value="<?php echo $dsn->telp?>">
            
            <?php echo form_error('telp','<div class="text-danger small" ml-3>')?>
        </div>

        
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Masukkan Email" class="form-control"  value="<?php echo $dsn->email?>">
            <?php echo form_error('email','<div class="text-danger small" ml-3>')?>
        </div>


        <div class="form-group">
            <?php foreach($detail as $dt ):?>
                    <img src="<?php echo  base_url().'assets/uploads/'. $dsn->photo?>" alt="">
                <?php endforeach;?><br><br>
            <label>Photo</label>
            <input type="file" name="userfile" value="<?php echo $dsn->photo?>">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <?php echo anchor('administrator/dosen','<div class="btn btn-primary">Kembali</div>')?>

    <?php form_close();?>
    <?php endforeach;?>
</div>