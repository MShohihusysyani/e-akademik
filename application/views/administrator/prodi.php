<div class="container-fluid">
    <div class = "alert alert-warning" role="alert">
        <i class="fas fa-university"></i> Program Studi
    </div>

    <?php echo $this->session->flashdata('pesan')?>
    <?php echo anchor('administrator/prodi/tambah_prodi',' <button class="btn  btn-primary mb-3"><i class="fas fa-plus"></i></button>')?>

    <table class="table table-bordered table-striped table-hover">
        <tr style="background-color:#c9d3ff; text-align:center;">
            <th>NO</th>
            <th>Kode </th>
            <th>Nama Prodi</th>
            <th>Nama Jurusan</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
            $no = 1; 
            foreach($prodi as $prd):?>
            <tr class="text-center">
                <td width="20px"><?php echo $no++?></td>
                <td><?php echo $prd->kode_prodi?></td>
                <td><?php echo $prd->nama_prodi?></td>
                <td><?php echo $prd->nama_jurusan?></td>

               
                <td width="20px"><?php echo anchor('administrator/prodi/update/'.$prd->id_prodi,'<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>')?></td>
                <td width="20px"><?php echo anchor('administrator/prodi/delete/'.$prd->id_prodi,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
                
            </tr>
            <?php endforeach;?>
    </table>
</div>