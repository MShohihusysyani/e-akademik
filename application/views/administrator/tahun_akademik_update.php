<div class="container-fluid">
    <div   div class = "alert alert-success" role="alert">
        <i class="fas fa-calendar-alt"></i>  Update Tahun Akademik
    </div>

    <?php foreach($tahun_akademik as $ta):?>

    <form action="<?php echo base_url('administrator/tahun_akademik/update_aksi')?>" method="post">
        <div class="form-group">
            <label for="">Tahun Akademik</label>
            <input type="hidden" name="id_thn_akad"class="form-control" value="<?php echo $ta->id_thn_akad?>">
            <input type="text" name="tahun_akademik" placeholder="Masukkan Tahun Akademik" class="form-control" value="<?php echo $ta->tahun_akademik?>">

            <?php echo form_error('tahun_akademik','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label>Semester</label>
                <select name="semester" class="form-control">
                    <option><?php echo $ta->semester?></option>
                    <option>1</option>
                    <option>2</option>
                </select> 
            <?php echo form_error('semester','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label>Status</label>
                <select name="status" class="form-control">
                <option><?php echo $ta->status?></option>
                     <option>Aktif</option>
                    <option>Non Akktif</option>
                </select> 
            <?php echo form_error('status','<div class="text-danger small" ml-3>')?>
        </div>

        <button type="submit" class="btn btn-primary ">Update</button>
        <?php echo anchor('administrator/tahun_akademik','<div class="btn btn-primary">Kembali</div>')?>
    </form>
    <?php endforeach;?>
</div>