<div class="container-fluid">
<div class = "alert alert-warning" role="alert">
        <i class="fas fa-id-card-alt"></i> Dosen
    </div>

    <?php echo $this->session->flashdata('pesan')?>
    <?php echo anchor('administrator/dosen/tambah_dosen',' <button class="btn btn-primary mb-3"><i class="fas fa-plus"></i></button>')?>

    <table class="table table-striped table-bordered table-hover">
        <tr style="background-color:#c9d3ff; text-align:center;">
            <th>NO</th>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Alamat</th>
            <th>Email</th>
            <th colspan="4">Aksi</th>
    </tr>
        
    <?php
            $no = 1; 
            foreach($dosen as $dsn):?>
            <tr class="text-center">
                <td width="20px"><?php echo $no++?></td>
                <td><?php echo $dsn->nidn?></td>
                <td><?php echo $dsn->nama_dosen?></td>
                <td><?php echo $dsn->alamat?></td>
                <td><?php echo $dsn->email?></td>
               
                
                <td width="20px"><?php echo anchor('administrator/dosen/detail/'.$dsn->nidn,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>')?></td>
                <td width="20px"><?php echo anchor('administrator/dosen/update/'.$dsn->nidn,'<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>')?></td>
                <td width="20px"><?php echo anchor('administrator/dosen/delete/'.$dsn->nidn,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
            </tr>
            <?php endforeach;?>
    </table>
</div>