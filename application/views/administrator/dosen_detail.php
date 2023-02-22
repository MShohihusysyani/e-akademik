<div class="container-fluid">
    <div class = "alert alert-success" role="alert">
        <i class="fas fa-eye"></i> Detail Dosen
    </div> 

    <table class="table table-hover table-striped table-bordered">
        <?php foreach($detail as $dt) :?>

            <img class="mb-5" src="<?php echo base_url('assets/uploads/').$dt->photo?>" style="width: 20%">
            <br>
        <tr>
            <th>NIDN</th>
            <td><?php echo $dt->nidn ?></td>
        </tr>

        <tr>
            <th>Nama Dosen</th>
            <td><?php echo $dt->nama_dosen; ?></td>
        </tr>

        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $dt->jenis_kelamin; ?></td>
        </tr>

        
        <tr>
            <th>alamat</th>
            <td><?php echo $dt->alamat; ?></td>
        </tr>

        
        <tr>
            <th>Telepon</th>
            <td><?php echo $dt->telp; ?></td>
        </tr>

        
        <tr>
            <th>Email</th>
            <td><?php echo $dt->email; ?></td>
        </tr>

        <?php endforeach;?>
    </table>
        <?php echo anchor('administrator/dosen','<div class="btn btn-sm btn-primary">Kembali</div>')?>
</div>