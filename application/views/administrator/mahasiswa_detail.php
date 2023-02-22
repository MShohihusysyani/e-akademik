<div class="container-fluid">
    <div class = "alert alert-success" role="alert">
        <i class="fas fa-eye"></i> Detail Mahasiswa
    </div> 

    <table class="table table-hover table-striped table-bordered">
        <?php foreach($detail as $dt) :?>

            <img class="mb-5" src="<?php echo base_url('assets/uploads/').$dt->photo?>" style="width: 20%">
            <br>
        <tr>
            <th>NIM</th>
            <td><?php echo $dt->nim ?></td>
        </tr>

        <tr>
            <th>Nama Lengkap</th>
            <td><?php echo $dt->nama_lengkap; ?></td>
        </tr>

        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $dt->jenis_kelamin; ?></td>
        </tr>

        <tr>
            <th>Tempat Lahir</th>
            <td><?php echo $dt->tempat_lahir; ?></td>
        </tr>

        <tr>
            <th>Tanggal Lahir</th>
            <td><?php echo $dt->tanggal_lahir; ?></td>
        </tr>

        
        <tr>
            <th>alamat</th>
            <td><?php echo $dt->alamat; ?></td>
        </tr>

        
        <tr>
            <th>Telepon</th>
            <td><?php echo $dt->telepon; ?></td>
        </tr>

        
        <tr>
            <th>Email</th>
            <td><?php echo $dt->email; ?></td>
        </tr>

        
        <tr>
            <th>Program Studi</th>
            <td><?php echo $dt->nama_prodi; ?></td>
        </tr>
        <?php endforeach;?>
    </table>
        <?php echo anchor('administrator/mahasiswa','<div class="btn btn-sm btn-primary">Kembali</div>')?>
</div>