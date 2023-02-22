<div class="container-fluid">
    <div class = "alert alert-success" role="alert">
        <i class="fas fa-university"></i>  Update Prodi
    </div>

    <?php foreach($prodi as $prd) :?>

        <form method="post"  action="<?php echo base_url('administrator/prodi/update_aksi'); ?>">
        <div class="form-group">
            <label>Kode Prodi</label>
            <input type="hidden" name="id_prodi" value="<?php echo $prd->id_prodi?>">
            <input type="text" name="kode_prodi"  class="form-control" value="<?php echo $prd->kode_prodi?>">
        </div>

        <div class="form-group">
            <label>Nama Prodi</label>
            <input type="text" name="nama_prodi"  class="form-control" value="<?php echo $prd->nama_prodi?>">
        </div>

        <div class="form-group">
            <label for="">Nama Jurusan</label>
            <select name="nama_jurusan"  class ="form-control" id="">
               <option value=" <?php echo $prd->nama_jurusan ?>"> <?php echo $prd->nama_jurusan;?></option>

               <?php foreach($jurusan as $jrs) :?>
                <option value=" <?php echo $jrs->nama_jurusan ?>"> <?php echo $jrs->nama_jurusan;?></option>
                <?php endforeach;?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <?php echo anchor('administrator/Prodi','<div class="btn  btn-primary">Kembali</div>')?>
    
    </form>
    <?php endforeach; ?>
</div>