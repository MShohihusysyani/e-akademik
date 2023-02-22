<div class="container-fluid">

<div class = "alert alert-warning" role="alert">
        <i class="fas fa-university"></i> Daftar User
    </div>

    <?php echo $this->session->flashdata('pesan')?>
    <?php echo anchor('administrator/user/tambah_user',' <button class="btn  btn-primary mb-3"><i class="fas fa-plus"></i></button>')?>

    <table class="table table-bordered table-hover table-striped"> 
        <tr style="background-color:#c9d3ff; text-align:center;">
            <th>NO</th>
            <th>Username</th>
            <th>Email</th>
            <th>Level</th>
            <th>Blokir</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        
        $no=1;
        
        foreach($user as $userr) : ?>

            <tr class="text-center">
                <td><?php echo $no++?></td>
                <td><?= $userr->username?></td>
                <td><?= $userr->email?></td>
                <td><?= $userr->level?></td>
                <td><?= $userr->blokir?></td>

                <td width="20px"><?php echo anchor('administrator/user/update/'.$userr->id,'<div class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></div>')?></td>
                <td width="20px"><?php echo anchor('administrator/user/hapus/'.$userr->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
                
            </tr>
        <?php endforeach;?>
    </table>
</div>