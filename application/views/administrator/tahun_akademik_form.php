<div class="container-fluid">
    <div   div class = "alert alert-success" role="alert">
        <i class="fas fa-calendar-alt"></i>  Input Tahun Akademik
    </div>

    <form action="<?php echo base_url('administrator/tahun_akademik/tambah_tahun_akademik_aksi')?>" method="post">
        <div class="form-group">
            <label for="">Tahun Akademik</label>
            <input type="text" name="tahun_akademik" placeholder="Masukkan Tahun Akademik" class="form-control">

            <?php echo form_error('tahun_akademik','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label>Semester</label>
                <select name="semester" class="form-control">
                    <option>--Pilih Semester--</option>
                    <option>1</option>
                    <option>2</option>
                </select> 
            <?php echo form_error('semester','<div class="text-danger small" ml-3>')?>
        </div>

        <div class="form-group">
            <label>Status</label>
                <select name="status" class="form-control">
                    <option>--Pilih Status--</option>
                     <option>Aktif</option>
                    <option>Non Akktif</option>
                </select> 
            <?php echo form_error('status','<div class="text-danger small" ml-3>')?>
        </div>

        <button type="submit" class="btn btn-primary ">Simpan</button>
        <?php echo anchor('administrator/tahun_akademik','<div class="btn btn-primary">Kembali</div>')?>
    </form>
</div>