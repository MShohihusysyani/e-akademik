<div class="container-fluid">
    <div class = "alert alert-warning" role="alert">
        <i class="fas fa-book"></i> Mata Kuliah
    </div>

    <?php echo $this->session->flashdata('pesan')?>
    <!--<?php echo anchor('user/matakuliah/tambah_matakuliah',' <button class="btn  btn-primary mb-3"><i class="fas fa-plus"></i></button>')?>-->


     <table class="table table-bordered table-striped table-hover">
     <tr style="background-color:#c9d3ff; text-align:center;">
            <th>NO</th>
            <th>Kode</th>
            <th> Mata Kuliah </th>
            <th>Semester</th>
            <th>SKS</th>
            <!--<th colspan="4">Aksi</th>-->
        </tr>

        <?php
            $no = 1; 
            foreach($matakuliah as $mk):?>
            <tr class="text-center">
                <td width="20px"><?php echo $no++?></td>
                <td><?php echo $mk->kode_matakuliah?></td>
                <td><?php echo $mk->nama_matakuliah?></td>
                <td><?php echo $mk->semester?></td>
                <td><?php echo $mk->sks?></td>

                <!--<td width="20px"><?php echo anchor('user/matakuliah/detail/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>')?></td>
                <td width="20px"><?php echo anchor('user/matakuliah/update/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>')?></td>
                <td width="20px"><?php echo anchor('user/matakuliah/delete/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>-->
            </tr>
            <?php endforeach;?>
     </table>
</div>