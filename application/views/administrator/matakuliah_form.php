<div class="container-fluid">
<div class = "alert alert-success" role="alert">
        <i class="fas fa-book"></i>  Input Mata Kuliah
    </div>
    <form action="<?php echo base_url('administrator/matakuliah/tambah_matakuliah_aksi')?>" method="post">
        <div class="form-group">
            <label for="">Kode Mata Kuliah</label>
            <input type="text" name="kode_matakuliah" placeholder="Masukkan Kode Matakuliah" class="form-control">

            <?php echo form_error('kode_matakuliah','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label for="">Nama Mata Kuliah</label>
            <input type="text" name="nama_matakuliah" placeholder="Masukkan Nama Matakuliah" class="form-control">
            
            <?php echo form_error('nama_matakuliah','<div class="text-danger small" ml-3>')?>
        </div>

        
        <div class="form-group">
            <label>SKS</label>
                <select name="sks" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select> 
        </div>

        <div class="form-group">
            <label>Semester</label>
                <select name="semester" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                </select> 
        </div>

        <div class="form-group">
            <label>Program Studi</label>
                <select name="nama_prodi"  class="form-control">
                    <option>--Pilih Prodi--</option>
                    <?php foreach($prodi as $prd ) : ?>
                    <option value="<?php echo $prd->nama_prodi ?>"><?php echo $prd->nama_prodi; ?></option>
                <?php endforeach;?>
                </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo anchor('administrator/matakuliah','<div class="btn  btn-primary">Kembali</div>')?>
    </form>
</div>