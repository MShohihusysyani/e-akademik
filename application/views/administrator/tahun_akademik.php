<div class="container-fluid">
    <div class = "alert alert-warning" role="alert">
        <i class="fas fa-calendar-alt"></i> Tahun Akademik
    </div>

    <?php echo $this->session->flashdata('pesan')?>
    <?php echo anchor('administrator/tahun_akademik/tambah_tahun_akademik',' <button class="btn  btn-primary mb-3"><i class="fas fa-plus"></i></button>')?>
    

    <table class="table table-bordered table-hover table-striped">
        <tr style="background-color:#c9d3ff; text-align:center;">
            <th>NO</th>
            <th>Tahun Akademik</th>
            <th>Semester</th>
            <th>Status</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
            $no = 1; 
            foreach($tahun_akademik as $ta):?>
            <tr class="text-center">
                <td width="20px"><?php echo $no++?></td>
                <td><?php echo $ta->tahun_akademik?></td>
                <td><?php echo $ta->semester?></td>
                <td><?php echo $ta->status?></td>

               
                <td width="20px"><?php echo anchor('administrator/tahun_akademik/update/'.$ta->id_thn_akad,'<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>')?></td>
                <td width="20px"><?php echo anchor('administrator/tahun_akademik/delete/'.$ta->id_thn_akad,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
                
            </tr>
            <?php endforeach;?>
    </table>
</div>