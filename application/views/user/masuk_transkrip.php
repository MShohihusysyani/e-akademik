<div class="container-fluid">

    <div class="alert alert-success">
        <i class="fas fa-book"> Transkrip Nilai</i>
    </div>

    <form action="<?php echo base_url('user/transkrip_nilai/buat_transkrip_aksi')?>" method="post">

    <div class="form-group">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">

        <?php echo form_error('nim','<div class="text-danger small" ml-3>','</div>')?>
    </div>

    <button type="submit" class="btn btn-primary">Proses</button>
</form>
</div>