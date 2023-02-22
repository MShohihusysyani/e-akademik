<div class="container-fluid">
    <div class = "alert alert-success" role="alert">
        <i class="fas fa-eye"></i> Detail Mata Kuliah
    </div>

    <table class="table table-hover table-striped table-bordered">
        <?php foreach($detail as $dt) :?>
        <tr>
            <th>Kode Matakuliah</th>
            <td><?php echo $dt->kode_matakuliah; ?></td>
        </tr>

        <tr>
            <th>Nama Matakuliah</th>
            <td><?php echo $dt->nama_matakuliah; ?></td>
        </tr>

        <tr>
            <th>SKS</th>
            <td><?php echo $dt->sks; ?></td>
        </tr>

        <tr>
            <th>Semester</th>
            <td><?php echo $dt->semester; ?></td>
        </tr>

        <tr>
            <th>Program Studi</th>
            <td><?php echo $dt->nama_prodi; ?></td>
        </tr>
        <?php endforeach;?>
    </table>
        <?php echo anchor('dosen/matakuliah','<div class="btn btn-sm btn-primary mb-5">Kembali</div>')?>
 

</div>